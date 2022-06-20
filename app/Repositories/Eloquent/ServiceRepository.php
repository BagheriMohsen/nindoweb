<?php


namespace App\Repositories\Eloquent;


use App\Models\Service;

class ServiceRepository extends BaseRepository
{

    public function getFieldsSearchable(): array
    {
        return [];
    }

    public function model(): string
    {
        return Service::class;
    }
}
