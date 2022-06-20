<?php

namespace App\Providers;

use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Eloquent\HireRepository;
use App\Repositories\Eloquent\PostRepository;
use App\Repositories\Eloquent\ProjectRepository;
use App\Repositories\Eloquent\RequestFormRepository;
use App\Repositories\Eloquent\ServiceRepository;
use App\Repositories\Eloquent\TechnologyRepository;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\HireRepositoryInterface;
use App\Repositories\PostRepositoryInterface;
use App\Repositories\ProjectRepositoryInterface;
use App\Repositories\RequestFormRepositoryInterface;
use App\Repositories\ServiceRepositoryInterface;
use App\Repositories\TechnologyRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use App\Services\HireService;
use App\Services\HireServiceInterface;
use App\Services\PostService;
use App\Services\PostServiceInterface;
use App\Services\ProjectService;
use App\Services\ProjectServiceInterface;
use App\Services\ServiceService;
use App\Services\ServiceServiceInterface;
use App\Services\TechnologyService;
use App\Services\TechnologyServiceInterface;
use App\Services\UserService;
use App\Services\UserServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->repositoryBinding();
        $this->repositoryBinding();

    }

    public function boot()
    {
        //
    }

    private function repositoryBinding()
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(HireRepositoryInterface::class, HireRepository::class);
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
        $this->app->bind(ProjectRepositoryInterface::class, ProjectRepository::class);
        $this->app->bind(RequestFormRepositoryInterface::class, RequestFormRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
        $this->app->bind(TechnologyRepositoryInterface::class, TechnologyRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    private function serviceBinding()
    {
        $this->app->bind(HireServiceInterface::class, HireService::class);
        $this->app->bind(PostServiceInterface::class, PostService::class);
        $this->app->bind(ProjectServiceInterface::class, ProjectService::class);
        $this->app->bind(ServiceServiceInterface::class, ServiceService::class);
        $this->app->bind(TechnologyServiceInterface::class, TechnologyService::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);
    }
}
