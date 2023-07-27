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
                        Racks
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Racks</div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
{{--                                <th>Slug</th>--}}
                                <th>Site ID</th>
                                <th>Location ID</th>
                                <th>Status</th>
{{--                                <th>Description</th>--}}
                                <th>Serial Number</th>
{{--                                <th>Asset Tag</th>--}}
                                <th>Utilization</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($racks as $rack)
                                <tr>
                                    <td>{{ $rack->id }}</td>
                                    <td><a href="{{ route('data-center.dcim.rack.show', $rack->id) }}">{{ $rack->name }}</a></td>
{{--                                    <td>{{ $rack->slug }}</td>--}}
                                    <td>{{ $rack->site_id }}</td>
                                    <td>{{ $rack->location_id }}</td>
                                    <td>{{ $rack->status }}</td>
{{--                                    <td>{{ $rack->description }}</td>--}}
                                    <td>{{ $rack->serial_number }}</td>
{{--                                    <td>{{ $rack->asset_tag }}</td>--}}
                                    <td width="300">
                                        <div class="progress progress-bar-striped" style="height: 30px; width: 100%;">
                                            <div class="progress-bar bg-green overflow-visible " style="width: {{ $rack->location_id }}%;" role="progressbar" aria-valuenow="{{ $rack->location_id }}" aria-valuemin="0" aria-valuemax="100" aria-label="{{ $rack->location_id }}% Utilization">
                                                <span class="visually-show">{{ $rack->location_id }}%</span>
                                            </div>
                                        </div>
                                    </td>
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

@section('modals')
@endsection

@push('css')
{{--    <style>--}}
{{--        .rack {--}}
{{--            display: flex;--}}
{{--            flex-direction: column;--}}
{{--            width: 100%; /* Adjust the width to suit your needs */--}}
{{--            border: 1px solid #ccc;--}}
{{--            background-color: #fff;--}}
{{--            padding: 1rem;--}}
{{--            margin-bottom: 2rem;--}}
{{--        }--}}

{{--        .rack-unit {--}}
{{--            display: flex;--}}
{{--            align-items: center;--}}
{{--            height: 2rem; /* Each rack unit is typically 1.75" in height */--}}
{{--            border-bottom: 1px solid #ccc;--}}
{{--            background-color: #f0f0f0;--}}
{{--            padding-left: 1rem;--}}
{{--        }--}}

{{--        .rack-unit::before {--}}
{{--            content: attr(data-unit); /* Get the unit number from the data-unit attribute */--}}
{{--            font-weight: bold;--}}
{{--            margin-right: 01rem;--}}
{{--        }--}}

{{--        [data-bs-theme="dark"] .rack-unit {--}}
{{--            background-color: #555;--}}
{{--            color: #fff;--}}
{{--            border-color: #444;--}}
{{--        }--}}
{{--    </style>--}}
<style>
    .rack {
        /*width: 600px;*/
        border: 1px solid #ccc;
        padding: 10px;
        margin: 20px auto;
        background-color: #484848;
    }

    .unit {
        height: 30px;
        border: 1px solid #ccc;
        background-color: #727272;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 10px;
        margin-bottom: 5px;
    }

    .unit .number {
        flex: 0 0 30px;
        text-align: center;
    }

    .unit .name {
        flex: 1;
        padding-left: 10px;
    }

    .unit .status {
        flex: 0 0 60px;
        text-align: center;
        background-color: #eeeeee;
    }

    .on {
        color: green;
    }

    .off {
        color: red;
    }
</style>
@endpush
