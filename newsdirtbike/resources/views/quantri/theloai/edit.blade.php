@extends('quantri/layoutquantri')
@section('pagetitle', 'CHỈNH THỂ LOẠI') 
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
<form method="post" action="{{ route('theloai.update', $row->idTL)}}">
{{ csrf_field()}}
{!! method_field('patch') !!}
    <div class="col-9 mg-l-30">
        <div class="d-flex flex-column">
            <div class="form-group mg-b-20">
                <label>Tên thể loại: <span class="tx-danger">*</span></label>
                <input name="TenTL" value="{{ $row->TenTL }}" placeholder="Nhập tên thể loại" class="form-control" required>
                </div>
                <div class="form-group mg-b-20">
                <label>Thứ tự:</label>
                <input type="number" value="{{ $row->ThuTu }}" name="ThuTu" placeholder="Nhập thứ tự" class="form-control">
            </div>
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
        <div class="d-flex form-group mg-b-20">
            <label class="rdiobox">
                <input name="HienMenu" @if ($row->HienMenu == 1)  checked @endif type="radio" value="1" >
                <span>Hiện Menu</span>
            </label> &nbsp; 
            <label class="rdiobox">
                <input name="HienMenu" @if ($row->HienMenu == 0)  checked @endif type="radio" value="0" >
                <span>Ẩn Menu</span>
            </label>
        </div>
        
    <button type="submit" class="btn btn-warning">LƯU DATABASE</button>
    </div>
</form>

@endsection
