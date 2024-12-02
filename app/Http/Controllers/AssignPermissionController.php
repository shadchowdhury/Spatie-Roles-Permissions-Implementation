<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class AssignPermissionController extends Controller
{
    public function assignPermissions()
    {
        $user = User::find(2);

        //===find single permission and assign to user===/
        // $permission = Permission::findByName('read articles');
        //$user->givePermissionTo($permission);

        //===find multiple permission and assign them to user===//
        // $permission = Permission::all();
        // $user->syncPermissions($permission);

        //dd('Assigned');

        //===check permission if it's assign to a user===//
        //$permission = Permission::findByName('read articles');

        if ($user->hasAllPermissions(['edit articles', 'publish articles', 'unpublish articles'])) {
            dd('Yes');
        } else {
            dd('No');
        }

    }
}
