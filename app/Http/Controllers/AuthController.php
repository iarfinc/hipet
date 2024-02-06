<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;
  
class AuthController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function layanan()
    {
        return view('layanan');
    }

    public function dokter()
    {
        return view('dokter');
    }
    
    public function wawasan()
    {
        return view('wawasan');
    }

    public function kesehatan()
    {
        return view('kesehatan');
    }

    public function tanya()
    {
        return view('tanya');
    }

    public function livechat()
    {
        return view('livechat');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function lupa()
    {
        return view('auth/lupa');
    }

    public function register()
    {
        return view('auth/register');
    }

  
    public function registerSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'address' => 'required',
            'password' => 'required|confirmed'
        ], [
            'name.required' => 'Kolom nama harus diisi.',
            'email.required' => 'Kolom email harus diisi.',
            'email.email' => 'Mohon masukkan alamat email yang valid.',
            'email.unique' => 'Alamat email sudah digunakan. Silakan gunakan alamat email lain.',
            'address.required' => 'Kolom alamat harus diisi.',
            'password.required' => 'Kolom passoword harus diisi.',
            'password.confirmed' => 'Konfirmasi passoword tidak cocok. Silakan coba lagi.'
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('register')->withErrors($validator)->withInput();
        }
    
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'password' => Hash::make($request->password),
                'level' => 'Admin'
            ]);
        } catch (QueryException $e) {
            // Check if the exception is due to a duplicate entry violation
            if ($e->getCode() == '23000') {
                // This is a duplicate entry error, handle it accordingly
                return redirect()->route('register')->withErrors(['email' => 'Alamat email sudah digunakan. Silakan gunakan alamat email lain.'])->withInput();
            }
    
            // If it's not a duplicate entry error, you might want to log or handle it differently
            throw $e;
        }
    
        return redirect()->route('login');
    }
  
    public function login()
    {
        return view('auth/login');
    }
  
    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();
    
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }
    
        $user = Auth::user();
    
        session(['role' => $user->role]);
    
        $request->session()->regenerate();
    
        return redirect()->route('dashboard');
    }
  
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
  
        $request->session()->invalidate();
  
        return redirect('/');
    }
 
    public function profile()
    {
        return view('profile');
    }
    public function statistics()
    {
        $product = Product::all();
    
        return view('statistics', compact('product'));
    }
}