<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
<title>{pboot:if('{sort:title}'=='')}{pboot:pagetitle}{else}{sort:title}{/pboot:if}</title>
<meta name="keywords" content="{pboot:if('{sort:keywords}'=='')}{pboot:pagekeywords}{else}{sort:keywords}{/pboot:if}">
<meta name="description" content="{pboot:if('{sort:description}'=='')}{pboot:pagedescription}{else}{sort:description}{/pboot:if}">
<link rel="stylesheet" id="pageloader-css" href="{pboot:sitedomain}/skin/css/pageloader.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="{pboot:sitedomain}/skin/css/public.css" />
<link rel="stylesheet" type="text/css" href="{pboot:sitedomain}/skin/css/iconfont.css" />
</head>
<body>
<div class="wrap isload">
  <div class="header"> <a href="{pboot:sitedomain}/" class="logo"><img src="{pboot:sitelogo}"/></a>
    <div class="nav">
      <div class="nav_language"> <a  id="StranLink" href="javascript:;">繁</a></div>
      <ul  class="q_nav">
        <li class="q_nav_sy"> <a href="{pboot:sitedomain}/" class="nav_click" id="qh_1" >首页</a> </li>
        {pboot:nav}
        <li class="nav_li_click " id="qh_1"> <a href="[nav:link]" class="nav_click">[nav:name]</a>
          <div class="nav_sub"> <img src="[nav:ico]"/>
            <div class="nav_sub_div">
              <h3>[nav:subname]</h3>
              <p> 
              {pboot:2nav parent=[nav:scode]}
              <a href="[2nav:link]"><i class="iconfont">&#xe64c;</i>[2nav:name]</a> 
              {/pboot:2nav}
              </p>
            </div>
          </div>
        </li>
        {/pboot:nav}
      </ul>
    </div>
    <div class="head_sreach">
      <div class="sreach"> <i class="iconfont">&#xe613;</i> </div>
      <div class="site_map"> <i class="iconfont">&#xe65c;</i> </div>
      <a href="javascript:;" class="cut_en" id="gb2big5" style="font-size:18px; color: #ea1024; line-height: 19px;"> 繁 </a> </div>
    <!--搜索-->
    <div class="index_sreach">
    <form action="{pboot:scaction}"  method="get">
      <input type="text" name="keyword" id="search" placeholder="请输入搜索关键字"/>
     <input type="submit" id="search_a" value="搜索">
      </form>
      </div>
    <!--end--> 
    <!--网站地图-->
    <div class="index_site_map">
      <ul>
        <li>
          <h2><i class="iconfont"></i><a href="{pboot:sitedomain}/">首页</a></h2>
        </li>
        {pboot:nav}
        <li>
          <h2><i class="iconfont">&#xe6c2;</i><a href="[nav:link]">[nav:name]</a></h2>
          <div class="site_nav"> 
          {pboot:2nav parent=[nav:scode]}
          <a href="[2nav:link]">[2nav:name]</a>
          {/pboot:2nav}
          </div>
        </li>
        {/pboot:nav}
      </ul>
    </div>
    <!--end--> 
    
  </div>
  <div class="head_bg"></div>
  <!--end-->
  <div class="pic_bn"> {pboot:sort scode={sort:tcode}}<img class="pic_bn_img" src="[sort:pic]" />{/pboot:sort}
    {pboot:sort scode=15}
    <div class="pic_text1 news">
      <h2>[sort:name]</h2>
       {pboot:list scode=[sort:scode] num=1 order=sorting}
      <h5>[list:title]</h5>
      <p>[list:description lencn=40]</p>
      <span>[list:date style=Y.m.d]</span> <a href="[list:link]">查看更多</a> 
      {/pboot:list}
      </div>
      {/pboot:sort}
  </div>
  <div class="m_pic_bn"> {pboot:sort scode={sort:tcode}}<img src="[sort:ico]"/>{/pboot:sort}
    {pboot:sort scode=15}
    <div class="pic_text1 news">
      <h2>[sort:name]</h2>
      {pboot:list scode=[sort:scode] num=1 order=sorting}
      <h5>[list:title]</h5>
      <p>[list:description lencn=40]</p>
      <span>[list:date style=Y.m.d]</span> <a href="[list:link]">查看更多</a>
      {/pboot:list}
      </div>
      {/pboot:sort}
  </div>
  <div class="html_cont news_margin">
    {pboot:sort scode=16}
    <div class="news_title"> [sort:name]<a href="[sort:link]" class="news_more">更多 >></a> </div>
    <div class="news_lists">
      <div class="news_list">
        <ul>
          {pboot:list scode=[sort:scode] num=9 order=sorting}
          <li> <a href="[list:link]">
            <div class="news_li_img"> <img src="[list:ico]"/> <span> <b>[list:date style=d]</b> [list:date style=m/Y] </span> </div>
            <h3>[list:title]</h3>
            <p>[list:description lencn=40]</p>
            </a> </li>
          {/pboot:list}
        </ul>
      </div>
      <div class="news_perv"> <i class="iconfont">&#xe608;</i> </div>
      <div class="news_next"> <i class="iconfont">&#xe64c;</i> </div>
    </div>
    {/pboot:sort}
    {pboot:sort scode=15}
    <div class="news_cont">
      <div class="news_tab news_tab1" style="position: relative;">
        <ul>
          <!--新闻-->
          <li style="cursor: auto;">[sort:name]</li>
          <!--end-->
        </ul>
        <a href="[sort:link]" class="news_more">更多 &gt;&gt;</a> </div>
      <div class="news_div news_div1"> 
        <!--新闻-->
        <div class="news_c news_c1">
          <div class="news_c_left">
            <div id="index0" class="index_banner">
              <div class="ban_hd">
                <ul>
                  <!--自动根据图片数量添加焦点-->
                </ul>
              </div>
              <div class="ban_bd">
                <ul>
                  {pboot:list scode=[sort:scode] num=3 order=sorting isico=1}
                  <li> <a href="[list:link]">
                    <div class="pc_bn"> <img src="[list:ico]" height="243"/>
                      <div class="duty_c_t">
                        <h2>[list:title]</h2>
                      </div>
                    </div>
                    </a> </li>
                  {/pboot:list}
                </ul>
              </div>
            </div>
          </div>
          <div class="news_c_right"> 
            {pboot:list scode=[sort:scode] num=2 order=sorting}
            <a href="[list:link]">
            <h3>[list:title]</h3>
            <p>[list:description lencn=40]</p>
            </a>
            {/pboot:list}
            </div>
        </div>
      </div>
    </div>
    {/pboot:sort}
    <div class="news_cont_right">
      <div class="news_tab news_tab2">
        <ul>
          {pboot:sort scode=17}<li>[sort:name]</li>{/pboot:sort}
          {pboot:sort scode=18}<li>[sort:name]</li>{/pboot:sort}
        </ul>
      </div>
      <div class="news_div news_div2">
        <div class="news_c news_c2">
          <ul>
            {pboot:list scode=17 num=4 order=sorting}
            <li><a href="[list:link]"><i class="iconfont">&#xe6c2;</i>[list:title]</a>
              <p>[list:date style=Y.m.d]</p>
            </li>
            {/pboot:list}
          </ul>
        </div>
        <div class="news_c news_c2 hidden">
          <ul>
            {pboot:list scode=18 num=4 order=sorting}
            <li><a href="[list:link]"><i class="iconfont">&#xe6c2;</i>[list:title]</a>
              <p>[list:date style=Y.m.d]</p>
            </li>
            {/pboot:list}
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--公共脚部-->
  <div class="footer">
    <div class="link">
      <div class="link_content"> 友情链接：
        <select class="friendlink_select">
          <option value="">相关链接</option>
          {pboot:link  gid=1 num=50}
          <option value="[link:link]" target="_blank">[link:name]</option>
          {/pboot:link}
        </select>
      </div>
    </div>
    <div class="foot">
      <ul>
        {pboot:nav num=5}
        <li> 
        <a href="[nav:link]" class="foot_h2">[nav:name]</a> 
        {pboot:2nav parent=[nav:scode]}
        <a href="[2nav:link]">[2nav:name]</a>
        {/pboot:2nav}
        </li>
        {/pboot:nav}
      </ul>
      <div class="foot_a">
        <img src="{pboot:companyweixin}"/>
      </div>
      <div class="clear"></div>
      <div class="foot_bottom"> 网站备案号:<a href="https://beian.miit.gov.cn/" target="_blank" style="color:#fff;" rel="nofollow">{pboot:siteicp}</a>&nbsp;{pboot:sitecopyright}&nbsp;&nbsp;&nbsp;地址：{pboot:companyaddress}<br/>
        电话/Tel：{pboot:companyphone}   联系人：{pboot:companycontact}  邮箱/Mail：{pboot:companyemail}</div>
    </div>
  </div>
</div>
<script src="{pboot:sitedomain}/skin/js/jquery-1.7.2.min.js"></script> 
<!--<script src="{pboot:sitedomain}/skin/js/pageloader.min.js" type="text/javascript"></script>--> 
<script src="{pboot:sitedomain}/skin/js/public.min.js" type="text/javascript" charset="utf-8"></script> 
<script type="text/javascript">
    if($(window).width()<750){
        $(".link").hide();
        
        $(".foot_bottom").html("{pboot:siteicp} {pboot:sitecopyright} 地址：{pboot:companyaddress} 电话：{pboot:companyphone}   联系人：{pboot:companycontact}  邮箱：{pboot:companyemail}")
    }
    $("select.friendlink_select").each(function(){
    $(this).change(function(){
        if($(this).val()){
            window.open($(this).val(),"_blank")
        }
    });
  });
  $("#StranLink").click(function () {
      if($(this).html() == '繁'){
          $(this).html("简")
      }else{
          $(this).html("繁")
      }
  })
  $("#search_a").click(function(){
    var search_keyword_a = $("#search").val();
    var search_keyword = search_keyword_a.substring(0,30);
    if (search_keyword != null && search_keyword!="" ){
        window.location.href = "{pboot:sitedomain}/?keyword="+encodeURIComponent(search_keyword);
    }else{
        $("#search").attr('placeholder',"请输入关键字")
    }
});  
</script> 
<script src="{pboot:sitedomain}/skin/js/stranlink.js" type="text/javascript"></script> 
<script src="{pboot:sitedomain}/skin/js/gb2big5.js" type="text/javascript"></script> 
<!--end--> 
<script src="{pboot:sitedomain}/skin/js/touchslide.1.1.js" type="text/javascript" charset="utf-8"></script> 
<script type="text/javascript">
	var is_click=[true,true];
	$(".news_tab1 li").click(function() {
		$(".news_tab1 li").removeClass("cut");
		$(this).addClass("cut");
		$(".news_c1").addClass("hidden");
		$(".news_c1").eq($(this).index()).removeClass("hidden");
		if(is_click[$(this).index()]){
		   TouchSlide({
			slideCell: "#index" + $(this).index(),
			titCell: ".ban_hd ul",
			mainCell: ".ban_bd ul",
			effect: "leftLoop",
			autoPage: true,
			autoPlay: true,
			delayTime: 500,
			interTime: 6000
		});
		is_click[$(this).index()]=false;
		}
	});
	$(".news_tab1 li").eq(0).click();
	$(".news_tab2 li").click(function() {
		$(".news_tab2 li").removeClass("cut");
		$(this).addClass("cut");
		$(".news_c2").addClass("hidden");
		$(".news_c2").eq($(this).index()).removeClass("hidden");
	});
	$(".news_tab2 li").eq(0).click();




	var win_width = $(window).width();
	var this_num = 0;
	var slide_num = $(".news_list li").length;
	var remove_num;
	if(win_width < 750) {
		win_width = $(window).width();
		$(".news_list li").width(win_width);
		$(".news_list ul").width(slide_num * win_width);
		remove_num = 1;
	} else {
		win_width = 377;
		$(".news_list ul").width(slide_num * win_width - 25);
		remove_num = 3;
	}
	$(".news_next").click(function() {
		if(slide_num - remove_num > this_num) {
			this_num += 1;
			$(".news_list").animate({
				scrollLeft: win_width * this_num
			}, 500, "swing");
		}
	});
	$(".news_perv").click(function() {
		if(this_num > 0) {
			this_num -= 1;
			$(".news_list").animate({
				scrollLeft: win_width * this_num
			}, 500, "swing");
		}
	});
	if(win_width < 750) {
		var start_x;
		var move_x;
		var end_x;
		$('.news_list').on('touchstart', function(e) {
			var _touch = e.originalEvent.targetTouches[0];
			start_x = _touch.pageX;
		});
		$('.news_list').on('touchmove', function(e) {
			var _touch = e.originalEvent.targetTouches[0];
			var _x = _touch.pageX;
		});
		$('.news_list').on('touchend', function(e) {
			var _touch = e.originalEvent.changedTouches[0];
			end_x = _touch.pageX;
			if(start_x - end_x > 50) {
				$(".news_next").click();
			} else {
				$(".news_perv").click();
			}
		});
	}
</script>
</body>
</html><?php return array (
  0 => '/home/vol9_6/infinityfree.com/if0_39057669/htdocs/template/default/head.html',
  1 => '/home/vol9_6/infinityfree.com/if0_39057669/htdocs/template/default/foot.html',
  2 => '/home/vol9_6/infinityfree.com/if0_39057669/htdocs/template/default/foot2.html',
); ?>