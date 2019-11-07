@extends('layouts.app')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <b-container fluid>
            <b-row>
                <b-col cols="12" lg="4">
                    <b-card title="{{ $employee->first_name . ' ' . $employee->last_name }}">

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

                        <div class="employee-item">
                            <p class="mb-0"> Employer </p>
                            <p>
                                <a href="{{ route('companies.show', ['company' => $employee->company->id]) }}">
                                    {{$employee->company->name}} </p>
                            </a>
                        </div>

                        <div class="action d-flex">
                            <a href="{{ route('employees.edit', ['employee' => $employee->id]) }}"
                                class="btn btn-info text-white mr-3">
                                Edit
                            </a>

                            <form action="{{ route('employees.destroy', ['employee' => $employee->id]) }}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger text-white">
                                    Delete
                                </button>
                            </form>
                        </div>

                    </b-card>
                </b-col>
            </b-row>
        </b-container>
    </div>
</div>

@endsection
