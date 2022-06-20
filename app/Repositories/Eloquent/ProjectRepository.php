<?php


namespace App\Repositories\Eloquent;


use App\Models\Project;
use App\Repositories\ProjectRepositoryInterface;

class ProjectRepository extends BaseRepository implements ProjectRepositoryInterface
{

    public function getFieldsSearchable(): array
    {
        return [];
    }

    public function model(): string
    {
        return Project::class;
    }
}
