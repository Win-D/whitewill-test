<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    /**
     * Отношение "Один к одному"
     *
     * @return HasOne
     */
    public function postExtAttributes(): HasOne
    {
        return $this->hasOne('App\PostExtAttributes');
    }
}
