<?php


namespace App\Repositories\Eloquent;


use App\Models\Technology;
use App\Repositories\TechnologyRepositoryInterface;

class TechnologyRepository extends BaseRepository implements TechnologyRepositoryInterface
{

    public function getFieldsSearchable(): array
    {
        return [];
    }

    public function model(): string
    {
        return Technology::class;
    }
}
