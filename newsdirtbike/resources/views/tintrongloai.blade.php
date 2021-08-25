<?php
    use App\Http\Controllers\TinController;
?>
@extends('layout')
@section('tintrongloai')
    @foreach ($listtin as $r)
    <div class="col-md-9">
                    <article class="entry card">
                      <div class="entry__img-holder card__img-holder">
                        <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$r->idTin] ) }}">
                          <div class="thumb-container thumb-70">
                            <img data-src="<?= $r->urlHinh?>" src="{{asset('layout')}}/<?= $r->urlHinh?>" class="entry__img lazyload" alt="" />
                          </div>
                        </a>
                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">Motocross </a>
                      </div>

                      <div class="entry__body card__body">
                        <div class="entry__header"> 
                          <h2 class="entry__title">
                            <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$r->idTin] ) }}"><?=$r->TieuDe;?> </a>
                          </h2>
                          <ul class="entry__meta">
                            <li class="entry__meta-author">
                              <span>by</span>
                              <a href="#">Dinh</a>
                            </li>
                            <li class="entry__meta-date">
                            <?=date('d:m:y',strtotime($r->Ngay));?>
                            </li>
                          </ul>
                        </div>
                        <div class="entry__excerpt">
                          <p><?= $r->TomTat?></p>
                        </div>
                      </div>
                    </article>
                  </div>
    @endforeach
    <nav class="pagination">
    <a href=" http://localhost:81/ASS1/public/tin-trong-loai/1?page=1" class="pagination__page">1</a>
            <a href=" http://localhost:81/ASS1/public/tin-trong-loai/1?page=2" class="pagination__page">2</a>
            <a href="http://localhost:81/ASS1/public/tin-trong-loai/1?page=3" class="pagination__page">3</a>
            <a href="http://localhost:81/ASS1/public/tin-trong-loai/1?page=4" class="pagination__page">4</a>
            <a href="http://localhost:81/ASS1/public/tin-trong-loai/1?page=5" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>
          </nav>
   
@endsection