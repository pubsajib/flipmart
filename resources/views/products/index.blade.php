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
            margin: 0px;
            cursor: pointer;
            height: 28px;
            width: 28px;
            line-height: 1;
        }
        .createNewBtn{
            position: absolute;
            right: 30px;
            bottom: 33px;
        }
    </style>
@endsection
@section('title', 'All Products')
@section('content')
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
                                        <a href="{{ route('products.show', $product->id) }}"><i class="fa fa-eye text-primary btn btn-primary"></i></a>
                                        <a href="{{ route('products.edit', $product->id) }}"><i class="fa fa-edit text-warning btn btn-info"></i></a>
                                        <a href="{{ action('ProductController@destroy', ['id' => $product->id]) }}"><i class="fa fa-trash-o fa-lg text-danger btn btn-danger"></i></a>
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
