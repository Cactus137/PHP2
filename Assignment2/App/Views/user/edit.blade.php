@extends('layouts.main')
@section('content') 
    <form action="{{ route('handle-edit-user/') . $user->id }}" method="post">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
        </div> 
        <button type="submit" name="btn-submit" class="btn btn-primary">Update</button>
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
