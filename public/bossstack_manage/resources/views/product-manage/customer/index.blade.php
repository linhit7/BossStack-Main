

@section('head')
<link rel="stylesheet" href="{{ asset('css/pages/style_admin.css') }}">

<style type="text/css">
    @media only screen and (min-width: 320px) and (max-width: 575px){
        .text-nowrap{
            white-space: nowrap !important;
        }
    }
</style>
@endsection

@section('content')



@endsection


@section('scripts')
@include('product-manage.customer.partials.script')
@endsection

