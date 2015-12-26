<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Code;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CodeController extends Controller
{

    /**
    * saves code
    * executes & display results & code in IDE
    */
    public function saveExecCode(Request $req, $user_id)
    {

        // dd($req->all());

        $prevCode = Code::where('user_id', '=', $user_id)->first();

        $code = null;
        if ($prevCode->id > 0)
            $code = $prevCode;
        else
            $code = new Code;

        // $codeToSave = $req->code;
        // str_replace('o', 'e', $codeToSave);

        $code->code = $req->code;
        $code->user_id = $user_id;
        $code->save();

        // return $this->getIDE($user_id);
        return $this->execute($user_id);
    }

    // displays code in IDE
    public function getIDE ($user_id)
    {
        $code = Code::where('user_id', '=', $user_id)->first();
        return view('ide', ['user_id' => $user_id, 'code' => $code->code]);
    }

    /**
    *   Creates a file 1.blade.php where 1 is user_id
    *   Writes code from DB to file along with Blade Syntx
    *   Executes by returning a view that includes that BLade template
    *   & deletes the file
    */
    public function execute($user_id)
    {
        $code = Code::where('user_id', '=', $user_id)->first();

        $name = $user_id . '.php';
        $file = base_path() . '\\resources\\views\\' . $name;
        $fp = fopen($file, 'w');

        fwrite($fp, $code->code);

        return view('ide', ['user_id' => $user_id, 'code' => $code->code]);
    }


    // shows code to admin
    public function getCode($user_id)
    {
        $code = Code::where('user_id', '=', $user_id)->first();
        // dd($code);
        // return response()->json($code);
        return view('code', ['code' => $code->code]);
    }

}
