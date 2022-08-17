<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    //Table name
    protected $table = "posts";
    //Primary Key
    public $primarykey = 'pid';
    //TimeStamps
    public $timeStamps = true;
}
