<?php


namespace App\Repositories\Eloquent;


use App\Models\RequestForm;
use App\Repositories\RequestFormRepositoryInterface;

class RequestFormRepository extends BaseRepository implements RequestFormRepositoryInterface
{

    public function getFieldsSearchable(): array
    {
        return [];
    }

    public function model(): string
    {
        return RequestForm::class;
    }
}
