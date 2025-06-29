<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datakampus extends Model
{
    protected $table = 'datakampus';

    protected $fillable = [
        'nama', 'alamat', 'no_telpon', 'kategori', 'latitude', 'longitude', 'jurusan'
    ];
}
