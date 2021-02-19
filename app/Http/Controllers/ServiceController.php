<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Throwable;

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
        try {
            $request->validate([
                'name_service' => 'required',
                'price' => 'required|between:0,99.99',
                'description' => 'required'
            ]);
            Service::create($request->all());
            return response('OK', 201);
        } catch (Throwable $e) {
            return response($e->getMessage(), 400)->withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @return Application|ResponseFactory|Response
     */
    public function show()
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
        return response($service, 202);
    }

    /**
     * @param int $id
     * @return Application|ResponseFactory|Response
     */
    public function destroy(int $id)
    {

        try {
            Service::findOrFail($id)->delete();
            return response('OK', 204);
        }
        catch (Throwable $e){
            return response($e->getMessage(), 404)
                ->withHeaders([
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ]);
        }
    }

    /**
     * @param int $id
     * @return Application|ResponseFactory|Response
     */
    public function getStages(int $id)
    {
        return response(Service::find($id)->stages());
    }
}
