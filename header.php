<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>クリーンラボ</title>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/ress.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link href="<?php echo get_template_directory_uri(); ?>/assets/scss/main.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/scss/hamburger.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/scss/btn.css" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>
<header>
<p class="top-message fw-bold mt-3 mb-1 ps-3">24時間年中無休で対応可能! カードOK! 見積もり無料! 当日予約OK!</p>
<div class="container d-flex justify-content-between align-items-center py-2">
  <h1 class="site-title ex-bold mb-2"><a class="color-black" href="<?php echo home_url(); ?>">クリーンラボ</a></h1>
  <table class="branch-table">
    <tr>
      <td>東京本店</td>
      <td>埼玉営業所</td>
    </tr>
    <tr>
      <td>神奈川営業所</td>
      <td>千葉営業所</td>
    </tr>
  </table>
  <div><?php echo get_template_part('template/hamburger'); ?></div>
  <!-- <p class="area bg-main text-white rounded">東京・神奈川・千葉・埼玉エリア対応</p> -->
</div>
</header>