<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loaitin;
use App\Models\theloai;
use DB;

class LoaitinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = loaitin::paginate();
        $ctheloai = DB::table('theloai')->count();
        $ctin = DB::table('tin')->count();
        $cloaitin = DB::table('loaitin')->count();
        $cuser = DB::table('users')->count();
        return view('quantri.loaitin.index', compact('ds','ctheloai','ctin','cloaitin','cuser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quantri.loaitin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lt = new loaitin([
            'Ten' => $request->get('Ten'),
            'ThuTu' => $request->get('ThuTu'),
            'AnHien' => $request->get('AnHien'),
            'idTL' => $request->get('idTL'),
            'lang' => $request->get('lang'),
        ]);
        $lt->save();
        return redirect('quantri/loaitin/')->with('success','Loại tin đã được lưu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $loaitin= loaitin::all()->count();
        return ('quantri')->with(impact('quantrilayout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = loaitin::find($id);
        if($row==null){
            echo" Không có loại tin này "; 
            return;
        };
         return view('quantri.loaitin.edit', compact('row'));
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
            $lt = loaitin::find($id);
            $lt->Ten =  $request->get('Ten');
            $lt->ThuTu = $request->get('ThuTu');
            $lt->AnHien = $request->get('AnHien');
            $lt->idTL = $request->get('idTL');
            $lt->lang = $request->get('lang');
            $lt->save();
            return redirect('quantri/loaitin/')->with('success','Cập nhật thành công!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lt = loaitin::find($id);
        if ($lt==null ) {echo "Không tồn tại loại tin này"; return; }
        else {
            $lt->delete();
            return redirect('quantri/loaitin')->with('success', 'Đã xóa xong');
        }

    }
}
