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
  <div class="pic_bn"> {pboot:sort scode={sort:tcode}}<img class="pic_bn_img" src="[sort:pic]" />{/pboot:sort}
    <div class="pic_text"> <img src="{pboot:sitedomain}/skin/images/inbt_7.png" /> </div>
  </div>
  <div class="m_pic_bn"> {pboot:sort scode={sort:tcode}}<img src="[sort:ico]" />{/pboot:sort} </div>
  <div class="html_cont work_top">
    <div class="join_us_title">{sort:name}</div>
    <div class="join_us_title1"> {sort:def1} </div>
    <!--项目投资-->
    
    {pboot:nav num=40 parent={sort:tcode}}
    <div class="work_left"> <a href="[nav:link]">
      <div class="work_t"> <img src="[nav:ico]"/> </div>
      <div class="work_b work_b2">
        <h2>[nav:name]</h2>
        <p>[nav:description lencn=18]</p>
      </div>
      </a> </div>
    {/pboot:nav}
    
    <!--end--> 
  </div>
  <div class="invest_bottom work_bottom">
    <div class="join_us_title"> 项目分布图 </div>
    <div class="join_us_title1"> 浙江昕昕新能源坚持“以总部为管理与服务平台，以区域公司（分公司）为业务支撑，以项目公司（光伏电站）为运营单元”的三级组织架构，积极拓展光伏电站业务。自成立至今，已在全国多个省市筛选储备光伏项目近70MW，其中已并网容量近40MW。同时，分布式光伏、储能、风电业务不断拓展，多能互补、配电网、微电网、售电等业务稳步推进，公司业务呈现出“光电领跑，多元协调”的态势。 </div>
    <div class="work_map index_move_load"> <img src="{pboot:sitedomain}/skin/images/index_map.png"/> </div>
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
	if($(window).width()>750){
		//地图js
		//吉林、辽宁、山西、河南，山东有数据
//				以下为模拟方法,应通过获取id,ajax返回此id数据
		$(".index_sub").hover(function() {
			var map_id = $(this).data("id");
			if(map_id != undefined && $("#businessjs_"+map_id).length ==1) {
				$(".index_map_text h2").html($("#businessjs_"+map_id).find("h3").html());
				$(".index_map_text .map_cont").html($("#businessjs_"+map_id).find(".map_cont").html());
				var map_class=$(this).attr("class");
				if(map_class.indexOf("icon_color1") > 0 ){
					$(".index_map_text").removeClass("index_map_text2").addClass("index_map_text1 index_map_text_cut");
				}else{
					$(".index_map_text").removeClass("index_map_text1").addClass("index_map_text2 index_map_text_cut");
				}
			}
		}, function() {
			$(".index_map_text").removeClass("index_map_text_cut");
		});
		$(".index_map").hover(function(){},function() {
			$(".index_map_text").removeClass("index_map_text_cut");
		})
		}else{
			$(".work_map").html('<img src="{pboot:sitedomain}/skin/images/index_map.png"/>');
		}
		//end
</script>
</body>
</html><?php return array (
  0 => '/home/vol9_6/infinityfree.com/if0_39057669/htdocs/template/default/head.html',
  1 => '/home/vol9_6/infinityfree.com/if0_39057669/htdocs/template/default/foot.html',
  2 => '/home/vol9_6/infinityfree.com/if0_39057669/htdocs/template/default/foot2.html',
); ?>