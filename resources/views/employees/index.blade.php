@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row mb-3">
            <div class="col-sm">
                <a href="{{ route('employees.create') }}" class="btn btn-primary">
                    Create new employee
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                <h1>Employee List</h1>
                <ol>
                    @foreach ($employees as $employee)
                    <li>
                        <a href="{{ route('employees.show', ['employee'=> $employee->id]) }}">
                            {{$employee->first_name . ' ' . $employee->last_name}}
                        </a>
                    </li>
                    @endforeach
                </ol>
            </div>
        </div>

        {{ $employees->links() }}
    </div>
</div>

@endsection
