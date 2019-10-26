@extends('layouts.app')

@section('content')

<div class="container employee">
    <div class="row">
        <div class="col-sm">

            <div class="action d-flex">
                <a href="{{ route('employees.edit', ['employee' => $employee->id]) }}"
                    class="btn btn-info text-white mb-3 mr-3">
                    Edit
                </a>

                <form action="{{ route('employees.destroy', ['employee' => $employee->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-white mb-3">
                        Delete
                    </button>
                </form>
            </div>

            <h1>{{ $employee->first_name . ' ' . $employee->last_name }}</h1>

            <div class="employee-item">
                <p class="mb-0"> Work at </p>
                {{-- <p> {{$employee->phone}} </p> --}}
            </div>

            <div class="employee-item">
                <p class="mb-0">
                    Phone
                </p>
                <p> {{$employee->phone}} </p>
            </div>

            <div class="employee-item">
                <p class="mb-0">
                    Email
                </p>
                <p>
                    <a href="mailto:{{$employee->email}}">
                        {{$employee->email}}
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
