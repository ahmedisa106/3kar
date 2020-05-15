<?php

namespace App\Http\Controllers;

use App\Bu;
use App\Http\Requests\AddUserRequestAdmin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $users = User::all();

        return view('admin.user.index', compact('users'));

    }


    public function create()
    {

        return view('admin.user.add');

    }

    protected function store(AddUserRequestAdmin $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => (['required', Rule::unique('users')]),
            'admin' => 'required',


        ]);
        $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/admin-panel/users')->with('success', 'تمت إضافه العضو بنجاح');
    }

    public function edit($id)
    {
        $user = User::find($id);

        $buWaiting = Bu::where('user_id', $id)->where('status', 0)->paginate(5);
        $buEnable = Bu::where('user_id', $id)->where('status', 1)->paginate(5);

        return view('admin.user.edit', compact('user', 'buWaiting', 'buEnable'));

    }

    public function update($id, Request $request)
    {
        $user = User::find($id);
        $request->validate([
            'name' => 'required',
            'email' => (['required', 'email', Rule::unique('users', 'email')->ignore($user->id, 'id')]),
            'admin' => 'required',


        ]);


        $user->update($request->all());


        return redirect('/admin-panel/users')->with('updated', 'تمت تعديل العضو بنجاح');


    }

    public function destroy($id)
    {

        $user = User::find($id);
        Bu::where('user_id', $id)->delete();
        if ($user->admin != 1) {

            $user->delete($user);
            return redirect('/admin-panel/users')->with('deleted', 'تمت حذف العضو بنجاح');


        } elseif ($user->admin == 1) {

            return redirect('/admin-panel/users')->with('undeleted', 'لا يمكن حذف العضو ');


        }


    }

    public function usereditInfo()
    {

        $user = auth()->user();

        return view('website.profile.edit', compact('user'));


    }

    public function userUpdateProfile(Request $request, $id)
    {

        $user = User::find($id);

        $request->validate([
            'name' => 'required',
            'email' => (['required', Rule::unique('users')->ignore($user->id, 'id')]),


        ]);

        $request_data = $request->except(['new_password', 'password']);


        if (!empty($request->new_password)) {

            $request->validate(['password' => 'required']);
        }

        if (empty($request->password)) {


            $request_data['password'] = $user->password;


        }


    else {


        if (hash::check($request->password, $user->password)) {

            $request->validate(['new_password' => 'required']);

            $request_data['password'] = bcrypt($request->new_password);


        } else {

            return redirect()->back()->with('error', 'كلمه البريد القديمه خاطئه');
        }

    }


        $user->update($request_data);

        return redirect('/user/editSetting')->with('success', 'تم تعديل البيانات');

    }

}
