<?php


namespace App\Repositories\Eloquent;


use App\Models\RequestForm;

class RequestFormRepository extends BaseRepository
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
