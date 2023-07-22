
@extends('layouts.master')

@section('title', 'Manufacture')

@section('header')
    <div class="page-header d-print-none mb-5">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Data center/Dcim/
                    </div>
                    <h2 class="page-title">
                        Manufacturer
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-xl">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Manufacturer
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Tenant</th>
                                <th>Site</th>
                                <th>Location</th>
                                <th>Rack</th>
                                <th>Role</th>
                                <th>Manufacturer</th>
                                <th>Type</th>
                                <th>IP Address</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($manufacturer as $tenant)
                                <tr>
                                    <td><a href="{{ route('data-center.organization.tenancy.tenants.show', $tenant->id) }}">{{ $tenant->name }}</a></td>
                                    <td>{{ $tenant->status ?? '' }}</td>
                                    <td>{{ $tenant->tanent_id ?? '---' }}</td>
                                    <td>{{ $tenant->site_id ?? '---' }}</td>
                                    <td>{{ $tenant->location_id ?? '---' }}</td>
                                    <td>{{ $tenant->rack_id ?? '---' }}</td>
                                    <td>{{ $tenant->role_id ?? '---' }}</td>
                                    <td>{{ $tenant->manufacturer_id ?? '---' }}</td>
                                    <td>{{ $tenant->type_id ?? '---' }}</td>
                                    <td>{{ $tenant->ip_address ?? '---' }}</td>
                                    <td>...</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
