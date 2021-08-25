<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Session;
class GuimailController extends Controller
{
    public function guimaillienhe(Request $request){
        $input = $request->all();
        \Mail::send('thulienhe',
            array('name'=>$input['name'],
                  'email'=>$input['email'],
                  'phone'=>$input['phone'],
                  'content'=>$input['content']
            ),    
            function ($message) {
                $message->from('huynhngocdinh2809@gmail.com', 'Dinh')
                        ->to('dinhhnps13404@fpt.edu.vn')
                        ->subject('Thư liên hệ');
        });
        return redirect()->intended('camon/');
        Session::flash('thongbao','Đã gửi mail thành công');
    }
}
