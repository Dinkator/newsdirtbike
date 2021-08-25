@extends('layout')
@section('noidungchinh')
@php

    $idTin = $tin->idTin;
    $soLuongYkien = DB::table('ykien')
    ->groupby('idTin')
    ->where('idTin',$idTin)
    ->count();

    $yKien = DB::table('ykien')
    ->where('idTin',$idTin)
    ->get();
    
@endphp

<?php
    use App\Http\Controllers\TinController;
    use App\Http\Controllers\GuimailController;
?>

 <div class="col-lg-12 blog__content mb-72">
 <div class="content-box">           

<!-- standard post -->
<article class="entry mb-0">
  
  <div class="single-post__entry-header entry__header">
    <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--green">{{$tin->Ten}}</a>
    <h1 class="single-post__entry-title">
    {{$tin->TieuDe}}
    </h1>

    <div class="entry__meta-holder">
      <ul class="entry__meta">
        <li class="entry__meta-author">
          <span>by</span>
          <a href="#">{{$tin->Ten}}</a>
        </li>
        <li class="entry__meta-date">
          Jan 21, 2018
        </li>
      </ul>

      <ul class="entry__meta">
        <li class="entry__meta-views">
          <i class="ui-eye"></i>
          <span>{{$tin->SoLanXem}}</span>
        </li>
        <li class="entry__meta-comments">
          <a href="#">
            <i class="ui-chat-empty">{{$soLuongYkien}}</i>
          </a>
        </li>
      </ul>
    </div>
  </div> <!-- end entry header -->

  <div class="entry__img-holder">
    <img src="{{asset('layout')}}/<?= $tin->urlHinh?>" alt="" class="entry__img">
  </div>

  <div class="entry__article-wrap">

    <!-- Share -->
    <div class="entry__share">
      <div class="sticky-col">
        <div class="socials socials--rounded socials--large">
          <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
            <i class="ui-facebook"></i>
          </a>
          <a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
            <i class="ui-twitter"></i>
          </a>
          <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
            <i class="ui-google"></i>
          </a>
          <a class="social social-pinterest" href="#" title="pinterest" target="_blank" aria-label="pinterest">
            <i class="ui-pinterest"></i>
          </a>
        </div>
      </div>                  
    </div> <!-- share -->

    <div class="entry__article">
        <?php echo $tin->Content?> 
    </div> <!-- end entry article -->
  </div> <!-- end entry article wrap -->
  

  <!-- Newsletter Wide -->
  <div class="newsletter-wide">
    <div class="widget widget_mc4wp_form_widget">
      <div class="newsletter-wide__container">
        <div class="newsletter-wide__text-holder">
          <p class="newsletter-wide__text">
            <i class="ui-email newsletter__icon"></i>
            DĂNG KÝ CHO TIN MỚI MỖI NGÀY
          </p>
        </div>
        <div class="newsletter-wide__form">
          <form class="mc4wp-form" method="post">
            <div class="mc4wp-form-fields">
              <div class="form-group">
                <input type="email" name="EMAIL" placeholder="Email" required="">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-lg btn-color" value="DĂNG KÝ">
              </div>
            </div>
          </form>
        </div> 
      </div>         
    </div>
  </div> <!-- end newsletter wide -->

  <!-- Prev / Next Post -->
 

  <!-- Author -->

  <!-- Related Posts -->
  

</article> <!-- end standard post -->
<div class="fb-like mt-2" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
<!-- Comments -->
<div class="entry__tags">
                    <i class="ui-tags"></i>
                    <span class="entry__tags-label">Tags:</span>
                  
                    <a href="#" rel="tag">{{$tin->tags}}</a>
                  </div>

<div class="entry-comments">
  <div class="title-wrap title-wrap--line">
    @foreach ($yKien as $yk)
  </div>
  <ul class="comment-list">
    <li class="comment">  
      <div class="comment-body">
        <div class="comment-avatar">
          <img alt="" src="img/content/single/comment_3.jpg">
        </div>
        <div class="comment-text">
          <h6 class="comment-author">{{$yk->HoTen}}</h6>
          <div class="comment-metadata">
            <a href="#" class="comment-date">{{$yk->Ngay}}</a>
          </div>                      
          <p>{{$yk->NoiDung}}.</p>
          <a href="#" class="comment-reply">Trả lời</a>
        </div>
        @endforeach
      </div>

    </li> <!-- end 1-2 comment -->

  

  </ul>         
</div> <!-- end comments -->
<!-- Comment Form -->
<div id="respond" class="comment-respond">
  <div class="title-wrap">
    <h5 class="comment-respond__title section-title">ĐỂ LẠI BÌNH LUẬN</h5>
  </div>
  <form id="form" class="comment-form" method="post" action="{{action([TinController::class, 'lienhe'])}}">
    <p class="comment-form-comment">
      <label for="comment">NỘI DUNG</label>
      <textarea id="comment" name="comment" rows="5" required="required"></textarea>
    </p>
    <div class="row row-20">
      <div class="col-lg-4">
        <label for="name">TÊN: *</label>
        <input name="name" id="name" type="text">
      </div>
      <div class="col-lg-4">
        <label for="comment">Email: *</label>
        <input name="email" id="email" type="email">
      </div>
      <div class="col-lg-4">
        <label for="comment">SỐ ĐIÊN THOẠI: *</label>
        <input name="website" id="website" type="text">
      </div>
    </div>
    <p class="comment-form-submit">
      <input type="submit" name="submit" class="btn btn-lg btn-color btn-button" value="GỬI" >
    </p>
    
  </form>
</div> <!-- end comment form -->

</div> <!-- end content box -->
        </div>
 @endsection
 
