@extends('layouts.master')

@section('content')

@if(session()->has('success'))
    @include('layouts.partials.messages.success')
@endif

<div class="row">
    <div class="col-md-12">
    THÊM MỚI

        <br>
        <a href="{{ route('blogs-manage') }}" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>
    </div>
       
</div>

@endsection

@section('scripts')
@include('product-manage.blog.partials.script')
@endsection