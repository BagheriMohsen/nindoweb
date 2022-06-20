<?php


namespace App\Services;


use App\Repositories\Eloquent\TechnologyRepository;
use App\Repositories\TechnologyRepositoryInterface;

class TechnologyService implements TechnologyServiceInterface
{

    public function __construct(private TechnologyRepositoryInterface $technologyRepository)
    {
    }
}
