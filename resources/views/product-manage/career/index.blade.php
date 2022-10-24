@extends('layouts.master')

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <form role="form" action="{{ route('careers-index') }}" method="get" name="frm"
    id="frm">
    {{ csrf_field() }}
    <input type='hidden' name='typereport' value=''>

TRANG BLOG    

    
  </form>
@endsection

@section('scripts')
@endsection