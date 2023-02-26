<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordChangeController extends Controller
{
    public function update(Request $request, $id)
    {
        $request->validate([
            'current_password' => [
                'required',
                    function($attribute, $value, $fails){
                    if(! \Hash::check($value, auth()->user()->password)){
                        $fails(__('auth.password'));
                    }
                },
            ],
            'password' => [
                'required',
                'confirmed',
            ],
        ]);

        User::whereId($id)->update([
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('backend.profile.index', 'change_password');
    }
}
