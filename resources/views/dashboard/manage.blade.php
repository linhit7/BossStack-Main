@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="{{ asset('css/pages/style_admin.css') }}">

<style type="text/css">
    .text-nowrap{
        white-space: nowrap !important;
    }
</style>
@endsection


@section('content')

@if(session()->has('success'))
    @include('layouts.partials.messages.success')
@endif

<form role="form" action="{{ route('dashboard-manage') }}" method="get" name="frm">
{{ csrf_field() }}
<input type='hidden' name='typereport' value=''>

<BR><BR><H3>TRANG TIN QUẢN TRỊ HỆ THỐNG</H3>


</form>
@endsection

@section('scripts')
@include('dashboard.partials.script_manage')
@endsection