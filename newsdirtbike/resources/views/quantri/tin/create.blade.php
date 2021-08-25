@extends('quantri/layoutquantri')
@section('pagetitle', 'THÊM TIN') 
@section('main')

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif
<form method="post" action="{{ route('tin.store') }}">
{{ csrf_field()}}
<div class="col-9 mg-l-30">
        <div class="d-flex flex-column">
            <div class="form-group mg-b-20">
                <label>Tiêu Đề: <span class="tx-danger">*</span></label>
                <input type="text" name="TieuDe" class="form-control" required>
            </div>
            <div class="form-group mg-b-20">
                <label>Tóm Tắt:</label>
                <input type="text" name="TomTat"  class="form-control">
            </div>
            <div class="form-group mg-b-20">
                <label>Hình:</label>
                <input type="file"  name="urlHinh"  class="form-control">
            </div>

            <div class="form-group mg-b-20">
                <label>Ngày:</label>
                <input type="date"  name="Ngay"  class="form-control">
            </div>
            <div class="form-group mg-b-20">
                <label>idUser:</label>
                <input type="number"  name="idUser"  class="form-control">
            </div>
            <div class="form-group mg-b-20">
                <label >Nội dung:</label>
                <input type="text"  name="Content"  class="form-control">
            </div>
        </div>
        <div class="form-group mg-b-20">
                <label>Nổi Bật</label>
                <input type="number"  name="NoiBat"  class="form-control">
        </div>
        <select name="idLT" class="d-flex form-group mg-b-20">
                <option value="0"> Chọn loại tin</option>
                @php
                $kq=DB::select("select idLT, Ten from loaitin order by ThuTu");
                foreach($kq as $rowLT){
                    echo "<option value='{$rowLT->idLT}'>{$rowLT->Ten}</option>";
                }
                @endphp
        </select>
        <select name="idTL" class="d-flex form-group mg-b-20">
                <option value="0"> Chọn thể loại</option>
                @php
                $kq=DB::select("select idTL, TenTL from theloai order by ThuTu");
                foreach($kq as $rowTL){
                    echo "<option value='{$rowTL->idTL}'>{$rowTL->TenTL}</option>";
                }
                @endphp
        </select>
        
        <div class="d-flex form-group mg-b-20">
            <label class="rdiobox">
                <input name="AnHien"  type="radio" value="1" >
                <span>Hiện</span>
            </label> &nbsp; 
            <label class="rdiobox">
                <input name="AnHien"   type="radio" value="0" >
                <span>Ẩn</span>
            </label>
        </div>
        <div class="d-flex form-group mg-b-20">
            <label class="rdiobox">
                <input name="lang"  type="radio" value="vi">
                <span>Tiếng việt</span>
            </label> &nbsp; 
            <label class="rdiobox">
                <input name="lang" type="radio" value="2" >
                <span>English</span>
            </label>
        </div>
        
    <button type="submit" class="btn btn-warning">LƯU DATABASE</button>
    </div>
</form>

@endsection
