<?php

namespace App\Http\Controllers\API;

use App\Models\Experience;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class ExperienceController extends Controller
{
    public function all(request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $company = $request->input('company');
        $date = $request->input('date');
        $position = $request->input('position');
        $jobdesc = $request->input('jobdesc');
        $tag = $request->input('tag');


        if($id)
        {
            $experience = Experience::find($id);
            if($experience)
            {
                return ResponseFormatter::succes(
                    $experience,
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

        $experience = Experience::query();
        if($company)
        {
            $experience->where('company','like','%' . $company . '%');
        }

        return ResponseFormatter::succes(
            $experience->paginate($limit),
            'data berhasil di ambil'
        );
    }
}
