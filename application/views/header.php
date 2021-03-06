<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title><?php echo $comon_cart_info['cname'];?>-<?php echo $siteInfo['seoTitle'];?></title>
    <base href="<?php echo base_url().'static/';?>"/>
    <meta name="baidu-site-verification" content="hjJozY9GHq" />
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="<?php echo $comon_cart_info['keywords'];?>" />
    <meta name="description" content="<?php echo $comon_cart_info['content'];?>" />
    <meta name="author" content="sky@note520.com"/>

   <link rel="shortcut icon" href="/favicon.ico"/>
   <link rel="stylesheet" href="css/common.css"/>
   <link rel="stylesheet" href="css/style.css"/>
   <!--[if lte IE 9]>
   <link rel="stylesheet" href="css/bug.css"/>
   <script src="js/lib/html5shiv.min.js"></script>
   <script src="js/lib/respond.min.js"></script>
   <![endif]-->
   <!--[if IE 6]>
   <script type="text/javascript" src="js/lib/png.js"></script>
   <script type="text/javascript">
       DD_belatedPNG.fix('.png,img');
   </script>
   <![endif]-->
</head>
<body>
<noscript>
	    <div class="no-js">
	        	您的浏览器已禁用JavaScript脚本，这会影响您的正常访问。为了拥有更好的浏览体验，请启用脚本。
	    </div>
	</noscript><!--noscript over-->
<header class="header" id="header">
    <section class="container-mod">
        <div class="logo-nav-mod fl">
            <div class="logo">
                <h1><a href="/" title="<?php echo $siteInfo['seoTitle'];?>"><img src="images/logo.png" alt="<?php echo $siteInfo['seoDescription'];?>" title="<?php echo $siteInfo['seoTitle'];?>"></a></h1>
                <button type="button" class="nav-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <nav class="nav" id="nav">
                <ul>
                <li class="active"><a href="/">首页</a></li>
	                <?php foreach ($navListArr as $nav_item): ?>
	                    <li>
	                    <a data-toggle="dropdown" href="<?php echo base_url('category/article_list')."/".$nav_item['id'];?>" title="<?php echo $nav_item['name'];?>">
	                    	<?php echo $nav_item['name'];?>
	                    	<?php if(bool_isChildren($nav_item['id'])){?>
	                    		<span class="caret"></span>
	                    	<?php }?></a>
	                    <?php if(bool_isChildren($nav_item['id'])){?>
		                    <dl>
		                        <?php $subArr=trace_subNav($nav_item['id']); foreach ($subArr as $subRow):?>
		                        	<dd><a href="<?php echo base_url('category/article_list/'.$subRow['cid']);?>" title="<?php echo $subRow['cname'];?>"><?php echo $subRow['cname'];?></a></dd>
		                        <?php endforeach;?>
		                    </dl>
	                    <?php }?>
	                    </li>
	                <?php endforeach ?>
                </ul>
                <div class="clear"></div>
            </nav>
            <div class="clear"></div>
        </div>
        <div class="search-mod fr">
            <div class="search-bar">
                <form class="search-form" name="searchForm" action="" method="post">
                    <input type="search" placeholder="搜索" class="search-input fl">
                    <input type="submit" title="点击搜索" value="" class="search-btn fr">
                </form>
            </div>
        </div>
        <div class="clear"></div>
    </section>
</header><!--/header-->



