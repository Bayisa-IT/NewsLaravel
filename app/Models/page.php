<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    use HasFactory;
    
    //Table name
    protected $table = "pages";
    //Primary Key
    public $primarykey = 'pageid';
    //TimeStamps
    public $timeStamps = true;
}
