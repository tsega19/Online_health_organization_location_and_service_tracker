<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class org extends Model
{
    // use HasFactory;
    //table name
    protected $table = 'orgs';
    //primery
    public $primaryKey = 'id';
    //timestamps
    public $timestamps =true;
}
