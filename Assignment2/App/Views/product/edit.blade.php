@extends('layouts.main')
@section('content')
@php
    $product = $data['product'];
    $listCategory = $data['listCategory']; 
@endphp
@php
var_dump($product->id_category);
@endphp
    <form action="{{ route('handle-edit-product/') . $product->id }}" method="post">
        <div class="mb-3">
            <label class="form-label">Name Product</label>
            <input type="text" name="name_product" class="form-control" value="{{$product->name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price_product" class="form-control" value="{{$product->price}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="id_category" class="form-select">
                <option value="-1" selected="selected">-- Select Category --</option>
                @foreach ($listCategory as $category) 
                    <option value="{{ $category->id }}" {{$product->id_category === $category->id ? "selected" : ""}}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" name="btn-edit-pro" class="btn btn-primary">Update</button>
    </form>
    @if (isset($_SESSION['errors']) && isset($_GET['msg']))
        @foreach ($_SESSION['errors'] as $error)
            <ul>
                <li style="color: red">
                    {{ $error }}
                </li>
            </ul>
        @endforeach
    @endif
@endsection
