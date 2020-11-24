<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Course extends Model
{
    protected $fillable = [
        'name', 'price',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
