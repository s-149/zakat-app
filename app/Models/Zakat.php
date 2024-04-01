<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zakat extends Model
{
    use HasFactory;

    protected $table = 'zakat';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array[]
     */
    protected $fillable = [
        'nama','alamat', 'jumlah_jiwa', 'harga_beras_dikonsumsi', 'tagihan', 'pembayaran'
    ];

    protected $guards = ['id'];
}
