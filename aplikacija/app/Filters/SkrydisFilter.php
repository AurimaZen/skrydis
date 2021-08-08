<?php

// SkrydistFilter.php

namespace App\Filters;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class SkrydisFilter extends AbstractFilter
{
    protected $filters = [
        'busena' => BusenaFilter::class,
        'data' => DataFilter::class,
        'vieta' => VietaFilter::class
    ];
}
