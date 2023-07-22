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
                        Import
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
{{--                    <div class="btn-list card-header">--}}
{{--                        --}}{{--                  <span class="d-none d-sm-inline">--}}
{{--                        --}}{{--                    <a href="#" class="btn">--}}
{{--                        --}}{{--                      New view--}}
{{--                        --}}{{--                    </a>--}}
{{--                        --}}{{--                  </span>--}}
{{--                        <a href="{{ route('software.install') }}" class="btn btn-primary d-none d-sm-inline-block">--}}
{{--                            Install--}}
{{--                        </a>--}}
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
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-xl">
        <div class="row justify-content-center">
           <div class="col-12">
               <div class="card">
                   <div class="card-header">
                       Import
                   </div>
                   <div class="card-body">
                       <form action="" method="POST">
                           @csrf
                           <div class="mb-3">
                               <label for="">Yaml format only</label>
                               <textarea name="yaml_data" id="" cols="30" rows="30" class="form-control">---
manufacturer: Ubiquiti
model: UniFi Dream Machine
slug: ubiquiti-udm
airflow: passive
part_number: UDM
comments: |
  [UniFi Dream Machine](https://store.ui.com/collections/unifi-network-unifi-os-consoles/products/udm-us)

  SOHO Security Gateway and Network Appliance (4) 1G LAN, (1) 1G WAN

  Dimensions: 110 x 184.2 mm (4.33 x 7.25")
u_height: 0
is_full_depth: false
interfaces:
  - name: port.1
    type: 1000base-t
    label: Port 1 - LAN
  - name: port.2
    type: 1000base-t
    label: Port 2 - LAN
  - name: port.3
    type: 1000base-t
    label: Port 3 - LAN
  - name: port.4
    type: 1000base-t
    label: Port 4 - LAN
  - name: port.5
    type: 1000base-t
    label: Port 5 - WAN
power-ports:
  - name: Supply
    type: iec-60320-c8
    maximum_draw: 26
    description: 100-240VAC/50-60 Hz</textarea>
                           </div>
                           <button type="submit" class="btn btn-primary">Import Data</button>
                       </form>
                   </div>
               </div>
           </div>
        </div>
    </div>
@endsection
