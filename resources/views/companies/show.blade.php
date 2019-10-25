@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm">
            <h1>{{ $company->name }}</h1>

            <p>
                <a href="{{$company->website}}">
                    {{$company->website}}
                </a>
            </p>
        </div>
    </div>
</div>

@endsection
