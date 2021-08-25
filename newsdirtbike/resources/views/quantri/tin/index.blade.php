@extends('quantri/layoutquantri')
@section('count')
<div class="tile_count">
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i>THỂ LOẠI</span>
              <div class="count">{{ $ctheloai }}</div>
              <span class="count_bottom"><i class="green"></i> </span>
            </div>
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> LOẠI TIN</span>
              <div class="count">{{ $cloaitin }}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> TIN</span>
              <div class="count green">{{ $ctin }}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> THÀNH VIÊN</span>
              <div class="count">{{ $cuser }}</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
</div>
@endsection
@section('pagetitle', 'DANH SÁCH TIN') 
@section('main')
    <table class="table table-striped" id="myTable">
    <thead>
        <tr>
            <th scope="col">IDTin</th>
            <th scope="col">Lang</th>
            <th scope="col">TIÊU ĐỀ</th>
            <th scope="col">HÌNH</th>
            <th scope="col">NGÀY</th>
            <th scope="col">IDUser</th>
            <th scope="col">IDLT</th>
            <th scope="col">IDTL</th>
            <th scope="col">SỐ LẦN XEM</th>
            <th scope="col">ẨN HIỆN</th>
            <th scope="col">CHỈNH</th>
            <th scope="col">XÓA</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ds as $row)
            <tr>
                <td>{{$row->idTin}}</td>
                <td>{{($row->lang=='vi')? "Tiếng Việt":"English"}}</td>
                <td>{{$row->TieuDe}}</td>
                <td>{{$row->urlHinh}}</td>
                <td>{{$row->Ngay}}</td>
                <td>{{$row->idUser}}</td>
                <td>
                    @php 
                     $idLT = $row ->idLT;
                     $lt = App\Models\loaitin::find($idLT);
                     if ($lt==null) echo "Chưa có thể loại";
                     else echo $lt -> Ten;
                     @endphp
                </td>
                <td>
                    @php 
                     $idTL = $row ->idTL;
                     $tl = App\Models\theloai::find($idTL);
                     if ($tl==null) echo "Chưa có thể loại";
                     else echo $tl -> TenTL;
                     @endphp
                </td>
                <td>{{$row->SoLanXem}}</td>
                <td>{{($row->AnHien)? "Đang hiện":"Đang ẩn"}}</td>
                <td>
                    <a href="{{route('tin.edit', $row->idTin)}}" class="btn btn-primary">CHỈNH</a>
                </td>
                <td>
                    <form action="{{ route('tin.destroy', $row->idTin)}}" method="post">
                        {{ csrf_field()}}
                        {!! method_field('delete') !!}
                        <button onclick="return confirm('Bạn muốn xóa chứ?')" class="btn btn-danger" type="submit">XÓA</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
   
    </table>
@endsection