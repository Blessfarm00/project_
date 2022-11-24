<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    use HasFactory;
    protected $guarded=[];
    public function Tracc(){
        return $this->belongsTo(Tracc::class);
}
}
