@extends('template.backend')
@section('container')

@if (session('success'))
<div class="alert alert-success">
 {{ session('success') }}
</div>
@endif

@if (session('danger'))
<div class="alert alert-danger">
 {{ session('danger') }}
</div>
@endif

@yield('content_sanpham')
@endsection
