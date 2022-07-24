<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    // protected $with = ['detailPengajuan', 'user'];

    public function detailPengajuan()
    {
        return $this->hasMany(DetailPengajuan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
