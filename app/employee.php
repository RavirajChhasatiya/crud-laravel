<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class employee extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'employee_id',
        'employee_name',
        'employee_dept',
        
    ];

    // public function dept(){
    //     return $this->hasOne(Edepartment::class,'employee_dept','employee_dept');
    // }
}
