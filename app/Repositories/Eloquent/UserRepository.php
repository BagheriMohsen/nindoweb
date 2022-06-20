<?php


namespace App\Repositories\Eloquent;


use App\Models\User;

class UserRepository extends BaseRepository
{

    public function getFieldsSearchable(): array
    {
        return [];
    }

    public function model(): string
    {
        return User::class;
    }
}
