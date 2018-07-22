@extends('layouts.admin')
@section('styles')
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" type="text/css">
    <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
    {{-- <script type="text/javascript" src="{{ asset('js/tinymce.min.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('js/tinymce.js') }}"></script>
@endsection
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header ">Create New</h1>
        </div>
    </div>
    <div class="row">
        {{ $product->title }}
    </div>
</div>
@endsection
@section('scripts')
    {{-- {!! Html::script('js/select2.min.js') !!} --}}
    <script>
        jQuery(function ($) {
            //$('.sleectTags').select2();
        });
    </script>
@endsection
