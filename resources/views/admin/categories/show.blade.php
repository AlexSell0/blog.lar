@extends('admin.layouts.admin')
@section('header')
    Категория {{ $categories->title }}
    <a class="text-success ml-3" href="{{ route('admin.categories.edit', $categories->id) }}"><i class="fas fa-edit"></i></a>
    <form class="ml-3" method="POST" action="{{ route('admin.categories.destroy', $categories->id) }}">
        @csrf
        @method('delete')
        <button type="submit" class="text-danger border-0 bg-transparent"><i class="fas fa-trash-alt"></i></button>
    </form>
@endsection

@section('content')
    <div class="card col-12">
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td><b>id</b></td>
                    <td>{{ $categories->id }}</td>
                </tr>
                <tr>
                    <td><b>Категория</b></td>
                    <td>{{ $categories->title }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col"><a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Назад</a></div>
@endsection
