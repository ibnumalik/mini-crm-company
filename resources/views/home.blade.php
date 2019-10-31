@extends('layouts.app')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <section class="dashboard">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <cube-icon class="text-danger icon-lg"></cube-icon>
                                </div>
                                <div class="float-right">
                                    <p class="card-text text-right">Total Company</p>
                                    <div class="fluid-container">
                                        <h3 class="card-title font-weight-bold text-right mb-0">
                                            {{$total_companies}}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted mt-3">
                                <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i>
                                65% lower growth
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <account-lock-icon class="text-info icon-lg"></account-lock-icon>
                                </div>
                                <div class="float-right">
                                    <p class="card-text text-right">Total Employees</p>
                                    <div class="fluid-container">
                                        <h3 class="card-title font-weight-bold text-right mb-0">
                                            {{ $total_employees }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted mt-3">
                                <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i>
                                65% lower growth
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
