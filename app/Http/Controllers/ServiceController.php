<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ServiceController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_service' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        Service::create($request->all());
        return response('OK', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|ResponseFactory|Response
     */
    public function show(int $id)
    {
        return response(Service::all());
    }


    /**
     * @param Request $request
     * @param Service $service
     * @return Application|ResponseFactory|Response
     */
    public function update(Request $request, Service $service)
    {
        $service->update($request->all());

        return response('OK', 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Service $service
     * @return Application|ResponseFactory|Response
     * @throws Exception
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return response('OK');
    }
}
