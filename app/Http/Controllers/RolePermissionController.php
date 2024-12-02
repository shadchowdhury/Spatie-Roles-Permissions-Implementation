<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionController extends Controller
{
    public function openRolesPage()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    public function openCreateRolePage()
    {
        return view('roles.create');
    }

    public function storeRole(Request $request)
    {
        $role = $request->name;

        Role::create([
            'name' => $role
        ]);

        session()->flash('success_msg', 'Role created successfully');
        return redirect()->route('roles.index');
    }

    public function openPermissionsPage()
    {
        $permissions = Permission::all();
        return view('permissions.index', compact('permissions'));
    }

    public function openCreatePermissionPage()
    {
        return view('permissions.create');
    }

    public function storePermission(Request $request)
    {
        $permission = $request->name;

        Permission::create([
            'name' => $permission
        ]);

        session()->flash('success_msg', 'Permission created successfully');
        return redirect()->route('permissions.index');
    }
}
