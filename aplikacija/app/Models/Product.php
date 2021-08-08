<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $pavadinimas
 * @property string $aprasymas
 * @property string $paveikslelis
 * @property string $kaina
 * @property string $kodas
 */
class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $guarded = [];
    public function kodas()
    {
        return $this->belongsTo(Skrydis::class,);
    }
}
