<?php

namespace App\Http\Controllers\DataCenter\Dcim;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRackRequest;
use App\Http\Requests\UpdateRackRequest;
use App\Models\DataCenter\Dcim\Rack;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class RackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('data-center.dcim.rack.index');
    }
}
