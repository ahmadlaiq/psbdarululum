<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function indexPengaturanUser()
    {
        $user = Auth::user();
        // dd($idUser);
        return view('client-panel.pengaturan', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        // dd(Hash::check($request->password, $user->password));
        $this->validate($request, [
            'password' => 'required',
            'password_baru' => 'min:8|different:password',
        ]);

        if (Hash::check($request->password, $user->password)) {
            $user->fill([
                'password' => Hash::make($request->password_baru)
            ])->save();

            $request->session()->flash('success', 'Password anda telah dirubah!');
            return redirect()->route('user.dashboard');
        } else {
            $request->session()->flash('error', 'Password anda salah!');
            return redirect()->route('edit-pengaturan-user');
        }
    }
}
