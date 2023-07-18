<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Mail\Contact_mail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail as FacadesMail;

class Mail extends Controller
{
    public function mail_test () {

        $data_msg = [];
        $data_msg['subject'] = 'contacto desde la web';
        $data_msg['name'] = 'Marly Barrera';
        $data_msg['date'] = Carbon::now();
        $data_msg['email'] = 'marlyalebc@gmail.com';
        $data_msg['message'] = 'esto es un mensaje de prueba';

        $emails = [
            '3liuhernandez@gmail.com',
            $data_msg['email'],
        ];

        // return view("emails.contact")->with($data_msg);

        FacadesMail::to($emails)->queue(new Contact_mail($data_msg));
    }

    public function send_mail_contact ( Request $request ) {

        $validator = Validator::make($request->all(), [
            'subject' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|string',
            'message' => 'required|string',
        ] );

        if ($validator->fails()) {
            return response([
                'errors' => $validator->errors(),
                'success' => false
            ], 422);
        }

        $req = $validator->validated();

        $emails = [
            '3liuhernandez@gmail.com',
        ];

        $data_msg = [];
        $data_msg['subject'] = $req['subject'];
        $data_msg['name'] = $req['name'];
        $data_msg['date'] = Carbon::now();
        $data_msg['email'] = $req['email'];
        $data_msg['message_user'] = $req['message'];

        FacadesMail::to($emails)->queue(new Contact_mail($data_msg));

        return response([
            'msg' => 'Mensaje enviado',
            'success' => true
        ], 200);
    }
}
