<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Code;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CodeController extends Controller
{
    public function saveCode(Request $req, $user_id)
    {
        // dd(Auth::user());

        $code = new Code;
        $code->code = $req->code;
        $code->user_id = $user_id;
        $code->save();

        return response()->json(['msg' => 'saved']);
    }

    public function getCode($user_id)
    {
        $code = Code::where('user_id', '=', $user_id)->first();
        // dd($code);
        // return response()->json($code);
        return view('code', ['code' => $code->code]);
    }

}
