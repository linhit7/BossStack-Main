@extends('layouts.master')

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <form role="form" action="{{ route('blogs-index') }}" method="get" name="frm"
    id="frm">
    {{ csrf_field() }}
    <input type='hidden' name='typereport' value=''>

TRANG BLOG    
<br><br><br>    
<a href="{{ route('blogs-add') }}">Thêm mới</a><br>
<a href="{{ route('blogs-detail', ['id'=> 1]) }}">Chi tiết</a><br>
<a href="{{ route('blogs-edit', ['id'=> 1]) }}">Sửa tin</a>
    
  </form>
@endsection

@section('scripts')
@endsection