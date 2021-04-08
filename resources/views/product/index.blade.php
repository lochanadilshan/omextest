@extends('layouts.master')
@section('content')

@section('title','update Item')
@section('header')

<div class="card">
    <form action="{{ route('product.search_example') }}" method="post">
        @csrf
        <div class="card-header">
            <div class="row">
                <div class="col-5">
                    Product list
                </div>
                <div class="col-5">
                    <input type="search" name="search" id="" class="form-control" >
                </div>
                <div class="col-2">
                    <input type="submit" value="Search" class="btn btn-info">
                </div>
            </div>
        </div>
    </form>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr><th>Product</th><th>Unit Price</th></tr>
            </thead>
            <tbody>
                
                @foreach ($products as $product)
                <tr><td>{{ $product->product_name }}</td><td>{{ $product->unit_price }}</td></tr>
                @endforeach
            </tbody>
        </table>
        {{-- {!! $products->links() !!} --}}
    </div>
</div>
@endsection