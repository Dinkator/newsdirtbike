@extends('quantri/layoutquantri')
@section('pagetitle', 'CHỈNH TIN') 
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
<form method="post" action="{{ route('tin.update', $row->idTin)}}">
{{ csrf_field()}}
{!! method_field('patch') !!}
    <div class="col-9 mg-l-30">
        <div class="d-flex flex-column">
            <div class="form-group mg-b-20">
                <label>Tiêu Đề: <span class="tx-danger">*</span></label>
                <input type="text" name="TieuDe" value="{{ $row->TieuDe }}"  class="form-control" required>
            </div>
            <div class="form-group mg-b-20">
                <label>Tóm Tắt:</label>
                <input type="text" value="{{ $row->TomTat }}" name="TomTat"  class="form-control">
            </div>

            <div class="form-group mg-b-20">
                <label>Hình:</label>
                <input type="file" value="{{ $row->urlHinh }}" name="urlHinh"  class="form-control">
            </div>

            <div class="form-group mg-b-20">
                <label>Ngày:</label>
                <input type="date" value="{{ $row->Ngay }}" name="Ngay"  class="form-control">
            </div>
            <div class="form-group mg-b-20">
                <label>idUser:</label>
                <input type="text" value="{{ $row->idUser }}" name="idUser"  class="form-control">
            </div>
            <div class="form-group mg-b-20">
                <label >Nội dung:</label>
                <input type="text" value="{{ $row->Content }}" name="Content"  class="form-control">
            </div>
            <select name="idLT" class="d-flex form-group mg-b-20">
                <option value="0"> Chọn loại tin</option>
                @php
                $kq=DB::select("select idLT, Ten from loaitin order by ThuTu");
                foreach($kq as $rowLT){
                    if($row->idLT == $row ->idLT)
                    echo "<option value='{$rowLT->idLT}'selectd>{$rowLT->Ten}</option>";
                    else
                    echo "<option value='{$rowLT->idLT}'>{$rowLT->Ten}</option>";
                }
                @endphp
           </select>
            <select name="idTL" class="d-flex form-group mg-b-20">
                <option value="0"> Chọn thể loại</option>
                @php
                $kq=DB::select("select idTL, TenTL from theloai order by ThuTu");
                foreach($kq as $rowTL){
                    if($row->idTL == $row ->idTL)
                    echo "<option value='{$rowTL->idTL}'selectd>{$rowTL->TenTL}</option>";
                    else
                    echo "<option value='{$rowTL->idTL}'>{$rowTL->TenTL}</option>";
                }
                @endphp
        </select>

        </div>
        <div class="d-flex form-group mg-b-20">
            <label class="rdiobox">
                <input name="AnHien" @if($row->AnHien == 1) checked @endif type="radio" value="1" >
                <span>Hiện</span>
            </label> &nbsp; 
            <label class="rdiobox">
                <input name="AnHien"  @if($row->AnHien == 0) checked @endif type="radio" value="0" >
                <span>Ẩn</span>
            </label>
        </div>
        <div class="d-flex form-group mg-b-20">
            <label class="rdiobox">
                <input name="lang" @if ($row->lang == 'vi') checked @endif type="radio" value="vi">
                <span>Tiếng việt</span>
            </label> &nbsp; 
            <label class="rdiobox">
                <input name="lang" @if ($row->lang == 'en')  checked @endif type="radio" value="2" >
                <span>English</span>
            </label>
        </div>
        
    <button type="submit" class="btn btn-warning">LƯU DATABASE</button>
    </div>
</form>

@endsection
