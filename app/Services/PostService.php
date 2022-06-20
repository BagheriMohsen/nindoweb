<?php


namespace App\Services;


use App\Repositories\Eloquent\PostRepository;
use App\Repositories\PostRepositoryInterface;

class PostService implements PostServiceInterface
{
    public function __construct(private PostRepositoryInterface $postRepository)
    {
    }

    public function getWithPaginate(null|array $queries = null, array $with = [], $sort = "created_at",
                                               $direction = "desc", $perPage = 15): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return $this->postRepository->getWithPaginate($queries, $with, $sort, $direction, $perPage);
    }
}
