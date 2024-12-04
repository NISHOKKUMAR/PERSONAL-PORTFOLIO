<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Blog extends Model
{
    protected $table = 'blogposts';
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
