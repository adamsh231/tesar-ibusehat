<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    /**
     * comments
     *
     * @return void
     */
    public function subjektif()
    {
        return $this->hasMany(Subjektif::class);
    }

    /**
     * comments
     *
     * @return void
     */
    public function objektif()
    {
        return $this->hasMany(Objektif::class);
    }



    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'umur',
        'agama',
        'pendidikan',
        'pekerjaan',
        'alamat',
        'nomer_tlpn',
        'nama_suami',
        'umur_suami',
        'agama_suami',
        'pendidikan_suami',
        'pekerjaan_suami',
        'alamat_suami',
        'nomer_suami',
    ];
}
