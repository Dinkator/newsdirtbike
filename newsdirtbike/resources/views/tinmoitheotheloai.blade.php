<?php use App\Http\Controllers\TinController; ?>
<?php
    $TenTL=  DB::table('theloai')->where("idTL",$idTL)->value("TenTL");
    $tinmoi = DB::table('tin')
    ->select('idTin', 'TieuDe', 'urlHinh','Ngay','Ten','TomTat','Tin_KD')
    ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
    ->orderby('Ngay','desc')->where('tin.AnHien','=','1')
    ->where('tin.idTL','=',$idTL)
    ->offset(0)->limit(900)->get();
?>
@section('tinmoitheotheloai')
<section class="section tab-post mb-16">
            <div class="title-wrap title-wrap--line">
              <h3 class="section-title">TIN MỚI THEO THỂ LOẠI</h3>
              <div class="tabs tab-post__tabs"> 
                <ul class="tabs__list">
                  <li class="tabs__item tabs__item--active">
                  <?php                       
                            $loaitincon = DB::table('loaitin')->select('*')
                            ->orderby('ThuTu','ASC')->where('AnHien','=','1')
                            ->where('idTL','=',$idTL)
                            ->offset(0)->limit(4)->get();
                     ?>
                      @foreach ($loaitincon as $lt)       
                        <a href="#tab-all" class="tabs__trigger">{{$lt->Ten}}</a>
                      @endforeach
                  </li>
                  
                </ul> <!-- end tabs -->
              </div>
            </div>

            <!-- tab content -->
            <div class="tabs__content tabs__content-trigger tab-post__tabs-content">
              
              <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
                <div class="row card-row">
                  <div class="col-md-6">
                    <article class="entry card">
                      <div class="entry__img-holder card__img-holder">
                        <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[7]->idTin] ) }}">
                          <div class="thumb-container thumb-70">
                            <img src="{{asset('layout')}}/<?= $tinmoi[7]->urlHinh?>" class="entry__img lazyload" alt="" />
                          </div>
                        </a>
                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet"><?=$tinmoi[7]->Ten;?> </a>
                      </div>

                      <div class="entry__body card__body">
                        <div class="entry__header">
                          
                          <h2 class="entry__title">
                            <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[7]->idTin] ) }}"><?=$tinmoi[7]->TieuDe;?> </a>
                          </h2>
                          <ul class="entry__meta">
                            <li class="entry__meta-author">
                              <span>by</span>
                              <a href="#"><?=$tinmoi[7]->Ten;?> </a>
                            </li>
                            <li class="entry__meta-date">
                            <?=date('d:m:y',strtotime($tinmoi[7]->Ngay));?>
                            </li>
                          </ul>
                        </div>
                        <div class="entry__excerpt">
                          <p><?= $tinmoi[7]->TomTat?></p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-6">
                    <article class="entry card">
                      <div class="entry__img-holder card__img-holder">
                        <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[0]->idTin] ) }}">
                          <div class="thumb-container thumb-70">
                            <img src="{{asset('layout')}}/<?= $tinmoi[0]->urlHinh?>" class="entry__img lazyload" alt="" />
                          </div>
                        </a>
                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet"><?=$tinmoi[0]->Ten;?> </a>
                      </div>

                      <div class="entry__body card__body">
                        <div class="entry__header">
                          
                          <h2 class="entry__title">
                            <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[0]->idTin] ) }}"><?=$tinmoi[0]->TieuDe;?> </a>
                          </h2>
                          <ul class="entry__meta">
                            <li class="entry__meta-author">
                              <span>by</span>
                              <a href="#"><?=$tinmoi[0]->Ten;?> </a>
                            </li>
                            <li class="entry__meta-date">
                            <?=date('d:m:y',strtotime($tinmoi[0]->Ngay));?>
                            </li>
                          </ul>
                        </div>
                        <div class="entry__excerpt">
                          <p><?= $tinmoi[0]->TomTat?></p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-6">
                    <article class="entry card">
                      <div class="entry__img-holder card__img-holder">
                        <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[5]->idTin] ) }}">
                          <div class="thumb-container thumb-70">
                            <img src="{{asset('layout')}}/<?= $tinmoi[5]->urlHinh?>"  class="entry__img lazyload" alt="" />
                          </div>
                        </a>
                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet"><?=$tinmoi[5]->Ten;?> </a>
                      </div>

                      <div class="entry__body card__body">
                        <div class="entry__header">
                          
                          <h2 class="entry__title">
                            <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[5]->idTin] ) }}"><?=$tinmoi[5]->TieuDe;?> </a>
                          </h2>
                          <ul class="entry__meta">
                            <li class="entry__meta-author">
                              <span>by</span>
                              <a href="#"><?=$tinmoi[5]->Ten;?> </a>
                            </li>
                            <li class="entry__meta-date">
                            <?=date('d:m:y',strtotime($tinmoi[5]->Ngay));?>
                            </li>
                          </ul>
                        </div>
                        <div class="entry__excerpt">
                          <p><?= $tinmoi[5]->TomTat?></p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-6">
                    <article class="entry card">
                      <div class="entry__img-holder card__img-holder">
                        <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[6]->idTin] ) }}">
                          <div class="thumb-container thumb-70">
                            <img src="{{asset('layout')}}/<?= $tinmoi[6]->urlHinh?>" class="entry__img lazyload" alt="" />
                          </div>
                        </a>
                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet"><?=$tinmoi[6]->Ten;?> </a>
                      </div>

                      <div class="entry__body card__body">
                        <div class="entry__header">
                          
                          <h2 class="entry__title">
                            <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[6]->idTin] ) }}"><?=$tinmoi[6]->TieuDe;?> </a>
                          </h2>
                          <ul class="entry__meta">
                            <li class="entry__meta-author">
                              <span>by</span>
                              <a href="#"><?=$tinmoi[6]->Ten;?> </a>
                            </li>
                            <li class="entry__meta-date">
                            <?=date('d:m:y',strtotime($tinmoi[6]->Ngay));?>
                            </li>
                          </ul>
                        </div>
                        <div class="entry__excerpt">
                          <p><?= $tinmoi[6]->TomTat?></p>
                        </div>
                      </div>
                    </article>
                  </div>
                 
                 
              </div> <!-- end pane 1 -->

             
            </div> <!-- end tab content -->            
          </section> 
@endsection

