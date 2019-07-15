<?php

namespace App\Http\Controllers;

use App\BusinessSector;
use App\Country;
use App\Mail\ContactSendMail;
use App\Mail\RegisterSendMail;
use App\Position;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Webpatser\Uuid\Uuid;
use Validator;

class MainController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function companySave(Request $request)
    {

        $pos = strpos($request->mail, '@');
        $mail_extension = substr($request->mail, $pos + 1);
        $block_list = ["mail.ru", "gmail.com", "bk.ru", "outlook.com"];

        $check_mail = false;
        foreach ($block_list as $blocked_mail) {

            if ($mail_extension == $blocked_mail) {
                $check_mail = true;
            }
        }
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|min:6',
//            'sname' => 'required',
            'mail' => 'required|email',
            'city' => 'required',
            'cname' => 'required',
//            'pname' => 'required',
            'phone' => 'required',
            'pass' => 'required|min:6',
            'cpass' => 'required|min:6|same:pass',
            'photo' => 'required'
//            'mission' => 'required'
        ]);

//        $validator->after(function ($validator) use ($check_mail) {
//            if ($check_mail) {
//                $validator->errors()->add('companyMail', "You must use company mail");
//            }
//        });
        if ($validator->fails()) {
            return redirect('company/registration')
                ->withErrors($validator)
                ->withInput();
        }


        $user = User::create([
            'email' => $request->mail,
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'status' => 2,
            'password' => bcrypt($request->pass)
        ]);

        $uuid = Uuid::generate(4)->string;
        $user->uuid = $uuid;
        $user->save();
        //

        if (!is_null($request->file('photo'))) {
//            return 'okey';
            $extension = $request->file('photo')->extension();

            $request->file('photo')->storeAs('public/logos', $user->id . '_image.' . $extension);
            $user->path = "storage/logos/" . $user->id . '_image.' . $extension;
            $user->save();
        }

        DB::table('company_infos')->insert([
            'user_id' => $user->id,
            'company_name' => $request->cname,
            'country_id' => $request->country_id,
            'city' => $request->city,
            'position_id' => $request->position_id,
//            'mission' => $request->mission,
//            'product' => $request->pname,
            'business_sector_id' => $request->sector_id,
            'company_mail' => $request->cmail,
            'website' => $request->website
        ]);
        $messageOrder="Registration successful ";
//        Mail::to($request->mail)->send(new RegisterSendMail((string)$messageOrder));
        return redirect('success');

        //return redirect('/');
    }
    public function sendcontact(Request $request){

        $messageOrder=$request->all();
//        return $messageOrder;
        Mail::to('support@kubirub.online')->send(new ContactSendMail((array)$messageOrder));

    }
    public function companyRegister()
    {
        $countries = Country::all();
        $positions = Position::all();
        $sectors = BusinessSector::all();
        return view("companyRegister", compact('countries', 'positions', 'sectors'));
    }

}
