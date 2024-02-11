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
            'divisions'  => $divisions,
            'user'      => $user 
        ];
        return view('core.setting', $data);
    }

    public function toNewPass(){
        $data = [
            'title'   => 'New Password',
            'id_page' => 'core-new-pass',
        ];
    
        return view('core.newPass', $data);
    }

    public function updateUser(Request $request, $id)
    {
        try {  
            $user = User::findOrFail($id); 
            $request->validate([
            
                'name' => 'required',
                'nim' => 'required',
            
            ]);
    
            $user->update($request->all());   
            return redirect()->route('setting')->with('info', 'Data Anda Berhasil Diubah');

        } catch (\Exception $e) {
        
            Log::error('Failed to update user data: ' . $e->getMessage());
        
            return back()->with('failure', 'Data Anda Gagal Diubah');
        }
    }

    


    public function updatePassword(Request $request, $id)
    {
        try {
        
            $user = User::findOrFail($id);

            $request->validate([
                'new_password' => 'required|string|min:8',
                'confirm_new_password' => 'required|string|same:new_password',
            ]);

          
            $user->password = Hash::make($request->input('new_password'));
            $user->save();

            return redirect()->route('setting')->with('info', 'Password Berhasil Diubah!');
        } catch (\Exception $e) {

            Log::error($e->getMessage());
            
            return back()->with('failure', 'Gagal Mengganti Password');
        }
    }


    
    
    
    

    

}
