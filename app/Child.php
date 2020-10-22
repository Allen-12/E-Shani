<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(User::class);
    }
}
