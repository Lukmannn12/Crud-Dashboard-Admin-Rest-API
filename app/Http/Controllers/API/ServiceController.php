<?php

namespace App\Http\Controllers\API;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function all(request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $name = $request->input('name');
        $tag = $request->input('tag');


        if($id)
        {
            $service = Service::find($id);
            if($service)
            {
                return ResponseFormatter::succes(
                    $service,
                    'data berhasil diambil'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'data tidak ada',
                    404
                );
            };
        }

        $service = Service::query();
        if($name)
        {
            $service->where('name','like','%' . $name . '%');
        }

        return ResponseFormatter::succes(
            $service->paginate($limit),
            'data berhasil di ambil'
        );
    }
}
