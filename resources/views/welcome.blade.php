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
            <div data-title="fav-web" class="col-3 mb-3">
                <div class="row">
                    <div class="col-12">
                        <h2 class="page-title mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                            </svg> Favorite Websites
                        </h2>
                    </div>
                </div>
                <div class="col-12">
                    <a class="card card-link" target="_blank" href="#">
                        <div class="card-body p-2">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar rounded" style="background-image: url(https://tabler.io/favicons/apple-touch-icon-180x180.png)"></span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">Tabler.io</div>
                                    <div class="text-muted">https://tabler.io/</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div data-title="media" class="col-3 mb-3">
                <div class="row">
                    <div class="col-12">
                        <h2 class="page-title  mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-movie" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                                <path d="M8 4l0 16"></path>
                                <path d="M16 4l0 16"></path>
                                <path d="M4 8l4 0"></path>
                                <path d="M4 16l4 0"></path>
                                <path d="M4 12l16 0"></path>
                                <path d="M16 8l4 0"></path>
                                <path d="M16 16l4 0"></path>
                            </svg> Media
                        </h2>
                    </div>
                </div>
                <div class="col-12 mb-2">
                    <a class="card card-link" target="_blank" href="https://jellyfin.org/">
                        <div class="card-body p-2">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar rounded" style="background-image: url(https://jellyfin.org/images/favicon.ico)"></span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">Jellyfin</div>
                                    <div class="text-muted"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 mb-2">
                    <a class="card card-link" target="_blank" href="#">
                        <div class="card-body p-2">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar rounded" style="background-image: url(https://www.plex.tv/wp-content/themes/plex/assets/img/favicons/plex-180.png)"></span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">Plex</div>
{{--                                    <div class="text-muted">https://tabler.io/</div>--}}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div data-title="services" class="col-3 mb-3">
                <div class="row">
                    <div class="col-12">
                        <h2 class="page-title mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
                                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                            </svg> Services
                        </h2>
                    </div>
                </div>
                <div class="col-12 mb-2">
                    <a class="card card-link" target="_blank" href="https://nextcloud.com/">
                        <div class="card-body p-2">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar rounded" style="background-image: url(https://nextcloud.com/wp-content/uploads/2022/03/favicon.png)"></span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">nextcloud</div>
                                    <div class="text-muted">https://tabler.io/</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 mb-2">
                    <a class="card card-link" target="_blank" href="https://bitwarden.com/">
                        <div class="card-body p-2">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar rounded" style="background-image: url(https://bitwarden.com/icons/icon-192x192.png?v=1abf57d1154002a9fac426a2c5c04d85)"></span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">nextcloud</div>
                                    <div class="text-muted">https://tabler.io/</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div data-title="system" class="col-3 mb-3">
                <div class="row">
                    <div class="col-12">
                        <h2 class="page-title mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shield-bolt" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M13.342 20.566c-.436 .17 -.884 .315 -1.342 .434a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3a12 12 0 0 0 8.5 3a12 12 0 0 1 .117 6.34"></path>
                                <path d="M19 16l-2 3h4l-2 3"></path>
                            </svg> System
                        </h2>
                    </div>
                </div>
                <div class="col-12 mb-2">
                    <a class="card card-link" target="_blank" href="https://pikvm.org/">
                        <div class="card-body p-2">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar rounded" style="background-image: url(https://pikvm.org/img/apple-touch-icon.png)"></span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">PiKVM</div>
                                    <div class="text-muted">https://tabler.io/</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 mb-2">
                    <a class="card card-link" target="_blank" href="https://github.com/Jackett/Jackett">
                        <div class="card-body p-2">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar rounded" style="background-image: url(https://avatars.githubusercontent.com/u/15383019?s=48&v=4)"></span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">Jackett</div>
                                    <div class="text-muted">https://tabler.io/</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div data-title="home-automation" class="col-3 mb-3">
                <div class="row">
                    <div class="col-12">
                        <h2 class="page-title mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                            </svg> Home Automation
                        </h2>
                    </div>
                </div>
                <div class="col-12 mb-2">
                    <a class="card card-link" target="_blank" href="#">
                        <div class="card-body p-2">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar rounded" style="background-image: url(https://tabler.io/favicons/apple-touch-icon-180x180.png)"></span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">Tabler.io</div>
                                    <div class="text-muted">https://tabler.io/</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 mb-2">
                    <a class="card card-link" target="_blank" href="https://phoscon.de">
                        <div class="card-body p-2">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar rounded" style="background-image: url(https://phoscon.de/img/favicon/favicon-96x96.png)"></span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">Phoscon</div>
                                    <div class="text-muted">https://tabler.io/</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 mb-2">
                    <a class="card card-link" target="_blank" href="https://www.home-assistant.io/">
                        <div class="card-body p-2">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar rounded" style="background-image: url(https://www.home-assistant.io/images/favicon-192x192.png)"></span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">home-assistant.io</div>
                                    <div class="text-muted">https://tabler.io/</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
