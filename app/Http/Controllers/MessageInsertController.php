<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class MessageInsertController extends Controller {

    public function insert(Request $request){

        $input['email'] = $request->input('rec_email');
        $data= auth()->user();
        $sender_email=$data['email'];

        // Must not already exist in the `email` column of `users` table
        $rules = array('email' => 'unique:users,email');

        $validator = Validator::make($input, $rules);

        if ($validator->fails() && $sender_email != $input['email']) {

            $rec_email = $request->input('rec_email');
            $msg = encrypt($request->input('msg'));
            $sender_email= encrypt($sender_email);
            $rec_email=encrypt($rec_email);
            DB::table('messages')->insert([
                ['receiver' => $rec_email, 'body' => $msg, 'sender' => $sender_email],
            ]);
            return view ('success');
        }
        else {

            return view ('failed');
        }

    }
}
