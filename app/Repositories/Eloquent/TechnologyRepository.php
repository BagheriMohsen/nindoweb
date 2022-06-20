<?php


namespace App\Repositories\Eloquent;


use App\Models\Technology;

class TechnologyRepository extends BaseRepository
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
