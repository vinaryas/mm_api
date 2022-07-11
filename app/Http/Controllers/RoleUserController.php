<?php

namespace App\Http\Controllers;

use App\Services\Supports\RoleService;
use App\Services\Supports\RoleUserService;
use App\Services\Supports\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleUserController extends Controller
{
    public function index(){
        $roles = RoleService::all()->get();
        $users = UserService::all()->get();
        $roleUsers = RoleUserService::all()->get();

        return view('roleUser.index', compact('roleUsers', 'roles', 'users'));
    }

    public function store(Request $request){
        DB::beginTransaction();
        try{
            $data = [
                'user_id'=>$request->user_id,
                'role_id'=>$request->role_id,
                'user_type'=>$request->user_type,
            ];
            $store = RoleUserService::store($data);
            DB::commit();
            return redirect()->route('roleUser.index');
        }catch(\Throwable $th){
            dd($th);
        }

    }
}
