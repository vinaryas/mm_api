<?php

namespace App\Services;

use App\Models\RoleUser;

class RoleUserService
{
	private $RoleUser;

    public function __construct(RoleUser $RoleUser)
    {
        $this->RoleUser = $RoleUser;
    }

	public function all(){
		return $this->RoleUser->query();
	}

    public function store($data){
        return $this->RoleUser->create($data);
    }

    public function find($id){
        return $this->all()->where('user_id', $id);
    }

}
