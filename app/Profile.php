<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = []; // Disable mass assignment protection

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : '/profile/bAIuFVoROUhXVvlulBVy8w4qNXj13FxhfqkIAdVh.png';
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
