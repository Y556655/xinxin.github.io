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
  <!--end-->
  
  <div class="pic_bn">{pboot:sort scode={sort:tcode}}<img class="pic_bn_img" src="[sort:pic]" />{/pboot:sort}
    {pboot:sort scode=2}
    <div class="pic_text1">
      <h2>[sort:name]</h2>
      <p> {pboot:content id=19}[content:content drophtml=1 dropblank=1 len=200 more='...']{/pboot:content}</p>
      <a href="[sort:link]">查看更多</a> </div>
      {/pboot:sort}
  </div>
  <div class="m_pic_bn"> {pboot:sort scode={sort:tcode}}<img src="[sort:ico]" />{/pboot:sort}
    <div class="pic_text1">
      {pboot:sort scode=2}
      <h2>[sort:name]</h2>
      <p> {pboot:content id=19}[content:content drophtml=1 dropblank=1 len=200 more='...']{/pboot:content}</p>
      <a href="[sort:link]">查看更多</a> 
      {/pboot:sort}
      </div>
  </div>
  <div class="html_cont"> 
    <!--董事长致辞-->
    {pboot:sort scode=3}
    <div class="about_us_img"> <img src="[sort:ico]" /> </div>
    
    <div class="about_us_cont">
      <h2>[sort:name]</h2>
      <p> {pboot:content id=20}[content:content drophtml=1 dropblank=1 len=200 more='...']{/pboot:content}</p>
      <a href="[sort:link]" class="text_a"><span>了解更多</span><i class="iconfont">&#xe735;</i></a>
      </div>
    {/pboot:sort}
    <!--end-->
    <div class="about_us_a"> 
    {pboot:sort scode=5}<a href="[sort:link]"><img src="{pboot:sitedomain}/skin/images/ab_qybj.jpg"/></a> {/pboot:sort}
    {pboot:sort scode=4}<a href="[sort:link]"><img src="{pboot:sitedomain}/skin/images/ab_fzzl.jpg"/></a> {/pboot:sort}
    </div>
  </div>
  <!--发展战略-->
  {pboot:sort scode=4}
  <div class="about1 about_move">
    <div class="about_title"> [sort:name] <span></span> </div>
    <div class="about1_left"> </div>
    <div class="about1_right"><img src="{pboot:sitedomain}/skin/images/m_img2.jpg" />
      <div class="about1_m">
        <p> {pboot:content id=21}[content:content drophtml=1 dropblank=1 len=200 more='...']{/pboot:content}<br/>
        </p>
      </div>
    </div>
    <div class="about_bg">
      <p> {pboot:content id=21}[content:content drophtml=1 dropblank=1 len=200 more='...']{/pboot:content}<br/>
      </p>
    </div>
  </div>
  {/pboot:sort}
  <!--end-->
  <div class="about2 about_move">
    <h2>独特优势</h2>
    <p></p>
    <div class="about2_d">
      <div class="about2_sub1">
        <h3>品牌优势</h3>
        <p>借助昕昕能源强大的品牌效应，拥有较为广泛的政府资源及较高的行业认同。</p>
      </div>
      <div class="about2_sub3">
        <h3>资金优势</h3>
        <p>具备雄厚的资金实力、多样化的融资渠道及有竞争力的资金成本。</p>
      </div>
      <div class="about2_sub2">
        <h3>资源优势</h3>
        <p>依托各股东庞大的企业客户群体，潜在项目资源丰富。</p>
      </div>
      <div class="about2_sub4">
        <h3>风控优势</h3>
        <p>秉承金融投资机构的全面风险控制和投资评价体系，融合光伏行业专业技术和效益分析能力，建立起高效严密的光伏项目投资评价体系。</p>
      </div>
    </div>
  </div>
  <div class="about3 about_move">
    <h2>企业宣传片</h2>
    <p></p>
    <div class="about3_video">
      <div id="a1"></div>
      <input type="text" value="{label:video}" class="video_value hidden">
      <input type="text" value="{pboot:sitedomain}/skin/images/video.jpg" class="video_img hidden">
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
	var offset_top, scroll_top, offset_top;
		win_height = $(window).height();
		function scroll_js() {
			var scroll_top = $(window).scrollTop();
			$(".about_move").each(function() {
				offset_top = $(this).offset().top;
				if(win_height + scroll_top > offset_top + 200) {
					$(this).addClass("move_load");
				}
			});
		};
		scroll_js();
		$(window).scroll(function() {
			scroll_js();
		});
</script> 
<script type="text/javascript" src="{pboot:sitedomain}/skin/js/ckplayer.js" charset="utf-8"></script> 
<script type="text/javascript">
	$("#qh_2").addClass("nav_cut");
	var video = $(".video_value").val();
	var _img = $(".video_img").val();
	var flashvars = {
		f: video,
		c: 0,
		p:2,
		i:_img
	};
	var params = {bgcolor: '#333333', allowFullScreen: true, allowScriptAccess: 'always', wmode: 'transparent'};
	var video = [video + '->video/mp4', video + '->video/ogg'];
	var support = ['all'];
	if ($(window).width()<750){
		CKobject.embed('{pboot:sitedomain}/skin/ckplayer/ckplayer.swf', 'a1', 'ckplayer_a1', '100%', '300', false, flashvars, video, params,support);
	}else{
		CKobject.embed('{pboot:sitedomain}/skin/ckplayer/ckplayer.swf', 'a1', 'ckplayer_a1', '100%', '493', false, flashvars, video, params,support);
	}
</script>
</body>
</html><?php return array (
  0 => '/home/vol9_6/infinityfree.com/if0_39057669/htdocs/template/default/head.html',
  1 => '/home/vol9_6/infinityfree.com/if0_39057669/htdocs/template/default/foot.html',
  2 => '/home/vol9_6/infinityfree.com/if0_39057669/htdocs/template/default/foot2.html',
); ?>