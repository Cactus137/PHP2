@extends('layout.main')
@section('content')
    <a href="{{ route('add-student') }}">
        <button type="button" class="btn btn-primary">
            Thêm sinh viên
        </button>
    </a>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Năm sinh</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="">
                        <td scope="row">{{ $student->id }}</td>
                        <td scope="row">{{ $student->name }}</td>
                        <td scope="row">{{ $student->year_of_birth }}</td>
                        <td scope="row">{{ $student->phone_number }}</td>
                        <td scope="row">
                            <a href="{{ route('detail-student/' . $student->id) }}" class="btn btn-primary">Sửa</a>
                            <a href="{{ route('delete-student/' . $student->id) }}">
                                <button name="btn-delete" onclick="confirm('Bạn có chắc chắn muốn xóa học sinh này?')"
                                    class="btn btn-danger">Xóa</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
    </div>

@endsection
