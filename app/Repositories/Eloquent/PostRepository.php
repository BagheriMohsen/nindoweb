<?php


namespace App\Repositories\Eloquent;


use App\Models\Post;
use App\Repositories\PostRepositoryInterface;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{

    public function getFieldsSearchable(): array
    {
        return [];
    }

    public function model(): string
    {
        return Post::class;
    }
}
