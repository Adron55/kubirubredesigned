<?php

namespace App\Http\Controllers;

use App\Country;
use App\Coupons;
use App\CouponUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Validator;

class CompanyApiController extends Controller
{
    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6',
            'email' => 'required|email|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => '1', 'content' => 'Validation error']);
        }
        $user = User::where('email', $request->input('email'))->where('status', 2)->first();
        if (count($user) > 0) {
            if (Hash::check($request->input('password'), $user->password)) {
                $userInfo = DB::table('users')
                    ->leftJoin('company_infos', 'company_infos.user_id', '=', 'users.id')
                    ->select('users.email', 'users.uuid', 'company_infos.company_name', 'users.id')
                    ->where('email', $request->input('email'))
                    ->first();
                return response()->json(['error' => '0', 'content' => $userInfo]);
            } else {
                return response()->json(['error' => '1', 'content' => 'Wrong Password']);
            }
        } else {
            return response()->json(['error' => '1', 'content' => 'Wrong email']);
        }
    }

    public function getCoupons(Request $request)
    {
        $user = User::where('uuid', $request->uuid)->first();
        $coupons = Coupons::where('company_id', $user->id)->select("id", "product", "discount", "type", "price")->get();
        if (count($coupons) > 0) {
            foreach ($coupons as $coupon) {
                $coupon->used = CouponUser::where('coupon_id', $coupon->id)->where('status', 2)->count();
                $coupon->amount = CouponUser::where('coupon_id', $coupon->id)->count();
            }
            return response()->json(['status' => '1', 'content' => $coupons]);
        } else {
            return response()->json(['status' => '2']);
        }
    }


    public function saveCoupon(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'uuid' => 'required',
            'country' => 'required',
            'product' => 'required',
            'discount' => 'required',
            'price' => 'required',
            'type' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => '1', 'content' => $validator->messages()]);
        }

        $user = User::where('uuid', $request->uuid)->first();
        $country_id = Country::where('name', $request->country)->first()->id;
        $coupon = Coupons::create([
            "company_id" => $user->id,
            "product" => $request->product,
            "country_id" => $country_id,
            "discount" => $request->discount,
            "price" => $request->price,
            "type" => $request->type,
        ]);

        if ($coupon) {
            return response()->json(['error' => '0', 'content' => 'Added']);
        }

    }

    public function test()
    {
        return Country::pluck('name');
    }

    public function checkCoupon(Request $request)
    {
        $user = User::where('uuid', $request->uuid)->first();
        $check = CouponUser::where('coupon_users.company_id', $user->id)
            ->leftJoin('coupons', 'coupons.id', '=', 'coupon_users.coupon_id')
            ->where('status', 1)
            ->select("coupons.product", "coupons.discount", "coupon_users.id")
            ->first();
        if (count($check) == 1) {
            return response()->json(['error' => '0', 'content' => $check]);
        } else {
            return response()->json(['error' => '1']);
        }
    }

    public function acceptCoupon(Request $request)
    {
        $user = User::where('uuid', $request->uuid)->first();
        $update = CouponUser::where('coupon_users.company_id', $user->id)
            ->where('coupon_users.id', $request->id)
            ->update([
                "status" => 2
            ]);
        $client_id = CouponUser::where('coupon_users.id', $request->id)->first()->user_id;
        $client = User::where('id', $client_id)->first();
        $response = $this->sendMessage($client->uuid);
    }

    public function sendMessage($uuid)
    {
//        TODO:: Ferid will refresh it on future
        $content = array(
            "en" => "Your coupon accepted"
        );

        $fields = array(
            'app_id' => "503506cc-010c-4ad7-a999-3c2745ac9f37",
            'filters' => array(array("field" => "tag", "key" => "uuid", "relation" => "=", "value" => "$uuid")),
            'data' => array("foo" => "bar"),
            'contents' => $content
        );

        $fields = json_encode($fields);
        print("\nJSON sent:\n");
        print($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
            'Authorization: Basic NDVmNzZmOGYtYmY1Zi00NDk4LWEyMDYtMjhlNzdlYzNkNDkw'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    public function declineCoupon(Request $request)
    {
        $user = User::where('uuid', $request->uuid)->first();
        $update = CouponUser::where('coupon_users.company_id', $user->id)
            ->where('coupon_users.id', $request->id)
            ->update([
                "status" => 3
            ]);
    }


}
