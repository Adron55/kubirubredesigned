<?php

namespace App\Http\Controllers;

use App\BusinessSector;
use App\CompanyInfo;
use App\Country;
use App\Position;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user =User::where('id',Auth::id())->first();
        $info = User::where('uuid', $user->uuid)->first();
        $companies = CompanyInfo::where('user_id', $info->id)->first();
        $positions = Position::all();
        $sectors = BusinessSector::all();
        $countries = Country::all();
        if ($info->status == 2) {
//            return $info;
            return view("dashboard" , compact('info', 'companies', 'positions', 'countries', 'sectors'));
        } else {
            return redirect('/');
        }

//        return view('home');
    }
    public function dashhome(Request $request)
    {
        $user =User::where('id',Auth::id())->first();
        $info = User::where('uuid', $user->uuid)->first();
        $companies = CompanyInfo::where('user_id', $info->id)->first();
        $positions = Position::all();
        $sectors = BusinessSector::all();
        $countries = Country::all();
        if ($info->status == 2) {
//            return $companies;
            return view("dashboard-home" , compact('info', 'companies', 'positions', 'countries', 'sectors'));
        } else {
            return redirect('/');
        }

//        return view('home');
    }


    public function edit(User $user){
        $user =User::where('id',Auth::id())->first();
        $companies = CompanyInfo::where('user_id', $user->id)->first();
        $positions = Position::all();
        $sectors = BusinessSector::all();
        $countries = Country::all();
        return view('companyedit', compact('info', 'companies', 'positions', 'countries', 'sectors','user'));
    }
    public function companyUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' =>'required',
            'mail' =>'required|email',
            'city' =>'required',
            'cname' =>'required',
//            'pname' => 'required',
            'phone' => 'required',
            'website' =>'required',
            'cmail' =>'required',
            'pass' =>'required|min:6',
            'cpass' =>'required|min:6|same:pass',
            'myPhoto' => [Rule::dimensions()->maxWidth(645)->maxHeight(645)],
//            'mission' => 'required'
        ]);
        $user =User::where('id',Auth::id())->first();
        $info = User::where('uuid', $user->uuid)->first();

        $companies = CompanyInfo::where('user_id', $info->id)->update([
            'user_id' => $user->id,
            'company_name' => $request->cname,
            'country_id' => $request->country_id,
            'city' => $request->city,
            'position_id' => $request->position_id,
            'company_mail' => $request->cmail,
            'website' => $request->website,
//            'mission' => $request->mission,
//            'product' => $request->pname,
            'business_sector_id' => $request->sector_id
        ]);
        if (!is_null($request->file('myPhoto'))) {
            $extension = $request->file('myPhoto')->extension();

            $request->file('myPhoto')->storeAs('public/logos', $user->id . '_image.' . $extension);
            $user->path = "storage/logos/" . $user->id . '_image.' . $extension;
            $user->save();
        }

        $info = User::where('uuid', $user->uuid)->update([
            'fullname' => $request->fullname,
//            'lastname' => $request->sname,
            'email' => $request->mail,
            'phone' => $request->phone,
//            'path' => $request->myPhoto
//            'age' => $request->age
        ]);
        //Flash::message('Your account has been updated!');
        //return view('home',compact('info','companies','user','positions','sectors','countries'));
        return redirect('/home');
    }
}
