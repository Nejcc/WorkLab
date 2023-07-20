@extends('layouts.master')

@section('title', 'title')

@section('header')
    <div class="page-header d-print-none mb-3">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Dashboard
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @php
                $dashboard = json_decode(file_get_contents(database_path('apps.json')));
//                var_dump($dashboard);
//                exit();
            @endphp
            @foreach($dashboard as $key => $data)

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
                                                <span class="avatar rounded"
                                                      style="background-image: url('{{ $tab->icon ?? '' }}'); background-repeat: no-repeat; max-height: 180px;"></span>
                                            </div>
                                            <div class="col">
                                                <div class="font-weight-medium">{{ $tab->name ?? '--name--' }}</div>
                                                <div class="text-muted"></div>
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
