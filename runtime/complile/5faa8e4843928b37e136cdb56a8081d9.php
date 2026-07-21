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
    <div class="pic_text"> <img src="{pboot:sitedomain}/skin/images/inbt_7.png" /> </div>
    <div class="pic_go_back">
      <h2>{sort:topname}</h2>
      <div class="go_back">
        <ul>
          {pboot:nav num=40 parent={sort:tcode}}
          <li {pboot:if('[nav:scode]'=='{sort:scode}')}class="li_cut"{/pboot:if} ><a href="[nav:link]">[nav:name]</a></li>
          {/pboot:nav}
        </ul>
      </div>
    </div>
  </div>
  <div class="m_pic_bn"> {pboot:sort scode={sort:tcode}}<img src="[sort:ico]" />{/pboot:sort} </div>
  <div class="html_cont">
    <div class="cont_title">
      <h2>{content:title}</h2>
      <div class="go_home"> <i class="iconfont">&#xe605;</i> 所在位置：{pboot:position}</div>
      <div class="clear"></div>
    </div>
    <div class="invest"> <img src="{sort:ico}" />
      <div class="invest_div">
        <div class="q_invest_div">
          <h2>{content:title}</h2>
          {sort:description}</div>
      </div>
    </div>
  </div>
  <!--业务领域轮播图-->
  <div class="invest_bottom">
    <div class="invest_slide_cont">
      <div class="invest_slide" id="invest_slide">
        <ul>
          {pboot:pics id={content:id} num=20}
          <li> <a><img src="[pics:src]"/>
            <p>[pics:title]</p>
            </a> </li>
          {/pboot:pics}
        </ul>
      </div>
      <div class="slide_li">
        <div class="slide_ul">
          <ul>
            {pboot:pics id={content:id} num=20}
            <li><img src="[pics:src]" width="198" height="128"/><i class="iconfont">&#xe60e;</i></li>
            {/pboot:pics}
          </ul>
        </div>
      </div>
      <div class="slide_perv"> <i class="iconfont">&#xe608;</i> </div>
      <div class="slide_next"> <i class="iconfont">&#xe64c;</i> </div>
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
<script type="text/javascript">
	var win_width = $(window).width();
	var this_num = 0;
	var slide_num = $(".invest_slide li").length;
	if(win_width < 750) {
		win_width = $(window).width();
	} else {
		win_width = 1108;
	}
	$(".invest_slide li").width(win_width);
	$(".invest_slide ul").width(slide_num * win_width);
	$(".slide_li ul").width(slide_num * 218);
	$(".slide_li li").click(function() {
		$(".slide_li li").removeClass("slide_cut");
		$(this).addClass("slide_cut");
		this_num = $(this).index();
		$(".invest_slide").animate({
			scrollLeft: win_width * this_num
		}, 500, "swing");
		$(".slide_ul").animate({
			scrollLeft: 218 * (this_num - 2)
		}, 500, "swing");
	});
	$(".slide_next").click(function() {
		if(slide_num - 1 > this_num) {
			this_num += 1;
			$(".invest_slide").animate({
				scrollLeft: win_width * this_num
			}, 500, "swing");
			$(".slide_li li").removeClass("slide_cut");
			$(".slide_li li").eq(this_num).addClass("slide_cut");
			$(".slide_ul").animate({
				scrollLeft: 218 + $(".slide_ul").scrollLeft()
			}, 500, "swing");
		}
	});
	$(".slide_perv").click(function() {
		if(this_num > 0) {
			this_num -= 1;
			$(".invest_slide").animate({
				scrollLeft: win_width * this_num
			}, 500, "swing");
			$(".slide_li li").removeClass("slide_cut");
			$(".slide_li li").eq(this_num).addClass("slide_cut");
			$(".slide_ul").animate({
				scrollLeft: -218 + $(".slide_ul").scrollLeft()
			}, 500, "swing");
		}
	});
	$(".slide_li li").eq(0).click();
	if(win_width < 750) {
		var start_x;
		var move_x;
		var end_x;
		$('#invest_slide').on('touchstart', function(e) {
			var _touch = e.originalEvent.targetTouches[0];
			start_x = _touch.pageX;
		});
		$('#invest_slide').on('touchmove', function(e) {
			var _touch = e.originalEvent.targetTouches[0];
			var _x = _touch.pageX;
		});
		$('#invest_slide').on('touchend', function(e) {
			var _touch = e.originalEvent.changedTouches[0];
			end_x = _touch.pageX;
			if(start_x - end_x > 50) {
				$(".slide_next").click();
			} else {
				$(".slide_perv").click();
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