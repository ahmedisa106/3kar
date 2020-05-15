<?php

namespace App\Http\Controllers;

use App\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SiteSettingController extends Controller
{

    public function index(SiteSetting $siteSetting)
    {

        $siteSetting = SiteSetting::all();

        return view('admin.siteSetting.index', compact('siteSetting'));

    }

    public function store(Request $request)
    {


        foreach ($request->except('_token', 'submit') as $key => $val) {


            $request->validate([
                $key => 'required',


            ]);
            if ($key == 'slider') {


                if (getSetting(['slider']) != 'default.png') {

                    Storage::disk('public_uploads')->delete('/slider/' . getSetting(['slider']));

                }


                $slider = Image::make($request->slider);
                $name = $request->file('slider')->getClientOriginalName();
                $slider->save(public_path('/website/slider/' . $name), 100);
                $val = $name;


            };


            SiteSetting::where('name', $key)->update(['value' => $val]);

        }

        return redirect('/admin-panel/setting')->with('updated', 'تم تعديل البيانات بنجاح');


    }
}
