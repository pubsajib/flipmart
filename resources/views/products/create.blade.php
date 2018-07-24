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
        <form action="{{ route('products.store') }}" method="POST" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-md-8">
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="body" id="body" placeholder="Body"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-md-4 well">
                @if(!$categories->isEmpty())
                    <div class="form-group">
                        <select name="category" id="category" class="form-control">
                            <option value="">select category</option>
                                @foreach($categories as $category   )
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                        </select>
                    </div>
                @endif
                <div class="form-group">
                    <input type="number" class="form-control" id="regular_price" name="regular_price" placeholder="regular_price">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="sales_price" name="sales_price" placeholder="sales_price">
                </div>
                <div class="form-group">
                    <input type="file" name="image" id="image" class="form-control">
                    <div class="imageHolder" style="max-height: 100px; max-width: 100px; width: auto; height: auto;"></div>
                </div>
            </div>
        </form>
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
