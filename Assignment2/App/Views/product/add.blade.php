@extends('layouts.main')
@section('content')
    <form action="{{ route('post-product') }}" method="post">
        <div class="mb-3">
            <label class="form-label">Name Product</label>
            <input type="text" name="name_product" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price_product" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="id_category" class="form-select">
                <option value="-1" selected="selected">-- Select Category --</option>
                @foreach ($listCategory as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" name="btn-add-pro" class="btn btn-primary">Add</button>
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
