/*更换背景图*/
//页面等比缩放
window.addEventListener("resize",setRemSize,false);
function setRemSize(){
    var _clientWidth=document.documentElement.clientWidth/19.2+"px";
    document.documentElement.style.fontSize=_clientWidth;
}
setRemSize();


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


function showAuto(){
    n = n >=(count - 1) ? 0 : ++n;
    $("#fouse li").eq(n).trigger('click');
}

/**************banner轮播图*******************/
	var timer1 = null;
	var iBanner=0;
//	autoPlayB();
	$('#fouse>li').on('click',function(){
		iBanner = $(this).index();
		console.log(iBanner);
		moveB();
	});
	function autoPlayB(){
		timer1 = setInterval(function (){
			iBanner++;
			iBanner = iBanner%2;
			moveB();
		},5000)
	}
	function moveB(){
		console.log(iBanner);
		$('.ulistB > li').eq(iBanner).animate({'opacity':1}).siblings().animate({'opacity':0})
		$('#fouse').find('li').eq(iBanner).addClass('active').siblings().removeClass('active')
	}
	$('.home_banner').hover(function(){
		clearInterval(timer1);
	},function(){
		autoPlayB();
	});

//设置body的背景图片，根据屏幕宽度使用不同的背景图片
function resetbg(n){
    var screen_width = $(window).width();
    var img1440 = "url(images/banner1440_"+n+".png)",img1920 = "url(images/banner1920_"+n+".png)";
    (screen_width<=1440) ? $("body").css("background-image",img1440):$("body").css("background-image",img1920);
}
/*获取参数*/
function request(paras){ 
    var urlTest = location.search;
    var url = urlTest.substring(urlTest.lastIndexOf("?"));
	//var url = location.search; 
	var paraString = url.substring(url.indexOf("?")+1,url.length).split("&"); 
	var paraObj = {} 
	for (i=0; j=paraString[i]; i++){ 
	paraObj[j.substring(0,j.indexOf("=")).toLowerCase()] = j.substring(j.indexOf("=")+1,j.length); 
	} 
	var returnValue = paraObj[paras.toLowerCase()]; 
	if(typeof(returnValue)==undefined){ 
		return ""; 
	}else{ 
		return returnValue; 
	} 
}
//图片轮播
	var isNow=0;
	var moving=false;
	var timer=null;
	function slideMove(width){
		if(isNow>5){//isNow=4,显示到第3张，isNow+1,isNow=5,等于1，=1，显示第2张
			
			$(".img_ulist").css("left",0);
			isNow=1;
		}
		if(isNow<0){				
			$(".img_ulist").css("left",-5*width);//左边第一张换成右边第一张
			isNow=4;
		}
		
		//运动到第5张时切回第一张，
		moving=true;
		$(".img_ulist").animate({left:-isNow*width},"slow","linear",function(){
			moving=false;
			console.log(moving);
		});
		
		
	}
	$("#home_imgp_left").click(function(){
		if(moving==true){
			return;
		};
		var width=$(".home_imgpBox").find("li").eq(0).width();
		isNow--;
		slideMove(width);
	})
	$("#home_imgp_right").click(function(){
		if(moving==true){
			return;
		}
		isNow++;
		var width=$(".home_imgpBox").find("li").eq(0).width();
		slideMove(width);
	})
