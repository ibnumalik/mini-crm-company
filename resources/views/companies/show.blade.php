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
