<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homeSec extends Model
{
    use HasFactory;
    protected $table = 'home_secs';
    protected$fillable=['name','description','file',];
}
