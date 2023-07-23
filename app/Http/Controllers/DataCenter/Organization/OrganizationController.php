<?php

namespace App\Http\Controllers\DataCenter\Organization;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreManufacturerRequest;
use App\Http\Requests\UpdateManufacturerRequest;
use App\Models\DataCenter\Dcim\Manufacturer;
use App\Models\DataCenter\Organization\Tenancy\Tenant;
use App\Models\DataCenter\Organization\Tenancy\TenantGroup;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class OrganizationController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function index()
    {
        $tenants_count = Tenant::count();
        $tenant_groups_count = TenantGroup::count();

        return view('data-center.organization.index', compact(['tenants_count', 'tenant_groups_count']));
    }

}
