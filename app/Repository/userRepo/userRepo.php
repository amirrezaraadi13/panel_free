<?php

namespace App\Repository\userRepo ;

use App\Models\User;

class userRepo {
    public function index()
    {
        return User::query()->orderByDesc('created_at')->paginate() ;
    }

    public function create($value)
    {
        return User::query()->create([

        ]) ;
    }

    public function getFindId($id)
    {
        return User::query()->findOrFail($id) ;
    }

    public function update($value , $id)
    {
        return User::query()->where('id' , $id->id)->update([

        ]) ;
    }

    public function delete($id)
    {
        $id = $this->getFindId($id);
        return User::query()->where('id' , $id->id)->delete() ;
    }
}
