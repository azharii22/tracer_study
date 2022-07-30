<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\Alumni;

class LoginController extends Controller
{
    protected function guard()
    {
        return Auth::guard('admin');
    }
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        // // nambah baru
        // $this->middleware('guest:admin')->except('logout');
        // $this->middleware('guest:alumni')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        return response([
            //
        ]);
    }

    public function username()
    {
        return 'email';
    }

    public function index()
    {
        return view('admin.login.login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('error', 'Gagal Login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function alumni()
    {
        return view('user.login');
    }

    public function authenticate_alumni(Request $request)
    {
        $y=Alumni::All();
		$pw="False";
		foreach ($y as $p) {
			$decrypted = Crypt::decryptString($p->password);
			if($decrypted==$request->password)
			{
				$pw=$p->password;
			}
		}
        $data1 = Alumni::where('nim',$request->nim)->where('password',$pw)->get();
        if(count($data1)>0){
            // Session::put('nim',$data->id);
            // Session::put('alumni',$data->id);
            Auth::guard('alumnis')->loginUsingId($data1[0]['id']);
    		return redirect('kuisioner-alumni');
        }
        else{
            return redirect()->route('login-alumni')
                ->with('error','Akun anda belom ada, Silahkan menghubungi Admin');
        }

    }

    public function logoutAlumni(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    // public function alumniPost(Request $request)
    // {
    //     $input = $request->all();

    //     $this->validate($request, [
    //         'nim'      => 'required',
    //         'password'  => 'required|min:7|max:255',
    //     ],[
    //         'nim.required'         =>'Nama Mahasiswa tidak boleh kosong',
    //         'password.required'     =>'Password tidak boleh kosong',
    //         'password.max'          =>'Password max 255 karakter',
    //         'password.min'          =>'Password min 8 karakter',
    //     ]);

    //     $data1 = Alumni::where('nim',$request->nim)->where('password',$request->password)->get();
    //     if(count($data1)>0){
    //         Auth::guard('alumnis')->loginUsingId($data1[0]['id']);
    //         return redirect()->route('kuisioner-alumni');
    //     }
    //     else{
    //         return redirect()->route('login-alumni')
    //             ->with('error','Akun anda belom ada, Silahkan menghubungi Admin');
    //     }
    // }
}
