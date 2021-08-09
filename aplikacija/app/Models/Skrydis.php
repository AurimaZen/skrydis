<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\SkrydisFilter;

/**
 * @property string $kodas
 * @property string $vardas
 * @property string $pastas
 * @property string $telefonas
 * @property string $vieta
 * @property string $laikas
 * @property string $busena
 */
class Skrydis extends Model
{
    use HasFactory;

    protected $table = 'skrydis';
    protected $guarded = [];
    public const STATE_NEW = 'naujas';
    public const STATE_REGISTERED = 'uzregistruotas';
    public const STATE_DONE = 'ivykdytas';
    public const STATES = [
        self::STATE_NEW,
        self::STATE_REGISTERED,
        self::STATE_DONE,
    ];

    public function scopeFilter(Builder $builder, $request)
    {
        return (new SkrydisFilter($request))->filter($builder);
    }
}
