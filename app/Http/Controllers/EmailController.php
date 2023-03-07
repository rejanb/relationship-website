<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function email(Request $request)
    {
        // dd($request->name, $request->email, $request->message, $request->subject);


        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);


        $input = $request->all();

        $data = array(
            'name' => $input['name'],
            'email' => $input['email'],
            'messages' => $input['message'],);
            // dd($data);

        Mail::send('mail', $data, function($message) {
           $message->to('smbalmbra@gmail.com',)->subject
              ('Contact Form : Relationship Overviews');
           $message->from('info@relationshipoverviews.org','Relationship Overviews Website');
        });

        // return $this->error('Invalid Credentials', 401);
        return redirect()->back()->with(['success' => 'Submitted Successfully']);





        // $data =array(
            // 1, 6, 12 month
            // physical set, shipping address
            // city wise pricing
            //post.ba

        //     'name' => $input['name'],
        //     'email' => $input['email'],
        //     'phone' => $input['phone'],
        //     'subject' => $input['subject'],
        //     'message' => $input['message'],
        // );


        // //  Send mail to admin
        // Mail::send('contactMail',$data , function($message) use ($request){
        //     $message->from($request->email, $request->name);
        //     $message->to('admin@admin.com', 'Admin')->subject('Contact : People in my life website');
        // });

        // return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);



        // // Mail::send('email.template', $data, function ($message) use ($data) {
        // //     $message->from('sender@example.com', 'Sender Name');
        // //     $message->to($data['email']);
        // //     $message->subject($data['subject']);
        // // });

        // // return response()->json(['success' => true]);
    }
}
