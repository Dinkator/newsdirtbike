<?php use App\Http\Controllers\TinController; ?>

<?php
    $tinmoi = DB::table('tin')->select('*')
    ->orderby('Ngay','desc')
    ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
    ->where('tin.AnHien','=','1')->where('tin.lang','=','vi')
    ->offset(0)->limit(5)->get();
?>

<aside class="widget widget-popular-posts">
            <h4 class="widget-title">TIN MỚI NHẤT</h4>
            <ul class="post-list-small">
            <?php foreach ($tinmoi as $r) { ?>
              <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                  <div class="post-list-small__img-holder">
                    <div class="thumb-container thumb-100">
                      <a href="{{url('tin')}}/{{$r->idTin}}">
                        <img  src="{{asset('layout')}}/<?=$r->urlHinh?>" alt="" class="post-list-small__img--rounded lazyload">
                      </a>
                    </div>
                  </div>
                  <div class="post-list-small__body">
                    <h3 class="post-list-small__entry-title">
                      <a href="{{url('tin')}}/{{$r->idTin}}"><?=$r->TieuDe?></a>
                    </h3>
                    <ul class="entry__meta">
                      <li class="entry__meta-author">
                        <span>by</span>
                        <a href="#"><?=$r->Ten?></a>
                      </li>
                      <li class="entry__meta-date">
                      <?=date('d:m:y',strtotime($r->Ngay))?>
                      </li>
                    </ul>
                  </div>                  
                </article>
              </li>   
              <?php } ?>
            </ul>           
          </aside>