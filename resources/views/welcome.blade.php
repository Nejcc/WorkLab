@extends('layouts.master')

@section('title', 'Dashboard')

@section('header')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        Dashboard
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list card-header">
                        {{--                  <span class="d-none d-sm-inline">--}}
                        {{--                    <a href="#" class="btn">--}}
                        {{--                      New view--}}
                        {{--                    </a>--}}
                        {{--                  </span>--}}
                        <a href="{{ route('software.install') }}" class="btn btn-primary d-none d-sm-inline-block">
                            Install
                        </a>
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                           data-bs-target="#modal-report">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                            New pin
                        </a>
                        <div class="card-actions p-0 btn btn-primary">
                            <div class="dropdown">
                                <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                        <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                        <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" style="">
                                    <a class="dropdown-item" href="#">Edit script</a>
                                    <a class="dropdown-item" href="#">Change permissions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-xl">
        <div class="row my-5">
            @foreach($dashboard as $key => $data)
                @if (count($data) == 0)
                    @continue
                @endif
                <div data-title="{{ \Illuminate\Support\Str::slug($key) ?? '--key--' }}"
                     class="col-lg-3 col-md-4 col-sm-12 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-header mb-2">
                                <div>
                                    <h2 class="page-title mb-2">
                                        {{ ucfirst($key) ?? '--key--' }}
                                    </h2>
                                </div>
                                <div class="card-actions">
                                    <div class="dropdown">
                                        <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path><path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path><path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path></svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                            <a class="dropdown-item" href="#">Add new pin</a>
                                            <a class="dropdown-item" href="#">Edit group</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach($data as $tab)
                            <div class="col-12 mb-2">
                                <a class="card card-link" target="_blank" href="{{ $tab->url ?? '--url--' }}">
                                    <div class="card-body p-2">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-auto">
                                                <span class=" rounded">
                                                    <img src="{{ $tab->icon ?? '---' }}" width="50" height="50"
                                                         alt="noimg">
                                                </span>
                                            </div>
                                            <div class="col">
                                                <div class="font-weight-medium">{{ $tab->name ?? '--name--' }}</div>
                                                <div
                                                        class="text-muted">{{ \Illuminate\Support\Str::limit( $tab->description, 50) ?? '' }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('modals')
    <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <form action="{{ route('edit.pins') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New report</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-1">
                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <label class="form-label">Json</label>
                                    <textarea class="form-control" name="json_pins" rows="30">{{ $dashboard_json }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                            Edit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
