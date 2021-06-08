<?php get_header(); ?>
<div class="container-fluid">
  <div class="cover-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/top.jpg');">
    <div class="cover-text text-center">
      <section class="effect-fade">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/toptext.png" alt="トップページ画像"></a>
      </section>
    </div>
  </div>

  <h1 class="text-center">-ABOUT-</h1>
  <div class="maintext">
    <div class="maintextbg">
      <div class="row">
        <div class="col-md-12">
          <section class="effect-fade">
            <p>
              超人口減少時代に入り、さらに少子高齢化の影響で日本各地の地方では年々、若い人材が減り、地域経済も先行きが不安という声が多く聞こえてきていても、効果的な施策をうてている自治体の少ない状況です。

              我が町加茂市も例外なく、人口減少はすでに始まっており、あと20年もすると人口が三分の二になってしまうと言われています。

              当然市の財政も厳しく、顧客はもちろん従業員の確保や事業承継がうまくできなかった会社や店舗は廃業を余儀なくされ、人口と同じく、事業所数も減少の一途をたどっています。
            </p>
          </section>
        </div>
      </div>


      <br>

      <div class="mainpbg">

        <div class="row">
          <div class="col-lg-6">
                      </div>
                    <div class="col-lg-6">
                      <!-- <div class="imgg"> -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/main4.png" alt="メイン">
                      <!-- </div> -->
                    </div>
                    
                  </div>

                  <div class="row">

          <div class="col-lg-5">
          </div>
          <section class="effect-fade">
            <div class="col-lg-7 mainp">
              <p>
                弊社はこの人口が減り、経済も衰退してきている地方の街でも安心して幸せに住み続けられるための一助になるため、ＷＥＢ，ＩＴ，ＡＩを駆使しマンパワーが減ってしまう地域でもその地域の魅力を発信し、訪れた方、住んでる方にその地域の魅力を知ってもらい、体験し、結果その地域のファンを創るべく、自治体や各企業、個店をサポートしていきます。
                その想いを胸にまずは弊社がある加茂市から<a class="text-primary">「健康×歩く×ＩＴ」</a>で活性化を図り、加茂がこれからも住み続けられるまちになるためにチャレンジしていきます。
              </p>
            </div>
          </section>
          </div>

      </div>
    </div>
    
  </div>

</div>
<section id="content">
  <div id="content-wrap" class="container-fluid">
    <div id="main" class="col-md-12 desbg">
      <div id="description">
        <h1 class="text-center">-WORKS-</h1>


        <div class="row mainbox">
          <section class="effect-fade">
            <h2 class="text-center">ホームページ制作</h2>
            <div class="col-md-6">
              <img src="<?php echo get_template_directory_uri(); ?>/images/priceimg.png" alt="ホームページ制作">
            </div>
            <div class="col-md-6">
              <div class="desmain">
                <p>自社や商品の魅力をわかりやすく伝えるホームページやランディングページの制作、運営サポートを行います。</p>
                <a href="#" id="btnm" class="btn btn-info" role="button">詳細はこちら</a>
              </div>
            </div>
          </section>
        </div>

        <div class="row mainbox">
          <section class="effect-fade">
            <h2 class="text-center">アプリ開発</h2>
            <div class="col-md-6 col-md-push-6">
              <img src="<?php echo get_template_directory_uri(); ?>/images/popimg.jpg" alt="チラシ、名刺デザイン">
            </div>
            <div class="col-md-6 col-md-pull-6">
              <div class="desmain">
                <p>オープンソースソフトウェア (OSS)を用いたローコストアプリを開発、運営サポートします。</p>
                <a href="#" id="btnm" class="btn btn-info" role="button">詳細はこちら</a>
              </div>
            </div>
          </section>
        </div>

        <div class="row mainbox">
          <section class="effect-fade">
            <h2 class="text-center">AIチャットボット</h2>
            <div class="col-md-6">
              <img src="<?php echo get_template_directory_uri(); ?>/images/priceimg.png" alt="ホームページ制作">
            </div>
            <div class="col-md-6">
              <div class="desmain">
                <p></p>
                <a href="#" id="btnm" class="btn btn-info" role="button">詳細はこちら</a>
              </div>
            </div>
          </section>
        </div>

        <div class="row mainbox">
          <section class="effect-fade">
            <h2 class="text-center">イベント運営</h2>
            <div class="col-md-6 col-md-push-6">
              <img src="<?php echo get_template_directory_uri(); ?>/images/schoolimg.png" alt="チラシ、名刺デザイン">
            </div>
            <div class="col-md-6 col-md-pull-6">
              <div class="desmain">
                <p>非対面型のスタンプラリーやロケーションＡＲを用いた観光案内などのイベントの運営をサポートします。</p>
                <a href="#" id="btnm" class="btn btn-info" role="button">詳細はこちら</a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <div id="posts">
            <h1>NEWS</h1>
            <hr>

            <!-- 記事一覧を5件まで表示 -->

            <?php
            $catposts = get_posts($query_string . 'category_name=news&numberposts=5');
            // category名はnews、表示件数は5件
            if ($posts) : foreach ($catposts as $post) :
            ?>
                <p>
                  <?php the_time('Y年n月j日'); ?>&nbsp;&nbsp;
                  <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                  <!-- 記事タイトルを取得してリンクへ -->
                </p>
                <hr>
            <?php
              endforeach;
            endif;
            ?>
            <!-- すべて表示のリンク -->
            <?php

            $cat_id = get_cat_ID('news');
            $cat_link = get_category_link($cat_id);
            // カテゴリー名nwesを指定
            ?>
            <a href="<?php echo esc_url($cat_link); ?>" title="allnews">すべて表示</a>
          </div>
        </div>
        <div class="col-md-6">
          <h1>OFFICIAL SNS</h1>
          <section id="snsmain">
            <a class="twitter-timeline" data-height="500" data-chrome=”noheader” href="https://twitter.com/Kwalk_official?ref_src=twsrc%5Etfw">Tweets by K-walk</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </section>
        </div>
      </div>


    </div>
  </div>
  </div>
</section>
<br><br>
<section class="py-5 bg-lightgreen">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-1">
                <a href=""><img src="<?php echo get_template_directory_uri();?>/images/toptext.png" alt="フッターロゴ" class="footer-logo mb-3"></a>
                <p class="mb-0">株式会社K-walk</p>

                    <p>
                    資本金　　5,000,000円<br>
                    代表者　　代表取締役社長　永山　光夫<br>
                    創　業　　2021年2月<br>
                    所在地　　新潟県加茂市幸町１－３－２６<br>
                    連絡先　　0256-53-3572<br>
                    </p>
            </div>
            <div class="col-md-6 order-md-2 mb-4 mb-md-0">
                <div class="mb-3 card shadow-sm"><div class="p-3">  
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1798.359766871453!2d139.04631506150847!3d37.66393551211402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff4e0469781e639%3A0xfda593a45a1c8a9f!2z44CSOTU5LTEzMTMg5paw5r2f55yM5Yqg6IyC5biC5bm455S677yR5LiB55uu77yT4oiS77yS77yW!5e0!3m2!1sja!2sjp!4v1620906601397!5m2!1sja!2sjp" width=100% height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/main.js"></script>


<script type="text/javascript">
  jQuery(function($) {
    $('a[href^="#"]').click(function() {
      var speed = 800;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $("html, body").animate({
        scrollTop: position
      }, speed, "swing");
      return false;
    });
  });

  jQuery(function($) {
    window.onload = function() {
      scroll_effect();

      $(window).scroll(function() {
        scroll_effect();
      });

      function scroll_effect() {
        $('.effect-fade').each(function() {
          var elemPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > elemPos - windowHeight) {
            $(this).addClass('effect-scroll');
          }
        });
      }
    };

  });








  function imgClick() {
    alert("準備中です");
  }
</script>


<!-- </script> -->
