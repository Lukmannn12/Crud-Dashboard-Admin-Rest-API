<?php

namespace App\Http\Controllers\API;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    public function all(request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $name = $request->input('name');
        $company = $request->input('company');
        $postion = $request->input('position');
        $rating = $request->input('rating');
        $review = $request->input('review');
        $tag = $request->input('tag');


        if($id)
        {
            $testimonial = Testimonial::find($id);
            if($testimonial)
            {
                return ResponseFormatter::succes(
                    $testimonial,
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

        $testimonial = Testimonial::query();
        if($company)
        {
            $testimonial->where('compnay','like','%' . $company . '%');
        }

        return ResponseFormatter::succes(
            $testimonial->paginate($limit),
            'data berhasil di ambil'
        );
    }
}
