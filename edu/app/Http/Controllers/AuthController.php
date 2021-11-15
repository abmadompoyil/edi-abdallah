<?php
namespace App\Http\Controllers;
use App\Device;
use App\Haraj\Ads;
use App\Http\Resources\AdsResource;
use App\Http\Resources\Driver\NotifyResource;
use App\notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use Laravel\Passport\HasApiTokens;

class AuthController extends Controller
{
    /**
     * Create user
     *
     * @param  [string] name
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @return [string] message
     */
    public function signup(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'email' => [ 'unique:users'],
            'password' => ['required', 'string','min:8'],
            'phone' => ['required', 'string','min:10','unique:users'],
        ]);
        if($validator->fails()){
            return Parent::json('422','false',$validator->messages()->first() ,$validator->messages());

//            return response()->json($validator->messages(), 200);
        }

        $user = new User();
        $user->fill($request->all());
        $user->password = bcrypt($request->password);
        $user->status = 'inactive';
        $user->code = 00000;
//        $user->save();
        $user->save();
//        return response()->json([
//            'data'=>[
//                'name'=>$user->name,
//                'phone'=>$user->phone,
//            ]
//        ],200);
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        $data = ['access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString(),'user'=>$user];
        if (isset($request->device)){
                $device = new Device();
                $device->device = ($request->device);
                $device->player_id = ($request->player_id);

                $device->user_id = ($user->id);
                $device->save();


        }
        return Parent::json('200','true','يرجى تفعيل الحساب ',$data);


    }


    /**
     *
     *
     * Acitve user
     */
    public function activeUser(Request $request){


        $user = $request->user();

        if ($user->code != $request->code & $user->code !=null){
            return Parent::json('403','false','رمز التفعيل خاطئ , يرجى التأكد مرى أخرى');


        }

        else{
            $user->status = 'active';
            $user->code = null;
            $user->update();
            return Parent::json('200','true','تم تفعيل الحساب',$user);

//            return response()->json([
//                'message'=>'تم تفعيل الحساب'
//            ],200);
        }


    }

    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
        public function chckphone(Request $request){

        }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'string','min:6'],
            'phone' => ['required', 'string','min:10'],
        ]);
        if($validator->fails()){
            return Parent::json('422','false',$validator->messages()->first() ,$validator->messages());
        }
        $credentials = request(['phone', 'password']);
        if(!Auth::guard('drivers-web')->attempt($credentials)) {
            return Parent::json('401','false','البيانات المدخلة خاطئة');
//            return response()->json([
//                'message' => 'البيانات المدخلة خاطئة'
//            ], 401);
        }
        $user = Auth::guard('drivers-web')->user();

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        $data = ['access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString(),'user'=>$user];
        if (isset($request->device)){
            $chck = Device::where('user_id',$user->id)->where('player_id',$request->player_id)->first();
            if ($chck == null) {
                $device = new Device();
                $device->device = ($request->device);
                $device->player_id = ($request->player_id);

                $device->user_id = ($user->id);
                $device->save();
            }

        }
        if ($user->status == 'inactive'){

            return Parent::json('403','false','يرجى تفعيل الحساب ',$data);

        }
        return Parent::json('200','true','تسجيل الدخول',$data);

    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return Parent::json('200','true','تسجيل خروج');

    }

    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
        return Parent::json('200','true',$request->user()->name,$request->user());
        $data = $request->user();
        return response()->json($data);
    }

    public function userUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => [ 'string','min:10','unique:users'],
            'password' => [ 'string','min:6'],
            'email' => [ 'string','unique:users'],
        ]);
        if($validator->fails()){
            return Parent::json('422','false',$validator->messages()->first() ,$validator->messages()->first() );

//            return response()->json($validator->messages(), 200);
        }
        $user = $request->user();
//        dd($request->all());
        $user->update($request->all());
//        if(isset($request->img)) {
//            $path = $request->img->store('Users/imgs');
//            $path  =  asset('Heart/storage/app/' . $path);
//            $user->img = $path;
//            $user->update();
//
//        }
        if(isset($request->password)) {
            $user->password = bcrypt($request->password);
            $user->update();
        }
//        dd($user);
        return Parent::json('200','true','تم تحديث المستخدم بنجاح' );


    }

    public function updateImage(Request $request){
        $validator = Validator::make($request->all(), [
            'img' => [ 'file'],
        ]);
        if($validator->fails()){
            return Parent::json('422','false',$validator->messages()->first() ,$validator->messages()->first() );

//            return response()->json($validator->messages(), 200);
        }
        $user = $request->user();

        $user->update($request->all());
        if(isset($request->img)) {
            $path = $request->img->store('Users/imgs');
            $path  =  asset('Heart/storage/app/' . $path);
            $user->img = $path;
            $user->update();
            if ($user->update()){
                return Parent::json('200','true','تم تحديث المستخدم بنجاح' );

            }else{
                return Parent::json('401','false','هناك خطأ ما  ' );

            }

        }
        return Parent::json('401','false','حدث خطأ ما ' );

    }

    public function Ads(Request $request){
        $ads = AdsResource::collection(Ads::where('user_id',$request->user()->id)->orderBy('created_at','desc')->get());
        return parent::json('200','true','تم استلا البيانات بنجاح',$ads);

    }

    public function generateCode(){
        return Parent::json('200','true','تم إرسال الرمز مرة آخرى' );


    } public function reset(){
    return Parent::json('200','true','تم إرسال رمز التأكيد ');


    }

    public function getNotify(Request $request)
    {
//        $notify = $request->user()->notify;
        $notify = notification::where('user_id',$request->user()->id)->orderBy('created_at','desc')->get();
//        $notify = ;
//       return (NotifyResource::collection($notify));

        return parent::json('200', 'true', 'تم استلام البيانات', NotifyResource::collection($notify));
    }
}

