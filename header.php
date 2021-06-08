<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-172352409-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-172352409-1');
</script>
<meta name="google-site-verification" content="NyrKZbZ9cODulTNbXofmdNTz_wgx7fMEY_TPbaMhe5M" />
<script data-ad-client="ca-pub-5735393956581987" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 <meta charset="utf-8">
 <title>株式会社K-walk</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">    
<script data-ad-client="ca-pub-3909125612705756" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>

<?php if ( is_home() || is_front_page() ) : ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mystyle.css">
<?php endif; ?>
<?php if ( is_page('contact') ): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mystyle.css">
<?php endif; ?>
<?php if ( is_page('details') ): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/details.css">
<?php endif; ?>

<?php if ( is_page('policy') ): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/policy.css">
<?php endif; ?>

<?php if ( is_page('flow') ): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/flow.css">
<?php endif; ?>

<?php if ( is_page('performance') ): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/performance.css">
<?php endif; ?>

<?php if (is_404()): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mystyle.css">
<?php endif; ?>

 <?php if ( is_single() ): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mystyle.css">
<?php endif; ?>

<?php if ( is_category() ): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mystyle.css">
<?php endif; ?>

 <?php if ( is_page('price') ): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/price.css">
<?php endif; ?>

 <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
 <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <?php wp_enqueue_script('jquery'); ?>
  <?php wp_enqueue_script('bootstrap-js','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',array('jquery')); ?>  
 <?php wp_head(); ?>
</head>


<body style="padding-top:50px;" <?php body_class(); ?>>
 <header>
 <nav class="navbar navbar-default navbar-fixed-top" style="margin-bottom:0;">
   <div class="navbar-header">
   <a class="navbar-brand" href="<?php echo home_url(); ?>">株式会社K-walk</a>
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
       <span class="sr-only">メニュー</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
   </div>
   <div id="bs-navbar-collapse-1" class="collapse navbar-collapse">
     <?php
 $args = array(
 'menu_class' => 'nav navbar-nav',
 'container' => false,
 );
 wp_nav_menu($args);
 ?>
   </div>
 </nav>
 <div id="wptime-plugin-preloader"></div>
 </header>
 <div id="particles-js"></div>
<link rel="stylesheet" href="https://yuis.xsrv.jp/cdn/css/particles_js/main.css">
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="https://yuis.xsrv.jp/cdn/js/particles_js/app.js"></script>

<style>
*{
 font-family: 'Avenir','Helvetica Neue','Helvetica','Arial','Hiragino Sans','ヒラギノ角ゴシック',YuGothic,'Yu Gothic','メイリオ', Meiryo,'ＭＳ Ｐゴシック','MS PGothic' ;
font-weight:bold;
}
</style>
