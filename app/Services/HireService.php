<?php


namespace App\Services;


use App\Repositories\HireRepositoryInterface;

class HireService implements HireServiceInterface
{
    public function __construct(private HireRepositoryInterface $hireRepository)
    {
    }

    public function create(array $data)
    {
        return $this->hireRepository->create($data);
    }
}
