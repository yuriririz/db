<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;
    protected $fillable = [

    ];
        // join table coures
    public function questions(){
        return $this->belongsTo(Questions::class);
    }
}
