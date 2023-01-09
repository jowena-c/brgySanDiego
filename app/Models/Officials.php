<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officials extends Model
{
    use HasFactory;
    protected $table = 'officials';
    protected $primaryKey = 'id';
    protected $fillable = ['fullname', 'committee', 'position'];

}
