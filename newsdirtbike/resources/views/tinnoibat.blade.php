<?php use App\Http\Controllers\TinController; ?>
<?php
    $tinmoi = DB::table('tin')
    ->select('idTin', 'TieuDe', 'Ngay','Ten','urlHinh','Tin_KD')
    ->orderby('Ngay','desc')
    ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
    ->where('tin.AnHien','=','1')->where('tin.lang','=','vi')
    ->Where("NoiBat","=","1")
    ->offset(0)->limit(500)->get();
?>
  <section class="featured-posts-grid">
      <div class="container">
        <div class="row row-8">

          <div class="col-lg-6">
            <!-- Small post -->
            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
              <article class="entry card post-list featured-posts-grid__entry">
                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{asset('layout')}}/<?= $tinmoi[0]->urlHinh?>)">
                  <a href=" {{url('tin')}}/{{$tinmoi[5]->idTin}}" class="thumb-url"></a>
                  <img src="<?= $tinmoi[5]->urlHinh?>" alt="" class="entry__img d-none">
                  <a href=" {{url('tin')}}/{{$tinmoi[5]->idTin}}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet"><?=$tinmoi[5]->Ten;?></a>
                </div>

                <div class="entry__body post-list__body card__body">  
                  <h2 class="entry__title">
                    <a href="{{url('tin')}}/{{$tinmoi[5]->idTin}}"><?=$tinmoi[5]->TieuDe;?></a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#"><?=$tinmoi[5]->Ten;?></a>
                    </li>
                    <li class="entry__meta-date">
                    <?= date('d:m:y',strtotime($tinmoi[5]->Ngay))?>
                    </li>              
                  </ul>
                </div>
              </article>
            </div> <!-- end post -->

            <!-- Small post -->
            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
              <article class="entry card post-list featured-posts-grid__entry">
                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{asset('layout')}}/<?= $tinmoi[8]->urlHinh?>)">
                  <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[8]->idTin] ) }}" class="thumb-url"></a>
                  <img src="<?= $tinmoi[8]->urlHinh?>" alt="" class="entry__img d-none">
                  <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[8]->idTin] ) }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple"><?=$tinmoi[8]->Ten;?></a>
                </div>

               
                <div class="entry__body post-list__body card__body">  
                  <h2 class="entry__title">
                    <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[8]->idTin] ) }}"><?=$tinmoi[8]->TieuDe;?></a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#"><?=$tinmoi[8]->Ten;?></a>
                    </li>
                    <li class="entry__meta-date">
                    <?= date('d:m:y',strtotime($tinmoi[8]->Ngay))?>
                    </li>              
                  </ul>
                </div>
              </article>
            </div> <!-- end post -->

            <!-- Small post -->
            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
              <article class="entry card post-list featured-posts-grid__entry">
                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{asset('layout')}}/<?= $tinmoi[2]->urlHinh?>)">
                  <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[2]->idTin] ) }}" class="thumb-url"></a>
                  <img src="{{asset('layout')}}/<?= $tinmoi[2]->urlHinh?>" alt="" class="entry__img d-none">
                  <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[2]->idTin] ) }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue"><?=$tinmoi[2]->Ten;?></a>
                </div>

               
                <div class="entry__body post-list__body card__body">  
                  <h2 class="entry__title">
                    <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[2]->idTin] ) }}"><?=$tinmoi[2]->TieuDe;?></a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#"><?=$tinmoi[2]->Ten;?></a>
                    </li>
                    <li class="entry__meta-date">
                    <?= date('d:m:y',strtotime($tinmoi[2]->Ngay))?>
                    </li>              
                  </ul>
                </div>
              </article>
            </div> <!-- end post -->

          </div> <!-- end col -->

          <div class="col-lg-6">

            <!-- Large post -->
            <div class="featured-posts-grid__item featured-posts-grid__item--lg">
              <article class="entry card featured-posts-grid__entry">
                <div class="entry__img-holder card__img-holder">
                  <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[3]->idTin] ) }}">
                    <img src="{{asset('layout')}}/<?= $tinmoi[3]->urlHinh?>" alt="" class="entry__img">
                  </a>
                  <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[3]->idTin] ) }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green"><?=$tinmoi[3]->Ten;?></a>
                </div>

                
                <div class="entry__body post-list__body card__body">  
                  <h2 class="entry__title">
                    <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[3]->idTin] ) }}"><?=$tinmoi[3]->TieuDe;?></a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#"><?=$tinmoi[3]->Ten;?></a>
                    </li>
                    <li class="entry__meta-date">
                    <?= date('d:m:y',strtotime($tinmoi[3]->Ngay))?>
                    </li>              
                  </ul>
                </div>
              </article>
            </div> <!-- end large post -->
          </div>          

        </div>
      </div>
    </section>