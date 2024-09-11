<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RolePermissionController extends Controller
{
    public function assignRoleToUser()
    {
        $user = User::find(1);
        $role = Role::find(1);
        $user->role()->associate($role);
        if ($user->save()) {
            return response()->json(['message' => 'AssignedRoleToUser']);
        } else {
            return response()->json(['message' => 'Something went Wrong']);
        }
    }
    public function assignPermissionToRole()
    {
        $role = Role::find(1);
        $permission = Permission::find(1);

        if ($role->permissions()->attach($permission)) {
            return response()->json(['message' => 'AssignedPermissionToRole']);
        } else {
            return response()->json(['message' => 'Something went Wrong']);
        }
    }
}
