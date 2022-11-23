<?php

namespace App\Http\Controllers;

use App\Models\Benficary;
use App\Models\Payment;
use App\Models\Register;
use App\Models\Transfer;
use App\Models\Paybal;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController

{


    // if (!session()->has('username')){return redirect()->route('admin.login');}

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//Begin payment Methods
    public function payshow(){
        if (!session()->has('name')){return redirect()->route('login');}

        $payment = Benficary::all();
        return view('payment',compact('payment'));
    }


    //begin function insert into payment table
    public function storepayment(Request $request){

                $rules = [
                    'cardfrom' => 'required|max:20',
                    'password' =>'required',
                    'amount' =>'required',
                    'exdate' =>'required',
                    'payto' =>'required',
                ];
            $messages = [
            'cardfrom.required'=>'رقم البطاقة مطلوب',
            'cardfrom.max'=>'رقم البطاقة اطول من 10 ',
            'password.required'=>'رقم السري مطلوب',
            'amount.required'=>'المبلغ مطلوب',
            'exdate.required'=>'تاريخ الانتهاء مطلوب',
            'payto.required'=>'العنوان مطلوب',
            ];

            $validator = Validator::make($request->all(),$rules,$messages);
            if($validator->fails()){
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput($request->all());
            }



      //insert
  Payment::create([
            'cardfrom'=> $request -> cardfrom,
            'amount'=> $request -> amount,
            'currency'=> $request -> currency,
            'payto'=> $request -> payto,
            'password'=> $request -> password,
            'exdate'=> $request -> exdate,
            'pay'=> $request -> pay,
        ]);
            return view('success');
    }


//End payment methods

//Beging transfer methods
public function transfer(){
    if (!session()->has('name')){return redirect()->route('login');}
    return view('transfer');
}

//begin function transfer


public function storetransfer(Request $request){

    $rules = [
        'name' => 'required|max:100',
        'cardnumberfrom' =>'required',
        'amount' =>'required',
        'date' =>'required',
        'currency' =>'required',
        'cardnumberto' =>'required',
    ];
$messages = [
'name.required'=>'الاسم مطلوب',
'name.max'=>'الاسم اطول من 100 حرف',
'cardnumberfrom.required'=>'رقم البطاقة مطلوب',
'amount.required'=>'المبلغ مطلوب',
'date.required'=>'التاريخ مطلوب',
'currency.required'=>'العملة مطلوب',
'cardnumberto.required'=>'الجهة مطلوبة',
];

 $validator = Validator::make($request->all(),$rules,$messages);
if($validator->fails()){
    return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->all());
}



  //insert
  $transfer = Transfer::create([
        'name'=> $request -> name ,
        'amount'=> $request -> amount,
        'currency'=> $request -> currency,
        'cardnumberto'=> $request -> cardnumberto,
        'cardnumberfrom'=> $request -> cardnumberfrom,
        'date'=> $request -> date,
    ]);
        return view('success');
}

//End transfer methods

//Beging history methods
public function history(){
    // return view('history');
    if (!session()->has('name')){return redirect()->route('login');}
    $history = Transfer::paginate(10);;
    return view('history',compact('history'));
}
//End history methods

//Beging contact methods
public function contact(){
    if (!session()->has('name')){return redirect()->route('login');}
    return view('contact');
}
//End contact methods

//Beging login methods
public function login(){
    return view('login');
}
//End login methods

//Beging register methods
public function register(){
    return view('regiteration');
}


//insert in table register


public function storeregister(Request $request){

    $rules = [
        'name' => 'required|max:100|unique:register',
        'password' =>'required',
        'phone' =>'required',
        'address' =>'required',
    ];
$messages = [
'name.required'=>'الاسم مطلوب',
'name.max'=>'الاسم اطول من 100 حرف',
'name.unique'=>'الاسم موجود مسبقا',
'password.required'=>'رقم البطاقة مطلوب',
'phone.required'=>'رقم الهاتف مطلوب',
'address.required'=>'العنوان مطلوب',
];

 $validator = Validator::make($request->all(),$rules,$messages);
if($validator->fails()){
    return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->all());
}
  //insert
  Register::create([
        'name'=> $request -> name ,
        'address'=> $request -> address,
        'phone'=> $request -> phone,
        'password'=> $request -> password,
    ]);
    return redirect()->route('history');

}


//End register methods


//Beging success methods
public function success(){
    if (!session()->has('name')){return redirect()->route('login');}
    return view('success');
}
//End success methods


//Beging fail methods
public function fail(){
    if (!session()->has('name')){return redirect()->route('login');}
    return view('faild');
}
//End fail methods

//Beging addbenfic methods

public function addbenfic(){
    if (!session()->has('name')){return redirect()->route('login');}
    return view('addbenfic');
}

public function storebenfic(Request $request){

                    $rules = [
                        'name' => 'required|max:100|unique:benficary',
                        'cardto' =>'required',
                        'amount' =>'required',
                        'phone' =>'required',
                    ];
                $messages = [
                'name.required'=>'الاسم مطلوب',
                'name.max'=>'الاسم اطول من 100 حرف',
                'name.unique'=>'الاسم موجود مسبقا',
                'cardto.required'=>'رقم البطاقة مطلوب',
                'amount.required'=>'المبلغ مطلوب',
                'phone.required'=>'رقم الهاتف مطلوب',
                ];

                $validator = Validator::make($request->all(),$rules,$messages);
                if($validator->fails()){
                    return redirect()->back()
                                ->withErrors($validator)
                                ->withInput($request->all());
                }



  //insert
  Benficary::create([
        'name'=> $request -> name ,
        'amount'=> $request -> amount,
        'phone'=> $request -> phone,
        'cardto'=> $request -> cardto,
    ]);
    return redirect()->route('showbenfic');
}



//End addbenfic methods


//Beging showbenfic methods

public function showbenfic(){
    if (!session()->has('name')){return redirect()->route('login');}
    $benfic = Benficary::paginate(10);
    return view('showbenfic',compact('benfic'));
}
//End showbenfic methods


//Beging editbenfic methods





public function editbenfic(Request $request,$benfic_id){


    $benfic= Benficary::find($benfic_id);
    if(!$benfic)
    return redirect()->route('fail');
    $benfic = Benficary::select('id','name','amount','phone','cardto')->find($benfic_id);
    return view('editbenfic',compact('benfic'));
}
//End editbenfic methods



public function updatebenfc(Request $request,$benfic_id){

                    $rules = [
                        'name' => 'required|max:100|unique:benficary',
                        'cardto' =>'required',
                        'amount' =>'required',
                        'phone' =>'required',
                    ];
                $messages = [
                'name.required'=>'الاسم مطلوب',
                'name.max'=>'الاسم اطول من 100 حرف',
                'name.unique'=>'الاسم موجود مسبقا',
                'cardto.required'=>'رقم البطاقة مطلوب',
                'amount.required'=>'المبلغ مطلوب',
                'phone.required'=>'رقم الهاتف مطلوب',
                ];

                $validator = Validator::make($request->all(),$rules,$messages);
                if($validator->fails()){
                    return redirect()->back()
                                ->withErrors($validator)
                                ->withInput($request->all());
                }


    $benfic = Benficary::select('id','name','amount','phone','cardto')->find($benfic_id);
    if(!$benfic)
    return redirect()->route('fail');
   $benfic -> update($request->all());
    return redirect()->route('showbenfic');
}






public function CreateLogin(Request $request){


    $user = Register::where('password', '=',  $request-> password)-> where('name', '=', $request->name)->get();
          if($user->count() > 0 ){
         session::put('name' , $request-> name);
         session::put('password' , $request->password);
         return redirect()
           ->route('showbenfic');
          }

          if($user->count() == 0 ){
            return redirect() -> back();
          }
  }

  public function deletebenfic(Request $request,$benfic_id){
    $benfic = Benficary::find($benfic_id);
    if(!$benfic)
    return redirect()->route('fail');
   $benfic -> delete();
    return redirect()->back();
  }





  public function paybal(){
    $payment = Benficary::all();
    return view('paybal',compact('payment'));
  }



public function storepaybal(Request $request){

                $rules = [
                    'password' => 'required|max:100',
                    'amount' =>'required',
                    'currency' =>'required',
                    'payto' =>'required',

                ];
            $messages = [
            'password.required'=>'الرقم السري مطلوب',
            'password.max'=>'الرقم  السري اطول من 100 حرف',
            'amount.required'=>'المبلغ مطلوب',
            'currency.required'=>'العملة مطلوب',
            'payto.required'=>'الجهة مطلوبة',
            ];

            $validator = Validator::make($request->all(),$rules,$messages);
            if($validator->fails()){
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput($request->all());
            }



  //insert
  $transfer =Paybal::create([
        'password'=> $request -> name ,
        'amount'=> $request -> amount,
        'currency'=> $request -> currency,
        'payto'=> $request -> cardnumberto,
    ]);
   return view('success');
}



}
