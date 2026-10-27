<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'pelanggan_id';
    
    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'email',
        'phone',
    ];

    // Wajib ditambahkan agar route edit/delete tidak error
    public function getRouteKeyName()
    {
        return 'pelanggan_id';
    }
}