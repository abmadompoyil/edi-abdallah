<?php

namespace App\Http\Controllers\User;

use App\Delviery\Car;
use App\Delviery\Order;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function drivers(Request $request)
    {
        $page_title = 'السائقين';
        $page_description = 'جدول بقائمة السائقين';
        $users = User::where('type',2)->orderBy('created_at','desc')->paginate(15);
        if($request->ajax())
        {
            if (isset($request->value)){
                $keyword = $request->value;
                $users= User::where(function ($query) use($keyword) {
                    $query->where('name', 'like', '%' . $keyword . '%')
                        ->orWhere('id', 'like', '%' . $keyword . '%')
                        ->orWhere('phone', 'like', '%' . $keyword . '%');
                })->where('type',2)
                    ->paginate(50);
            }
            return view('users.driver.table', compact('users'))->render();
        }
        return view('users.driver.datatables', compact('page_title', 'page_description','users'));

    }

    public function driverOrders(User $user,$id,Request $request){
        $orders = Order::where('driver_id',$id)->orderBy('created_at','desc')->paginate(15);
        $user = User::findorfail($id);
        $page_title = 'كل الطلبات';
//        dd($user);
        $page_description = '   الطلبات للسائق '.$user->name;
        if($request->ajax())
        {
            return view('delivery.orders.table', compact('orders'))->render();
        }
        return  view('delivery.orders.datatables',compact('page_description','page_title','orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'إضافة سائق';
        $page_description = ' أضافة سائق  جديد';
        return view('users.driver.create', compact('page_title', 'page_description'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => [ 'string','min:10','unique:users'],
            'password' => [ 'string','min:6'],
            'email' => [ 'string','unique:users','email'],
        ]);
        $user = new User();
        $user->fill($request->all());
            if ($request->img != null){
                $path = $request->img->store('Users/imgs');
                $path  =  asset('Heart/storage/app/' . $path);
                $user->img = $path;
            }
            $user->name = $request->name;
            $user->phone  = $request->phone;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->type =1 ;
            $status =  $user->save();
        $car =  new Car();
        $car->user_id = $user->id;
        $car->name = $request->nameCar;
        $car->number = $request->number;
        $car->type = $request->type;
        $car->color = $request->color;
        if ($request->carImg != null){
            $path = $request->carImg->store('Car/imgs');
            $path  =  asset('Heart/storage/app/' . $path);
            $car->img = $path;
        }
        if ($request->license != null){
            $path = $request->license->store('Car/imgs');
            $path  =  asset('Heart/storage/app/' . $path);
            $car->license = $path;
        }

        $car->save();
        if($status){
            return response()->json([
                'status'  => true,
                'message' => 'تم اضافة السائق بنجاح',
            ]);
        }else{
            return response()->json([
                'status'  => false,
                'message' => 'فشل الحفظ رجاء محاوله مرة أخرى',
            ]);
        }
    }
    /**
     * @param User $user
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $user,$id)
    {
        $user = User::findorfail($id);
        $page_title = 'تعديل السائق';
        $page_description =  $user->name;
        return view('users.driver.catEdit', compact('page_title', 'page_description','user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'phone' => [ 'string','min:10','unique:users'],
            'password' => [ 'string','min:6'],
            'email' => [ 'string','unique:users','email'],
        ]);
        $user = User::findorfail($request->id);
        if ($request->password == null){
            if ($request->img != null){
                $path = $request->img->store('Users/imgs');
                $path  =  asset('Heart/storage/app/' . $path);
                $user->img = $path;
            }
            $user->name = $request->name;
            $user->phone  = $request->phone;
            $user->email = $request->email;
            $status =  $user->update();

        }else{
            $user->password = bcrypt($request->password);
            $status =  $user->update();
        }
        $car = Car::where('user_id',$user->id)->first();
        $car->name = $request->nameCar;
        $car->number = $request->number;
        $car->type = $request->type;
        $car->color = $request->color;
        if ($request->carImg != null){
            $path = $request->carImg->store('Car/imgs');
            $path  =  asset('Heart/storage/app/' . $path);
            $car->img = $path;
        }

        $car->update();
        if($status){
            return response()->json([
                'status'  => true,
                'message' => 'تم تعديل المستخدم بنجاح',
            ]);
        }else{
            return response()->json([
                'status'  => false,
                'message' => 'فشل الحفظ رجاء محاوله مرة أخرى',
            ]);
        }
    }

    /**
     * @param User $user
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(User $user,$id ,Request $request)
    {
        $status = User::destroy($request->id);
//        $category->delete();
        return response()->json([
            'status'  => true,
            'message' => 'تم حدف الشرط  بنجاح',
            'id'    => $request->id,
        ]);
    }

}
