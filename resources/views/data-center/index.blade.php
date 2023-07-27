@extends('layouts.master')

@section('title', 'Dashboard')

@section('header')
    <div class="page-header d-print-none mb-5">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        Data-center
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list card-header">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-xl">
        <div class="row mb-5">

            <!-- row 1 -->
            <div class="col-lg-2 mb-3">
                <a href="{{ route('data-center.organization.tenancy.tenants.index') }}">
                    <div class="card p-0 m-0">
                        <div class="empty p-5">
                            <p class="empty-title">{{ \App\Models\DataCenter\Organization\Tenancy\Tenant::count() }}</p>
                            <p class="empty-subtitle text-muted">Tenant</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 mb-3">
                <a href="{{ route('data-center.organization.tenancy.tenants.index') }}">
                    <div class="card p-0 m-0">
                        <div class="empty p-5">
                            <p class="empty-title">{{ \App\Models\DataCenter\Organization\Tenancy\TenantGroup::count() }}</p>
                            <p class="empty-subtitle text-muted">Tenant Group</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 mb-3">
                <a href="{{ route('data-center.dcim.interfaces.device.index') }}">
                    <div class="card p-0 m-0">
                        <div class="empty p-5">
                            <p class="empty-title">{{ \App\Models\DataCenter\Dcim\Device::count() }}</p>
                            <p class="empty-subtitle text-muted">Devices</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 mb-3">
                <a href="{{ route('data-center.dcim.manufacturer.index') }}">
                    <div class="card p-0 m-0">
                        <div class="empty p-5">
                            <p class="empty-title">{{ \App\Models\DataCenter\Dcim\Manufacturer::count() }}</p>
                            <p class="empty-subtitle text-muted">Manufacturer</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 mb-3">
                <a href="{{ route('data-center.organization.tenancy.tenants.index') }}">
                    <div class="card p-0 m-0">
                        <div class="empty p-5">
                            <p class="empty-title">{{ \App\Models\DataCenter\Organization\Tenancy\TenantGroup::count() }}</p>
                            <p class="empty-subtitle text-muted">Tenant Group</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 mb-3">
                <div class="card p-0 m-0">
                    <div class="empty p-5">
                        <p class="empty-title">{{ \App\Models\DataCenter\Organization\Tenancy\TenantGroup::count() }}</p>
                        <p class="empty-subtitle text-muted">Tenant Group</p>
                    </div>
                </div>
            </div>

            <!-- row 2 -->
            <div class="col-lg-2 mb-3">
                <a href="{{ route('data-center.organization.tenancy.tenants.index') }}">
                <div class="card p-0 m-0">
                    <div class="empty p-5">
                        <p class="empty-title">{{ App\Models\DataCenter\Dcim\Interfaces\DeviceInterface::count() }}</p>
                        <p class="empty-subtitle text-muted">Device Interfaces</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-2 mb-3">
                <a href="{{ route('data-center.dcim.rack.index') }}">
                <div class="card p-0 m-0">
                    <div class="empty p-5">
                        <p class="empty-title">{{ App\Models\DataCenter\Dcim\Rack::count() }}</p>
                        <p class="empty-subtitle text-muted">Racks</p>
                    </div>
                </div>
                </a>
            </div>

        </div>
    </div>
@endsection

@section('modals')
@endsection
