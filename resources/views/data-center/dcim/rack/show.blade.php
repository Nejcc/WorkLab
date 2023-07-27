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
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Info</div>
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor ducimus eligendi expedita id in
                        modi nesciunt quia reprehenderit, tenetur vel? Ad culpa cum minima provident quos, repellat
                        saepe voluptatem. Quisquam!
                    </div>
                </div>
            </div>

            <div class="col-6 off">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Rack preview</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 offset-2">
{{--                                <H3 class="text-center">Rack 1</H3>--}}
                                <div class="rack">
                                    <div class="unit">
                                        <div class="number">1</div>
                                        <div class="name">Server A</div>
                                        <div class="status on">ON</div>
                                    </div>
                                    <div class="unit unit-2">
                                        <div class="number">2</div>
                                        <div class="name">Patch Panel 1</div>
                                        <div class="status off">OFF</div>
                                    </div>
                                    <div class="unit unit-3">
                                        <div class="number">3</div>
                                        <div class="name">Switch B</div>
                                        <div class="status on">ON</div>
                                    </div>
                                    <div class="unit unit-1">
                                        <div class="number">3</div>
                                        <div class="name">Switch B</div>
                                        <div class="status on">ON</div>
                                    </div>
                                    <div class="unit unit-4">
                                        <div class="number">3</div>
                                        <div class="name">Switch B</div>
                                        <div class="status on">ON</div>
                                    </div>
                                    <div class="unit">
                                        <div class="number">3</div>
                                        <div class="name">Switch B</div>
                                        <div class="status on">ON</div>
                                    </div>
                                    <div class="unit">
                                        <div class="number">10</div>
                                        {{--                            <div class="name"></div>--}}
                                        {{--                            <div class="status on"></div>--}}
                                    </div>


                                    <!-- Add more units here -->
                                </div>


                            </div>
                        </div>
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
            border: 1px solid #ccc;
            background-color: #727272;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 10px;
            margin-bottom: 5px;
        }
        .unit-2 {
            height: 30px;
        }
        .unit-2 {
            height: 60px;
        }
        .unit-3 {
            height: 90px;
        }
        .unit-4 {
            height: 120px;
        }
        .unit-5 {
            height: 150px;
        }
        .unit-6 {
            height: 180px;
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
