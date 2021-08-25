<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = user::all();
       
        return view('quantri.user.index', compact('ds')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quantri.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new user([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'idgroup' => $request->get('idgroup'),
        ]);
        $user->save();
        return redirect('quantri/user/')->with('success','Thể loại đã được lưu');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = user::find($id);
        if($row==null){
            echo" Không có thể loại này "; 
            return;
        };
         return view('quantri.user.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $user = user::find($id);
      $user -> name= $request->get('name');
      $user -> email= $request->get('email');
      $user -> password= Hash::make($request->get('password'));
      $user -> idgroup= $request->get('idgroup');
      $user->save();
        return redirect('quantri/user/')->with('success','Thể loại đã được lưu');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = user::find($id);
        if ($user==null) {
            return redirect('quantri/user')->with('success', 'Thể loại không tồn tại');
        } else {
		//cần phải đếm số loại tin trong thể loại (làm sau)
          $user->delete();
            return redirect('quantri/user')->with('success', 'Đã xóa xong');
	  }
    }
    


}
