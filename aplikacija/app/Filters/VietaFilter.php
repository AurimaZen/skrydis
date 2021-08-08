<?php

// DataFilter.php

namespace App\Filters;

class VietaFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('vieta', $value);
    }
}
