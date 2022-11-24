<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trop extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function Topup(){
        return $this->belongsTo(Topup::class);
}
}
