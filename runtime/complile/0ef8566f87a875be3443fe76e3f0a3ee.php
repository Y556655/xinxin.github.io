<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
<title>{content:title}-{pboot:sitetitle}</title>
<meta name="keywords" content="{content:keywords}">
<meta name="description" content="{content:description}">
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
  <!--end-->
  <div class="pic_bn"> {pboot:sort scode={sort:tcode}}<img class="pic_bn_img" src="[sort:pic]" />{/pboot:sort}
    <div class="pic_text"> <img src="{pboot:sitedomain}/skin/images/inbt_15.png" /> </div>
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
      <div class="go_home"> <i class="iconfont">&#xe605;</i> 所在位置：{pboot:position}</div>
      <div class="clear"></div>
    </div>
    <div class="html_left details">
      <div class="details_title"> {content:title} </div>
      <div class="details_lists"> <span  class="details_span1">发布日期：{content:date style=Y-m-d}</span> <span class="details_span2">作者：admin</span> </div>
      <div class="details_cont" id="maximg">
        {content:content}
      </div>
    </div>
    <!--右侧-->
    <div class="html_right">
      {pboot:sort scode=2}
      <h2 class="text_h2">[sort:name]</h2>
      <img src="[sort:ico]" class="text_img" />
      <div class="text_p"> {pboot:content id=19}[content:content drophtml=1 dropblank=1 len=90 more='...']{/pboot:content} </div>
      <a href="[sort:link]" class="text_a"><span>了解更多</span><i class="iconfont">&#xe735;</i></a>
      {/pboot:sort}
      <h2 class="text_h2">企业宣传片</h2>
      <div class="text_pr">
        <input type="text" value="{pboot:sitedomain}/skin/images/video.jpg" class="video_img hidden">
        <a href="javascript:;" data-value="{label:video}"> <img src="{pboot:sitedomain}/skin/images/video.jpg" class="text_img" /> <b><i class="iconfont">&#xe6c2;</i></b> </a> </div>
    </div>
  </div>
  <div class="login_bj"> <a class="close_creatVideo" href="javascript:;" style="width: 26px; height: 26px; background:url('{pboot:sitedomain}/skin/images/video_close_bbtn.png') no-repeat; position: absolute; right: 10px; top: 10px;"></a> </div>
  <div id="video" >
    <div id="a1"></div>
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
<script type="text/javascript" src="{pboot:sitedomain}/skin/js/ckplayer.js" charset="utf-8"></script> 
<script type="text/javascript">
	$(".text_pr a").click(function () {
	   $(".login_bj").show();
		var video = $(this).attr("data-value");
		var _img = $(".video_img").val();
		CKobject._K_('video').style.display = 'block';
		var flashvars = {
			f: video,
			c: 0,
			p:2,
			i:_img
		};
		var params = {bgcolor: '#fff', allowFullScreen: true, allowScriptAccess: 'always', wmode: 'transparent'};
		var video = [video + '->video/mp4', video + '->video/ogg'];
		var support = ['all'];
		CKobject.embed('{pboot:sitedomain}/skin/ckplayer/ckplayer.swf', 'a1', 'ckplayer_a1', '1000', '500', false, flashvars, video, params,support);
	});
	$(".login_bj").click(function () {
			$(".login_bj").hide();
			CKobject._K_('video').style.display = 'none';
			if(CKobject._K_('a1').innerHTML!=''){
		CKobject.getObjectById('ckplayer_a1').videoPlay();
					CKobject._K_('a1').innerHTML = '';
	}
	})
</script>
</body>
</html><?php return array (
  0 => '/home/vol9_6/infinityfree.com/if0_39057669/htdocs/template/default/head.html',
  1 => '/home/vol9_6/infinityfree.com/if0_39057669/htdocs/template/default/right.html',
  2 => '/home/vol9_6/infinityfree.com/if0_39057669/htdocs/template/default/foot.html',
  3 => '/home/vol9_6/infinityfree.com/if0_39057669/htdocs/template/default/foot2.html',
); ?>