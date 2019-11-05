@extends('layouts.app')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <b-container fluid>

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
            {{ $employees->links() }}
        </b-container>
    </div>
</div>
@endsection
