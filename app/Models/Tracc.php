<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracc extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function Account(){
        return $this->belongsTo(Account::class);
}
}
