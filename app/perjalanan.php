<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perjalanan extends Model
{
    protected $table = 'perjalanan';

    protected $fillable = ['tanggal', 'jam', 'lokasi', 'suhu_tubuh', 'user_id'];

    
}
