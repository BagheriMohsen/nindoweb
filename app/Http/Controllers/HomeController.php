<?php

namespace App\Http\Controllers;

use App\Services\PostServiceInterface;
use App\Services\ServiceServiceInterface;

class HomeController extends Controller
{
    public function __construct(private PostServiceInterface $postService,
                                private ServiceServiceInterface $serviceService)
    {
    }

    public function __invoke(): \Illuminate\Contracts\View\View
    {
        $posts = $this->postService->getWithPaginate(queries: [
            ['published_at', '<', now()]
        ], with: ['user'], perPage: 3);
        $services = $this->serviceService->getWithPaginate(with: ['technologies'], perPage: 3);

        return view('home', compact(
            'posts',
            'services'));
    }

}
