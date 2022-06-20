<?php


namespace App\Repositories\Eloquent;


use App\Models\Service;
use App\Repositories\ServiceRepositoryInterface;

class ServiceRepository extends BaseRepository implements ServiceRepositoryInterface
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
