<?php


namespace App\Services;


use App\Repositories\ServiceRepositoryInterface;

class ServiceService implements ServiceServiceInterface
{

    public function __construct(private ServiceRepositoryInterface $serviceRepository)
    {
    }

    public function getWithPaginate(null|array $queries = null, array $with = [], $sort = "created_at",
                                               $direction = "desc", $perPage = 15): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return $this->serviceRepository->getWithPaginate($queries, $with, $sort, $direction, $perPage);
    }
}
