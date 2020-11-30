@extends('frontEnd.hoa-don.template')
@section('Mydon_hang_template')
@section('title','Kiểm Tra Đơn Hàng')
<style>
    .form_ktdh{
        margin: 0 auto;

    }
    .form_ktdh input{
        height: 50px;
        margin-bottom: 10px;
        font-size: 20px
    }
</style>
<div class="form_ktdh col-lg-8">
    <h3>Kiểm tra đơn hàng</h3>
<form action="{{ route('KiemTraDonHang_post') }}" method="POST">
    @csrf
    <input placeholder="#Nhập mã số đơn hàng" type="search" name="id_hoa_don">
    <button class="btn btn-success" type="submit">Kiểm tra</button>
</form>
</div>

@endsection
