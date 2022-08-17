<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class advertisement extends Model
{
    use HasFactory;
    
    //Table name
    protected $table = "advertisements";
    //Primary Key
    public $primarykey = 'aid';
    //TimeStamps
    public $timeStamps = true;
}
