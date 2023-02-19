<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\Debugbar\Facades\Debugbar;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(Request $req)
    {
        //$slide = array(1,2,3); 
        //$user = User::where('id', '>' , 0);
        //$user = User::where('id', '>' , 0)->paginate(50);
       // dd($req->request);
        
        //  if( !empty($user) ) {
        //     if (Auth::check()) {
        //        // echo "<pre>";print_r($req->request->parameters);
        //     }         
        //  }
        
        //$user = DB::table('users')->distinct('id')->paginate(50);

        Debugbar::startMeasure('query_time','Thời gian thực hiện truy vấn'); 

        //$user = DB::table('users')->paginate(50);
        $user = User::paginate(50);

        Debugbar::stopMeasure('query_time');

       //$user = DB::select("explain ".$user);

        //$user = DB::table('users')->simplePaginate(50);


        // $user = App\User::where('email', 'nam@allaravel.com')->toSql();
        // Debugbar::info($user);
        // Debugbar::error('Test Debugbar error message');
        // Debugbar::warning('Test Debugbar warning message');
        // Debugbar::addMessage('Another message', 'mylabel');

        return view('pages.home', compact('user'));
    }

    /**
     * User del
     *
     * @return Redirect page
     */
    public function postUserDel(Request $req){

        //$userId = User::find($req->id);

        User::where('id',  $req->id)->delete();

        //Auth::user()->delete($req->id);

        return redirect()->route('home')->with('success', 'Post deleted.');
        
    }

    /**
     * User edit
     *
     * @return View
     */
    public function getEdit($id){

        $user = User::find($id);
        
        return view('pages.edit', compact('user'));
        
    }

    /**
     * Display detail
     *
     * @return View
     */
    public function getDetail($id){

        $user = User::find($id);
        //dd( $user);
        
        return view('pages.detail', compact('user'));
        
    }

    /**
     * User update
     *
     * @return View
     */
    public function postUserUpdate(Request $req)
    {
        $user = User::find($req->id);
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->update();
        return redirect()->route('home')->with('success', 'Post deleted.');
    }

    /**
     * login
     *
     * @return View
     */
    public function getLogin()
    {
        return view('pages.login');
    }

    /**
     * User edit
     *
     * @return View
     */
    public function getAdd(){
        
        return view('pages.add');
        
    }

    public function postAddUser(Request $req){

        dd($req);
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'name'=>'required'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]);
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

    /**
     * validate
     *
     * @return View
     */
    public function postLogin(Request $req)
    {
        
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu không quá 20 kí tự'
            ]
        );
        $credentials = array('email'=>$req->email,'password'=>$req->password);
 
        $user = User::where([
                ['email','=',$req->email]
            ])->first();

        if($user){
            if(Auth::attempt($credentials)){

                return redirect()->route('home');
            
            }else{
                return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
            }
        }
        else{
           return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản chưa kích hoạt']); 
        }
    }

    public function postLogout(){
        Auth::logout();
        return redirect()->route('home');
    }
}