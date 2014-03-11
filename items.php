<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="tq/src/main.css" />
	<title>家在台前，爱台前@台前网</title>
	<LINK href="tq/src/css.css" type=text/css rel=stylesheet>
	<SCRIPT src="tq/src/xixi.js" type=text/javascript></SCRIPT>
  </head>
  <body>
    <div id="header">
	  <div>
	    <div class="page_title">
		  <div class="title_style" style="float:left;">
		    <div style="width:360px;border-right:1px solid #0099FF;float:left;">
		      <div style="float:left;">
			    <span style="font-size:28px;">家在台前，爱台前</span>
			  </div>
			  <div style="float:right;">
				<span style="font-size:16px;color:#0099FF;">@台前网</span><br />
			    <span style="font-size:10px;color:#0099FF;">TAIQIANWANG</span>
			  </div>
			</div>
			<div style="margin:8px 0 0 0px;float:left;">
		      <span style="font-size:22px;color:#0099FF;">一站式生活平台</span>
			</div>
			<div style="margin:12px 0 0 48px;float:left;font-size:14px;">
		      <span style="color:#666666;">由 </span><span style="color:#FF9900;">梦想之星工作室</span><span style="color:#666666;"> 提供技术支持</span>
			  <br />
			  <span style="font-weight:normal;"><?php echo date("Y年m月d日 H:i:s",time())?></span><br />
			  <div style="margin-left:-28px;"><script type="text/javascript" src="http://ext.weather.com.cn/66786.js"></script></div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<div id="nav">
	    <div id="nav_content">
		  <ul>
		    <li><a href="index.php" title="">首页</a></li>
		    <li class="seleted"><a href="items.php" title="">入驻客户</a></li>
			<li><a href="lbs/index.php" title="">地图搜索</a></li>
			<li><a href="#" title="">业务合作</a></li>
			<li><a href="about.php" title="">关于我们</a></li>
			<li><a href="contect.php" title="">联系我们</a></li>
		  </ul>
		</div>
	  </div>
	<div id="content">
	  <div id="main">
		<div id="second" style="width:100%;padding:10px;font:12px/1.5 tahoma,arial,宋体;">
		  <div id="category_title">
		    <span>中小学、幼儿园</span>
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
			  <a href="<?php echo 'http://taiqianwang.eicp.net/'.$values[$i%$numbers]["url"]?>" target="_blank">
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
		<div id="thirds" style="width:100%;padding:10px;font:12px/1.5 tahoma,arial,宋体;">
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
			  <a href="<?php echo 'http://taiqianwang.eicp.net/'.$values[$i%$numbers]["url"]?>" target="_blank">
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
	<div id="footer">
	  <div style="margin-top:20px;text-align:center;font-size:12px;line-height:24px;">
	    <a href="about.php" style="">技术支持@梦想之星工作室</a><br />
		<span style="">建议使用IE8及以上、火狐、Chrome等浏览器浏览</span>
	  </div>
	</div>
  </body>
</html>