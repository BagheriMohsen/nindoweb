<?php


namespace App\Repositories\Eloquent;


use App\Models\Hire;
use App\Repositories\HireRepositoryInterface;

class HireRepository extends BaseRepository implements HireRepositoryInterface
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
