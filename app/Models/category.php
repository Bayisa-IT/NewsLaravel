<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    //Table name
    protected $table = "categories";
    //Primary Key
    public $primarykey = 'id';
    //TimeStamps
    public $timeStamps = true;
}
