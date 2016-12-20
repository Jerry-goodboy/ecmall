<?php echo $this->fetch('new_header.html'); ?>
    
    <div id="banner" class="auto"> 
        <div id="banner_list"> 
            <a href="#" target="_blank"><img src="<?php echo $this->res_base . "/" . 'images/banner1.jpg'; ?>"/></a> 
            <a href="#" target="_blank"><img src="<?php echo $this->res_base . "/" . 'images/banner2.jpg'; ?>"/></a> 
            <a href="#" target="_blank"><img src="<?php echo $this->res_base . "/" . 'images/banner3.jpg'; ?>"/></a> 
        </div> 
        <ul> 
            <li style="background:#f60; color:#fff;">1</li> 
            <li>2</li> 
            <li>3</li> 
        </ul> 
        <div class="sc_re_con">
            <a href="<?php echo url('app=member&act=register&ret_url=' . $this->_var['ret_url']. ''); ?>" class="re"></a>
            <a href="<?php echo url('app=member&act=login&ret_url=' . $this->_var['ret_url']. ''); ?>" class="lo"></a>
            <div class="clear"></div>
            <p style="margin-top:10px; color:#fff; font-size:14px;">现在申请加入微信商城，获得更多优惠！</p>
        </div>
    </div> 
    <div align="center">
      <script>
    //轮播
    var t = n = 0, count; 
    $(document).ready(function(){ 
    count=$("#banner_list a").length; 
    $("#banner_list a:not(:first-child)").hide(); 
    $("#banner li").click(function() { 
    var i = $(this).text() - 1;//获取Li元素内的值，即1，2，3，4 
    n = i; 
    if (i >= count) return; 
    $("#banner_list a").filter(":visible").fadeOut(500).parent().children().eq(i).fadeIn(1000); 
    $(this).css({"background":"#f60",'color':'#fff'}).siblings().css({"background":"#fff",'color':'#000'}); 
    }); 
    t = setInterval("showAuto()", 3000); 
    $("#banner").hover(function(){clearInterval(t)}, function(){t = setInterval("showAuto()", 3000);}); 
    }) 
    
    function showAuto() 
    { 
    n = n >=(count - 1) ? 0 : ++n; 
    $("#banner li").eq(n).trigger('click'); 
    } 
    
    </script>
      <img src="themes/0001.gif" />
      
    </div>
    <div class="block_box auto">
        <div class="block">
            <span>领先的微信商城技术服务提供商</span>
            <a href="<?php echo url('app=member&act=register&ret_url=' . $this->_var['ret_url']. ''); ?>" target="_blank"><img src="<?php echo $this->res_base . "/" . 'images/b1.jpg'; ?>" border="0" /></a>
            <ul>
                <li>微信商城技术服务提供商</li>
                <li>专业开放平台技术保障</li>
                <li>享受微信海量用户资源红利</li>
            </ul>
      </div>
        <div class="block">
            <span>社会化移动电商新机会</span>
          <img src="<?php echo $this->res_base . "/" . 'images/b2.jpg'; ?>" />
            <ul>
                <li>基于云端的专业SAAS服务模式</li>
                <li>无需域名/无需空间/无需备案/无需维护</li>
                <li>投入少/效果好/轻松拥有/无敌赢销</li>
            </ul>
      </div>
        <div class="block">
            <span>轻松管理微信上的买家</span>
          <img src="<?php echo $this->res_base . "/" . 'images/b3.jpg'; ?>" />
            <ul>
                <li>将您的商品销售给微信近5亿的消费者</li>
                <li>微信开放平台提供专业的卖家接入系统</li>
                <li>成熟的微信开放平台技术</li>
            </ul>
      </div>
        <div class="block w_net_ad">          <img src="<?php echo $this->res_base . "/" . 'images/b4.jpg'; ?>" />        </div>
    </div>
    
    
    <div class="report auto">
        <div class="case">
            <div class="new_img">              <img src="<?php echo $this->res_base . "/" . 'images/c1.jpg'; ?>" border="0" /> </div>
            <div class="new_logo">              <img src="<?php echo $this->res_base . "/" . 'images/c1_logo.png'; ?>" border="0" /> </div>
            <div class="new_detail">在微信上就可卖菜？没错，这确实是真的。近日，一个名为"小农女送菜"的微信账号在网上走红，这个账号最特别的地方就在于完全用……</div>
            <span>微信卖菜"小农女"受热捧</span>
            <a href="http://news.163.com/13/1022/14/9BQ1FSRV00014Q4P.html" target="_blank">阅读全文</a>
        </div>
        <div class="case">
            <div class="new_img">              <img src="<?php echo $this->res_base . "/" . 'images/c2.jpg'; ?>" border="0" /> </div>
            <div class="new_logo">              <img src="<?php echo $this->res_base . "/" . 'images/c2_logo.gif'; ?>" border="0" /> </div>
            <div class="new_detail">9月13日，天虹商场披露联手腾讯微生活打造天虹应用平台，此平台通过腾讯微生活，将商场商品、优惠和服务信息上传，让顾客通过……</div>
            <span>天虹商场微信平台开通购物功能</span>
            <a href="http://finance.ifeng.com/a/20131017/10878148_0.shtml" target="_blank">阅读全文</a>
        </div>
        <div class="case">
            <div class="new_img">              <img src="<?php echo $this->res_base . "/" . 'images/c3.jpg'; ?>" border="0" /> </div>
            <div class="new_logo">              <img src="<?php echo $this->res_base . "/" . 'images/c3_logo.gif'; ?>" border="0" /> </div>
            <div class="new_detail">一群上海老阿姨，利用QQ、微信等方式在线上接单，每天中午骑车穿梭于核心CBD写字楼中，为白领们送上个性化定制的私房菜，依靠口……</div>
            <span>80后网上卖烧烤年赚百万</span>
            <a href="http://news.sohu.com/20130709/n381118880.shtml" style="margin-right:10px;" target="_blank">阅读全文</a>
        </div>
    </div>
    <?php echo $this->fetch('new_footer.html'); ?>


