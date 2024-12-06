<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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

    public function assignPermissionsToRoles()
    {
        // === assign a single permission to a role === //
        /*
        $permission = Permission::findByName('read articles');
        $role = Role::findByName('user');

        $role->givePermissionTo($permission);
        */

        // === assign multiple permisstion to a role === //

        $permissions = Permission::all();
        $role = Role::findByName('admin');

        $role->syncPermissions($permissions);


        // === assign a role to a user === //
        /*
        $user = User::find(1);
        $role = Role::findByName('admin');

        $user->assignRole($role);
        */

        // === Check user permission=== //
        $user = User::find(1);
        //$role = $user->getRoleNames();
        //$permissions = $user->getPermissionsViaRoles();
        //dd($permissions);

        /*
        ==all check statements==
        $user->hasPermissionTo('edit articles');
        $user->hasAnyPermission(['edit articles', 'publish articles', 'unpublish articles']);
        $user->hasAllPermissions(['edit articles', 'publish articles', 'unpublish articles']);
        $user->can(['edit articles', 'publish articles', 'unpublish articles']);
        $user->can('edit articles')

        */

        // if($user->hasAllPermissions(['edit articles', 'publish articles', 'unpublish articles'])){
        //     dd('Yes');
        // }
        // else{
        //     dd('No');
        // }



        /* Rvoke a permission from a role */
        /*
        $role = Role::findByName('admin');
        $role->revokePermissionTo(('delete articles'));
        */
        
        dd('Assigned');


    }
}
