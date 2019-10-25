@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row mb-3">
            <div class="col-sm">
                <a href="{{ route('companies.create') }}" class="btn btn-primary">
                    Create new company
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                <h1>Company List</h1>
                <ol>
                    @foreach ($companies as $company)
                    <li>
                        <a href="{{ route('companies.show', ['company'=> $company->id]) }}">
                            {{$company->name}}
                        </a>
                    </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>

@endsection
