<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../tq/src/main.css" />
    <title>家在台前，爱台前@台前网</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="家在台前，爱台前@台前网">
    <meta name="description" content="家在台前，爱台前@台前网">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />
</head>
<body>
    <div id="header">
	  <div>
	    <?php include "../src/_header.php";?>
		<div id="nav">
			<div id="nav_content">
			  <ul>
				<li><a href="../index.php" title="">首页</a></li>
				<li><a href="../items.php" title="">入驻客户</a></li>
				<li class="seleted"><a href="index.php" title="">地图搜索</a></li>
				<li><a href="#" title="">业务合作</a></li>
				<li><a href="../about.php" title="">关于我们</a></li>
				<li><a href="../contect.php" title="">联系我们</a></li>
			  </ul>
			</div>
		  </div>
		</div>
		<div class="clearfloat"></div>
		<div id="content">
		  <div id="main">
		  <div id="pageMiddle">
			<div class="container" id = "header">
            <div id="filterBox">
            </div>
            <div id="toolsBar" class="clearfix">
                <div class="pull-left">
                    <input type="search" id="keyword" class="input-large search-query" placeholder="输入检索关键字">
                    <span class="btn btn-primary" id="searchBtn">搜索</span>
                </div>
                <div class="row-fluid show-grid pull-left" id="selectedValue">
                </div>
                <div class="pull-right">
                    <span class="btn" id="toggleBtn">展开/收起</span>
                    <span class="btn" id="chgMode">列表/地图</span>
                </div>
            </div>
        </div> <!-- /container -->
    </div>

    <div class="container" id="mainContainer">
        <div class="bs-docs-example" id="listBox">
            <div id="listWrap">
                <table class="table table-hover table-striped">
                    <tbody id="listBoby">
                    </tbody>
                </table>
            </div>
            <div id="pager" class="pagination text-center"></div>
        </div>
    </div> <!-- /container -->

    <div id="mapBox" style="display:none;">
        <div id="map" class="pull-left"></div>
        <div id="mapPanel" class="pull-right">
            <div id="mapListWrap">
                <table class="table table-hover">
                    <tbody id="mapList">
                    </tbody>
                </table>
            </div>
            <div id="mapPager" class="pagination text-center"></div>
        </div>
    </div>
	</div>
	</div>
    <script src="http://api.map.baidu.com/api?v=1.5&ak=LspYwG3FW11O5KrCD024VOHQ" type="text/javascript"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/jquery.pager.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <?php include "../src/_footer.php"?>
</body>
</html>