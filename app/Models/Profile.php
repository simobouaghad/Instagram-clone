<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function profileImage()
    {
        return ($this->image) ? '/storage/' . $this->image : '/storage/profile/qJJUlhbDihZ2Y4jRSjKeSuR3FNQWOZwTy95s0mTF.png';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
