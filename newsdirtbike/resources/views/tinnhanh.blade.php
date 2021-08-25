<?php use App\Http\Controllers\TinController; ?>

<?php
    $tinmoi = DB::table('tin')->select('idTin', 'TieuDe', 'Ngay','Ten', 'urlHinh')
    ->orderby('Ngay','desc')
    ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
    ->where('tin.AnHien','=','1')->where('tin.lang','=','vi')
    ->offset(0)->limit(100)->get();
?>

<div class="container">
      <div class="trending-now">
        <span class="trending-now__label" style="background-color:yellow;">
          <i class="ui-flash "style="color:black;"></i>
          <span style="color:black;" class="trending-now__text d-lg-inline-block d-none">TIN NHANH</span>
        </span>
        <div class="newsticker">
      
          <ul class="newsticker__list">
          <?php foreach ($tinmoi as $r) { ?>
            <li class="newsticker__item"><a href="single-post.html" class="newsticker__item-url"><?=$r->TieuDe?></a></li>
            <?php } ?>
        </ul>
        </div>
        <div class="newsticker-buttons">
          <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-left"></i></button>
          <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-right"></i></button>
        </div>
      </div>
     
    </div>