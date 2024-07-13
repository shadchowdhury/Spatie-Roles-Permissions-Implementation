<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolePermissionController extends Controller
{
    public function openRolesPage()
    {
        return view('roles.index');
    }

    public function openCreateRolePage()
    {
        return view('roles.create');
    }

    public function openPermissionsPage()
    {
        return view('permissions.index');
    }

    public function openCreatePermissionPage()
    {
        return view('permissions.create');
    }
}
