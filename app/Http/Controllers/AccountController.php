<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SettingRequest;
use App\Http\Requests\ChangePassRequest;

class AccountController extends Controller
{
    public function setting()
    {
        return view('pages.setting', ['user' => $this->user]);
    }

    public function update(SettingRequest $request)
    {
        $this->user->storeSetting($request);

        return redirect()->back()->with('message', trans('app.message.edit_success'));
    }

    public function changePass()
    {   
        return view('pages.change-pass', ['user' => $this->user]);
    }

    public function storePass(ChangePassRequest $request)
    {
        $this->user->storePass($request->pass);

        return redirect()->back()->with('message', trans('app.message.edit_success'));
    }

}
