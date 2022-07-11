<?php

namespace App\Http\Controllers;

use App\Services\Supports\PermissionRoleService;
use App\Services\Supports\PermissionService;
use App\Services\Supports\RoleService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class permissionRoleController extends Controller
{
    public function index(){
        $permissions = PermissionService::all()->get();
        $roles = RoleService::all()->get();

        return view('permission_role.index', compact('permissions', 'roles'));
    }

    public function store(Request $request){
        DB::beginTransaction();
        try{
            $data = [
                'name'=>$request->name,
                'display_name'=>$request->display_name,
                'description'=>$request->description,
            ];
            $store = PermissionRoleService::store($data);
            DB::commit();
            return redirect()->route('permissionRole.index');
        }catch(\Throwable $th){
            dd($th);
        }
    }
}
