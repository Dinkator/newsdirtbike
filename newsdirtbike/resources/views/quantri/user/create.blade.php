@extends('quantri/layoutquantri')
@section('pagetitle', 'THÊM THÀNH VIÊN') 
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
<form method="post" action="{{ route('user.store') }}">
{{ csrf_field()}}
    <div class="col-9 mg-l-30">
        <div class="d-flex flex-column">
            <div class="form-group mg-b-20">
                <label>Tên : <span class="tx-danger">*</span></label>
                <input name="name" placeholder="Nhập tên " class="form-control" required>
            </div>
            <div class="form-group mg-b-20">
                <label>Email:</label>
                <input type="email" name="email" placeholder="Nhập Email" class="form-control">
            </div>
            <div class="form-group mg-b-20">
                <label>Mật khẩu:</label>
                <input type="password" name="password" placeholder="Nhập mật khẩu" class="form-control">
            </div>
            <div class="form-group mg-b-20">
                <label>idgroup:</label>
                <input type="number" name="idgroup" placeholder="Nhập idgroup" class="form-control">
            </div>
        </div>
    <button type="submit" class="btn btn-warning">LƯU DATABASE</button>
    </div>
</form>

@endsection
