<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
<title>{pboot:sitetitle}</title>
<meta name="keywords" content="{pboot:sitekeywords}">
<meta name="description" content="{pboot:sitedescription}">
<meta name="author" content="www.zhutiwo.com k311" />
<link rel="stylesheet" id="pageloader-css" href="{pboot:sitedomain}/skin/css/pageloader.css" type="text/css" media="all"/>
<link rel="stylesheet" type="text/css" href="{pboot:sitedomain}/skin/css/public.css"/>
<link rel="stylesheet" type="text/css" href="{pboot:sitedomain}/skin/css/iconfont.css"/>
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
  <!--首页banner-->
  <div class="index_bn">
    <div id="index1" class="index_banner">
      <div class="ban_hd">
        <ul>
          <!--自动根据图片数量添加焦点-->
        </ul>
      </div>
      <div class="ban_bd">
        <ul>
          {pboot:slide gid=1 num=5}
          <li> <a href="[slide:link]">
            <div class="pc_bn"> <img src="[slide:src]" class="pc_index_img"/>
              <div class="index_text">
                <p>[slide:title]</p>
                <p>[slide:subtitle]</p>
                <span></span> </div>
              <img src="{pboot:sitedomain}/skin/images/banner[slide:i]_m.jpg" class="m_index_img"/> </div>
            </a> </li>
          {/pboot:slide}
        </ul>
      </div>
    </div>
  </div>
  <!--end-->
  <div class="index_w">
    <div class="index_w100">
      <div class="index_about_left"> <img src="{pboot:sitedomain}/skin/images/index_img.gif" class="index_pimg"/>
        {pboot:sort scode=1}
        <p>{pboot:content id=19}[content:content drophtml=1 dropblank=1 len=85 more='...']{/pboot:content}</p>
        <a href="[sort:link]" class="text_a index_text_a"><span>LEARN MORE</span><i class="iconfont">&#xe735;</i></a> 
        {/pboot:sort}
        <!--企业背景--> 
        {pboot:sort scode=5}<a href="[sort:link]" class="index_a_img"> <img src="{pboot:sitedomain}/skin/images/ab_qybj.jpg"/> </a> {/pboot:sort}
        <!--end--> 
        <!--发展战略--> 
        {pboot:sort scode=4}<a href="[sort:link]" class="index_a_img"> <img src="{pboot:sitedomain}/skin/images/ab_fzzl.jpg"/> </a> {/pboot:sort}
        <!--end--> 
      </div>
      <div class="index_about_right">
        <div class="index_about_t"> <a href="javascript:;" data-value="{label:video}"> <img src="{pboot:sitedomain}/skin/images/video.jpg" class="pc_index_img"/> <img src="{pboot:sitedomain}/skin/images/video_m.jpg" class="m_index_img"/>
          <div class="about_icon"> <i class="iconfont">&#xe6c2;</i> </div>
          </a>
          <div id="home_video" style="display: none;">
            <div id="a1"></div>
          </div>
        </div>
        <div class="index_iconfont">
          <ul>
            <li style="text-align: center;"><span><i class="iconfont2 counter" data-end-count="4000" data-speed="1200" data-start="0">0</i>万度</span>
              <p>累计发电</p>
            </li>
            <li style="text-align: center;"><span><i class="iconfont2 counter" data-end-count="4" data-speed="1200" data-start="0">0</i>万吨</span>
              <p>累计减排二氧化碳</p>
            </li>
            <li style="text-align: center;"><span><i class="iconfont2 counter" data-end-count="1.5" data-speed="1200" data-start="0">0</i>万吨</span>
              <p>累计节约标准煤</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  {pboot:sort scode=7}
  <div class="index_practice index_an">
    <div class="practice_title">
      <h2>[sort:name]</h2>
      <p style="line-height: 25px;font-size: 15px;color: #858585;">[sort:def1]</p>
    </div>
    <div class="practice_big_img"> <a href="#"> <img src="{pboot:sitedomain}/skin/images/index_big_img.jpg" class="big_img pc_index_img"/> <img src="{pboot:sitedomain}/skin/images/m_index_big_img.jpg" class="big_img1 m_index_img"/>
      <div class="big_text">
        <h3>光1伏电站开发</h3>
        <p>让电站更加智慧让设备更加智能智能启停技术性能更优效率更高为领跑“智”造。</p>
      </div>
      </a> </div>
    <div class="practice_icon_img">
      <div class="practice_ul">
        <ul>
          {pboot:nav parent={sort:tcode} parent=7 num=6}
          <li class="index_cut" data-a="[nav:link]" data-url="{pboot:sitedomain}/skin/images/cim[nav:i].jpg" data-urlpc="{pboot:sitedomain}/skin/images/cipc[nav:i].jpg" data-h3="[nav:name]" data-p="[nav:description lencn=80]">
            <div class="pra_icon"> <img src="{pboot:sitedomain}/skin/images/ci[nav:n].png"/>
              <p> <img src="{pboot:sitedomain}/skin/images/ci[nav:n]_hover.png"/> </p>
            </div>
            <span>[nav:name]</span> <b></b> </li>
          {/pboot:nav}
        </ul>
      </div>
      <div class="index_prev"> <i class="iconfont">&#xe608;</i> </div>
      <div class="index_next"> <i class="iconfont">&#xe64c;</i> </div>
    </div>
  </div>
  {/pboot:sort}
  <div class="index_practice index_an">
    <div class="practice_title">
      <h2>业务分布</h2>
      <p style="line-height: 25px; font-size: 15px;color: #858585;">浙江昕昕新能源坚持“以总部为管理与服务平台，以区域公司（分公司）为业务支撑，以项目公司（光伏电站）为运营单元”的三级组织架构，积极拓展光伏电站业务。自成立至今，已在全国多个省市筛选储备光伏项目近70MW，其中已并网容量近40MW。同时，分布式光伏、储能、风电业务不断拓展，多能互补、配电网、微电网、售电等业务稳步推进，公司业务呈现出“光电领跑，多元协调”的态势。</p>
    </div>
    <div class="work_map" style="max-width: 918px;"> <img src="{pboot:sitedomain}/skin/images/index_map.png" /> </div>
  </div>
  
  <div class="promise index_an">
    <div class="promise_div">
      <div class="promise_left"> {pboot:sort scode=22}<a href="[sort:link]"> <img src="{pboot:sitedomain}/skin/images/index_img50.jpg"/> </a>{/pboot:sort} </div>
      <div class="promise_right"> <img src="{pboot:sitedomain}/skin/images/index_img8.gif" class="index_pimg">
        {pboot:content id=56}
        <p>[content:content drophtml=1 dropblank=1 len=60 more='...']</p>
        <a href="[content:link]" class="text_a index_text_a"><span>LEARN MORE</span><i class="iconfont">&#xe735;</i></a> 
        {/pboot:content}
        <!--我们在行动-->
        {pboot:sort scode=24}<div class="promise_right_img"> <a href="[sort:link]" class="index_a_img"> <img src="[sort:ico]"> </a> <b>[sort:name]</b> </div>{/pboot:sort}
        <!--end--> 
        <!--员工风采-->
        {pboot:sort scode=25}<div class="promise_right_img"> <a href="[sort:link]" class="index_a_img"> <img src="[sort:ico]"> </a> <b>[sort:name]</b> </div>{/pboot:sort}
        <!--end--> 
      </div>
      <div class="clear"></div>
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
<script src="{pboot:sitedomain}/skin/js/counter.js" type="text/javascript" charset="utf-8"></script> 
<script type="text/javascript" src="{pboot:sitedomain}/skin/js/ckplayer.js" charset="utf-8"></script> 
<script type="text/javascript">
    $("#qh_1").addClass("nav_cut");
    var win_height = 0,
        scroll_top = 0,
        offset_top = 0;
    win_height = $(window).height();

    function scroll_js() {
        var scroll_top = $(window).scrollTop();
        $(".index_an").each(function (i) {
            offset_top = $(this).offset().top;
            if (win_height + scroll_top > offset_top) {
                $(this).addClass("index_move_load");
            }
        });
    };
    scroll_js();
    $(window).scroll(function () {
        scroll_js();
    });
    $(document).ready(function () {
        if($(window).width()>750){
        $(".index_map").hover(function(){},function() {
            $(".index_map_text").removeClass("index_map_text_cut");
        })
        }else{
            $(".work_map").html('<img src="{pboot:sitedomain}/skin/images/index_map.png"/>');
        }
        //end
        var window_w = $(window).width();
        var win_width = 190;
        var slide_num = $(".practice_ul li").length;
        if (window_w < 750) {
            var num_size = 1;
        } else {
            var num_size = 2;
        }
        //			$(".practice_ul li").width(win_width);
        $(".practice_ul ul").width(slide_num * win_width);
        $(".practice_ul li").click(function () {
            $(".practice_big_img").removeClass("big_img_load");
            $(".practice_ul li").removeClass("index_cut");
            $(this).addClass("index_cut");
            $(".practice_ul").animate({
                scrollLeft: win_width * ($(this).index() - num_size)
            }, 500, "swing");
            var _this_img = $(this);
            if (window_w < 750) {
                $(".big_img1").attr("src", _this_img.data("url"));
            } else {
                $(".big_img").attr("src", _this_img.data("urlpc"));
            }
            $(".practice_big_img a").attr("href", _this_img.data("a"));
            setTimeout(function () {
                $(".big_text h3").html(_this_img.data("h3"));
                $(".big_text p").html(_this_img.data("p"));
                $(".practice_big_img").addClass("big_img_load");
            }, 1200);
        });
        $(".index_next").click(function () {
            $(".practice_ul").animate({
                scrollLeft: win_width + $(".practice_ul").scrollLeft()
            }, 500, "swing");
        });
        $(".index_prev").click(function () {
            $(".practice_ul").animate({
                scrollLeft: -win_width + $(".practice_ul").scrollLeft()
            }, 500, "swing");
        });
        $(".practice_ul li").eq(0).click();

        TouchSlide({
            slideCell: "#index1",
            titCell: ".ban_hd ul",
            mainCell: ".ban_bd ul",
            effect: "leftLoop",
            autoPage: true,
            autoPlay: true,
            delayTime: 500,
            interTime: 6000,
            endFun: function (i, c) {
                $(".ban_bd li").removeClass("index_cut");
                $(".ban_bd li").eq(i + 1).addClass("index_cut");
            }
        });
    });
</script> 
<script type="text/javascript">
    $(".index_about_t a").click(function () {
        $(this).hide();
        var video = $(this).attr("data-value");
        CKobject._K_('home_video').style.display = 'block';
        var flashvars = {
            f: video,
            c: 0,
            p:1
        };
        var params = {bgcolor: '#fff', allowFullScreen: true, allowScriptAccess: 'always', wmode: 'transparent'};
        var video = [video + '->video/mp4', video + '->video/ogg'];
        var support = ['all'];
        if ($(window).width()<750) {
            CKobject.embed('{pboot:sitedomain}/skin/ckplayer/ckplayer.swf', 'a1', 'ckplayer_a1', '100%', '200', false, flashvars, video, params,support);
        }else{
            CKobject.embed('{pboot:sitedomain}/skin/ckplayer/ckplayer.swf', 'a1', 'ckplayer_a1', '100%', '587', false, flashvars, video, params, support);
        }
    });
</script>
</body>
</html><?php return array (
  0 => '/home/vol9_6/infinityfree.com/if0_39057669/htdocs/template/default/head.html',
  1 => '/home/vol9_6/infinityfree.com/if0_39057669/htdocs/template/default/foot.html',
  2 => '/home/vol9_6/infinityfree.com/if0_39057669/htdocs/template/default/foot2.html',
); ?>