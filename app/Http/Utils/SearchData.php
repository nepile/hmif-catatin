<?php

namespace App\Http\Utils;

use Illuminate\Support\Facades\DB;

class SearchData
{
    public static function find(array $requirements)
    {
        $query = $requirements['model']->where($requirements['field'], 'LIKE', '%' . $requirements['key'] . '%');
        $data = $query->paginate(10);

        return $data;
    }
}
