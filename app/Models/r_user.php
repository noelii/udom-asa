<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class r_user extends Model
{
    use HasFactory;
    public function users()
    {
        $this->belongsTo(User::class);
    }
}
