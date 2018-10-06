<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = "users";

    protected $primaryKey = "id";

    public function position(){
        return $this->BelongsTo(Position::class);
    }

    public function parent()
    {
        return $this->belongsTo(User::class, 'director_id');
    }

    public function childs(){
        return $this->hasMany(User::class, 'director_id','id');
    }
//
//    public function rootUser(){
//        return $this->where('director_id', 0)->with('User')->get();
//    }
}
