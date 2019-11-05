@extends('layouts.app')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <b-container fluid>
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

            {{ $companies->links() }}
        </b-container>
    </div>
</div>

@endsection
