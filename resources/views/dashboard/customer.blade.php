@extends('layouts.master')

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <form role="form" action="{{ route('dashboard-customer') }}" method="get" name="frm"
    id="frm">
    {{ csrf_field() }}
    <input type='hidden' name='typereport' value=''>
  </form>
@endsection

@section('scripts')
@endsection
