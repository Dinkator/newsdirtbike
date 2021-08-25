<?php use App\Http\Controllers\TinController; ?>
<?php
    $cactheloai = DB::table('theloai')->select('*')
    ->orderby('ThuTu','asc')
    ->where('AnHien','=','1')->where('lang','=','vi')
    ->limit(5)->get();
?>
   <div class="nav__holder nav--sticky" style="height:105px">
        <div class="container relative">
          <div class="flex-parent">

            <!-- Side Menu Button -->
            
            <!-- Logo -->
            <a href="" class="logo">
              <img style="height:120px;"  class="logo__img" src="{{asset('layout')}}/upload/images/logomotocross.png" alt="logo">
            </a>

            <!-- Nav-wrap -->
            <nav class="flex-child nav__wrap d-none d-lg-block">  
                            
              <ul class="nav__menu">
                <li class="nav__"><a href="">TRANG CHỦ</a></li>
              @foreach ($cactheloai as $mottheloai)
                <li class="nav__dropdown ">        
                  <a href="" >{{$mottheloai -> TenTL}}</a>
                  @php
                    $id = $mottheloai->idTL;
                    $cacloaitin = DB::table('loaitin')->select('*')->where('AnHien','=','1')->where('idTL','=',$id)->get();
                @endphp
                  <ul class="nav__dropdown-menu">
                   @foreach($cacloaitin as $motloaitin)
                    <li><a href="{{url('tin-trong-loai')}}/{{$motloaitin->idLT}}/{{$motloaitin->TenLT_KD}}"><span>{{$motloaitin->Ten}}</span></a></li>
                    @endforeach
                  </ul>   
                  @endforeach       
                  <li class="nav__"><a href="lien-he">LIÊN HỆ</a></li>
                  <li class="nav__"><a href="login">ĐĂNG NHẬP</a></li>             
                </li>
                
            </div> <!-- end nav right -->             
          </div> <!-- end flex-parent -->   
        </div> <!-- end container -->
      </div>
