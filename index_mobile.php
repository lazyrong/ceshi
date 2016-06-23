<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"><meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="Cache-Control" content="max-age=10">
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<base href=".">
<link href="http://quce.cdn.itwlw.com/index/css/mui.min.css" rel="stylesheet">
<link rel="stylesheet" href="global.css">
<title>测试123</title>
<!-- 统计代码 -->
<?php 
require_once './a_include/header_stat.php';
?>
</head>
<body>
<div class="header">
		<h1 id="logo"><img src="m-logo.png"><span style="display:inline-block;line-height:3rem;color:#ff7585;font-size:1.2rem;float:right;font-weight:bold;">商务合作</span></h1>
</div>
<!-- 精品测试推荐 -->
	<div class="main-content">
		<h5 class="main-title">精品测试</h5>
		<ul class="tj-ul">
		<!-- 推荐测试 列表 -->
      <?php 
      $idx = 0;
      foreach ($app_top_list as $hot_app) {
      	if (!empty($app_list[$hot_app])) {
      		$idx++;
      ?>
			<li class="tj-li">
				<a href="./<?=$hot_app?>">
				<figure class="cover">
					<img class="tj-img" src="<?=$app_list[$hot_app]['logo']?>" alt="">
				</figure>
					<div class="tj-title"><?=$app_list[$hot_app]['title']?></div>
				</a>
			</li>
      <?php 
		}
      }
      ?>		
		<!-- 推荐测试 列表结束 -->
		</ul>
	</div>
<!-- 全部测试推荐 -->
	<div class="main-content">
		<h5 class="main-title">全部测试</h5>
		<div class="tab-menu-box">
			<ul class="tab-menu clear">
				<li><a href="" class="active">出必测</a></li>
				<li><a href="">东京热</a></li>
				<li><a href="">最推荐</a></li>
			</ul>
		</div>

		<ul class="qb-ul" id="tab1">
		<!-- 全部测试 列表 -->
      <?php 
      $idx = 0;
      foreach ($app_index_list as $hot_app) {
      	if (!empty($app_list[$hot_app])) {
      		$idx++;
      ?>
			<li>
				<a href="./<?=$hot_app?>">
				<figure class="cover-bg">
					<img class="qb-img" src="<?=$app_list[$hot_app]['logo']?>" alt="">
				</figure>
				<div class="qb-meta">
					<div class="qb-title"><?=$app_list[$hot_app]['title']?></div>
					<span class="iconfont icon-start-filled5"></span>
					<span class="count"><?=$app_list[$hot_app]['num']?> 人在测</span>
					<div class="tj-title">如果你是一个没有生命的物件，比如，家用电器，你会是什么？有没有思考过这个有趣的问题呢？赶快来测试看看吧！</div>			
				</div>
				</a>
				<a href="./<?=$hot_app?>" class="qb-play">
				去测
				<i class="iconfont icon-right"></i>
				</a>			
			</li>
			<?php 
      	 }
        }
			?>
		<!-- 全部测试 列表 结束 -->
		</ul>
	</div>
    <div>
        <br>
        <p style="text-align: center;">2016 &copy; Copyright 微测试</p>
        <br><br><br>
    </div>
			
	<!--/footer-->

</div> <!--/page-->	
</div>
<?php 
require_once './a_include/admobilebuttom.php';
?>

<?php 
require_once './a_include/footer_stat.php';
?>
</body></html>