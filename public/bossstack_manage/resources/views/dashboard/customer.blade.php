@extends('layouts.master')


@section('content')

@if(session()->has('success'))
    @include('layouts.partials.messages.success')
@endif

<form role="form" action="{{ route('dashboard-customer') }}" method="get" name="frm" id="frm">
{{ csrf_field() }}
<input type='hidden' name='typereport' value=''>

<div class="row">

        <BR><BR><H3>TRANG TIN KHÁCH HÀNG</H3>
 
</div>

</form>
@endsection

@section('scripts')
@include('dashboard.partials.script_customer')
@endsection