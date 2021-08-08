<?php

// DataFilter.php

namespace App\Filters;

class DataFilter
{
    public function filter($builder, $value)
    {
        return $builder->whereDate('laikas', $value);
    }
}
