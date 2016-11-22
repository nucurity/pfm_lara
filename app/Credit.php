<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class credit extends Model
{
    public function creditUserId()
    {
        return $this->hasOne('App\User');
    }

    public function creditCategoryId()
    {
        return $this->hasOne('App\Category');
    }
}
