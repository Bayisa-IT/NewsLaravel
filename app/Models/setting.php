<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;

     //Table name
     protected $table = "settings";
     //Primary Key
     public $primarykey = 'sid';
}
