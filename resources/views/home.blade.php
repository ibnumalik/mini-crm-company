@extends('layouts.app')

@section('content')
<div class="container">
    <ol>
        <li><a href="{{ route('companies.index') }}">Companies</a></li>
        <li><a href="{{ route('employees.index') }}">Employees</a></li>
    </ol>
</div>
@endsection
