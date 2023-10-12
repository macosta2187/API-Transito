<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conforman extends Model
{
    use HasFactory;
    protected $table = 'conformans';
    use SoftDeletes;
}
