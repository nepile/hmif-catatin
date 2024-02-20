<?php

namespace App\Http\Controllers\Core;

use App\Models\User;

use App\Models\Division;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    /**
     * Show setting view
     * 
     * @return View
     */
    public function showSetting(): View
    {
        $divisions = Division::all();
        $user = Auth::user();

        $data = [
            'title'     => 'Setting',
            'id_page'   => 'core-setting',
            'user'      => $user
        ];

        return view('core.setting', $data);
    }

    public function toNewPass()
    {
        $data = [
            'title'   => 'Change Password',
            'id_page' => 'core-setting',
        ];

        return view('core.newPass', $data);
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required',
            'nim'   => 'required',
            'gen'   => 'required'
        ]);

        try {
            $user = User::findOrFail($id);

            $user->update($request->all());
            return redirect()->route('setting')->with('info', 'Data Anda Berhasil Diubah');
        } catch (\Exception $e) {

            Log::error('Failed to update user data: ' . $e->getMessage());

            return back()->with('failure', 'Data Anda Gagal Diubah');
        }
    }

    public function updatePassword(Request $request, $id)
    {

        $request->validate([
            'current_password'      => 'required',
            'new_password'          => 'required|string|min:8',
            'confirm_new_password'  => 'required|string|same:new_password',
        ]);

        try {

            $user = User::findOrFail($id);


            if (Hash::check($request->input('current_password'), $request->user()->password)) {
                $user->password = Hash::make($request->input('new_password'));
                $user->save();
                return back()->with('info', 'Password Berhasil Diubah!');
            }

            return back()->with('failure', 'Password saat ini yang anda masukkan salah!');
        } catch (\Exception $e) {

            Log::error($e->getMessage());

            return back()->with('failure', 'Gagal Mengganti Password');
        }
    }
}
