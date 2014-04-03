<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="tq/src/main.css" />
	<title>家在台前，爱台前@台前网</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="台前 生活 平台">
    <meta name="description" content="台前生活平台">
  </head>
  <body>
    <?php include "src/_header.php";?>
	<div id="nav">
	  <div id="nav_content">
		<ul>
		  <li><a href="index.php" title="">首页</a></li>
		  <li><a href="lbs/index.php" title="">地图搜索</a></li>
		  <li class="seleted"><a href="items.php" title="">入驻客户</a></li>
		  <li><a href="about.php" title="">关于我们</a></li>
		  <li><a href="contect.php" title="">联系我们</a></li>
		</ul>
	  </div>
	</div>
	<?php 
		$data = array("1"=>array("title"=>"台前网","content"=>"台前网致力于为广大商家提供广告宣传平台、新闻发布媒体，方便商家、店铺进行宣传，也方便大家更方便的找到需要信息。"),
			"20"=>array("title"=>"台前新区医院","content"=>"台前新区医院")
		);
		$item = $data[$_GET['id']];
	?>
	<div id="content">
	  <div id="main">
	    <div id="news">
		  <div id="news_content">
		    <br />
		    <div id="category_title">
		      <span><?php echo $item["title"]?></span>
		    </div>
		    <div style="margin-left:40px;">
			<span style="font-weight:bold;color:#00A8FF;"></span>
			<span><?php echo $item["content"]?></span>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<?php include "src/_footer.php"?>
  </body>
</html>