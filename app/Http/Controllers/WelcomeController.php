<?php

declare(strict_types=1);

namespace App\Http\Controllers;

final class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dashboard_json = file_get_contents(database_path('apps.json'));
        $dashboard = json_decode($dashboard_json);

        return view('welcome', compact(['dashboard', 'dashboard_json']));
    }

    public function install()
    {
        $dashboard = json_decode(file_get_contents(database_path('apps.json')));

        return view('installation', compact('dashboard'));
    }

    public function qrh()
    {
        return view('qrh');
    }
}
