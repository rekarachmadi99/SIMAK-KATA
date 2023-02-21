<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TPCBModel extends Model
{
    use HasFactory;
    protected $table = 'tpcb';
    protected $fillable = [
        'nip',
        'tim',
        'jabatan',
    ];
}
