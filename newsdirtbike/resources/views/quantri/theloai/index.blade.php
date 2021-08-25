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
@section('pagetitle', 'DANH SÁCH THỂ LOẠI') 
@section('main')
    <table class="table table-striped" id="myTable">
    <thead>
        <tr>
            <th scope="col">IDTL</th>
            <th scope="col">TÊN TL</th>
            <th scope="col">THỨ TỰ</th>
            <th scope="col">ẨN HIỆN</th>
            <th scope="col">NGÔN NGỮ</th>
            <th scope="col">HIỆN MENU</th>
            <th scope="col">CHỈNH</th>
            <th scope="col">XÓA</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ds as $row)
            <tr>
                <td>{{$row->idTL}}</td>
                <td>{{$row->TenTL}}</td>
                <td>{{$row->ThuTu}}</td>
                <td>{{($row->AnHien)? "Đang hiện":"Đang ẩn"}}</td>
                <td>{{($row->lang=='vi')? "Tiếng Việt":"English"}}</td>
                <td>{{($row->HienMenu==1)? "Hiện trên menu":"Ẩn trên menu"}}</td>
                <td>
                    <a href="{{route('theloai.edit', $row->idTL)}}" class="btn btn-primary"> CHỈNH</a>
                </td>
                <td>
                    <form action="{{ route('theloai.destroy', $row->idTL)}}" method="post">
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