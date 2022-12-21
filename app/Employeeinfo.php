<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Employeeinfo extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table= "employeeinfo";

}
