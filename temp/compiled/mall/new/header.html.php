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
<link href="<?php echo $this->res_base . "/" . 'css/ecmall.css'; ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->res_base . "/" . 'css/new/new.css'; ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->res_base . "/" . 'css/new/w_common.css'; ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="index.php?act=jslang"></script>
<script type="text/javascript" src="/js/jquery.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo $this->lib_base . "/" . 'ecmall.js'; ?>" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo $this->res_base . "/" . 'js/nav.js'; ?>" charset="utf-8"></script>
<!--<script type="text/javascript" src="<?php echo $this->res_base . "/" . 'js/select.js'; ?>" charset="utf-8"></script>-->
<script type="text/javascript" src="<?php echo $this->res_base . "/" . 'js/jquery-1.8.0.min.js'; ?>" charset="utf-8"></script>

<script type="text/javascript">
//<!CDATA[
var SITE_URL = "<?php echo $this->_var['site_url']; ?>";
var REAL_SITE_URL = "<?php echo $this->_var['real_site_url']; ?>";
var PRICE_FORMAT = '<?php echo $this->_var['price_format']; ?>';

$(function(){
    var select_list = document.getElementById("select_list");
    var float_list = document.getElementById("float_list");
    select_list.onmouseover = function () {
        float_list.style.display = "block";
    };
    select_list.onmouseout = function () {
        float_list.style.display = "none";
    };
});
//]]>
</script>

<?php echo $this->_var['_head_tags']; ?>
<!--<editmode></editmode>-->
</head>

<body>

<script type="text/javascript" src="index.php?act=jslang"></script>

    
<div class="header_bg">
	<div class="header auto">
        <a href="index.php"" class="logo"><img title="<?php echo $this->_var['site_title']; ?>" src="<?php echo $this->_var['site_logo']; ?>"></a>
        <div class="headerLinks">
            小畅客服：<a href="http://wpa.qq.com/msgrd?v=3&uin=97380160&site=qq&menu=yes" target="_blank"><img style="margin-right:10px;" title="联系微信商城" alt="联系微信商城" src="<?php echo $this->res_base . "/" . 'images/pa_002.gif'; ?>" border="0"></a>
            问题解答：<a href="http://sighttp.qq.com/authd?IDKEY=d6ef965a23a46328eb31552a2505e0e761f3405e2b867152" target="_blank"><img style="margin-right:10px;" title="联系微信商城" alt="联系微信商城" src="<?php echo $this->res_base . "/" . 'images/pa.gif'; ?>" border="0"></a>
        </div>
    </div>
</div>
<div class="nav">
    <ul class="auto">     
    
      <?php if (! $this->_var['visitor']['user_id']): ?>
            <form class="login_panel" action="<?php echo url('app=member&act=login'); ?>" method="post">
            	<li class="menu_li">用户名：<input type="text" class="l_text" name="user_name"/></li>
            	<li class="menu_li">密码：<input type="password"  class="l_text" name="password"/></li>
            	<li class="menu_li"><input type="submit" value="登录" class="lr_btn"/><input onclick="window.location.href='<?php echo url('app=member&act=register&ret_url=' . $this->_var['ret_url']. ''); ?>';" type="button" value="注册" class="lr_btn"/></li>
        	</form>
        <?php else: ?>
           <li class="menu_li logined">欢迎您！
              <a href="<?php echo url('app=member'); ?>"><?php echo htmlspecialchars($this->_var['visitor']['user_name']); ?></a>
              <a href="<?php echo url('app=member'); ?>">管理中心</a>
               <a href="<?php echo url('app=apply'); ?>">申请入驻</a>
              <a href="<?php echo url('app=member&act=logout'); ?>">退出</a>
           </li>
        <?php endif; ?>
         
    </ul>
</div>


       
