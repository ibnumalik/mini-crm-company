@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm">
            <a href="{{ route('companies.edit', ['company' => $company->id]) }}" class="btn btn-info text-white mb-3">
                Edit company
            </a>
            <h1>{{ $company->name }}</h1>

            <div class="company-item">
                <p class="mb-0">
                    Website
                </p>
                <p>
                    <a href="{{$company->website}}">
                        {{$company->website}}
                    </a>
                </p>
            </div>

            <div class="company-item">
                <p class="mb-0">
                    Email
                </p>
                <p>
                    <a href="mailto:{{$company->email}}">
                        {{$company->email}}
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
