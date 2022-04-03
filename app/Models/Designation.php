<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;
    public function designation() {
        $this->hasOne(Designation::class, 'designation_name', 'name');
    }
}