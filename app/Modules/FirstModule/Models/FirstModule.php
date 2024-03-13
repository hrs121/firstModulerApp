<?php

namespace App\Modules\FirstModule\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstModule extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email'];
}
