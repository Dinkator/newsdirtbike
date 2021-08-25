<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tin;
use App\Models\loaitin;
use App\Models\theloai;
class TinController extends Controller
{
    public function index(){
        $ds = tin::all();
        $ctheloai = DB::table('theloai')->count();
        $ctin = DB::table('tin')->count();
        $cloaitin = DB::table('loaitin')->count();
        $cuser = DB::table('users')->count();
        return view('quantri.tin.index', compact('ds','ctheloai','ctin','cloaitin','cuser'));
    }

    public function create()
    {
        return view('quantri.tin.create');
    }

    public function store(Request $request)
    {
        $data = $request->all(); // nhận tất cả các gái trị m gửi qua, r lưu vào $data
       

        $hinh = $data['urlHinh']; // tạo ra biến hình, để lấy riêng tên hình,file hình nó nằm trong object data lấy dc và ms in ra
        $urlHinh = "upload/images/".$hinh; //cái này là nối chuỗi vs với tên hình ở trên
        
        $tin = new tin();  // tạo ra dòng mới để lưu lên db $tenbientudat = new tenModel;
        $tin->TieuDe = $data['TieuDe']; //$tenbientudat->cottrongdb = giá trị muốn lấy trong object;
        $tin-> urlHinh =  $urlHinh;
        $tin-> lang = $data['lang'];
        $tin-> TieuDe = $data['TieuDe'];
        $tin-> TomTat = $data['TomTat'];
        $tin-> Ngay = $data['Ngay'];
        $tin-> idUser = $data['idUser'];
        $tin-> Content = $data['Content'];
        $tin-> NoiBat = $data['NoiBat'];
        $tin-> idLT = $data['idLT'];
        $tin-> idTL = $data['idTL'];

        $tin -> save(); // lấy xong thì gợi save để lưu
        return redirect()->back();
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = tin::find($id);
        if($row==null){
            echo" Không có thể loại này "; 
            return;
        };
         return view('quantri.tin.edit', compact('row'));
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
        {
            $t = tin::find($id);
            $t -> TieuDe= $request->get('TieuDe');
            $t -> TomTat= $request->get('TomTat');
            $t -> urlHinh= $request->get('urlHinh');
            $t -> Ngay= $request->get('Ngay');
            $t -> idUser= $request->get('idUser');
            $t -> Content= $request->get('Content');
            $t -> idLT= $request->get('idLT');
            $t -> idTL= $request->get('idTL');
            $t -> NoiBat= $request->get('NoiBat');
            $t -> AnHien= $request->get('AnHien');
            $t -> lang= $request->get('lang');
            $t ->save();
            return redirect('quantri/tin/')->with('success','Thể loại đã được lưu');
        }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
        {
            $t = tin::find($id);
            if ($t==null) {
                return redirect('quantri/tin')->with('success', 'Thể loại không tồn tại');
            } else {
            //cần phải đếm số loại tin trong thể loại (làm sau)
                $t->delete();
                return redirect('quantri/tin')->with('success', 'Đã xóa xong');
          }
         }




    public function chitiettin($id)
    {
        $kq = DB::table('tin')->select('idTin', 'TieuDe', 'urlHinh','Ngay','Ten','idUser','SoLanXem','Content','tags')
        ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')->where("idTin",$id)
        ->first();;
        if($kq==NULL){
            echo "Tin không tồn tại";
            return;
        }
        $data = [
            'tin' => $kq,
        ];
        return view('chitiettin',$data);
    }
    public function tintrongloai($idLT,$pageNum=1){
        settype($idLT, "int");
        $kq = DB::table('tin')
        ->select('idTin','TieuDe','TomTat','urlHinh','Ngay')
        ->where('idLT',$idLT)
        ->where('AnHien',1)
        ->paginate(9);
        
        $TenLT = DB::table('loaitin')->where('idLT',$idLT)->value('Ten');
        $idTL = DB::table('loaitin')->where('idLT',$idLT)->value('idTL');
        $TenTL = DB::table('theloai')->where('idTL',$idTL)->value('TenTL');
        $data = ['listtin'=>$kq, 'idTL'=>$idTL, 'TenTL'=>$TenTL, 'idLT'=>$idLT,'TenLT'=>$TenLT];
        return view('tintrongloai',$data);
    }
    
    public function lienhe(){
        $lh = array('title'=>'Liên hệ');
        return view('lienhe',$lh);
    }  public function baocao(){
        return view('baocao');
    }
    
    
}
