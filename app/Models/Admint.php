<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admint extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $primaryKey = 'id';
}
