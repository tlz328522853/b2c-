<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html>
	<head>
		<title><?php echo ($site_name); ?></title>
		<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
		<meta name="description" content="<?php echo ($site_seo_description); ?>">
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
	
	</head>
<!-- <body class="body-white"> -->
<!-- <?php echo hook('body_start');?>
<div class='shadow'>
	<header class="navHead">
	    <div class="navLogo"><a href="./"><img src="/code/themes/custom_bootx/Public/assets/images/new/logo_blue.png"></a></div>
		<nav class="navDefalut" id="nav">
       	<?php
 $effected_id="main-menu"; $filetpl="<a href='\$href' target='\$target' style='padding-left: 0px;'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret'></b></a>"; $ul_class="navList" ; $li_class="" ; $style=""; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>
       </nav>
	</header>  
</div> -->
<?php $home_slides=sp_getslide("portal_index"); $home_slide_1920s=sp_getslide("portal_index_1920"); $home_slide_menus=sp_getslide("portal_menu"); $home_slides=empty($home_slides)?$default_home_slides:$home_slides; ?>

<!-- <body  style="background:url('<?php echo sp_get_asset_upload_path($home_slides[0][slide_pic]);?>') fixed center top no-repeat #2e322e;"> -->

<body>
<div class='shadow'>
	<header class="navHead">
	    <div class="navLogo"><img src="themes/custom_bootx/Public/assets/images/logo_blue.png"></div>
	     <nav class="navDefalut" id="nav">
       	 <?php
 $effected_id="main-menu"; $filetpl="<a href='\$href' target='\$target' style='padding-left: 0px;'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret'></b></a>"; $ul_class="navList" ; $li_class="" ; $style=""; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>
       </nav>
	</header> 
	
</div>

<section class="product_brand commmon_banner home_banner" id="home_banner">
	<ul class="ulistB">
		<li class="fistImg_li">
			<img  src="themes/custom_bootx/Public/assets/images/home_banner1920bgy.png"/>
			<div class="home_banner_topArrow" id="home_banner_topArrow"></div>
			<div class="home_banner_leftArrow" id="home_banner_leftArrow"></div>
			<div class="home_banner_rightArrow" id="home_banner_rightArrow"></div>
			<div class="home_banner_ball1" id="home_banner_ball1"></div>
			<div class="home_banner_ball2" id="home_banner_ball2"></div>
			<div class="home_banner_ball3" id="home_banner_ball3"></div>
			<div class="home_banner_ball4" id="home_banner_ball4"></div>
			<div class="home_banner_ball5" id="home_banner_ball5"></div>
			<div class="home_banner_bottomWave" id="home_banner_bottomWave"></div>
		</li>
		<li>
			<img  src="themes/custom_bootx/Public/assets/images/home_banner3.png"/>
			<div class="commmon_banner_text">
				<h2>行业解决方案服务商</h2>
				<p>为“互联网+传统行业”建设提供完善的软硬件解决方案</p>
			</div>
		</li>
	</ul>
	<div class="control-dot">
		<ul id="fouse">
			<li class="active">1</li>
			<li>2</li>
		</ul>
	</div>
	
</section>
	
	<!-- <div desc="动态控制图片上的文字和链接">
      <?php if(is_array($home_slides)): foreach($home_slides as $k=>$vo): ?><section class="product_brand commmon_banner home_banner" id="home_banner"
                style="background-image:url('<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>');">
				
				控制点
				<div class="control-dot" desc="动态控制图片切换的数字和图片路径">
				    <ul id="fouse">
				        <?php $i=0; ?>
				        <?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><li class="active" src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>"
				              src1920="<?php echo sp_get_asset_upload_path($home_slide_1920s[$i][slide_pic]);?>">
				               <?php $i++; echo $i ?>
				            </li><?php endforeach; endif; ?>
				    </ul>
			    </div>
				
				<div class="home_banner_topArrow" id="home_banner_topArrow"></div>
				<div class="home_banner_leftArrow" id="home_banner_leftArrow"></div>
				<div class="home_banner_rightArrow" id="home_banner_rightArrow"></div>
				<div class="home_banner_ball1" id="home_banner_ball1"></div>
				<div class="home_banner_ball2" id="home_banner_ball2"></div>
				<div class="home_banner_ball3" id="home_banner_ball3"></div>
				<div class="home_banner_ball4" id="home_banner_ball4"></div>
				<div class="home_banner_ball5" id="home_banner_ball5"></div>
				<div class="home_banner_bottomWave" id="home_banner_bottomWave"></div>
				
            </section><?php endforeach; endif; ?>
        
  
    </div> -->
	
	 
<style type="text/css">
.home_dl {
    float: left;
    width: 25%;
    height: 100%;
    padding: 50px 33px 0 33px;
    text-align: center;
    box-sizing: border-box;
    cursor: pointer;
}
.home_dl:hover {
    box-shadow: 0px 0px 10px 1px rgba(164,164,164,0.34);
}
</style>



<div class="bgWhite homeBg">
	<div class="box_inner">
		<div class="home_container">
			<div class="home_container_title">
				<h3>智能物联网云平台产品</h3>
				<p>连通过去和未来，实现万物智联，数据驱动产业升级，精益生产管理。</p>
			</div>
			<div class="home_dlist">
				<!-- <div class="home_dl">
					<div class="dlist_hw"></div>
					<h3>环卫云平台</h3>
					<p>标准化流程，精细化管理</p>
				</div> -->
				
				<?php if(is_array($home_slide_menus)): foreach($home_slide_menus as $key=>$vo): ?><a target="_blank" href="<?php echo ($vo["slide_url"]); ?>">
						<div class="home_dl">
						
						<div style="background-image: url('<?php echo sp_get_asset_upload_path($vo[slide_pic]);?>');"></div>
							
						 
							<h3><?php echo ($vo["slide_name"]); ?></h3>
							
							<p><?php echo ($vo["slide_des"]); ?></p>
							
						</div>
					</a><?php endforeach; endif; ?>
			</div>
			<h3  class="lunPlayttl">智慧、可靠的解决方案</h3>
		</div>
	</div>
	
	<div class="home_imgplaylist">
		<div class="home_imgpBox">
		<ul class="img_ulist">
		   <!-- $last_post=sp_sql_posts("field:*;order:listorder asc,object_id desc;"); -->
    		<?php $lists = sp_sql_posts_paged("cid:3;order:post_date;"); ?>
    
			<?php if(is_array($lists['posts'])): $i = 0; $__LIST__ = $lists['posts'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="home_imgpli_com" >
			  <div class="bg"></div>
			  <div class="imgMeng"></div>
					<div class="iconBox">
						<div class="himp_iconin">
						<?php $smeta=json_decode($vo['smeta'],true); ?>
                       
                         <img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>"/>
						</div>
						<i></i>
						<span><?php echo ($vo["post_title"]); ?></span>
						<p><?php echo ($vo["post_excerpt"]); ?></p>
						
						<a target="_blank" href="<?php echo ($vo["post_source"]); ?>"
			 	               style="position：relative;">
						<div class="home_look_details">
			 	               	查看详情
						</div>
						</a>
						
					</div>
				<?php $smeta=json_decode($vo['smeta'], true); ?>
				<div id="imgs" class="imgs">
	    			<?php if(is_array($smeta['photo'])): foreach($smeta['photo'] as $key=>$vo): ?><img src="<?php echo sp_get_asset_upload_path($vo['url']);?>" /><?php endforeach; endif; ?>
			 	</div>
		    </li><?php endforeach; endif; else: echo "" ;endif; ?>
		
		</ul>
			<div class="home_imgp_leftbox">
				<span id="home_imgp_left"></span>
			</div>
			<div class="home_imgp_rightbox">
				<span id="home_imgp_right"></span>
			</div>
		</div>
	</div>

</div>

<div class="other_linkBox" style="text-align:center">
	<h3 class="otherLink_title">友情合作与支持</h3>
	<?php $links=sp_getlinks(); ?>
	<?php if(is_array($links)): foreach($links as $key=>$vo): ?>&nbsp;&nbsp;
		<a href="<?php echo ($vo["link_url"]); ?>" target="<?php echo ($vo["link_target"]); ?>">
			 <?php if(!empty($vo["link_image"])): ?><img src="<?php echo sp_get_image_url($vo['link_image']);?>"><!-- <?php echo ($vo["link_name"]); ?>链接图片 --><?php endif; ?>
		</a><?php endforeach; endif; ?>
</div>

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
    

<script>

$(function(){
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
        	$('#nav>ul> li').eq(0).hasClass("active")?"":$('#nav>ul> li').eq(0).addClass("active");
        })
   	 $(".product_nav");
   	 
    var bannerBimg=["images/home_banner1920.png","images/home_banner1920.png","images/home_banner1920.png"]
    
    $("#home_banner_topArrow").animate({
    	"opacity":"1",
    	"top":"0px",
    },1000,"linear")
   
   
	 $("#home_banner_leftArrow").animate({
    	"opacity":"1",
    	"bottom":"0px",
    },1000,"linear")
     $("#home_banner_rightArrow").animate({
    	"opacity":"1",
    	"bottom":"0px",
    },1000,"linear")
    $("#home_banner_ball1").animate({
    	"opacity":"1",
    	"left":"0px",
    },1000,"linear")
    $("#home_banner_ball2").animate({
    	"opacity":"1",
    	"right":"0px",
    },1000,"linear")
    $("#home_banner_ball3").animate({
    	"opacity":"1",
    	"top":"0.2rem",
    },1000,"linear")
    $("#home_banner_ball4").animate({
    	"opacity":"1",
    	"bottom":"0.32rem",
    },1000,"linear")
     $("#home_banner_ball5").animate({
    	"opacity":"1",
    	"bottom":"1.18rem",
    },1000,"linear")
     $("#home_banner_bottomWave").addClass("add");
     var bottomWave=document.getElementById("home_banner_bottomWave");
     bottomWave.addEventListener('webkitAnimationEnd', function (){
     		
     		var data=[{"bottom":"-0.28rem"},{"bottom":"0rem"}]
     		adddHover("home_banner_bottomWave",data,800,"linear");
     		function adddHover(id,data,time,speed){
     			$("#"+id).hover(function(){
     				console.log("hover");
		     		$(this).animate(data[0],time,speed,function(){
		     			$(this).animate(data[1],time*0.7,speed);
		     		})
		 		})
     			
     		}
			
			data=[{"top":"-0.6rem"},{"top":"0rem"}];
     		adddHover("home_banner_topArrow",data,1000,"linear");
			
			//左侧箭头
			data=[{"bottom":"-1rem"},{"bottom":"0rem"}];
     		adddHover("home_banner_leftArrow",data,1000,"linear");
     		//右侧箭头
     		data=[{"bottom":"-1rem"},{"bottom":"0rem"}];
     		adddHover("home_banner_rightArrow",data,1000,"linear");
     		
//   		左右小球
			data=[{"left":"-0.75rem"},{"left":"0rem"}];
     		adddHover("home_banner_ball1",data,800,"linear");
     		
     		data=[{"right":"-0.75rem"},{"right":"0rem"}];
     		adddHover("home_banner_ball2",data,800,"linear");
     		
     		//中间三个小球
     		data=[{"top":"0.2rem"},{"top":"0rem"}];
     		adddHover("home_banner_ball3",data,600,"linear");
     		
     		data=[{"bottom":"0.16rem"},{"bottom":"0.32rem"}];
     		adddHover("home_banner_ball4",data,800,"linear");
     		
     		data=[{"bottom":"1rem"},{"bottom":"1.18rem"}];
     		adddHover("home_banner_ball5",data,800,"linear");
     		
     })

  
})
</script>
<?php echo hook('footer_end');?>
</body>
</html>