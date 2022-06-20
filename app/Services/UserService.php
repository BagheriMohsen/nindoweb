<?php


namespace App\Services;


use App\Repositories\Eloquent\UserRepository;
use App\Repositories\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    public function __construct(private UserRepositoryInterface $userRepository)
    {
    }

    public function getWithPaginate(null|array $queries = null, array $with = [], $sort = "created_at",
                                               $direction = "desc", $perPage = 15): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return $this->userRepository->getWithPaginate($queries, $with, $sort, $direction, $perPage);
    }
}
