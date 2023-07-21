@extends('layouts.master')

@section('title', 'title')

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
                        Install plugins
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
{{--                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"--}}
{{--                           data-bs-target="#modal-report">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"--}}
{{--                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"--}}
{{--                                 stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>--}}
{{--                                <path d="M12 5l0 14"></path>--}}
{{--                                <path d="M5 12l14 0"></path>--}}
{{--                            </svg>--}}
{{--                            New pin--}}
{{--                        </a>--}}
{{--                        <div class="card-actions p-0 btn btn-primary">--}}
{{--                            <div class="dropdown">--}}
{{--                                <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown"--}}
{{--                                   aria-haspopup="true" aria-expanded="false">--}}
{{--                                    <!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"--}}
{{--                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"--}}
{{--                                         stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>--}}
{{--                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>--}}
{{--                                        <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>--}}
{{--                                        <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>--}}
{{--                                    </svg>--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-end" style="">--}}
{{--                                    <a class="dropdown-item" href="#">Edit script</a>--}}
{{--                                    <a class="dropdown-item" href="#">Change permissions</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-xl">
        <div class="row">
            @foreach($dashboard as $key => $data)
                @if (count($data) == 0)
                    @continue
                @endif
                <div data-title="{{ \Illuminate\Support\Str::slug($key) ?? '--key--' }}" class="col-3 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-header mb-2">
                                <div>
                                    <h2 class="page-title mb-2">
                                        {{ ucfirst($key) ?? '--key--' }}
                                    </h2>
                                </div>
                                <div class="card-actions">
                                    <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                            <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                            <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @foreach($data as $tab)

                            {{--                            @dd($tab->name);--}}
                            <div class="col-12 mb-2">
                                <a class="card card-link" target="_blank" href="{{ $tab->url ?? '--url--' }}">
                                    <div class="card-body p-2">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-auto">
                                                <span class=" rounded">
                                                    <img src="{{ $tab->icon ?? '---' }}" width="60" height="60" alt="noimg">
                                                </span>
                                            </div>
                                            <div class="col">
                                                <div class="font-weight-medium">{{ $tab->name ?? '--name--' }}</div>
                                                <div
                                                    class="text-muted">{{ \Illuminate\Support\Str::limit( $tab->description, 50) ?? '' }}</div>
                                                @if (rand(0,1))
                                                    <span class="status status-orange">Install</span>
                                                @else
                                                    <span class="status status-green">Installed</span>
                                                @endif
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
