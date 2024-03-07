@extends('layout.main')
@section('content') 
    <form action="{{ route('edit-student/' . $student->id) }}" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Tên sinh viên</label>
            <input type="text" class="form-control" name="name" value="{{$student->id}}"/>
        </div>
        <div class="mb-3">
            <label for="year_of_birth" class="form-label">Năm sinh</label>
            <input type="text" class="form-control" name="year_of_birth" value="{{$student->year_of_birth}}"/>
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" name="phone_number" value="{{$student->phone_number}}"/>
        </div>
        <button type="submit" name="btn-submit" class="btn btn-primary">
            Sửa sinh viên
        </button>
    </form>
    @if (isset($_SESSION['errors']) && isset($_GET['msg']))
        <ul>
            @foreach ($_SESSION['errors'] as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @if (isset($_SESSION['success']) && isset($_GET['msg']))
        <span class="text-success">{{ $_SESSION['success'] }}</span>
    @endif
@endsection
