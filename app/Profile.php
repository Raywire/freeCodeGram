<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = []; // Disable mass assignment protection

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
