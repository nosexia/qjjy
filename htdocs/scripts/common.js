var Gmzx = Gmzx || {
	
	_startTime : new Date().getTime(),
	
	//获取界于最小值与最大值之间的随机数
	getRandomNum : function (Min, Max) {
		var Range = Max - Min;
		var Rand = Math.random();
		return (Min + Math.round(Rand * Range))
	},
	
	//手机访问，跳转到指定的url
	browserRedirect :function (wapUrl) {		
		if (this.browser.versions.ios|| this.browser.versions.android|| this.browser.versions.iPhone|| this.browser.versions.iPad) {
			window.location.href = wapUrl
		}		
	},
	
	//返回顶部
	toTop : function (){
		$("html, body").animate({ scrollTop: 0 }, 520);
	},
	
	//某元素显示
	domShow : function (obj){
		$(obj).show();
	},
	
	//某元素隐藏
	domHide : function (obj){		
		$(obj).hide();
	},
	//某元素显示或隐藏
	domToggle : function (obj){		
		$(obj).toggle();
	},
	
	//添加到收藏夹
	addFavorite : function () {
		var d = document.title;
		var a = document.URL;
		var b = navigator.userAgent.toLowerCase();
		if (b.indexOf("msie 8") > -1) {
			external.AddToFavoritesBar(a, d, "")
		} else {
			try {
				window.external.addFavorite(a, d)
			} catch (c) {
				try {
					window.sidebar.addPanel(d, a, "")
				} catch (c) {
					alert("\u60a8\u7684\u6d4f\u89c8\u5668\u4e0d\u652f\u6301\u6b64\u529f\u80fd\uff0c\u8bf7\u4f7f\u7528Ctrl+D\u8fdb\u884c\u6dfb\u52a0")
				}
			}
		}
	},
	
	 //隔多久 自动弹出qq
	alertQQ : function(url,days,timeout){ 
		if( 1!=$.cookie('alertQQ') ){
			setTimeout(function() {
				var qqpopup = document.createElement('iframe');
				qqpopup.style.width = '0';
				qqpopup.style.height = '0';
				qqpopup.style.border = '0';
				qqpopup.src = url;
				$.cookie('alertQQ', 1, { expires: days });
				document.body.appendChild(qqpopup);
			}, timeout);
		}
	},
	
	browser : {
		versions:function(){
			var u = navigator.userAgent, app = navigator.appVersion;
			return {//移动终端浏览器版本信息
				trident: u.indexOf('Trident') > -1, //IE内核
				presto: u.indexOf('Presto') > -1, //opera内核
				webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
				gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
				mobile: !!u.match(/AppleWebKit.*Mobile.*/)||!!u.match(/AppleWebKit/), //是否为移动终端
				ios: !!u.match(/i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
				android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
				iPhone: u.indexOf('iPhone') > -1 || (u.indexOf('Mac') > -1 && u.indexOf('Macintosh') < 0), //是否为iPhone或者QQHD浏览器
				iPad: u.indexOf('iPad') > -1, //是否iPad
				webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
			};
		}(),
		language:(navigator.browserLanguage || navigator.language).toLowerCase()
	}
	
};


//固定顶部位置
//$("html,body").animate({scrollTop:$(".logo").offset().top},300);//1000是ms,也可以用slow代替
//$(".footer_weixin h3").eq(0).html('官方微信');
//返回顶部输出
function go_top(){
	var go_top = '<div id="go_top" class="noshow">';
		go_top += '<div class="foot_top" title="点击返回顶部"></div></div><div id="copyToClipboard"></div>';
		$("body").append(go_top);
}
// go_top();
//返回顶部输出结束
//砍价活动
// $(document).ready(function(){

    // $("body").append(function(){
      // return '<div id="kanjia" class="kanjia"><a href="/article_show/KanJiaFengBaoChaoJiHuiWanZheiCiDeLongBiJiaGeNiShuoLeSuanE"><img src="http://static.gmzx.com/images/gmzx/public/kanjia.png" target="_blank" alt="砍价活动" /></a><span class="kj_close"></span></div>';
    // });
	// $(".kj_close").click(function(){
		// $(".kanjia").remove();
	// });
	// $(window).scroll(function () {
		// if ($(window).scrollTop() >= 270) {
			// $(".kanjia").show(300);
		 // }
		// if ($(window).scrollTop() <= 270) {
			// $(".kanjia").hide(300);
		 // }
	// });
// });
//获取范围内的随机数
function random(min,max){
    return Math.floor(min+Math.random()*(max-min));
}
//点击下拉
function openclose(aclick,maxheight){
	$(aclick).click(function(){
		var var1=$(this).attr("class");
		var var2=var1.split(' ');
		if(var2[1] == "open"){ 
			$(this).prevAll(".slo").animate({height:maxheight});
			$(this).removeClass('open').addClass('close');
		}else{ 
			$(this).prevAll(".slo").animate({height:"130px"});
			$(this).removeClass('close').addClass('open');
		}
	});
}

//图片懒加载

$("img[data-original]").lazyload({ 
	effect : "fadeIn",
	placeholder : "http://static.gmzx.com/images/public/grey.gif",  
	threshold : 200
}); 

//右边导航动态输出 结束


//针对百度关键词放文章
/*
 obj参数是指需追加的元素		例：.specia_ajxa
 width_class是指居中宽度的class		例：m-1080
*/
function specia(obj,width_class){
	try{
		function specia_ajxa_fadeOut(){
			$(obj).fadeOut('slow');	
		}
		function specia_ajax(url){
			//axaj请求最新数据
			$.ajax({
				url: '/plus/specia_ajax.php',
				contentType: "application/x-www-form-urlencoded; charset=utf-8",
				data: {
					'url':url
				},
				type: 'POST',
				success: function(data) {
					if(data == ''){
						specia_ajxa_fadeOut();
					}else{
						var dataObj=eval("("+data+")");//转换为json对象
						 $(dataObj).each(function(i,item){ 　　　　
							 //遍历JSON数据得到所需形式
							if(item.title != undefined){
								var html = '<div class="'+width_class+'"><div class="specia_body"><h1>'+item.keyword+'</h1><div class="info"><div class="info-con">作者: '+item.writer+'</div><div class="info-con">时间: '+item.pubdate+'</div><div class="info-con"><div class="bshare-custom"><div class="bsPromo bsPromo2"></div> 分享到：<a class="bshare-qzone" title="分享到QQ空间"></a><a class="bshare-sinaminiblog" title="分享到新浪微博"></a><a class="bshare-qqmb" title="分享到腾讯微博"></a><a class="bshare-more bshare-more-icon more-style-addthis" title="更多平台"></a><span class="BSHARE_COUNT bshare-share-count" style="float: none;">0</span> </div><script src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh" charset="utf-8" type="text/javascript"></script> <script src="http://static.bshare.cn/b/bshareC0.js" charset="utf-8" type="text/javascript"></script></div></div><div class="specia_body_info">'+item.body+'</div><div class="specia_ask"><p>想了解更多关于<span>'+item.keyword+'</span>相关问题</p><a href="javascript:void(0)" rel="nofollow" onclick="openZoosUrl();LR_HideInvite();return false;">点击咨询在线医生</a></div></div></div>';
								$(obj).prepend(html);
							}else{
								specia_ajxa_fadeOut();
							}
						 });
						}
					}
			});
		}

		var referer = document.referrer;//获取来的路径
		if(referer != ''){
			var timeallow = true;
			var rst = /https?\:\/\/([^\/]+)/i.exec(referer);
			var host = rst ? rst[1]:'unknown';
			if(/baidu\.com$/i.test(host) && timeallow){//百度
				specia_ajax(referer);
			}else if(/so\.com$/i.test(host) && timeallow){//360
				specia_ajax(referer)
			}else if(/sogou\.com$/i.test(host) && timeallow){//搜狗
				specia_ajax(referer)
			}else{
				specia_ajxa_fadeOut();	
			}
		}else{
			specia_ajxa_fadeOut();
		}
	}catch(e){} 
}
//针对百度关键词放文章end



//切换函数
function hover_cur(btn,cnt,cur,ant){
	var btn = $(btn);  
	var cnt = $(cnt);
	var ant = $(ant);
	btn.mouseover(function(){
		var current = $(this).index();
		cnt.hide().eq(current).show();
		ant.hide().eq(current).show();
		if(cur != null){
			btn.removeClass(cur).eq(current).addClass(cur);
		}
	}).eq(0).trigger("mouseenter");
}
//导航项目下滑开始
$('.nav_item').hover(function(){
		$(this).find(".open_i").addClass('hover')
		$(this).find(".shrink").animate({height:'show' },300);
	},function (){ 
		$(this).find(".shrink").stop(true, true).hide();
		$('.item_menu_con').stop(true, true).hide();
		$('.item_menu ul.fl li').removeClass('hover')
		$(this).find(".open_i").removeClass('hover')
	}
);
$('.item_menu ul.fl li').mouseover(function(){
		var current = $(this).index();
		$('.item_menu_con').hide().eq(current).show()
		$('.item_menu ul.fl li').removeClass('hover').eq(current).addClass('hover')
});


//导航项目结束
$(document).ready(function(){
	//导航立体效果
	$(".nav_son li a").hover(function() {
		$(".out",	this).stop().animate({'top':	'44px'},	300); // move down - hide
		$(".over",	this).stop().animate({'top':	'0px'},		300); // move down - show

	}, function() {
		$(".out",	this).stop().animate({'top':	'0px'},		300); // move up - show
		$(".over",	this).stop().animate({'top':	'-44px'},	300); // move up - hide
	});	
	//导航立体结束
	//底部材料
	jQuery(".footer_slide").slide({ mainCell:".bd ul",effect:"leftLoop",vis:6,trigger:"click"});

	//右边固定商务通数字值
	$('.fixed_swt_num em').html(random(80,50));

	//微信图片放大
	$(".head_media .weixin").hover(function() {
		$(this).find("b").fadeIn();
	}, function() {
		$(this).find("b").stop(true, true).fadeOut();
	});
	//底部微信图片放大
	$(".foot_media .weixin").hover(function() {
		$(this).find("b").fadeIn();
	}, function() {
		$(this).find("b").stop(true, true).fadeOut();
	});
	//手机微信图片放大
	$(".gmphone").hover(function() {
		$(this).find("b").fadeIn();
	}, function() {
		$(this).find("b").stop(true, true).fadeOut();
	});
	//右边微信图片放大
	$(".weixin a").hover(function() {
		$(this).find("span").fadeIn();
	}, function() {
		$(this).find("span").stop(true, true).fadeOut();
	});

	//右中浮窗
	window.onscroll=function(){
		if($(window).scrollTop()> 150){
			$(".fixed_swt").show(300) ;
		}
		if($(window).scrollTop()< 150){
			$(".fixed_swt").hide(300);
		}
	}	
	//头部热门搜索
	$(".search_tag").hover(function() {
		$(this).find("div").animate({
			height: 'show'
		}, 250);
		$(this).find("span").addClass('hover');
	}, function() {
		$(this).find("div").stop(true, true).animate({
			height: 'hide'
		}, 250);;
		$(this).find("span").removeClass('hover');
	});

	//点击返回顶部
	$(".fixed_swt .top").click(function() {
		$('body,html').animate({
			scrollTop: 0
		}, 1000);
		return false;
	});
	//图片延时加载
	var img_onload = function() {
			var _lazyImgs = [];

			function getElementTop(elm) {
				var flag = elm;
				var top = flag.offsetTop;
				while (flag = flag.offsetParent) {
					top += flag.offsetTop;
				}
				return top;
			}

			function getLazyImgs() {
				var imgs = document.getElementsByTagName("img");
				var lazyImgs = [];
				for (var i = 0; i < imgs.length; i++) {
					if (imgs[i].getAttribute("_src")) {
						lazyImgs.push(imgs[i]);
					}
				}
				return lazyImgs;
			}

			function imgOnLoadCheck(imgs) {
				var imgGroup = imgs;

				function imgCheck() {
					if (imgGroup.length <= 0) {
						return;
					}
					var screenHeight = document.documentElement.clientHeight;
					var screenScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
					for (var i = 0; i < imgGroup.length;) {
						if (!imgGroup[i].screenTop) {
							imgGroup[i].screenTop = getElementTop(imgGroup[i]);
						}
						if (getElementTop(imgGroup[i]) >= screenScrollTop && getElementTop(imgGroup[i]) <= screenScrollTop + screenHeight) {
							imgGroup[i].src = imgGroup[i].getAttribute("_src");
							imgGroup.splice(i, 1);
						} else {
							i++;
						}
					}
					setTimeout(imgCheck, 200)
				}
				imgCheck();
			}
			return {
				init: function() {
					_lazyImgs = getLazyImgs();

					imgOnLoadCheck(_lazyImgs);
				}
			}
		}
		img_onload().init();
		
		//右侧幻片灯
		jQuery(".gmzx-zx").slide({ mainCell:".bd ul",effect:"leftLoop",trigger:"click",autoPlay:true});
	
});
//顶部广告图轮播
$('.banner').hover(function(){
		$('.banner .prev').fadeIn();
		$('.banner .next').fadeIn();
	},function (){ 
		$('.banner .prev').stop(true, true).fadeOut();
		$('.banner .next').stop(true, true).fadeOut();
	}
 );


//自动添加控制li  (添加轮播小点)

function ban_addli(bd_li,hd_li,hd,cur){
	var bd_length=$(bd_li).length;
	if(bd_length!=1&&bd_length!=0){
		var li_str="<li class='"+cur+"'></li>";
	    for(var i=1;i<=bd_length-1;i++ ){
	    	li_str+="<li></li>";
		}$(hd_li).html(li_str);
		//顶部广告图轮播
		jQuery(".banner").slide({ mainCell:".bd ul",effect:"leftLoop",trigger:"click",autoPlay:true});
	}else{$(hd).empty();}
}


//文章banner自动添加控制li
ban_addli(".banner>.bd>ul>li",".banner>.hd>ul",".banner>.hd","on");
/*	
 *	焦点图插件
 */
(function($){
	$.fn.slide=function(options){
		$.fn.slide.deflunt={
		effect : "fade", //效果 || fade：渐显； || top：上滚动；|| left：左滚动；|| topLoop：上循环滚动；|| leftLoop：左循环滚动；|| topMarquee：上无缝循环滚动；|| leftMarquee：左无缝循环滚动；
		autoPlay:false, //自动运行
		delayTime : 500, //效果持续时间
		interTime : 2500,//自动运行间隔。当effect为无缝滚动的时候，相当于运行速度。
		defaultIndex : 0,//默认的当前位置索引。0是第一个
		titCell:".hd li",//导航元素
		mainCell:".bd",//内容元素的父层对象
		trigger: "mouseover",//触发方式 || mouseover：鼠标移过触发；|| click：鼠标点击触发；
		scroll:1,//每次滚动个数。
		vis:1,//visible，可视范围个数，当内容个数少于可视个数的时候，不执行效果。
		titOnClassName:"on",//当前位置自动增加的class名称
		autoPage:false,//系统自动分页，当为true时，titCell则为导航元素父层对象，同时系统会在titCell里面自动插入分页li元素(1.2版本新增)
		prevCell:".prev",//前一个按钮元素。
		nextCell:".next"//后一个按钮元素。
		};

		return this.each(function() {
			var opts = $.extend({},$.fn.slide.deflunt,options);
			var index=opts.defaultIndex;
			var prevBtn = $(opts.prevCell, $(this));
			var nextBtn = $(opts.nextCell, $(this));
			var navObj = $(opts.titCell, $(this));//导航子元素结合
			var navObjSize = navObj.size();
			var conBox = $(opts.mainCell , $(this));//内容元素父层对象
			var conBoxSize=conBox.children().size();
			var slideH=0;
			var slideW=0;
			var selfW=0;
			var selfH=0;
			var autoPlay = opts.autoPlay;
			var inter=null;//setInterval名称 
			var oldIndex = index;

			if(conBoxSize<opts.vis) return; //当内容个数少于可视个数，不执行效果。

			//处理分页
			if( navObjSize==0 )navObjSize=conBoxSize;
			if( opts.autoPage ){
				var tempS = conBoxSize-opts.vis;
				navObjSize=1+parseInt(tempS%opts.scroll!=0?(tempS/opts.scroll+1):(tempS/opts.scroll)); 
				navObj.html(""); 
				for( var i=0; i<navObjSize; i++ ){ navObj.append("<li>"+(i+1)+"</li>") }
				var navObj = $("li", navObj);//重置导航子元素对象
			}

			conBox.children().each(function(){ //取最大值
				if( $(this).width()>selfW ){ selfW=$(this).width(); slideW=$(this).outerWidth(true);  }
				if( $(this).height()>selfH ){ selfH=$(this).height(); slideH=$(this).outerHeight(true);  }
			});

			switch(opts.effect)
			{
				case "top": conBox.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; height:'+opts.vis*slideH+'px"></div>').css( { "position":"relative","padding":"0","margin":"0"}).children().css( {"height":selfH} ); break;
				case "left": conBox.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; width:'+opts.vis*slideW+'px"></div>').css( { "width":conBoxSize*slideW,"position":"relative","overflow":"hidden","padding":"0","margin":"0"}).children().css( {"float":"left","width":selfW} ); break;
				case "leftLoop":
				case "leftMarquee":
					conBox.children().clone().appendTo(conBox).clone().prependTo(conBox); 
					conBox.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; width:'+opts.vis*slideW+'px"></div>').css( { "width":conBoxSize*slideW*3,"position":"relative","overflow":"hidden","padding":"0","margin":"0","left":-conBoxSize*slideW}).children().css( {"float":"left","width":selfW}  ); break;
				case "topLoop":
				case "topMarquee":
					conBox.children().clone().appendTo(conBox).clone().prependTo(conBox); 
					conBox.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; height:'+opts.vis*slideH+'px"></div>').css( { "height":conBoxSize*slideH*3,"position":"relative","padding":"0","margin":"0","top":-conBoxSize*slideH}).children().css( {"height":selfH} ); break;
			}

			//效果函数
			var doPlay=function(){
				switch(opts.effect)
				{
					case "fade": case "top": case "left": if ( index >= navObjSize) { index = 0; } else if( index < 0) { index = navObjSize-1; } break;
					case "leftMarquee":case "topMarquee": if ( index>= 2) { index=1; } else if( index<0) { index = 0; } break;
					case "leftLoop": case "topLoop":
						var tempNum = index - oldIndex; 
						if( navObjSize>2 && tempNum==-(navObjSize-1) ) tempNum=1;
						if( navObjSize>2 && tempNum==(navObjSize-1) ) tempNum=-1;
						var scrollNum = Math.abs( tempNum*opts.scroll );
						if ( index >= navObjSize) { index = 0; } else if( index < 0) { index = navObjSize-1; }
					break;
				}
				switch (opts.effect)
				{
					case "fade":conBox.children().stop(true,true).eq(index).fadeIn(opts.delayTime).siblings().hide();break;
					case "top":conBox.stop(true,true).animate({"top":-index*opts.scroll*slideH},opts.delayTime);break;
					case "left":conBox.stop(true,true).animate({"left":-index*opts.scroll*slideW},opts.delayTime);break;
					case "leftLoop":
						if(tempNum<0 ){
								conBox.stop(true,true).animate({"left":-(conBoxSize-scrollNum )*slideW},opts.delayTime,function(){
								for(var i=0;i<scrollNum;i++){ conBox.children().last().prependTo(conBox); }
								conBox.css("left",-conBoxSize*slideW);
							});
						}
						else{
							conBox.stop(true,true).animate({"left":-( conBoxSize + scrollNum)*slideW},opts.delayTime,function(){
								for(var i=0;i<scrollNum;i++){ conBox.children().first().appendTo(conBox); }
								conBox.css("left",-conBoxSize*slideW);
							});
						}break;// leftLoop end

					case "topLoop":
						if(tempNum<0 ){
								conBox.stop(true,true).animate({"top":-(conBoxSize-scrollNum )*slideH},opts.delayTime,function(){
								for(var i=0;i<scrollNum;i++){ conBox.children().last().prependTo(conBox); }
								conBox.css("top",-conBoxSize*slideH);
							});
						}
						else{
							conBox.stop(true,true).animate({"top":-( conBoxSize + scrollNum)*slideH},opts.delayTime,function(){
								for(var i=0;i<scrollNum;i++){ conBox.children().first().appendTo(conBox); }
								conBox.css("top",-conBoxSize*slideH);
							});
						}break;//topLoop end

					case "leftMarquee":
						var tempLeft = conBox.css("left").replace("px",""); 

						if(index==0 ){
								conBox.animate({"left":++tempLeft},0,function(){
									if( conBox.css("left").replace("px","")>= 0){ for(var i=0;i<conBoxSize;i++){ conBox.children().last().prependTo(conBox); }conBox.css("left",-conBoxSize*slideW);}
								});
						}
						else{
								conBox.animate({"left":--tempLeft},0,function(){
									if(  conBox.css("left").replace("px","")<= -conBoxSize*slideW*2){ for(var i=0;i<conBoxSize;i++){ conBox.children().first().appendTo(conBox); }conBox.css("left",-conBoxSize*slideW);}
								});
						}break;// leftMarquee end

						case "topMarquee":
						var tempTop = conBox.css("top").replace("px",""); 
							if(index==0 ){
									conBox.animate({"top":++tempTop},0,function(){
										if( conBox.css("top").replace("px","") >= 0){ for(var i=0;i<conBoxSize;i++){ conBox.children().last().prependTo(conBox); }conBox.css("top",-conBoxSize*slideH);}
									});
							}
							else{
									conBox.animate({"top":--tempTop},0,function(){
										if( conBox.css("top").replace("px","")<= -conBoxSize*slideH*2){ for(var i=0;i<conBoxSize;i++){ conBox.children().first().appendTo(conBox); }conBox.css("top",-conBoxSize*slideH);}
									});
							}break;// topMarquee end


				}//switch end
					navObj.removeClass(opts.titOnClassName).eq(index).addClass(opts.titOnClassName);
					oldIndex=index;
			};
			//初始化执行
			doPlay();

			//自动播放
			if (autoPlay) {
					if( opts.effect=="leftMarquee" || opts.effect=="topMarquee"  ){
						index++; inter = setInterval(doPlay, opts.interTime);
						conBox.hover(function(){if(autoPlay){clearInterval(inter); }},function(){if(autoPlay){clearInterval(inter);inter = setInterval(doPlay, opts.interTime);}});
					}else{
						 inter=setInterval(function(){index++; doPlay() }, opts.interTime); 
						$(this).hover(function(){if(autoPlay){clearInterval(inter); }},function(){if(autoPlay){clearInterval(inter); inter=setInterval(function(){index++; doPlay() }, opts.interTime); }});
					}
			}

			//鼠标事件
			var mst;
			if(opts.trigger=="mouseover"){
				navObj.hover(function(){ clearTimeout(mst); index=navObj.index(this); mst = window.setTimeout(doPlay,200); }, function(){ if(!mst)clearTimeout(mst); });
			}else{ navObj.click(function(){index=navObj.index(this);  doPlay(); })  }
			nextBtn.click(function(){ index++; doPlay(); });
			prevBtn.click(function(){  index--; doPlay(); });

    	});//each End

	};//slide End

})(jQuery);


//文章分享的代码 
window._bd_share_config={
		"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};
with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];

//旋转木马
jQuery.extend({roundabout_shape:{def:'lazySusan',lazySusan:function(r,a,t){return{x:Math.sin(r+a),y:(Math.sin(r+3*Math.PI/2+a)/8)*t,z:(Math.cos(r+a)+1)/2,scale:(Math.sin(r+Math.PI/2+a)/2)+0.5}}}});jQuery.fn.roundabout=function(){var options=(typeof arguments[0]!='object')?{}:arguments[0];options={bearing:(typeof options.bearing=='undefined')?0.0:parseFloat(options.bearing%360.0,4),tilt:(typeof options.tilt=='undefined')?0.0:parseFloat(options.tilt,4),minZ:(typeof options.minZ=='undefined')?100:parseInt(options.minZ,10),maxZ:(typeof options.maxZ=='undefined')?400:parseInt(options.maxZ,10),minOpacity:(typeof options.minOpacity=='undefined')?0.40:parseFloat(options.minOpacity,2),maxOpacity:(typeof options.maxOpacity=='undefined')?1.00:parseFloat(options.maxOpacity,2),minScale:(typeof options.minScale=='undefined')?0.40:parseFloat(options.minScale,2),maxScale:(typeof options.maxScale=='undefined')?1.00:parseFloat(options.maxScale,2),duration:(typeof options.duration=='undefined')?600:parseInt(options.duration,10),btnNext:options.btnNext||null,btnPrev:options.btnPrev||null,easing:options.easing||'swing',clickToFocus:(options.clickToFocus!==false),focusBearing:(typeof options.focusBearing=='undefined')?0.0:parseFloat(options.focusBearing%360.0,4),shape:options.shape||'lazySusan',debug:options.debug||false,childSelector:options.childSelector||'li',startingChild:(typeof options.startingChild=='undefined')?null:parseInt(options.startingChild,10)};this.each(function(i){var ref=jQuery(this);var childSelector=options.childSelector;var children=ref.children(childSelector);var period=360.0/children.length;var startingBearing=(options.startingChild===null)?options.bearing:options.startingChild*period;ref.addClass('roundabout-holder').css('padding',0).css('position','relative').css('z-index',options.minZ).attr('bearing',startingBearing).attr('tilt',options.tilt).attr('minZ',options.minZ).attr('maxZ',options.maxZ).attr('minOpacity',options.minOpacity).attr('maxOpacity',options.maxOpacity).attr('minScale',options.minScale).attr('maxScale',options.maxScale).attr('duration',options.duration).attr('easing',options.easing).attr('clickToFocus',options.clickToFocus).attr('focusBearing',options.focusBearing).attr('animating','0').attr('childInFocus',-1).attr('shape',options.shape).attr('period',period).attr('debug',options.debug).attr('childSelector',options.childSelector).fadeIn("slow");children.each(function(i){var degrees=period*i;var startPos;jQuery(this).addClass('roundabout-moveable-item').css('position','absolute').attr('degrees',degrees);startPos=[jQuery(this).width(),jQuery(this).height(),parseInt(jQuery(this).css('font-size'),10)];jQuery(this).attr('startPos',startPos.join(','));if(options.clickToFocus===true){jQuery(this).click(function(e){if(!jQuery.roundabout_isInFocus(ref,degrees)){e.preventDefault();if(ref.attr('animating')=='0'){ref.roundabout_animateAngleToFocus(degrees)}return false}})}});if(options.btnNext){jQuery(options.btnNext).click(function(e){e.preventDefault();if(ref.attr('animating')=='0'){ref.roundabout_animateToNextChild()}return false})}if(options.btnPrev){jQuery(options.btnPrev).click(function(e){e.preventDefault();if(ref.attr('animating')=='0'){ref.roundabout_animateToPreviousChild()}return false})}ref.roundabout_updateChildPositions()});return this};jQuery.fn.roundabout_setTilt=function(newTilt){this.each(function(i){jQuery(this).attr('tilt',newTilt);jQuery(this).roundabout_updateChildPositions()});return this};jQuery.fn.roundabout_setBearing=function(newBearing){this.each(function(i){jQuery(this).attr('bearing',parseFloat(newBearing%360,4));jQuery(this).roundabout_updateChildPositions()});if(typeof arguments[1]==='function'){var callback=arguments[1];setTimeout(function(){callback()},0)}return this};jQuery.fn.roundabout_adjustBearing=function(delta){delta=parseFloat(delta,4);if(delta!==0){this.each(function(i){jQuery(this).attr('bearing',jQuery.roundabout_getBearing(jQuery(this))+delta);jQuery(this).roundabout_updateChildPositions()})}return this};jQuery.fn.roundabout_adjustTilt=function(delta){delta=parseFloat(delta,4);this.each(function(i){jQuery(this).attr('tilt',parseFloat(jQuery(this).attr('tilt'),4)+delta);jQuery(this).roundabout_updateChildPositions()});return this};jQuery.fn.roundabout_animateToBearing=function(bearing){bearing=parseFloat(bearing,4);var currentTime=new Date();var data=(typeof arguments[3]!=='object')?null:arguments[3];var duration=(typeof arguments[1]=='undefined')?null:arguments[1];var easingType=(typeof arguments[2]!='undefined')?arguments[2]:null;this.each(function(i){var ref=jQuery(this),timer,easingFn,newBearing;var thisDuration=(duration===null)?parseInt(ref.attr('duration'),10):duration;var thisEasingType=(easingType!==null)?easingType:ref.attr('easing')||'swing';if(data===null){data={timerStart:currentTime,start:jQuery.roundabout_getBearing(ref),totalTime:thisDuration}}timer=currentTime-data.timerStart;if(timer<thisDuration){ref.attr('animating','1');if(typeof jQuery.easing.def=='string'){easingFn=jQuery.easing[thisEasingType]||jQuery.easing[jQuery.easing.def];newBearing=easingFn(null,timer,data.start,bearing-data.start,data.totalTime)}else{newBearing=jQuery.easing[thisEasingType]((timer/data.totalTime),timer,data.start,bearing-data.start,data.totalTime)}ref.roundabout_setBearing(newBearing,function(){ref.roundabout_animateToBearing(bearing,thisDuration,thisEasingType,data)})}else{bearing=(bearing<0)?bearing+360:bearing%360;ref.attr('animating','0');ref.roundabout_setBearing(bearing)}});return this};jQuery.fn.roundabout_animateToDelta=function(delta){var duration,easing;if(typeof arguments[1]!=='undefined'){duration=arguments[1]}if(typeof arguments[2]!=='undefined'){easing=arguments[2]}this.each(function(i){delta=jQuery.roundabout_getBearing(jQuery(this))+delta;jQuery(this).roundabout_animateToBearing(delta,duration,easing)});return this};jQuery.fn.roundabout_animateToChild=function(childPos){var duration,easing;if(typeof arguments[1]!=='undefined'){duration=arguments[1]}if(typeof arguments[2]!=='undefined'){easing=arguments[2]}this.each(function(i){var ref=jQuery(this);if(parseInt(ref.attr('childInFocus'),10)!==childPos&&ref.attr('animating','0')){var child=jQuery(ref.children(ref.attr('childSelector'))[childPos]);ref.roundabout_animateAngleToFocus(parseFloat(child.attr('degrees'),4),duration,easing)}});return this};jQuery.fn.roundabout_animateToNextChild=function(){var duration,easing;if(typeof arguments[0]!=='undefined'){duration=arguments[0]}if(typeof arguments[1]!=='undefined'){easing=arguments[1]}this.each(function(i){if(jQuery(this).attr('animating','0')){var bearing=360.0-jQuery.roundabout_getBearing(jQuery(this));var period=parseFloat(jQuery(this).attr('period'),4),j=0,range;while(true){range={lower:period*j,upper:period*(j+1)};if(bearing<=range.upper&&bearing>range.lower){jQuery(this).roundabout_animateToDelta(bearing-range.lower,duration,easing);break}j++}}});return this};jQuery.fn.roundabout_animateToPreviousChild=function(){var duration,easing;if(typeof arguments[0]!=='undefined'){duration=arguments[0]}if(typeof arguments[1]!=='undefined'){easing=arguments[1]}this.each(function(i){if(jQuery(this).attr('animating','0')){var bearing=360.0-jQuery.roundabout_getBearing(jQuery(this));var period=parseFloat(jQuery(this).attr('period'),4),j=0,range;while(true){range={lower:period*j,upper:period*(j+1)};if(bearing>=range.lower&&bearing<range.upper){jQuery(this).roundabout_animateToDelta(bearing-range.upper,duration,easing);break}j++}}});return this};jQuery.fn.roundabout_animateAngleToFocus=function(target){var duration,easing;if(typeof arguments[1]!=='undefined'){duration=arguments[1]}if(typeof arguments[2]!=='undefined'){easing=arguments[2]}this.each(function(i){var delta=jQuery.roundabout_getBearing(jQuery(this))-target;delta=(Math.abs(360.0-delta)<Math.abs(0.0-delta))?360.0-delta:0.0-delta;delta=(delta>180)?-(360.0-delta):delta;if(delta!==0){jQuery(this).roundabout_animateToDelta(delta,duration,easing)}});return this};jQuery.fn.roundabout_updateChildPositions=function(){this.each(function(i){var ref=jQuery(this);var inFocus=-1;var data={bearing:jQuery.roundabout_getBearing(ref),tilt:parseFloat(ref.attr('tilt'),4),stage:{width:Math.floor(ref.width()*0.9),height:Math.floor(ref.height()*0.9)},animating:ref.attr('animating'),inFocus:parseInt(ref.attr('childInFocus'),10),focusBearingRad:jQuery.roundabout_degToRad(parseFloat(ref.attr('focusBearing'),4)),shape:jQuery.roundabout_shape[ref.attr('shape')]||jQuery.roundabout_shape[jQuery.roundabout_shape.def]};data.midStage={width:data.stage.width/2,height:data.stage.height/2};data.nudge={width:data.midStage.width+data.stage.width*0.05,height:data.midStage.height+data.stage.height*0.05};data.zValues={min:parseInt(ref.attr('minZ'),10),max:parseInt(ref.attr('maxZ'),10)};data.zValues.diff=data.zValues.max-data.zValues.min;data.opacity={min:parseFloat(ref.attr('minOpacity'),2),max:parseFloat(ref.attr('maxOpacity'),2)};data.opacity.diff=data.opacity.max-data.opacity.min;data.scale={min:parseFloat(ref.attr('minScale'),2),max:parseFloat(ref.attr('maxScale'),2)};data.scale.diff=data.scale.max-data.scale.min;ref.children(ref.attr('childSelector')).each(function(i){if(jQuery.roundabout_updateChildPosition(jQuery(this),ref,data,i)&&data.animating=='0'){inFocus=i;jQuery(this).addClass('roundabout-in-focus')}else{jQuery(this).removeClass('roundabout-in-focus')}});if(inFocus!==data.inFocus){jQuery.roundabout_triggerEvent(ref,data.inFocus,'blur');if(inFocus!==-1){jQuery.roundabout_triggerEvent(ref,inFocus,'focus')}ref.attr('childInFocus',inFocus)}});return this};jQuery.roundabout_getBearing=function(el){return parseFloat(el.attr('bearing'),4)%360};jQuery.roundabout_degToRad=function(degrees){return(degrees%360.0)*Math.PI/180.0};jQuery.roundabout_isInFocus=function(el,target){return(jQuery.roundabout_getBearing(el)%360===(target%360))};jQuery.roundabout_triggerEvent=function(el,child,eventType){return(child<0)?this:jQuery(el.children(el.attr('childSelector'))[child]).trigger(eventType)};jQuery.roundabout_updateChildPosition=function(child,container,data,childPos){var ref=jQuery(child),out=[];var startPos=ref.attr('startPos').split(',');var itemData={startWidth:startPos[0],startHeight:startPos[1],startFontSize:startPos[2],degrees:parseFloat(ref.attr('degrees'),4)};var rad=jQuery.roundabout_degToRad((360.0-itemData.degrees)+data.bearing);while(rad<0){rad=rad+Math.PI*2}while(rad>Math.PI*2){rad=rad-Math.PI*2}var factors=data.shape(rad,data.focusBearingRad,data.tilt);factors.scale=(factors.scale>1)?1:factors.scale;factors.adjustedScale=(data.scale.min+(data.scale.diff*factors.scale)).toFixed(4);factors.width=factors.adjustedScale*itemData.startWidth;factors.height=factors.adjustedScale*itemData.startHeight;ref.css('left',((factors.x*data.midStage.width+data.nudge.width)-factors.width/2.0).toFixed(2)+'px').css('top',((factors.y*data.midStage.height+data.nudge.height)-factors.height/2.0).toFixed(2)+'px').css('width',factors.width.toFixed(2)+'px').css('height',factors.height.toFixed(2)+'px').css('opacity',(data.opacity.min+(data.opacity.diff*factors.scale)).toFixed(2)).css('z-index',parseInt(data.zValues.min+(data.zValues.diff*factors.z),10)).css('font-size',(factors.adjustedScale*itemData.startFontSize).toFixed(2)+'px').attr('current-scale',factors.adjustedScale);if(container.attr('debug')=='true'){out.push('<div style="font-weight: normal; font-size: 10px; padding: 2px; width: '+ref.css('width')+'; background-color: #ffc;">');out.push('<strong style="font-size: 12px; white-space: nowrap;">Child '+childPos+'</strong><br />');out.push('<strong>left:</strong> '+ref.css('left')+'<br /><strong>top:</strong> '+ref.css('top')+'<br />');out.push('<strong>width:</strong> '+ref.css('width')+'<br /><strong>opacity:</strong> '+ref.css('opacity')+'<br />');out.push('<strong>z-index:</strong> '+ref.css('z-index')+'<br /><strong>font-size:</strong> '+ref.css('font-size')+'<br />');out.push('<strong>scale:</strong> '+ref.attr('current-scale'));out.push('</div>');ref.html(out.join(''))}return jQuery.roundabout_isInFocus(container,itemData.degrees)};

jQuery.easing['jswing']=jQuery.easing['swing'];jQuery.extend(jQuery.easing,{def:'easeOutQuad',swing:function(x,t,b,c,d){return jQuery.easing[jQuery.easing.def](x,t,b,c,d);},easeInQuad:function(x,t,b,c,d){return c*(t/=d)*t+b;},easeOutQuad:function(x,t,b,c,d){return-c*(t/=d)*(t-2)+b;},easeInOutQuad:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t+b;return-c/2*((--t)*(t-2)-1)+b;},easeInCubic:function(x,t,b,c,d){return c*(t/=d)*t*t+b;},easeOutCubic:function(x,t,b,c,d){return c*((t=t/d-1)*t*t+1)+b;},easeInOutCubic:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t*t+b;return c/2*((t-=2)*t*t+2)+b;},easeInQuart:function(x,t,b,c,d){return c*(t/=d)*t*t*t+b;},easeOutQuart:function(x,t,b,c,d){return-c*((t=t/d-1)*t*t*t-1)+b;},easeInOutQuart:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t*t*t+b;return-c/2*((t-=2)*t*t*t-2)+b;},easeInQuint:function(x,t,b,c,d){return c*(t/=d)*t*t*t*t+b;},easeOutQuint:function(x,t,b,c,d){return c*((t=t/d-1)*t*t*t*t+1)+b;},easeInOutQuint:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t*t*t*t+b;return c/2*((t-=2)*t*t*t*t+2)+b;},easeInSine:function(x,t,b,c,d){return-c*Math.cos(t/d*(Math.PI/2))+c+b;},easeOutSine:function(x,t,b,c,d){return c*Math.sin(t/d*(Math.PI/2))+b;},easeInOutSine:function(x,t,b,c,d){return-c/2*(Math.cos(Math.PI*t/d)-1)+b;},easeInExpo:function(x,t,b,c,d){return(t==0)?b:c*Math.pow(2,10*(t/d-1))+b;},easeOutExpo:function(x,t,b,c,d){return(t==d)?b+c:c*(-Math.pow(2,-10*t/d)+1)+b;},easeInOutExpo:function(x,t,b,c,d){if(t==0)return b;if(t==d)return b+c;if((t/=d/2)<1)return c/2*Math.pow(2,10*(t-1))+b;return c/2*(-Math.pow(2,-10*--t)+2)+b;},easeInCirc:function(x,t,b,c,d){return-c*(Math.sqrt(1-(t/=d)*t)-1)+b;},easeOutCirc:function(x,t,b,c,d){return c*Math.sqrt(1-(t=t/d-1)*t)+b;},easeInOutCirc:function(x,t,b,c,d){if((t/=d/2)<1)return-c/2*(Math.sqrt(1-t*t)-1)+b;return c/2*(Math.sqrt(1-(t-=2)*t)+1)+b;},easeInElastic:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d)==1)return b+c;if(!p)p=d*.3;if(a<Math.abs(c)){a=c;var s=p/4;}
else var s=p/(2*Math.PI)*Math.asin(c/a);return-(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b;},easeOutElastic:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d)==1)return b+c;if(!p)p=d*.3;if(a<Math.abs(c)){a=c;var s=p/4;}
else var s=p/(2*Math.PI)*Math.asin(c/a);return a*Math.pow(2,-10*t)*Math.sin((t*d-s)*(2*Math.PI)/p)+c+b;},easeInOutElastic:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d/2)==2)return b+c;if(!p)p=d*(.3*1.5);if(a<Math.abs(c)){a=c;var s=p/4;}
else var s=p/(2*Math.PI)*Math.asin(c/a);if(t<1)return-.5*(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b;return a*Math.pow(2,-10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p)*.5+c+b;},easeInBack:function(x,t,b,c,d,s){if(s==undefined)s=1.70158;return c*(t/=d)*t*((s+1)*t-s)+b;},easeOutBack:function(x,t,b,c,d,s){if(s==undefined)s=1.70158;return c*((t=t/d-1)*t*((s+1)*t+s)+1)+b;},easeInOutBack:function(x,t,b,c,d,s){if(s==undefined)s=1.70158;if((t/=d/2)<1)return c/2*(t*t*(((s*=(1.525))+1)*t-s))+b;return c/2*((t-=2)*t*(((s*=(1.525))+1)*t+s)+2)+b;},easeInBounce:function(x,t,b,c,d){return c-jQuery.easing.easeOutBounce(x,d-t,0,c,d)+b;},easeOutBounce:function(x,t,b,c,d){if((t/=d)<(1/2.75)){return c*(7.5625*t*t)+b;}else if(t<(2/2.75)){return c*(7.5625*(t-=(1.5/2.75))*t+.75)+b;}else if(t<(2.5/2.75)){return c*(7.5625*(t-=(2.25/2.75))*t+.9375)+b;}else{return c*(7.5625*(t-=(2.625/2.75))*t+.984375)+b;}},easeInOutBounce:function(x,t,b,c,d){if(t<d/2)return jQuery.easing.easeInBounce(x,t*2,0,c,d)*.5+b;return jQuery.easing.easeOutBounce(x,t*2-d,0,c,d)*.5+c*.5+b;}});
//旋转木马 end

//代金卷
$(document).ready(function(){
	$(".submits").click(function(){
		if($(".phone").val() == ""  || !$(".phone").val().match(/^(((13[0-9]{1})|159|153)+\d{8})$/)){
				alert("您输入的手机号码有误！！"); 
				// $(".txt").html("<font color='white'>手机号码有误！</font>"); 
			}else{
			var phone =$(".phone").val();
				$(".phone2").val(phone);
			var  ranNum = randomNum(9);
				$(".num").val(ranNum);
				$(".num2").html(ranNum);
				$("#daijinjuan2").show();
				$("#daijinjuan").hide();
		}
		
	});
	$(".hid").click(function(){
		$("#daijinjuan2").hide();
		$("#daijinjuan").show()
	});
		
		
	 $(function () {
            $(".name").focus();//输入焦点
            $(".name").keydown(function (event) {
                if (event.which == "13") {//回车键,移动光标到密码框
                    $(".item").focus();
                }
            });
            $(".item").keydown(function (event) {
                if (event.which == "13") {//回车键，用.ajax提交表单
                    $(".submit2").trigger("click");
                }
            });
            $(".submit2").click(function () { //“登录”按钮单击事件
                //获取用户名称
                var valName = $("#daijinjuan2 .name").val();
                //获取输入密码
                var valItem = $(".item").val();
                var valNum = $(".num").val();
                var valPhone = $(".phone").val();
                //开始发送数据
                $.ajax
                ({ //请求登录处理页
                    url: "/plus/daijinjuan.php", //登录处理页
                    dataType: "json",
					type: "post", 
					contentType: "application/x-www-form-urlencoded; charset=gbk",
                    //传送请求数据
                    data: { 
								txtName: valName,
								txtItem: valItem,
								txtNum: valNum,
								txtPhone: valPhone
							},
                    success: function (data) { //登录成功后返回的数据
                        //根据返回值进行状态显示
						
                          if (data == 1) {//注意是True,不是true
                             alert("该手机号码已领取过了！");
							  $("#daijinjuan2").hide();
							  $("#daijinjuan").show(); 
                          }
                          else if(data == 2)
						  {
							alert("提交成功！"); 
                            $("#daijinjuan2").hide();
							$("#daijinjuan").show(); 
                          }
						  else if(data == 0){
							  alert("提交失败！");
						  }
						  else if(data == 3){
							  alert("请勿重复提交！");
						  }
                     }
                })
            })
        })
		

});

function randomNum(n){ 
    var t='gm'; 
    for(var i=0;i<n;i++){ 
        t+=Math.floor(Math.random()*10); 
    } 
    return t; 
}
