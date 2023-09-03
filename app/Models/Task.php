<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // protected $table = 'tasks';
    // protected $fillable = [];
    // protected $guarded = []; -> kebalikan dari filllable, menentukan field apa saja yg ttidak boleh diisi sembarangan
}
