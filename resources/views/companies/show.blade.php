@extends('layouts.app')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <b-container fluid>
            <b-row>
                <b-col cols="12" xl="4">
                    <b-card title="{{ $company->name }}">

                        @if ($company->logo_path)
                        <div class="d-flex align-items-center mb-4">
                            <img width="25" class="mr-2" src="{{ url('storage/images/'.$company->logo_path) }}"
                                alt="{{$company->name}}">
                        </div>
                        @endif

                        <div class="company-item">
                            <p class="mb-0 font-weight-bold">
                                Website
                            </p>
                            <p>
                                <a href="{{$company->website}}">
                                    {{$company->website}}
                                </a>
                            </p>
                        </div>

                        <div class="company-item">
                            <p class="mb-0 font-weight-bold"> Email </p>
                            <p>
                                <a href="mailto:{{$company->email}}">
                                    {{$company->email}}
                                </a>
                            </p>
                        </div>

                        <div class="company-item">
                            <p class="mb-0 font-weight-bold">Employees</p>
                            <ol>
                                @foreach ($company->employees as $employee)
                                <li>
                                    <a href="{{ route('employees.show', ['employee' => $employee->id]) }}">
                                        {{$employee->first_name}}
                                    </a>
                                </li>
                                @endforeach
                            </ol>
                        </div>

                        <div class="action d-flex">
                            <a href="{{ route('companies.edit', ['company' => $company->id]) }}"
                                class="btn btn-info text-white mr-3">
                                Edit
                            </a>

                            <form action="{{ route('companies.destroy', ['company' => $company->id]) }}" method="post">
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
