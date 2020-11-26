@extends('template.backend')

@section('container')
@yield('danh_gia_template')



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" >Đanh giá của <i id="name_tk"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="noi_dung_danh_gia" class="modal-body">

      </div>
     <script>
         $(document).ready(function(){
             $('.nut_get_noidung').click(function(){
                 var $noi_dung = $(this).find('.val_danh_gia').val();
                 var $name = $(this).find('.val_name').val();
                $('#noi_dung_danh_gia').html($noi_dung);
                $('#name_tk').html($name);

             })

         })
     </script>
    </div>
  </div>
</div>
@endsection
