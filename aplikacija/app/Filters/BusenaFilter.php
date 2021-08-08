<?php

// DataFilter.php

namespace App\Filters;

class BusenaFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('busena', $value);
    }
}
