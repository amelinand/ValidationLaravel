<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Character extends Model
{
    public function designer()
    {
        return $this->belongsTo(Designer::class);
    }
}
