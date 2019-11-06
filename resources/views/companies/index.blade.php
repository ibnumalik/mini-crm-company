@extends('layouts.app')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <b-container fluid>
            <b-row>
                <b-col cols="12" lg="4">
                    <b-card title="Company List">
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
                    </b-card>
                </b-col>
            </b-row>
        </b-container>
    </div>
</div>

@endsection
