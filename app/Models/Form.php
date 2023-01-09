<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $table = 'form';
    protected $primaryKey = 'id';
    protected $fillable = ['firstname', 'middlename', 'lastname', 'suffix', 'alias', 'age', 'birthdate', 'birthplace', 'civilstatus', 'gender', 'occupation', 'lot', 'barangay', 'municipality', 'province', 'zipcode', 'ecname', 'ecnumber'];
}
