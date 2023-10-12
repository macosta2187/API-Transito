<?php

namespace App\Models;
use App\Models\Transportan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transportan extends Model
{
   
    use HasFactory;
    protected $table = 'transportans';
    use SoftDeletes;
}
