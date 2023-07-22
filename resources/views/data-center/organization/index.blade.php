@extends('layouts.master')

@section('title', 'Dashboard')

@section('header')
    <div class="page-header d-print-none mb-5">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Data center
                    </div>
                    <h2 class="page-title">
                        Organization
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-xl">
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h1 class=" mb-1">{{ $tenants_count }}</h1>
                        <div class="text-muted">Tanents</div>
                    </div>
                    <a href="{{ route('data-center.organization.tenancy.tenants.index') }}" class="card-btn">View</a>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h1 class="mb-1">{{ $tenant_groups_count }}</h1>
                        <div class="text-muted">Tanents Groups</div>
                    </div>
                    <a href="#" class="card-btn">View</a>
                </div>
            </div>
        </div>
    </div>
@endsection
