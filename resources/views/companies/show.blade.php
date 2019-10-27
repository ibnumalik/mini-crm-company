@extends('layouts.app')

@section('content')

<div class="container company">
    <div class="row">
        <div class="col-sm">

            <div class="action d-flex">
                <a href="{{ route('companies.edit', ['company' => $company->id]) }}"
                    class="btn btn-info text-white mb-3 mr-3">
                    Edit
                </a>

                <form action="{{ route('companies.destroy', ['company' => $company->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-white mb-3">
                        Delete
                    </button>
                </form>
            </div>

            <div class="d-flex align-items-center mb-4">
                <img
                    width="25"
                    class="mr-2"
                    src="{{ url('storage/'.$company->logo_path) }}" alt="{{$company->name}}">
                <h1 class="mb-0">{{ $company->name }}</h1>
            </div>

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

        </div>
    </div>
</div>

@endsection
