<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = "position";

    protected $primaryKey = "id";

    public function user(){
        return $this->hasMany(User::class);
    }
}
