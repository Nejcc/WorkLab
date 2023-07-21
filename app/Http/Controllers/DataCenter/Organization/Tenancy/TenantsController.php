<?php

namespace App\Http\Controllers\DataCenter\Organization\Tenancy;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreManufacturerRequest;
use App\Http\Requests\UpdateManufacturerRequest;
use App\Models\DataCenter\DCIM\Manufacturer;
use App\Models\DataCenter\Organization\Tenancy\Tenant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TenantsController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function index()
    {
        $tenants = Tenant::query()->with('tenant_group')->get();
//        dd($tenants);
        return view('data-center.organization.tenancy.tenant.index', compact('tenants'));
    }

    public function show(Tenant $tenant)
    {
        $tenant->load('tenant_group');
        return view('data-center.organization.tenancy.tenant.show', compact('tenant'));
    }
}
