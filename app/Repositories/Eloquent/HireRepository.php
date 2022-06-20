<?php


namespace App\Repositories\Eloquent;


use App\Models\Hire;

class HireRepository extends BaseRepository
{

    public function getFieldsSearchable(): array
    {
        return [];
    }

    public function model(): string
    {
        return Hire::class;
    }
}
