<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="tq/src/main.css" />
	<title>����̨ǰ����̨ǰ@̨ǰ��</title>
	<LINK href="tq/src/css.css" type=text/css rel=stylesheet>
	<SCRIPT src="tq/src/xixi.js" type=text/javascript></SCRIPT>
  </head>
  <body>
    <?php include "src/_header.php";?>
	<div id="nav">
	    <div id="nav_content">
		  <ul>
		    <li><a href="index.php" title="">��ҳ</a></li>
		    <li class="seleted"><a href="items.php" title="">��פ�ͻ�</a></li>
			<li><a href="lbs/index.php" title="">��ͼ����</a></li>
			<li><a href="#" title="">ҵ�����</a></li>
			<li><a href="about.php" title="">��������</a></li>
			<li><a href="contect.php" title="">��ϵ����</a></li>
		  </ul>
		</div>
	  </div>
	<div id="content">
	  <div id="main">
		<div id="second" style="width:100%;padding:10px;font:12px/1.5 tahoma,arial,����;">
		  <div id="category_title">
		    <span>��Сѧ���׶�԰</span>
		  </div>
		    <?php 
				$values = array(
					array("name"=>"����֮����վ������","url"=>"taiqian/contect.php"),
					array("name"=>"̨ǰ˼Դʵ��ѧУ","url"=>"siyuan"),
					array("name"=>"̨ǰ��־��ѧ","url"=>"lizhi"),
					array("name"=>"̨ǰ�廪С��ʿ�׶�԰","url"=>"xiaoboshi"),
					array("name"=>"̨ǰ���Сѧ","url"=>"cyh"),
					array("name"=>"̨ǰ��԰�׶�԰","url"=>"yiyuan"),
					array("name"=>"̨ǰ����ҽԺ","url"=>"#")
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
					<span>�򵥽���У԰�Ļ���</span><br />
					<span>�绰��13472604861</span><br />
					<span>λ�ã�̨ǰ��������·������·��</span>
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
		<div id="thirds" style="width:100%;padding:10px;font:12px/1.5 tahoma,arial,����;">
		  <div id="category_title">
		    <span>��ҵ��λ��ҽԺ</span>
		  </div>
		    <?php 
				$values = array(
					array("name"=>"̨ǰ����ҽԺ","url"=>"#")
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
					<span>�򵥽���У԰�Ļ���</span><br />
					<span>�绰��13472604861</span><br />
					<span>λ�ã�̨ǰ��������·������·��</span>
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