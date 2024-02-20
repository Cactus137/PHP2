@extends('layouts.main')
@section('content')
    <form action="{{ route('handle-add-category') }}" method="post">
        <div class="mb-3">
            <label class="form-label">Name Category</label>
            <input type="text" name="name_category" class="form-control">
        </div>
        <button type="submit" name="btn-add-cat" class="btn btn-primary">Add</button>
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
