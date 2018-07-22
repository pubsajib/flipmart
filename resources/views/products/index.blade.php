@extends('layouts.admin')
@section('styles')
    <link href="{{ URL::asset('backend/vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('backend/vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">
    <style type="text/css">
        .actionIcons {
            width: 100px;
            padding: 0;
            vertical-align: middle !important;
        }
        .actionIcons i {
            font-size: 20px;
            vertical-align: middle;
            padding: 3px;
            margin: 0 1px;
            cursor: pointer;
        }
        .createNewBtn{
            position: absolute;
    right: 30px;
    bottom: 33px;
        }
    </style>
@endsection
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header ">Products</h1>
            <a href="{{ route('products.create') }}" role="button" class="btn btn-primary btn-md createNewBtn">Create New</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            @if (!$products->isEmpty())
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTablesExample">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    @if (!$product->image)
                                        @php ($product->image = asset('images/placeholders/product.jpeg'))
                                    @endif
                                    <tr class="odd gradeX">
                                        <td class="img-responsive text-center"><img src="{{ $product->image }}" alt="product"></td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ excerpt($product->body, 12) }}</td>
                                        <td class="text-center">{{ $product->category }}</td>
                                        @if ($product->sales_price)
                                            <td class="text-center">{{ $product->sales_price }} </td>
                                        @else
                                            <td class="text-center">{{ $product->regular_price }}</td>
                                        @endif
                                        <td class="text-center">{{ $product->status }}</td>
                                        <td class="text-center actionIcons">
                                            <a href="{{ route('products.show', $product->id) }}"><i class="fa fa-eye text-primary"></i></a>
                                            <a href="{{ route('products.edit', $product->id) }}"><i class="fa fa-edit text-warning"></i></a>
                                            <a href="{{ route('products.destroy', [$product->id]) }}"><i class="fa fa-trash-o fa-lg text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <h4>Not Found!</h4>
            @endif
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ URL::asset('backend/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('backend/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('backend/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>
<script>
$(document).ready(function() {
    $('#dataTablesExample').DataTable({
        responsive: true
    });
});
</script>
@endsection
