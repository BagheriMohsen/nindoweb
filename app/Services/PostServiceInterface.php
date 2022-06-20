<?php

namespace App\Services;

interface PostServiceInterface
{
    public function getWithPaginate(null|array $queries=null, array $with=[], $sort="created_at",
                                               $direction="desc", $perPage=15): \Illuminate\Contracts\Pagination\LengthAwarePaginator;
}
