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
        <div class="row mb-3">
            {{--            @dd($device->toArray())--}}
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        Devices
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Part Number</th>
                                <th>Device Type ID</th>
                                <th>Device Role ID</th>
                                <th>Tanant ID</th>
                                <th>Platform ID</th>
                                <th>Site ID</th>
                                <th>Location ID</th>
                                <th>Rack ID</th>
                                <th>Position</th>
                                <th>Face</th>
                                <th>U Height</th>
                                <th>Is Full Depth</th>
                                <th>Status</th>
                                <th>Airflow</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="{{ route('data-center.dcim.interfaces.device.show', $device->id) }}">{{ $device->name }}</a>
                                </td>
                                <td>{{ $device->part_number ?? '---' }}</td>
                                <td>{{ $device->device_type_id ?? '---' }}</td>
                                <td>{{ $device->device_role_id ?? '---' }}</td>
                                <td>{{ $device->tanant_id ?? '---' }}</td>
                                <td>{{ $device->platform_id ?? '---' }}</td>
                                <td>{{ $device->site_id ?? '---' }}</td>
                                <td>{{ $device->location_id ?? '---' }}</td>
                                <td>{{ $device->rack_id ?? '---' }}</td>
                                <td>{{ $device->position ?? '---' }}</td>
                                <td>{{ $device->face ?? '---' }}</td>
                                <td>{{ $device->u_height ?? '---' }}</td>
                                <td>{{ $device->is_full_depth ?? '---' }}</td>
                                <td>{{ $device->status ?? '---' }}</td>
                                <td>{{ $device->airflow ?? '---' }}</td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Description
                    </div>
                    <div class="card-body">
                        {!! Markdown::parse($device->description) !!}
                    </div>
                </div>
            </div>
        </div>

        {{--        <div class="row">--}}
        {{--            <!-- Port 1 -->--}}
        {{--            <div class="col-lg-4 col-md-6 mb-4">--}}
        {{--                <div class="card">--}}
        {{--                    <div class="card-body">--}}
        {{--                        <h5 class="card-title">Port 1</h5>--}}
        {{--                        <div class="form-check form-switch">--}}
        {{--                            <input class="form-check-input" type="checkbox" id="port1Switch">--}}
        {{--                            <label class="form-check-label" for="port1Switch">Status</label>--}}
        {{--                        </div>--}}
        {{--                        <a href="link-to-port-1" class="btn btn-primary mt-2">Go to Port 1</a>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}

        {{--            <!-- Port 2 -->--}}
        {{--            <div class="col-lg-4 col-md-6 mb-4">--}}
        {{--                <div class="card">--}}
        {{--                    <div class="card-body">--}}
        {{--                        <h5 class="card-title">Port 2</h5>--}}
        {{--                        <div class="form-check form-switch">--}}
        {{--                            <input class="form-check-input" type="checkbox" id="port2Switch">--}}
        {{--                            <label class="form-check-label" for="port2Switch">Status</label>--}}
        {{--                        </div>--}}
        {{--                        <a href="link-to-port-2" class="btn btn-primary mt-2">Go to Port 2</a>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}


        <div class="row mb-3">
            <div class="col-lg-12 mb-3">
                <h2>Front Panel</h2>
                <div class="switch-panel">
                    <div class="port-container justify-content-center">
{{--                        @dd($ports)--}}
                        @foreach($ports as $key => $port_type_interface)

                            @if(in_array($key, ['LAN', 'WAN']))
                                @foreach($port_type_interface as $di)
                                    <a href="{{ (!empty($di->linked_device_id)) ? route('data-center.dcim.interfaces.device.show', $di->linked_device_id) : '#' }}">
                                        <div class="port {{ (!empty($di->linked_device_id)) ? 'connected' : 'bg-white' }}">
                                            {{ (!empty($di->port_type)) ? $di->port_type :  '' }} {{ (!empty($di->port_number) ? $di->port_number : '') }}
                                            <div class="led {{ (!empty($di->linked_device_id)) ? 'green-led' : 'gray-led' }}"></div>
                                            <div class="port-details">
                                                <div>Port Name: Port {{ $di->name }}</div>
                                                <div>Port Number: {{ $di->port_number }}</div>
                                                <div>Port Number To: {{ $di->linked_device_id ?? '---' }}</div>
                                                <div>Port speed: {{ $di->port_speed ?? '---' }}</div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            @elseif(in_array($key, ['SFP', 'SFP+']))
                                @foreach($port_type_interface as $di)
                                    <a href="{{ (!empty($di->linked_device_id)) ? route('data-center.dcim.interfaces.device.show', $di->linked_device_id) : '#' }}">
                                        <div class="sfp-ports">
                                            <div class="sfp-port {{ (!empty($di->linked_device_id)) ? 'connected' : 'bg-white' }}">
                                                {{ (!empty($di->port_type)) ? $di->port_type :  '' }} {{ (!empty($di->port_number) ? $di->port_number : '') }}
                                                <div class="sfp-led {{ (!empty($di->linked_device_id)) ? 'green-led' : 'gray-led' }}"></div>
                                                <div class="sfp-details">
                                                    <div>Port Name: Port {{ $di->name }}</div>
                                                    <div>Port Number: {{ $di->port_number }}</div>
                                                    <div>Port Number To: {{ $di->linked_device_id ?? '---' }}</div>
                                                    <div>Port speed: {{ $di->port_speed ?? '---' }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                    {{--                    <div class="port-container-text justify-content-center">--}}
                    {{--                        @foreach($device->device_interfaces as $di)--}}
                    {{--                            <div class="port-title connected">--}}
                    {{--                                Port {{  $di['port_number'] }}--}}
                    {{--                            </div>--}}
                    {{--                        @endforeach--}}
                    {{--                    </div>--}}

                    {{--                    <div class="port-container justify-content-center">--}}
                    {{--                        <?php for ($i = 1; $i <= 24; $i++) { ?>--}}
                    {{--                        <div class="port <?php echo $i % 2 === 0 ? 'connected' : ''; ?>">--}}
                    {{--                            Port <?php echo $i; ?>--}}
                    {{--                            <div class="led <?php echo $i % 2 === 0 ? 'green-led' : 'orange-led'; ?>"></div>--}}
                    {{--                            <div class="port-details">--}}
                    {{--                                <div>Port Name: Port <?php echo $i; ?></div>--}}
                    {{--                                <div>Port Number: <?php echo $i; ?></div>--}}
                    {{--                                    <?php if ($i % 2 === 0) { ?>--}}
                    {{--                                <div>Status: Connected</div>--}}
                    {{--                                <?php } else { ?>--}}
                    {{--                                <div>Status: Empty</div>--}}
                    {{--                                <?php } ?>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <?php } ?>--}}
                    {{--                        <div class="sfp-ports">--}}
                    {{--                            <?php for ($i = 1; $i <= 2; $i++) { ?>--}}
                    {{--                            <div class="sfp-port <?php echo $i % 2 === 0 ? 'connected' : ''; ?>">--}}
                    {{--                                SFP <?php echo $i; ?>--}}
                    {{--                                <div class="sfp-led <?php echo $i % 2 === 0 ? 'green-led' : 'gray-led'; ?>"></div>--}}
                    {{--                                <div class="sfp-details">--}}
                    {{--                                    <div>SFP Name: SFP <?php echo $i; ?></div>--}}
                    {{--                                    <div>SFP Number: <?php echo $i; ?></div>--}}
                    {{--                                        <?php if ($i % 2 === 0) { ?>--}}
                    {{--                                    <div>Status: Connected</div>--}}
                    {{--                                    <?php } else { ?>--}}
                    {{--                                    <div>Status: Empty</div>--}}
                    {{--                                    <?php } ?>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <?php } ?>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="port-container-text">--}}
                    {{--                        <?php for ($i = 24; $i <= 49; $i++) { ?>--}}
                    {{--                        <div class="port-title <?php echo $i % 2 === 0 ? 'connected' : ''; ?>">--}}
                    {{--                            Port <?php echo $i; ?>--}}
                    {{--                        </div>--}}
                    {{--                        <?php } ?>--}}

                    {{--                    </div>--}}
                </div>
            </div>

            <div class="col-lg-12">
                <h2>Back Panel</h2>
                <div class="switch-panel">

                    <div class="power-switch-container p-3">
                        <span class="power-switch-label">Power Supply:</span>
                        <label class="power-switch">
                            <input type="checkbox">
                            <span class="power-switch-slider"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('css')
    <style>


        .switch-panel {
            border: 5px solid #646464;
            padding: 3px;
            border-radius: 5px;
            background: #bebebe;
        }

        [data-bs-theme=dark] .switch-panel {
            color: whitesmoke;
            border: 5px solid #646464;
            background: #565656;
        }

        .port-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .port-container-text {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .port {
            cursor: pointer;
            text-align: center;
            width: 49px;
            height: 49px;
            margin: 3px;
            background-color: #ccc;
            /*margin-bottom: 5px;*/
            position: relative;
            display: flex;
            justify-content: center;
            /*align-items: center;*/
            font-weight: bold;
            font-size: 10px;
            border: 3px solid #aaa;
            border-radius: 5px;
        }

        [data-bs-theme=dark] .port {
            background-color: #777777;
            border: 3px solid #aaa;
            color: #111;
        }

        .port-title {
            /*cursor: pointer;*/
            /*text-align: center;*/
            width: 45px;
            /*height: 50px;*/
            /*padding: 5px;*/
            margin: 2px;
            /*background-color: #ccc;*/
            /*margin-bottom: 5px;*/
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 12px;
            /*border: 3px solid #aaa;*/
            /*border-radius: 5px;*/
        }

        .port-details .port-number {
            font-weight: bold;
        }

        .port.connected {
            background-color: #00ff00;
        }

        .port.connected-opposite {
            background-color: #ffff00;
        }

        .port .led {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            position: absolute;
            bottom: 5px;
            right: 5px;
            border: 1px solid #333;
        }

        .green-led {
            background-color: #00ff00;
        }

        .yellow-led {
            background-color: #ffff00;
        }

        .orange-led {
            background-color: #d08e00;
        }

        .gray-led {
            background-color: #808080;
        }

        .port-details {
            text-align: left;
            font-size: 14px;
            padding: 10px;
            display: none;
            position: absolute;
            top: 55px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(255, 255, 255, 1);
            border-radius: 3px;
            white-space: nowrap;
            z-index: 99;
        }

        [data-bs-theme=dark] .port-details {
            background-color: rgb(196, 196, 196);
        }

        .port-details::before {
            content: "";
            position: absolute;
            top: -10px; /* Adjust this value to control the distance from the top */
            left: 50%;
            transform: translateX(-50%);
            border: 5px solid transparent;
            border-bottom-color: rgba(255, 255, 255, 1);
            z-index: 100;
        }

        .port-details .port-number {
            font-weight: bold;
        }

        .port:hover .port-details {
            display: block;
        }

        /* Styles for the power supply switch */
        .power-switch-container {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .power-switch-label {
            margin-right: 10px;
            font-weight: bold;
        }

        .power-switch {
            position: relative;
            width: 50px;
            height: 25px;
            background-color: #ccc;
            border-radius: 12.5px;
            cursor: pointer;
        }

        .power-switch input {
            display: none;
        }

        .power-switch-slider {
            position: absolute;
            top: 2px;
            left: 2px;
            width: 21px;
            height: 21px;
            background-color: #fff;
            border-radius: 50%;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
            transition: 0.4s;
        }

        .power-switch input:checked + .power-switch-slider {
            transform: translateX(25px);
        }

        /* Styles for the SFP ports */
        .sfp-ports {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .sfp-port {
            cursor: pointer;
            width: 51px;
            height: 35px;
            margin: 2px;
            background-color: #ccc;
            margin-bottom: 5px;
            position: relative;
            display: flex;
            justify-content: center;
            /*align-items: center;*/
            font-weight: bold;
            font-size: 12px;
            border: 3px solid #aaa;
            border-radius: 5px;
        }

        [data-bs-theme=dark] .sfp-port {
            border: 3px solid #333;
            color: #333;
        }

        .sfp-port.connected {
            background-color: #00ff00;
        }

        .sfp-port .led {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            position: absolute;
            bottom: 5px;
            right: 5px;
        }

        .sfp-led {
            background-color: #00ff00;
        }

        .sfp-details {
            padding: 10px;
            display: none;
            position: absolute;
            top: 55px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(255, 255, 255, 1);
            border-radius: 3px;
            white-space: nowrap;
            z-index: 99;
        }

        .sfp-port:hover .sfp-details {
            display: block;
        }

    </style>
@endpush