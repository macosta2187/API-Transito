<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conducen extends Model
{
    use HasFactory;
    protected $table = 'conducen';
    use SoftDeletes;
}
