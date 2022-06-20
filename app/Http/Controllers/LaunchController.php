<?php

namespace App\Http\Controllers;

use App\Http\Requests\LaunchRequest;
use App\Services\RequestFormService;
use App\Services\RequestFormServiceInterface;

class LaunchController extends Controller
{
    public function __construct(private RequestFormServiceInterface $requestFormService)
    {
    }

    public function create(): \Illuminate\Contracts\View\View
    {
        return view('launch-create');
    }

    public function store(LaunchRequest $launchRequest): \Illuminate\Http\RedirectResponse
    {
        $key = 'launch:request:ip:'.$launchRequest->ip();

        cache()->has($key) ?
            cache()->increment($key):
            cache()->set($key, 1, now()->addDays());

        if(cache()->get($key) > 3) {
            return redirect()
                ->back()
                ->with(['error' => __('You have applied for three projects. To apply for the next application, please contact support or apply tomorrow')]);
        }

        $data = $launchRequest->all();
        $this->requestFormService->create($data);

        return redirect()
            ->back()
            ->with([
                'success' => __('Your request successfully created!')
            ]);
    }
}
