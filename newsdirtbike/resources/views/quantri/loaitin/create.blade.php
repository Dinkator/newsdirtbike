@extends('quantri/layoutquantri')
@section('pagetitle', 'THÊM LOẠI TIN') 
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
<form method="post" action="{{ route('loaitin.store') }}">
{{ csrf_field()}}
    <div class="col-9 mg-l-30">
        <div class="d-flex flex-column">
            <div class="form-group mg-b-20">
                <label>Tên loại tin: <span class="tx-danger">*</span></label>
                <input name="Ten" placeholder="Nhập tên thể loại" class="form-control" required>
                </div>
                <div class="form-group mg-b-20">
                <label>Thứ tự:</label>
                <input type="number" name="ThuTu" placeholder="Nhập thứ tự" class="form-control">
            </div>
        </div>
        <div class="d-flex form-group mg-b-20">
            <label class="rdiobox">
                <input name="AnHien" type="radio" value="1" checked>
                <span>Hiện</span>
            </label> &nbsp; 
            <label class="rdiobox">
                <input name="AnHien" type="radio" value="0" >
                <span>Ẩn</span>
            </label>
        </div>
        <div class="d-flex form-group mg-b-20">
            <label class="rdiobox">
                <input name="lang" type="radio" value="vi" checked>
                <span>Tiếng việt</span>
            </label> &nbsp; 
            <label class="rdiobox">
                <input name="lang" type="radio" value="en" >
                <span>English</span>
            </label>
        <select name="idTL" class="d-flex form-group mg-b-20">
                <option value="0"> Chọn thể loại</option>
                @php
                $kq=DB::select("select idTL, TenTL from theloai order by ThuTu");
                foreach($kq as $rowTL){
                    echo "<option value='{$rowTL->idTL}'>{$rowTL->TenTL}</option>";
                }
                @endphp
        </select>
        </div>  
    <button type="submit" class="btn btn-warning">LƯU DATABASE</button>
    </div>
</form>

@endsection
