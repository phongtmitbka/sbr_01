<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MemberController extends Controller
{
    public function searchMember(Request $request)
    {
    	$members = User::searchMember($request->name)->get();

    	return view('pages.search-member', compact('members'));
    }
}
