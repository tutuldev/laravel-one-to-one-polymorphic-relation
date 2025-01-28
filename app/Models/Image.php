<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $guarded=[];
    public $timestamps= false;
    public function imageable(){
        // if column name not imageable_type and imageable_id then and the 3 parametter
        // return $this->morphTo(__FUNCTION__,'imageable_type','imageable_id');

        return $this->morphTo();
    }
}
