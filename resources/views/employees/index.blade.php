@extends('layouts.app')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <b-container fluid>

            <b-row>
                <b-col cols="12" lg="4">
                    <b-card title="Employee List">
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
                    </b-card>
                </b-col>
            </b-row>

        </b-container>
    </div>
</div>
@endsection
