<?php

namespace App\Http\Controllers\API;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function all(request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $title = $request->input('title');
        $overview = $request->input('overview');
        $tipografi = $request->input('tipografi');
        $content = $request->input('content');
        $color = $request->input('color');
        $id_service = $request->input('id_service');
        $date = $request->input('date');
        $client = $request->input('client');
        $url = $request->input('url');
        $tag = $request->input('tag');


        if($id)
        {
            $project = Project::find($id);
            if($project)
            {
                return ResponseFormatter::succes(
                    $project,
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

        $project = Project::query();
        if($title)
        {
            $project->where('title','like','%' . $title . '%');
        }

        return ResponseFormatter::succes(
            $project->paginate($limit),
            'data berhasil di ambil'
        );
    }
}
