<?php


namespace App\Services;


use App\Models\RequestForm;
use App\Repositories\RequestFormRepositoryInterface;

class RequestFormService implements RequestFormServiceInterface
{
    public function __construct(private RequestFormRepositoryInterface $requestFormRepository)
    {
    }

    public function create(array $data)
    {
        return $this->requestFormRepository->create($data);
    }
}
