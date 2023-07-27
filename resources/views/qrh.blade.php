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
            <div class="col-6 offset-3">
                <div class="container">
                    <h1 class="heading">Quick Reference Handbook (QRH)</h1>

                    <div class="section">
                        <h2 class="section-heading">Introduction</h2>
                        <p>
                            The Quick Reference Handbook (QRH) contains all the procedures applicable for abnormal and emergency
                            conditions in an easy-to-use format. It also provides performance data corrections for specific conditions.
                        </p>
                        <p>
                            The QRH is a stand-alone document. For aircraft not fitted with an Electronic Centralized Aircraft Monitor
                            (ECAM) system or Engine Instruments and Crew Alerting System (EICAS), the QRH is the sole reference for the
                            management of any abnormal/emergency condition. For aircraft fitted with an ECAM/EICAS, the QRH is used in
                            coordination with the ECAM/EICAS or as a back-up to it.
                        </p>
                    </div>

                    <div class="section">
                        <h2 class="section-heading">Coordinated Use of ECAM/EICAS and QRH</h2>
                        <p>
                            To understand the design objectives of the QRH, it is worth reviewing the main operating characteristics
                            of the ECAM/EICAS. The ECAM/EICAS features three types of procedures:
                        </p>
                        <ol>
                            <li>
                                Self-contained ECAM/EICAS procedures:
                                <ul>
                                    <li>Such procedures are possible whenever the aircraft systems (even under degraded conditions) are
                                        able to:</li>
                                    <li>Sense/detect a failure condition, activate the caution or warning alert light, and display the
                                        relevant procedure(s).</li>
                                    <li>Assess the status of pre-conditions for conditional action steps.</li>
                                    <li>Acquire all the inputs required to provide feedback on crew actions.</li>
                                    <li>Confirm the status of any system(s) reconfiguration(s).</li>
                                    <li>Identify inoperative systems and provide associated limitations or restrictions.</li>
                                </ul>
                            </li>
                            <li>
                                ECAM/EICAS procedures featuring a prompt for the continuation of the procedure in the QRH:
                                <ul>
                                    <li>Prompts are used when aircraft systems are no longer able to acquire all the conditions and
                                        signals required to:</li>
                                    <li>Trigger the subsequent action steps.</li>
                                    <li>Provide feedback on crew actions and systems reconfiguration(s).</li>
                                    <li>Determine inoperative systems and associated limitations.</li>
                                </ul>
                            </li>
                            <li>
                                QRH procedures:
                                <ul>
                                    <li>QRH procedures are used whenever the ECAM/EICAS is not able to detect/sense the failure or
                                        prevailing condition, e.g.:</li>
                                    <li>In case of loss of electrical power to all ECAM/EICAS components.</li>
                                    <li>For system malfunctions that are not monitored by the ECAM/EICAS (e.g., FMC failure, PFD or ND
                                        failure).</li>
                                    <li>For conditions that cannot be sensed by any aircraft sensor (e.g., flight in severe turbulence,
                                        volcanic ash encounter, bomb on board, ditching, ...).</li>
                                </ul>
                            </li>
                        </ol>
                    </div>

                    <div class="section">
                        <h2 class="section-heading">QRH Design Features</h2>
                        <p>
                            It must be acknowledged that any abnormal/emergency procedure reflects a carefully developed and tested
                            strategy to cope with the prevailing condition. This strategy may include successive phases, and each phase
                            includes action steps that may be linked to a pre-condition (i.e., conditional action steps).
                        </p>
                        <p>
                            In developing/authoring the QRH, the main challenge is to reflect the dynamic nature of abnormal /
                            emergency procedures, in terms of:
                        </p>
                        <ul>
                            <li>Overall strategy</li>
                            <li>Successive phases</li>
                            <li>Conditional action steps:</li>
                            <ul>
                                <li>If .... :</li>
                                <li>The agreement of both pilots on the If .... conditions is required before performing any
                                    conditional action step.</li>
                            </ul>
                            <li>Feedback on crew actions</li>
                            <li>Conditional recovery of affected systems</li>
                            <li>Inoperative systems and associated performance limitations</li>
                            <li>Links with other QRH procedures (using a prompt)</li>
                        </ul>
                        <p>
                            More than in any other document, clear and unambiguous layout ergonomics is paramount in the QRH to avoid
                            any:
                        </p>
                        <ul>
                            <li>Omission of an action (or action group)</li>
                            <li>Performance of an undue/irrelevant/inadvertent action</li>
                        </ul>
                        <p>
                            The main ingredients of such an error-resistant layout ergonomics are:
                        </p>
                        <ul>
                            <li>The correct identification of preconditions/conditional action steps, using symbols such as or ■
                                , or ●</li>
                            <li>The proper indenting (lateral shift) of actions belonging to the same conditional actions group</li>
                            <li>Adequate spacing between the various phases of the procedure and/or between conditional actions groups</li>
                        </ul>
                        <p>
                            The error-resistant QRH design should be backed-up/reinforced by adherence to operating golden rules, such
                            as the verification of each action result before proceeding to the next action step. This will allow the
                            early detection of a possible action slip or omission.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('css')
    <style>
        .qrh body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }

        .qrh header {
            text-align: center;
            margin-bottom: 30px;
        }

        .qrh h1 {
            color: #333;
        }

        .qrh .section {
            margin-bottom: 30px;
            display: flex;
            flex-direction: column;
        }

        .qrh .two-columns {
            display: flex;
            align-items: center;
        }

        .qrh .left-column,
        .qrh .right-column {
            flex: 1;
        }

        .qrh .dots {
            flex: 0 0 20px; /* Adjust the width of the dots here */
            height: 1px;
            background: #ccc;
            margin: 0 10px;
        }

        .qrh  h2 {
            color: red;
            border-bottom: 1px solid #cc0000;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }

        .qrh .condition {
            font-weight: bold;
        }

        .qrh .nested {
            list-style-type: lower-alpha;
            margin-left: 20px;
        }

        .qrh .note {
            color: #666;
            font-style: italic;
        }

        .qrh footer {
            text-align: center;
            margin-top: 50px;
        }

        .qrh .date {
            color: #888;
        }
    </style>
@endpush