<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html lang="en" class="no-js">
	<head>
		<title><?php echo ($post_title); ?></title>
	    <meta name="keywords" content="<?php echo ($post_keywords); ?>" />
		<meta name="description" content="<?php echo ($post_excerpt); ?>">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		
			<?php  function _sp_helloworld(){ echo "hello ThinkCMF!"; } function _sp_helloworld2(){ echo "hello ThinkCMF2!"; } function _sp_helloworld3(){ echo "hello ThinkCMF3!"; } ?>
	<?php $portal_index_lastnews="1,2"; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"智慧云行，环境守卫！！", "slide_pic"=>$tmpl."Public/assets/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"智慧云行，环境守卫！！", "slide_pic"=>$tmpl."Public/assets/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"智慧云行，环境守卫！！", "slide_pic"=>$tmpl."Public/assets/images/demo/3.jpg", "slide_url"=>"", ), ); ?>
	<meta name="author" content="智慧云行">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
   	<!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
	<link rel="icon" href="/code/themes/custom_bootx/Public/assets/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/code/themes/custom_bootx/Public/assets/images/favicon.ico" type="image/x-icon">
	<!--[if IE 7]>
	<link rel="stylesheet" href="/code/themes/custom_bootx/Public/assets/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
	<link href="/code/themes/custom_bootx/Public/assets/css/index.css" rel="stylesheet">
	<link href="/code/themes/custom_bootx/Public/assets/css/solution.css" rel="stylesheet">
	
		<style>
	        body{
	    	    overflow-x: hidden;
	        }    	
        </style>
	</head>
<?php echo hook('body_start');?>
<div class='shadow'>
	<header class="navHead">
	    <div class="navLogo"><a href="./"><img src="/code/themes/custom_bootx/Public/assets/images/new/logo_blue.png"></a></div>
		<nav class="navDefalut" id="nav">
       	<?php
 $effected_id="main-menu"; $filetpl="<a href='\$href' target='\$target' style='padding-left: 0px;'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret'></b></a>"; $ul_class="navList" ; $li_class="" ; $style=""; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>
       </nav>
	</header>  
</div>
<body>
<!-- 标头 -->
<section class="solution_banner commmon_banner" id="solution_banner">
	<div class="product_info"> 
		<h3 style="text-align:center"><?php echo ($post_title); ?></h3>
		<p style="text-align:center">
		   <?php echo ($post_excerpt); ?>
		</p>
		<a href="<?php echo ($post_mime_type); ?>" style="color:#fff;">联系我们</a>
	</div>
</section>

<!-- 展示内容 -->
<textarea id="content_filtered" name="" style='display:none;'><?php echo ($post_content_filtered); ?></textarea>
<div id="contentVal"></div>

<div>
<!-- <br>
<br> -->
<!-- <br> -->
<!-- Footer ================================================== -->
<!-- <hr>
<?php echo hook('footer');?>
<div id="footer">
	<p>
		<a href="http://www.cloudsmaker.net/" target="_blank">北京智慧云行科技有限责任公司</a>
		Copyright©2016 智慧云行 京ICP备14046044号-1

	</p>
</div>
<div id="backtotop">
	<i class="fa fa-arrow-circle-up"></i>
</div>
<?php echo ($site_tongji); ?> -->
<!-- <style> 
div{text-align:center} 
</style> -->

<?php echo hook('footer');?>

<div id="footer" class="footer">
    <div>
        <div class="footer_left">
            
            <h3>北京智慧云行科技有限责任公司</h3>
            <p>
            	地址<i>:</i>北京市海淀区北四环西路66号中国技术交易大厦15层1518
            </p>
            <p>
            	电话<i>:</i>010-8260 5160
            </p>
            <p>
            	邮箱<i>:</i>mail@cloudsmarker.net
            </p>
            <div>
                <p><?php echo ($site_copyright); ?>&nbsp;<?php echo ($site_icp); ?></p>
            </div>
    </div>
    <div class="footer_right">
        <img src="/code/themes/custom_bootx/Public/assets/images/new/code.png" alt="" class="code">
        <p class="icon_text">关注我们</p>
    </div>
    </div>
</div>
<!-- <?php echo ($site_tongji); ?> -->


</div>
<script type="text/javascript">
//全局变量
var GV = {
    ROOT: "/code/",
    WEB_ROOT: "/code/",
    JS_ROOT: "public/js/"
};
</script>
<!-- Le javascript
    ================================================== -->
    <script src="/code/themes/custom_bootx/Public/assets/js/jquery-1.9.1.min.js"></script>
	<script src="/code/themes/custom_bootx/Public/assets/js/index.js"></script>
    

<script src="/code/themes/custom_bootx/Public/assets/js/modernizr.js"></script>
<!-- <script src="/code/themes/custom_bootx/Public/assets/js/scrollTabLight.js"></script> -->

<script>
	$(function(){
		 $("#contentVal").html($("#content_filtered").val());
		var t = n = 0, count;
		
		/*导航菜单*/
		 		$('#nav>ul> li').hover(function() {
	            $('.navList', this).slideDown(200);
	            var $a = $(this).children('a:first');
	            $('#nav>ul> li').removeClass("active");
	            $a.addClass("active");
	        }, function() {
	            $('.navList', this).slideUp(100);
	            var $a = $(this).children('a:first');
	            $a.removeClass("active");
	        });
	        $("#nav").hover(function(){
	        	
	        },function(){
	        	$('#nav>ul> li').eq(2).hasClass("active")?"":$('#nav>ul> li').eq(2).addClass("active");
	        })
//	 	 $(".product_nav").scrollTabLight();
	   	 
	  	$("#solution_container_left").find("ul li").click(function(){
	  		
	  		$("#solution_container_left").find("ul li").removeClass("active");
	  		$(this).addClass("active");
	  		
	  		var togContainer=$(this).attr("togContainer");
	  		console.log(togContainer);
	  		
	  		if(togContainer!=null && togContainer!=undefined){{
	  			$(".solution_container_right").css("display","none");
	  			console.log("#"+"togContainer"+togContainer);
	  			console.log($("#"+"togContainer"+togContainer));
	  			$("#"+"togContainer"+togContainer).css("display","block");
	  		}}

	  		
	  		
	  	})
	    
	    
	   
	})
</script>
</body>
</html>