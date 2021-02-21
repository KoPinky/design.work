<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceOrder;
use App\Models\Stage;
use App\Models\StageList;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class StageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_service' => 'required',
            'description' => 'required',

        ]);

        Stage::create();
        return response->json('OK', 201);
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id)
    {


        return response()->json(Service::find($id)->stage()->get())
            ->withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
