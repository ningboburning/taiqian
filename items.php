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
	<div id="content">
	  <div id="main">
		<div id="second" style="width:100%;padding:10px;font:12px/1.5 tahoma,arial,ËÎÌå;">
		  <div id="category_title">
		    <span>学校</span>
		  </div>
		    <?php 
				$values = array(
					array("name"=>"梦想之星网站工作室","url"=>"taiqian/contect.php"),
					array("name"=>"台前思源实验学校","url"=>"siyuan"),
					array("name"=>"台前励志中学","url"=>"lizhi"),
					array("name"=>"台前清华小博士幼儿园","url"=>"xiaoboshi"),
					array("name"=>"台前曹杨韩小学","url"=>"cyh"),
					array("name"=>"台前艺园幼儿园","url"=>"yiyuan"),
					array("name"=>"台前新区医院","url"=>"#")
				);
				$numbers = count($values);
				for($i=0;$i<$numbers;$i++){
			?>
			<div id="service">
			  <a href="<?php echo '/'.$values[$i%$numbers]["url"]?>" target="_blank">
				<div id="service_2">
				  <div id="name">
					<img style="width:100%;" src="tq/images/<?php echo $i%$numbers+1?>.jpg">
					<span><?php echo $values[$i]["name"]?></span>
				  </div>
				  <div id="content_2">
					<span>简单介绍校园文化。</span><br />
					<span>电话：13472604861</span><br />
					<span>位置：台前新区玮六路北经七路东</span>
				  </div>
				</div>
			  </a>
		  </div>
		    <?php 
				}
		    ?>
		  <br />
		  <div class="clearfloat" style=""></div>
		</div>
		<div class="clearfloat" style=""></div>
		<!-- item end -->
		<div id="thirds" style="width:100%;padding:10px;font:12px/1.5 tahoma,arial,ËÎÌå;">
		  <div id="category_title">
		    <span>事业单位、医院</span>
		  </div>
		    <?php 
				$values = array(
					array("name"=>"台前新区医院","url"=>"#")
				);
				$numbers = count($values);
				for($i=0;$i<$numbers;$i++){
			?>
			<div id="service">
			  <a href="<?php echo '/'.$values[$i%$numbers]["url"]?>" target="_blank">
				<div id="service_2">
				  <div id="name">
					<img style="width:100%;" src="tq/images/<?php echo $i%$numbers+1?>.jpg">
					<span><?php echo $values[$i]["name"]?></span>
				  </div>
				  <div id="content_2">
					<span>简单介绍校园文化。</span><br />
					<span>电话：13472604861</span><br />
					<span>位置：台前新区玮六路北经七路东</span>
				  </div>
				</div>
			  </a>
		  </div>
		    <?php 
				}
		    ?>
		  <br />
		  <div class="clearfloat" style=""></div>
		</div>
		<!-- item end -->
		</div>
	  </div>
	  <div class="clearfloat"></div>
	</div>
	<?php include "src/_footer.php"?>
  </body>
</html>