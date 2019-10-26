@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h1>{{ $employee ?? '' ? 'Edit ' . $employee->name : 'Create new employee' }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">

            @if ($employee ?? '')
            <form action="{{ route('employees.update', ['employee' => $employee->id]) }}" method="post">
                @method('PUT')
            @else
                <form action="{{ route('employees.store') }}" method="post">
            @endif
                    @csrf

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="first_name">First Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="first_name"
                                name="first_name"
                                placeholder="First Name"
                                value="{{ $employee->first_name ?? ''}}">
                            @error('first_name')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="last_name">Last Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="last_name"
                                name="last_name"
                                placeholder="Last name"
                                value="{{ $employee->last_name ?? ''}}">
                            @error('last_name')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Email address" value="{{$employee->email ?? ''}}">
                        @error('email')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input
                            type="tel"
                            class="form-control"
                            id="phone"
                            name="phone"
                            placeholder="Phone Number"
                            value="{{$employee->phone ?? ''}}">
                        @error('phone')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="company_id">Company</label>
                        <select name="company_id" id="company_id" class="form-control">
                            @foreach ($companies as $company)
                                <option value="{{$company->id}}" @if($company->id === $employee->company->id) selected @endif>
                                    {{$company->name}}
                                </option>
                            @endforeach
                        </select>
                        @error('company_id')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
</div>
@endsection
