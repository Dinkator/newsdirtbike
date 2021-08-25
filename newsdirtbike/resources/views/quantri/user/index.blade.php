@extends('quantri/layoutquantri')
@section('count')

@endsection
@section('pagetitle', 'DANH SÁCH THỂ LOẠI') 
@section('main')
    <table class="table table-striped" id="myTable">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">TÊN </th>
            <th scope="col">EMAIL</th>
            <th scope="col">PASSWORD</th>
            <th scope="col">IDGROUP</th>
            <th scope="col">CHỈNH</th>
            <th scope="col">XÓA</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ds as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{($row->password)}}</td>
                <td>{{($row->idgroup)}}</td>
                <td>
                    <a href="{{route('user.edit', $row->id)}}" class="btn btn-primary"> CHỈNH</a>
                </td>
                <td>
                    <form action="{{ route('user.destroy', $row->id)}}" method="post">
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