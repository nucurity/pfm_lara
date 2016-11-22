<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class debit extends Model
{
    public function debitUserId()
    {
        return $this->hasOne('App\User');
    }

    public function debitCategoryId()
    {
        return $this->hasOne('App\Category');
    }
}
