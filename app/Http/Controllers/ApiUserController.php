<?php

namespace App\Http\Controllers;

use App\BusinessSector;
use App\CompanyInfo;
use App\Country;
use App\Coupons;
use App\CouponUser;
use App\Mail\ContactSendMail;
use App\Mail\ForgetPasswordMail;
use App\Mail\RegisterSendMail;
use App\Position;
use App\Test;
use App\User;
use App\UserCub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use function MongoDB\BSON\fromJSON;
use function MongoDB\BSON\toJSON;
use function PHPSTORM_META\type;
use Seymuromarov\Randomcrap\Facades\Randomcrap;
use Webpatser\Uuid\Uuid;
use Validator;

class ApiUserController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'fullname' => 'required|min:6',
//            'firstname' => 'required|min:3',
//            'lastname' => 'required|min:3',
            'age' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 200);
        }

        $user = User::create([
            'email' => $request->email,
            'fullname' => $request->fullname,
//            'firstname' => $request->firstname,
//            'lastname' => $request->lastname,
            'age' => $request->age,
            'password' => bcrypt($request->password)
        ]);

        $uuid = Uuid::generate(4)->string;
        $user->uuid = $uuid;
        $user->save();

        return response()->json(['status' => 'success', 'uuid' => $user->uuid]);
    }

    public function get_info(Request $request)
    {

        $info = User::where('uuid', $request->uuid)->first();

        if (count($info) > 0) {
            return response()->json(['status' => 'success', 'user' => $info]);
        } else {
            return response()->json(['status' => 'fail'], 401);
        }

    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6',
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 200);
        }


        $user = User::where('email', $request->input('email'))->first();

        if (count($user) > 0) {
            if (Hash::check($request->input('password'), $user->password)) {
                $user = User::where('email', $request->input('email'))->first();
                return response()->json(['status' => 'success', 'uuid' => $user->uuid]);
            } else {
                return response()->json(['status' => 'fail', 'error_text' => 'Wrong Password'], 401);
            }
        } else {
            return response()->json(['status' => 'fail', 'error_text' => 'Wrong email'], 401);
        }

    }

    public function change_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required|min:6',
            'password' => 'required|min:6',
            'uuid' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 200);
        }


        $user = User::where('uuid', $request->uuid)->first();
        if (Hash::check($request->input('old_password'), $user->password)) {
            $hashedPassword = bcrypt($request->password);
            $user->password = $hashedPassword;
            $user->save();
            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['status' => 'fail'], 401);
        }

    }

    public function change_userdata(Request $request)
    {
        $user = User::where('uuid', $request->uuid)->first();

        $validator = Validator::make($request->all(), [
            'fullname' => 'required|min:6',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'age' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->messages(), 200);
        }

        $info = User::where('uuid', $request->uuid)->update([
            'fullname' => $request->fullname,
//            'firstname' => $request->firstname,
//            'lastname' => $request->lastname,
            'email' => $request->email,
            'age' => $request->age
        ]);

        if ($info) {
            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['status' => 'fail'], 401);
        }

    }


    public function cubirub(Request $request)
    {
        $uuid = $request->uuid;
        $user_id = User::where('uuid', $uuid)->first()->id;

        $user_check = UserCub::where('user_id', $user_id)->get();

        if (count($user_check) == 0) {
            UserCub::create([
                'user_id' => $user_id,
                'data' => $request->datas
            ]);
        } else {
            UserCub::where('user_id', $user_id)->update(['data' => $request->datas]);
        }
        return response()->json(['status' => 'success']);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function give_check(Request $request)
    {
        $uuid = $request->uuid;
        $user_id = User::where('uuid', $uuid)->first()->id;
        $user_cub = UserCub::where('user_id', $user_id)->first();
        if ($request->datas == $user_cub->data) {
//            $client = CompanyInfo::where('user_id', $request->id)->first();
            $coupon = Coupons::where('company_id', $request->id)->inRandomOrder()->first();
            if (count($coupon) > 0) {
                CouponUser::create([
                    'user_id' => $user_id,
                    'company_id' => $request->id,
                    'coupon_id' => $coupon->id,
                    'status' => 0
                ]);
                return response()->json(['status' => 'coupon', 'content' => $coupon->product . " " . $coupon->discount . " % sale"]);
            } else {
                return response()->json(['status' => 'coupon', 'content' => "user have no coupon"]);
            }

        }
    }

    public function getCoupons(Request $request)
    {
        $uuid = $request->uuid;
        $user_id = User::where('uuid', $uuid)->first()->id;

        $coupons = DB::table('coupon_users')
            ->leftJoin('coupons', 'coupons.id', '=', 'coupon_users.coupon_id')
            ->leftJoin('company_infos', 'company_infos.id', '=', 'coupons.company_id')
            ->where('coupon_users.user_id', $user_id)
            ->select('coupons.product','company_infos.id as company_id', 'company_infos.company_name as name', 'coupon_users.id',
                'coupons.type', 'coupon_users.created_at', 'coupons.discount')
            ->orderBy('id', 'desc')
            ->where('coupon_users.status', '!=', 2)
            ->paginate(5);
//        return $coupons;
        if (count($coupons) > 0) {
            return response()->json(['status' => 'success', 'coupons' => $coupons]);
        } else {
            return response()->json(['status' => 'fail'], 401);
        }
    }
    public function sendFeedback(Request $request){


        $validator = Validator::make($request->all(), [
            'uuid' => 'required',
            'company_id'=>'required',
            'message' => 'required|max:250|min:20'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 200);
        }

        $uuid = $request->uuid;
        $user= User::where('uuid', $uuid)->first();

        if ($user){
            DB::table('company_feedbacks')->insert([
                'user_id'=>$user->id,
                'company_id'=>$request->company_id,
                'message'=>$request->message,
            ]);
            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['status' => 'fail'], 401);
        }
    }
    public function  getCompany(Request $request){
        $uuid = $request->uuid;
        $user_id = User::where('uuid', $uuid)->first()->id;

//        $company= DB::table('company_infos')
    }
    public function getOldCoupons(Request $request)
    {
        $uuid = $request->uuid;
        $user_id = User::where('uuid', $uuid)->first()->id;

        $coupons = DB::table('coupon_users')
            ->leftJoin('coupons', 'coupons.id', '=', 'coupon_users.coupon_id')
            ->leftJoin('company_infos', 'company_infos.user_id', '=', 'coupons.company_id')
            ->where('coupon_users.user_id', $user_id)
            ->select('coupons.product', 'coupon_users.company_id as company_id','company_infos.company_name as name', 'coupon_users.id',
                'coupons.type', 'coupon_users.created_at', 'coupons.discount')
            ->orderBy('id', 'desc')
            ->where('coupon_users.status', 2)
            ->paginate(15);
        return $coupons;
        if (count($coupons) > 0) {
            return response()->json(['status' => 'success', 'coupons' => $coupons]);
        } else {
            return response()->json(['status' => 'fail'], 401);
        }
    }

    public function requestCoupon(Request $request)
    {
        $uuid = $request->uuid;
        $user_id = User::where('uuid', $uuid)->first()->id;

        $coupon = CouponUser::where('user_id', $user_id)
            ->where('id', $request->coupon_id)
            ->update([
                'status' => 1
            ]);

        $client_id = CouponUser::where('coupon_users.id', $request->coupon_id)->first()->company_id;
        $client = User::where('id', $client_id)->first();
        $response = $this->sendMessage($client->uuid);

    }

    public function test(Request $request)
    {
        $messageOrder = "Okey it is working  ";
        Mail::to("anarmemmedli55@gmail.com")->send(new RegisterSendMail((string)$messageOrder));
        return 1;
    }

    public function acceptCoupon(Request $request)
    {

        $uuid = $request->uuid;
        $user_id = User::where('uuid', $uuid)->first()->id;

        $coupon = CouponUser::where('user_id', $user_id)
            ->where('id', $request->coupon_id)
            ->update([
                'status' => 2
            ]);
        $response = $this->sendMessage($uuid);
        $return["allresponses"] = $response;
//        $return = json_encode($return);
        return response()->json(['status' => 'success', 'coupons' => $return]);

    }

    public function sendMessage($uuid)
    {
//        TODO:: Ferid will refresh it on future
        $content = array(
            "en" => "User requested coupon"
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


    public function deleteCoupon(Request $request)
    {
        $uuid = $request->uuid;
        $user_id = User::where('uuid', $uuid)->first()->id;

        $coupon = CouponUser::where('user_id', $user_id)
            ->where('id', $request->coupon_id)
            ->delete();
        return response()->json(['status' => 'success', 'coupon' => $coupon]);
    }

    public function check_status(Request $request)
    {
        $uuid = $request->uuid;
        $user_id = User::where('uuid', $uuid)->first()->id;
        $receive = UserCub::where('user_id', $user_id)->first()->data;

        $reques = str_split($receive, 3);
        $newlist = array();
        $m = 0;

        for ($x = 0; $x < 3; $x++) {
            for ($y = 0; $y < 3; $y++) {
                for ($z = 0; $z < 3; $z++) {
                    $newlist[$x][$y][$z] = $reques[$m++];
                }
            }
        }

        $coor = $request->coordinates;
        $side = $request->side;
        $axis = $request->axis;

        $temp = $newlist;
        if ($coor == "x") {
            if ($axis == -1) {
                $temp[$side][0][0] = $newlist[$side][0][2];
                $temp[$side][0][1] = $newlist[$side][1][2];
                $temp[$side][0][2] = $newlist[$side][2][2];
                $temp[$side][1][0] = $newlist[$side][0][1];
                $temp[$side][1][1] = $newlist[$side][1][1];
                $temp[$side][1][2] = $newlist[$side][2][1];
                $temp[$side][2][0] = $newlist[$side][0][0];
                $temp[$side][2][1] = $newlist[$side][1][0];
                $temp[$side][2][2] = $newlist[$side][2][0];
            } else if ($axis == 1) {
                $temp[$side][0][0] = $newlist[$side][2][0];
                $temp[$side][0][1] = $newlist[$side][1][0];
                $temp[$side][0][2] = $newlist[$side][0][0];
                $temp[$side][1][0] = $newlist[$side][2][1];
                $temp[$side][1][1] = $newlist[$side][1][1];
                $temp[$side][1][2] = $newlist[$side][0][1];
                $temp[$side][2][0] = $newlist[$side][2][2];
                $temp[$side][2][1] = $newlist[$side][1][2];
                $temp[$side][2][2] = $newlist[$side][0][2];
            }
        } else if ($coor == "y") {
            if ($axis == 1) {
                $temp[0][$side][0] = $newlist[0][$side][2];
                $temp[0][$side][1] = $newlist[1][$side][2];
                $temp[0][$side][2] = $newlist[2][$side][2];
                $temp[1][$side][0] = $newlist[0][$side][1];
                $temp[1][$side][1] = $newlist[1][$side][1];
                $temp[1][$side][2] = $newlist[2][$side][1];
                $temp[2][$side][0] = $newlist[0][$side][0];
                $temp[2][$side][1] = $newlist[1][$side][0];
                $temp[2][$side][2] = $newlist[2][$side][0];
            } else if ($axis == -1) {
                $temp[0][$side][0] = $newlist[2][$side][0];
                $temp[0][$side][1] = $newlist[1][$side][0];
                $temp[0][$side][2] = $newlist[0][$side][0];
                $temp[1][$side][0] = $newlist[2][$side][1];
                $temp[1][$side][1] = $newlist[1][$side][1];
                $temp[1][$side][2] = $newlist[0][$side][1];
                $temp[2][$side][0] = $newlist[2][$side][2];
                $temp[2][$side][1] = $newlist[1][$side][2];
                $temp[2][$side][2] = $newlist[0][$side][2];
            }
        } else {
            if ($axis == 1) {
                $temp[0][0][$side] = $newlist[2][0][$side];
                $temp[2][0][$side] = $newlist[2][2][$side];
                $temp[0][2][$side] = $newlist[0][0][$side];
                $temp[2][2][$side] = $newlist[0][2][$side];

                $temp[1][0][$side] = $newlist[2][1][$side];
                $temp[0][1][$side] = $newlist[1][0][$side];
                $temp[1][2][$side] = $newlist[0][1][$side];
                $temp[2][1][$side] = $newlist[1][2][$side];

            } else if ($axis == -1) {
                $temp[0][0][$side] = $newlist[0][2][$side];
                $temp[2][0][$side] = $newlist[0][0][$side];
                $temp[0][2][$side] = $newlist[2][2][$side];
                $temp[2][2][$side] = $newlist[2][0][$side];

                $temp[1][0][$side] = $newlist[0][1][$side];
                $temp[0][1][$side] = $newlist[1][2][$side];
                $temp[1][2][$side] = $newlist[2][1][$side];
                $temp[2][1][$side] = $newlist[1][0][$side];
            }
        }
        $receive = '';
        for ($x = 0; $x < 3; $x++) {
            for ($y = 0; $y < 3; $y++) {
                for ($z = 0; $z < 3; $z++) {
                    $receive = $receive . $temp[$x][$y][$z];
                }
            }
        }
        UserCub::where('user_id', $user_id)->update(['data' => $receive]);
        $newlist = $temp;
        return response()->json(['status' => 'success', 'data' => $newlist, 'coordinate' => $coor, 'sides' => $side, 'axiss' => $axis, 'Cubedata' => $receive]);
    }

    /**
     * @param Request $request
     */
    public function doYouForgetMe(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if(count($user)!=0){
            $user_id = $user->id;
            $yourToken = Randomcrap::upperCaseStringWithNumber(6);
            DB::table('forget_passwords')->insert([
                'user_id' => $user_id,
                'token' => $yourToken,
            ]);
            $messageOrder = " Your token is " . $yourToken;
            Mail::to('support@kubirub.online')->send(new ForgetPasswordMail((string)$messageOrder));
            return redirect('api/resetToken');
            return "ok";
        }
        else{
            return "We don't have this email";
        }
    }

    public function doYouForgetMeView(Request $request)
    {
        return view('auth/passwords/forgetpassword');

    }

    public function resetPassword(Request $request)
    {
        return view('auth/passwords/resetPassword');

    }

    public function resetToken(Request $request)
    {
        return view('auth/passwords/resetToken');
    }
    public function resetTokenApp(Request $request)
    {
        $email = "5";
        $resetTokentext = $request->yourtoken;
        $checktoken = DB::table('forget_passwords')->where('user_id',$email)->orderBy('id','desc')->first();
        if($checktoken->token == $resetTokentext){
            $checktoken = DB::table('forget_passwords')->where('user_id',$email)->orderBy('id','desc')
                ->update([
                    "status"=>1
                ]);
            return redirect('api/resetPassword');
        }
        else {
            return "It is not okey";
        }
    }
    public function resetPasswordApp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password|min:6',
        ]);
//        if ($validator->fails()) {
//            return response()->json($validator->messages(), 200);
//        }

        User::where('email',$request->email)->update([
            'password'=>bcrypt($request->password)
        ]);
        return "It is okey maan";
    }


}
