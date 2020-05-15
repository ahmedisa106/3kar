<?php

namespace App\Http\Controllers;

use App\Bu;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Bucontroller extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth'])->except(['showAllEnable', 'forRent', 'showType', 'search', 'singleBuilding']);
    }

    public function index(Request $request)

    {


        if ($request->id) {
            $bu = Bu::where('user_id', $request->id)->get();
            return view('admin.bu.index', compact('bu'));

        }

        $bu = Bu::all();

        return view('admin.bu.index', compact('bu'));


    }

    public function create()
    {

        return view('admin.bu.add');


    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|min:4|max:20',
            'price' => 'required|integer|min:5',
            'rent' => 'required|integer',
            'square' => 'required|integer',
            'type' => 'required|integer',
            'small_desc' => 'required|min:5|max:160',
            'meta' => 'required|min:5|max:200',
            'longitude' => 'required',
            'latitude' => 'required',
            'large_desc' => 'required|min:5',
            'status' => 'required|integer',
            'rooms' => 'required|integer',
            'place' => 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg',


        ]);


        $request_data = $request->except(['_token', 'submit', 'image']);


        if ($request->image) {


            $image = Image::make($request->image);
            $name = time() . '.' . $request->file('image')->getClientOriginalName();


            $image->save(public_path('website/Bu_images/') . $name, 100);


            $request_data['image'] = $name;


        }


        Bu::create($request_data);
        return redirect('/admin-panel/bu')->with('success', 'تم إضافه البيانات بنجاح');


    }

    public function edit($id)
    {

        $bu = Bu::find($id);

        return view('admin.bu.edit', compact('bu'));


    }

    public function update($id, Request $request)
    {
        $bu = Bu::find($id);

        $request->validate([
            'name' => 'required|min:4|max:20',
            'price' => 'required|integer|min:5',
            'rent' => 'required|integer',
            'square' => 'required|integer',
            'type' => 'required|integer',
            'small_desc' => 'required|min:5|max:160',
            'meta' => 'required|min:5|max:200',
            'longitude' => 'required',
            'latitude' => 'required',
            'large_desc' => 'required|min:5',
            'status' => 'required|integer',
            'rooms' => 'required|integer',
            'place' => 'required|string',
            'user_id' => 'integer',

            'image' => 'mimes:png,jpg,jpeg',


        ]);

        $request_data = $request->except(['_token', 'submit', 'image']);


        if ($request->image) {

            if ($bu->image != 'default.png') {
                Storage::disk('public_uploads')->delete('/Bu_images/' . $bu->image);


            }

            $image = Image::make($request->image);
            $name = time() . '.' . $request->file('image')->getClientOriginalName();
            $image->save(public_path('website/Bu_images/') . $name, 100);


            $request_data['image'] = $name;


        }


        $bu->update($request_data);
        return redirect('admin-panel/bu')->with('updated', 'تم تعديل البيانات بنجاح');


    }

    public function destroy($id)
    {

        $bu = Bu::find($id);

        if ($bu->image != 'default.png') {
            Storage::disk('public_uploads')->delete('/Bu_images/' . $bu->image);

        }

        $bu->delete();

        return redirect('admin-panel/bu')->with('deleted', 'تم حذف البيانات بنجاح');


    }

    public function showAllEnable()
    {

        $buAll = Bu::where('status', 1)->orderby('id', 'desc')->paginate(12);
        return view('website.bu.all', compact('buAll'));

    }

    public function forRent($type)
    {


        if (in_array($type, ['0', '1'])) {
            $buRent = Bu::where('status', 1)->where('rent', $type)->latest()->paginate(12);
            return view('website.bu.showRent', compact('buRent', 'type'));
        }
        return redirect()->back();


    }


    public function showType($type)
    {

        if (in_array($type, ['0', '1', '2'])) {
            $bus = Bu::where('status', 1)->where('type', $type)->latest()->paginate(12);
            return view('website.bu.showType', compact('bus', 'type'));

        }
        return redirect()->back();


    }

    public function search(Request $request)
    {

//        طريق بحث لكنها لا تدعم pagination


//        $requestAll = $request->except(['_token', 'submit']);
//        $value = '';
//        $i=0;
//
//        foreach ($requestAll as $key=>$val) {
//
//            if ($val != NULL) {
//               $where = $i ==0 ? ' where ' : ' and ';
//
//                $value .= $where .''.$key .'=' .$val;
//                $i=2;
//
//
//            }
//
//
//        }
//        $query= "Select * From bu ".$value;
//        $buAll = DB::select($query);


//        طريقه بحث تدعم pagination
        $requestAll = $request->except(['_token', 'submit', 'page', 'image']);
        $max = $request->price_to == '' ? '100000000' : $request->price_to;
        $min = $request->price_from == '' ? '50000' : $request->price_from;


        $query = DB::table('bu')->select('*')->where('status', 1);

        $array = [];
        foreach ($requestAll as $key => $val) {


            if ($val != '') {


                if ($key == 'rent' || $key == 'type') {
                    $numbers = ['0', '1', '2', '3'];
                    if (!in_array($val, $numbers)) {
                        return back();

                    }

                }

                if ($key == 'price_from' || $key == 'price_to') {

                    $query->whereBetween('price', [$min, $max]);


                } else {
                    $query->where($key, $val);

                }
                $array[$key] = $val;

            }


        }
        $buAll = $query->paginate(12);

        return view('website.bu.all', compact('buAll', 'array'));

    }

    public function singleBuilding($id)
    {

        $buInfo = Bu::find($id);
        $title = 'You Dont Have permissions to access this Building  !';

        $message = 'This Building is Waiting the approval ! , during 24 h';


        if ($buInfo->status == 0) {
            return view('website.bu.noPer', compact('buInfo', 'title', 'message'));


        }
        $same = Bu::where('rent', $buInfo->rent)->where('type', $buInfo->type)->where('id', '!=', $id)->orderBy(DB::raw('RAND()'))->take(3)->get();


        return view('website.bu.singleBuilding', compact('buInfo', 'same'));


    }

    public function getAjaxInfo(Request $request)
    {

        $bu = Bu::find($request->id);
        return $bu->toJson();


    }

//    user

    public function user_add()
    {
        return view('website.user_bu.add');

    }

    public function user_store(Request $request)
    {


        $request->validate([
            'name' => 'required|min:4|max:20',
            'price' => 'required|integer|min:5',
            'rent' => 'required|integer',
            'square' => 'required|integer',
            'type' => 'required|integer',
            'meta' => 'required|min:5|max:200',
            'longitude' => 'required',
            'latitude' => 'required',
            'large_desc' => 'required|min:5',
            'rooms' => 'required|integer',
            'place' => 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg',


        ]);


        $request_data = $request->except(['_token', 'submit', 'image']);
        $request_data['user_id'] = auth()->user()->id;

        if ($request->image) {


            $image = Image::make($request->image);
            $name = time() . '.' . $request->file('image')->getClientOriginalName();


            $image->save(public_path('website/Bu_images/') . $name, 100);


            $request_data['image'] = $name;


        }


        Bu::create($request_data);
        return redirect('/user/create/building')->with('success', 'تم ألإضافه');
    }

    public function showUserBuilding()
    {

        $user = auth()->user();
        $bus = Bu::where('user_id', $user->id)->where('status', 1)->paginate(12);

        return view('website.user_bu.showUserbuilding', compact('bus'));

    }

    public function showUserBuildingWaiting()
    {

        $user = auth()->user();
        $bus = Bu::where('user_id', $user->id)->where('status', 0)->paginate(12);

        return view('website.user_bu.showUserbuilding', compact('bus'));

    }

    public function userEditBuildingform($id)
    {

        $buInfo = Bu::find($id);
        $user = auth()->user();

        $title = 'You Dont Have permissions to access this Building  !';

        $message = ' This Building is Waiting the approval ! , during 24 h ';


        if ($user->id != $buInfo->user_id) {

            return view('website.bu.noPer', compact('buInfo', 'title', 'message'));

        } elseif ($user->id == $buInfo->user_id && $buInfo->status == 1) {

            $title = ' this Building is approved';
            $message = ' this Building is waiting the approval';

            return view('website.bu.noPer', compact('buInfo', 'title', 'message'));

        }

        return view('website.user_bu.edit', compact('buInfo'));


    }

    public function userEditBuilding(Request $request, $id)
    {


        $buInfo = Bu::find($id);


        $request->validate([
            'name' => 'required|min:4|max:20',
            'price' => 'required|integer|min:5',
            'rent' => 'required|integer',
            'square' => 'required|integer',
            'type' => 'required|integer',
            'meta' => 'required|min:5|max:200',
            'longitude' => 'required',
            'latitude' => 'required',
            'large_desc' => 'required|min:5',
            'rooms' => 'required|integer',
            'place' => 'required|string',
            'image' => 'mimes:png,jpg,jpeg',


        ]);

        $request_data = $request->except(['_token', 'submit', 'image']);


        if ($request->image) {


            $image = Image::make($request->image);
            $name = time() . '.' . $request->file('image')->getClientOriginalName();


            $image->save(public_path('website/Bu_images/') . $name, 100);


            $request_data['image'] = $name;


        }

        $buInfo->update($request_data);

        return redirect()->back()->with('updated', 'تم تعديل البيانات بنجاح');


    }

    public function change_status($id)
    {


        $bu = Bu::find($id);
        if ($bu->status == 1) {
            $bu->update(['status' => 0]);
            return redirect()->back()->with('updated', 'تم التعديل بنجاح');

        } else {

            $bu->update(['status' => 1]);
            return redirect()->back()->with('updated', 'تم التعديل بنجاح');
        }


    }

}

