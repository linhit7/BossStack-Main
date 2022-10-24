@extends('layouts.master')

@section('content')

@if(session()->has('success'))
    @include('layouts.partials.messages.success')
@endif

<div class="row">
    <div class="col-md-12">
    CHỈNH SỬA

        <br>
        <a href="{{ route('careers-manage') }}" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>
    </div>
       
</div>

@endsection

@section('scripts')
@include('product-manage.career.partials.script')
@endsection