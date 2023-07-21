@extends('layouts.master')

@section('title', 'Dashboard')

@section('header')
    <div class="page-header d-print-none mb-5">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Data center/Organization/Tenancy
                    </div>
                    <h2 class="page-title">
                        Tenant - {{ $tenant->name ?? '---' }}
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
                        Tenant {{ $tenant->name ?? '---' }}
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Group</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @foreach($tenants as $tenant)--}}
{{--                                <tr>--}}
{{--                                    <td><a href="{{ route('data-center.organization.tenancy.tenants.show', $tenant->id) }}">{{ $tenant->name }}</a></td>--}}
{{--                                    <td>{{ $tenant->tenant_group->name ?? '' }}</td>--}}
{{--                                    <td>{{ $tenant->description ?? '---' }}</td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
