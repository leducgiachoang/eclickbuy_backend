<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SanPham_Model;
use App\Model\DanhMucSanPham_Model;
use App\Model\DonHang_Model;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Model\GiftCode_Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Model\ChiTietHoaDon_Model_h;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\thanhtoan_requesst;


class GioHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function add_cart($id){
         $product = SanPham_Model::select()->find($id);
         $gia_goc = $product->gia_goc;
         if($product->gia_sale != ''){
             $gia_goc = $product->gia_sale;
         }
         if($product->id_khuyen_mai == 1){
            $gia_chinh_thuc = $gia_goc;
         }else{
             $khuyen_mai = $gia_goc * ($product->khuyenmai->gia_tri) / 100;
            $gia_chinh_thuc = $gia_goc - $khuyen_mai;
         }




        Cart::add([
                'id' => $id,
                'name' => $product->ten_san_pham,
                'qty' => 1,
                'price' => $gia_chinh_thuc,
                'weight' => 0,
                'options' => ['avatar' => $product->hinh_anh]
            ]);
         $itemCart = Cart::count();
         echo $itemCart;
     }
    public function index()
    {
        $dbSanPham = SanPham_Model::inRandomOrder()->get();
        return view('frontEnd.gio-hang.gio-hang', ['sanphamcungloais'=> $dbSanPham]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $so_luong = $request->qtyProduct;
        $rowId = $request->variantId;
        $SoluongSanpham = SanPham_Model::where('id', $request->idCart)->value('so_luong');
        if(($so_luong) > $SoluongSanpham){
            return redirect()->back()->with('danger', 'Xin lỗi, Hàng trong kho của chúng tôi không đủ, Vui lòng mua đối đa '.$SoluongSanpham .' sản phẩm');
        }else{
            Cart::update($rowId, $so_luong);
            return redirect()->back()->with('success', 'Chúc Mừng. Bạn cập nhập giỏ hàng thành công');
        }




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }

    public function thanhtoan(){
        foreach(Cart::content() as $row){
            $dbSP = SanPham_Model::where('id', $row->id)->first();
            $id_row = $row->rowId;
            $so_luong =  $row->qty;
            if($so_luong > $dbSP->so_luong){
                return redirect()->back()->with('danger', 'Xin lỗi, Hiện tại '.$dbSP->ten_san_pham.' trong kho của chúng tôi không đủ, Vui lòng mua đối đa '.$dbSP->so_luong .' sản phẩm');
            }else{
                return view('frontEnd.gio-hang.thanh-toan');
            }
        }

    }
    public function giftCode($code){
        $checkGift = GiftCode_Model::where('code', $code)->where('ngay_bat_dau', '<=', Carbon::now('Asia/Ho_Chi_Minh'))->where('ngay_ket_thuc', '>=', Carbon::now('Asia/Ho_Chi_Minh'))->first();
        if(!$checkGift){
            echo '';
        }else{
            echo $checkGift->gia_tri;
        }
    }
    public function thanhtoan_post(thanhtoan_requesst $request){
        if($request->code_gift == ''){
            $id_giftcode = 1;
        }else{
            $dbGift = GiftCode_Model::where('code', $request->code_gift)->first();
            $id_giftcode = $dbGift->id;
        }

        $idHoadon = DonHang_Model::insertGetId([
            'tong_tien' =>$request->tong_tien,
            'dia_chi_noi_gui' =>'Điện Bàn, Quảng Nam',
            'dia_chi_noi_nhan' =>$request->dia_chi_noi_nhan,
            'id_tai_khoan' => Auth::user()->id,
            'so_dien_thoai' =>$request->so_dien_thoai,
            'loi_nhan' => $request->loi_nhan,
            'tinh_trang' =>0,
            'id_giftcode' =>$id_giftcode,
            'ngay_tao' => Carbon::now(),
        ]);

        if($idHoadon){
            $productsCart = Cart::content();
            foreach($productsCart as $item){
                ChiTietHoaDon_Model_h::insert([
                    'id_san_pham'=> $item->id,
                    'id_hoa_don'=> $idHoadon,
                    'don_gia'=> $item->price,
                    'so_luong'=> $item->qty
                ]);

                $dbSanPham = SanPham_Model::where('id', $item->id)->get();
                foreach($dbSanPham as $dbsp){
                    $soluongsp = $dbsp->so_luong;
                }

                SanPham_Model::where('id', $item->id)->update([
                    'so_luong'=> $soluongsp - $item->qty
                ]);

            }
        }
        $email = $request->email;
        $data = [
            'hoten' => $request->ho_ten,
            'noigui'=> 'Điện Bàn, Quảng Nam',
            'noinhan'=> $request->dia_chi_noi_nhan,
            'sodienthoai' => $request->so_dien_thoai,
            'ghichu'=> $request->loi_nhan,
            'products' => Cart::content(),
            'codegift'=> $request->code,
            'tamtinh' => Cart::subtotal() . '₫',
            'tonggia' => number_format($request->tong_tien, 2,'.', ','). '₫',
            'email'=> $request->email
        ];
        Mail::send('mail.dat-hang-thanh-cong', $data, function ($message) use ($email, $idHoadon) {
            $message->to($email, 'ECLICKBUY')->subject('ECLICKBUY đã nhận đơn hàng #' . $idHoadon);
        });

        Cart::destroy();

        return view('frontEnd.gio-hang.mua-hang-thanh-cong', ['id_hoa_don'=> $idHoadon]);
    }
    public function them(Request $request){
        $product = SanPham_Model::select()->find($request->id_san_pham);
         $gia_goc = $product->gia_goc;
         if($product->gia_sale != ''){
             $gia_goc = $product->gia_sale;
         }
         if($product->id_khuyen_mai == 1){
            $gia_chinh_thuc = $gia_goc;
         }else{
             $khuyen_mai = $gia_goc * ($product->khuyenmai->gia_tri) / 100;
            $gia_chinh_thuc = $gia_goc - $khuyen_mai;
         }
        Cart::add([
            'id' => $request->id_san_pham,
            'name' => $request->ten_san_pham,
            'qty' => $request->quantity,
            'price' => $gia_chinh_thuc,
            'weight' => 0,
            'options' => ['avatar' => $request->hinh_anh]
        ]);
        return redirect()->back()->with('success','Thêm sản phẩm vào giỏ hàng thành công');
    }

    public function muangay($id){
        $dbSp = SanPham_Model::select()->find($id);
        $gia_goc = $dbSp->gia_goc;
         if($dbSp->gia_sale != ''){
             $gia_goc = $dbSp->gia_sale;
         }
         if($dbSp->id_khuyen_mai == 1){
            $gia_chinh_thuc = $gia_goc;
         }else{
             $khuyen_mai = $gia_goc * ($dbSp->khuyenmai->gia_tri) / 100;
            $gia_chinh_thuc = $gia_goc - $khuyen_mai;
         }

         Cart::add([
            'id' => $id,
            'name' => $dbSp->ten_san_pham,
            'qty' => 1,
            'price' => $gia_chinh_thuc,
            'weight' => 0,
            'options' => ['avatar' => $dbSp->hinh_anh]
        ]);

        return redirect(route('gioHang_get'));
    }
}
