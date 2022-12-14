<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;
    protected $table = 'mitra';
    protected $primaryKey = 'id';

    protected $filelable = [
        'name',
        'namaAdminPt',
        'jk',
        'notelp',
        'email',
    ];
}
