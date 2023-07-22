
@extends('layouts.master')

@section('title', 'Dashboard')

@section('header')
    <div class="page-header d-print-none mb-5">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Data center/Dcim/Interface
                    </div>
                    <h2 class="page-title">
                        Devices
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
                        Devices
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
                            @foreach($devices as $device)
                                <tr>
                                    <td><a href="{{ route('data-center.dcim.interfaces.device.show', $device->id) }}">{{ $device->name }}</a></td>
                                    <td>{{ $device->status ?? '' }}</td>
                                    <td>{{ $device->tanent_id ?? '---' }}</td>
                                    <td>{{ $device->site_id ?? '---' }}</td>
                                    <td>{{ $device->location_id ?? '---' }}</td>
                                    <td>{{ $device->rack_id ?? '---' }}</td>
                                    <td>{{ $device->role_id ?? '---' }}</td>
                                    <td>{{ $device->manufacturer_id ?? '---' }}</td>
                                    <td>{{ $device->type_id ?? '---' }}</td>
                                    <td>{{ $device->ip_address ?? '---' }}</td>
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
