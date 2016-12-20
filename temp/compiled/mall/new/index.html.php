<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo $this->_var['site_url']; ?>/" />

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7 charset=<?php echo $this->_var['charset']; ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_var['charset']; ?>" />
<?php echo $this->_var['page_seo']; ?>
<meta name="author" content="" />
<meta name="generator" content="" />
<meta name="copyright" content="" />
<link href="<?php echo $this->res_base . "/" . 'css/new/w_common.css'; ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->res_base . "/" . 'css/new/new.css'; ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/jquery.js" charset="utf-8"></script>
</head>
<body>

<div>
    <?php echo $this->fetch('new_headero.html'); ?>
    
    <div id="banner" class="auto1"> 
        <div id="banner_list"> 
            <a href="<?php echo url('app=default&act=zifei'); ?>" target="_blank"><img title="微商城" src="/mall/banner_1.jpg"/></a> 
            <a href="<?php echo url('app=default&act=zifei'); ?>" target="_blank"><img title="微信商城" src="/mall/banner_2.jpg"/></a>
            <a href="<?php echo url('app=default&act=zifei'); ?>" target="_blank"><img title="微商城" src="/mall/banner_3.jpg"/></a> 
        </div> 
        <ul> 
            <li style="background:#f60; color:#fff;">1</li> 
            <li>2</li> 
            <li>3</li> 
        </ul> 
    </div> 
    
     
    <div class="process auto1">
    	<span>开通流程</span>
        <ul>
        	<li><b>1</b>注册会员账号<img src="/themes/mall/new/styles/default/images/new/process_arrow.png" /></li>
            <li><b>2</b>开通Vip套餐<img src="/themes/mall/new/styles/default/images/new/process_arrow.png" /></li>
            <li><b>3</b>设置微商城信息<img src="/themes/mall/new/styles/default/images/new/process_arrow.png" /></li>
            <li><b>4</b>绑定微信接口</li>
         </ul>
    </div>
    <style>
	.process{background:#ccc;}
    .process span{display:block; float:left; width:120px; height:70px; line-height:70px; text-align:center; background:#222; color:#fff; font-size:18px; border-right:#fff solid 2px;}
    .process ul{display:inline-block; padding-left:40px;height:70px; line-height:70px;}
    .process li{float:left; font-size:16px; margin-right:20px; *margin-right:15px; height:70px; line-height:70px;}
	.process li b{background:url(/themes/mall/new/styles/default/images/new/process.png) no-repeat 0 20px; color:#fff; display:inline-block; width:30px; height:70px; line-height:70px; text-align:center; margin-right:10px;}
    </style>
    
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
    t = setInterval("showAuto()", 4000); 
    $("#banner").hover(function(){clearInterval(t)}, function(){t = setInterval("showAuto()", 4000);}); 
    }) 
    
    function showAuto() 
    { 
    n = n >=(count - 1) ? 0 : ++n; 
    $("#banner li").eq(n).trigger('click'); 
    } 
    
    </script>
    
    
    <div class="list_index">
        <ul>
            <li class="">
                <div class="icon">
                    <a href="<?php echo url('app=default&act=zifei'); ?>" class="mall"></a>
                </div>
                <div class="text">
                    <h3>
                        商城管理
                    </h3>
                </div>
                <div class="des">
                    <p>
                        微信商城让商家轻松坐拥6亿微信用户
                    </p>
                    <p>
                        抢占手机终端购物的市场份额
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li class="">
                <div class="icon">
                    <a href="<?php echo url('app=default&act=zifei'); ?>" class="shopping"></a>
                </div>
                <div class="text">
                    <h3>
                        商品管理
                    </h3>
                </div>
                <div class="des">
                    <p>
                        后台清晰的商品管理系统架构
                    </p>
                    <p>
                        让商家轻松把控商品信息
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li>
                <div class="icon">
                    <a href="<?php echo url('app=default&act=zifei'); ?>" class="sale"></a>
                </div>
                <div class="text">
                    <h3>
                        交易管理
                    </h3>
                </div>
                <div class="des">
                    <p>
                        消费者享受简化的购物体验
                    </p>
                    <p>
                        微商城后台简单操作交易过程
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li class="">
                <div class="icon">
                    <a href="<?php echo url('app=default&act=zifei'); ?>" class="model"></a>
                </div>
                <div class="text">
                    <h3>
                        精美模板
                    </h3>
                </div>
                <div class="des">
                    <p>
                        微信商城拥有众多模板皮肤
                    </p>
                    <p>
                        随时更换，增加品牌新鲜感
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li>
                <div class="icon">
                    <a href="<?php echo url('app=default&act=zifei'); ?>" class="payfor"></a>
                </div>
                <div class="text">
                    <h3>
                        微信支付
                    </h3>
                </div>
                <div class="des">
                    <p>
                        集成支付宝/微信支付的接口
                    </p>
                    <p>
                        让消费者无线支付更轻松！
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li>
                <div class="icon">
                    <a href="<?php echo url('app=default&act=zifei'); ?>" class="data"></a>
                </div>
                <div class="text">
                    <h3>
                        数据导入
                    </h3>
                </div>
                <div class="des">
                    <p>
                        微信商城支持一键导入
                    </p>
                    <p>
                        淘宝商品数据
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li>
                <div class="icon">
                    <a href="<?php echo url('app=default&act=zifei'); ?>" class="huiyuan"></a>
                </div>
                <div class="text">
                    <h3>
                        会员中心
                    </h3>
                </div>
                <div class="des">
                    <p>
                        消费者对自己的订单状态 
                    </p>
                    <p>
                        和个人信息一目了然
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li>
                <div class="icon">
                    <a href="<?php echo url('app=default&act=zifei'); ?>" class="kefu"></a>
                </div>
                <div class="text">
                    <h3>
                        在线客服
                    </h3>
                </div>
                <div class="des">
                    <p>
                        让商家及时沟通6亿微信用户 
                    </p>
                    <p>
                        创造无限商机
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li>
                <div class="icon">
                    <a href="<?php echo url('app=default&act=zifei'); ?>" class="tuwen"></a>
                </div>
                <div class="text">
                    <h3>
                        推送图文
                    </h3>
                </div>
                <div class="des">
                    <p>
                        主动对话6亿微信用户 
                    </p>
                    <p>
                        移动社会化的强关系裂变式营销
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li>
                <div class="icon">
                    <a href="<?php echo url('app=default&act=zifei'); ?>" class="wuliu"></a>
                </div>
                <div class="text">
                    <h3>
                        物流查询
                    </h3>
                </div>
                <div class="des">
                    <p>
                        消费者可自己跟踪订单的 
                    </p>
                    <p>
                        物流状态省时更省心
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li>
                <div class="icon">
                    <a href="<?php echo url('app=default&act=zifei'); ?>" class="hu"></a>
                </div>
                <div class="text">
                    <h3>
                        互动功能
                    </h3>
                </div>
                <div class="des">
                    <p>
                        微商城有丰富的互动游戏、
                    </p>
                    <p>
                        互动活动、引爆流量、销量
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li>
                <div class="icon">
                    <a href="<?php echo url('app=default&act=zifei'); ?>" class="gao"></a>
                </div>
                <div class="text">
                    <h3>
                        高级功能
                    </h3>
                </div>
                <div class="des">
                    <p>
                        独家团购、APP等高级应用
                    </p>
                    <p>
                        微商城带领您走向移动互联商贸的巅峰
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
        </ul>
        <script>
         //鼠标移动图标上显示的效果
        $(".list_index ul li").hover(
        function(){
        $(this).addClass("active")
        },
        function(){
        $(this).removeClass("active");
        }
        ); 
        </script>
    </div>
    <div class="auto1 partner">
    	<ul>
        	<li><img src="<?php echo $this->res_base . "/" . 'images/new/partner.gif'; ?>" /></li>
        	<li><img src="<?php echo $this->res_base . "/" . 'images/new/partner1.gif'; ?>" title="支付宝" /></li>
            <li><img src="<?php echo $this->res_base . "/" . 'images/new/partner6.gif'; ?>" title="微信支付" /></li>
        	<li><img src="<?php echo $this->res_base . "/" . 'images/new/partner2.gif'; ?>" /></li>
        	<li><img src="<?php echo $this->res_base . "/" . 'images/new/partner3.gif'; ?>" /></li>
        	<li><img src="<?php echo $this->res_base . "/" . 'images/new/partner4.gif'; ?>" /></li>
        	<li><img src="<?php echo $this->res_base . "/" . 'images/new/partner5.gif'; ?>" /></li>
        	
        </ul>
    </div>
    <?php echo $this->fetch('new_footero.html'); ?>
</div>
<div style="display:none;">
	
</div>
 
    <div class="floatcode">
    	<div class="codebox">
            <span class="close"></span>
       
            <a href="<?php echo url('app=default&act=zifei'); ?>" target="_blank"></a>
        </div>
    </div>
    <script>
    	$(function(){
			$(".close").click(function(){
				$(".floatcode").fadeOut();
				})
			})
    </script>
</body>
</html>



