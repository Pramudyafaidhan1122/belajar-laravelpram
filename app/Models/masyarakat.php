<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masyarakat extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "masyarakat";

    protected $fillable = ['nik','nama','username','password','telp'];
}
