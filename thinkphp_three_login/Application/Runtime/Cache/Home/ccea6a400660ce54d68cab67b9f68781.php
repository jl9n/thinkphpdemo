<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <title><?php echo ($title); ?></title>
        <meta name="keywords" content="<?php echo ($keywords); ?>" /> 
        <meta name="description" content="<?php echo ($description); ?>" /> 
        <link rel="shortcut icon" href="/sucai/jquery/demo/2/288/Public/images/favicon.ico" type="image/x-icon" /> 
        <link rel="stylesheet" href="/sucai/jquery/demo/2/288/Public/css/style<?php echo ($version); ?>.css" type="text/css" /> 
    </head> 
    <body> 
        <div id="site_nav">
            <div  class="sn_container clearfix">
                <ul class="tg_tools fr">
                    <li class='box_color nav_home'>
                        <span><a href="<?php echo U('Member/info');?>">个人中心</a></span><b class="icon"></b>
                        <ul>
                            <li><a href="<?php echo U('Member/info');?>"><span>我的主页</span></a></li>
                            <li><a href="<?php echo U('Member/set');?>"><span>个人设置</span></a></li>
                            <li><a href="<?php echo U('Member/downloads');?>"><span>下载记录</span></a></li>
                            <!--                            <li><a href="<?php echo U('Member/templates');?>"><span>我的模板</span></a></li>-->
                            <li><a href="<?php echo U('Member/sign');?>"><span>我的签到</span></a></li>
                            <li><a href="/sucai/jquery/demo/2/288/Index/logout?r=<?php echo ($url_cur); ?>"><span>退出登录</span></a></li>
                        </ul>
                    </li>
                    <li class="tg-line icon"></li>
                    <li class='box_color'>
                        <span>帮助中心</span><b class="icon"></b>
                        <ul>
                            <li><a href="/sucai/jquery/demo/2/288/help/template"><span>扒模板</span></a></li>
                            <li><a href="/sucai/jquery/demo/2/288/help/points"><span>积分获取</span></a></li>
                            <li><a href="/sucai/jquery/demo/2/288/help/contact"><span>联系我们</span></a></li>
                            <li><a href="/sucai/jquery/demo/2/288/help/index"><span>关于我们</span></a></li>
                            <li><a href="/sucai/jquery/demo/2/288/help/job"><span>招纳贤士</span></a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="tg_tools fl" >
                    <li class="tg_tools_home no-hover"><i class="icon-more"></i><span><a href="/sucai/jquery/demo/2/288">素材火首页</a></span></li>

                    <?php if($_SESSION['userid']> 0): ?><li class="no-hover haslogin"><span><a href="<?php echo U('Member/info');?>"><font class="sn_login username"><?php echo (session('username')); ?></font></a></span></li>
                        <li class="tg-line icon"></li>
                        <li class="no-hover haslogin"><span><a href="/sucai/jquery/demo/2/288/Index/logout?r=<?php echo ($url_cur); ?>">退出</a></span></li>
                        <?php else: ?>
                        <li class="no-hover nologin"><span><a href="/sucai/jquery/demo/2/288/Index/login/type/qq.html"><img alt="Connect_logo_6.png" src="http://qzonestyle.gtimg.cn/qzone/vas/opensns/res/img/Connect_logo_6.png" style="position: relative;top:3px;"/></a></span></li>
                        <li class="no-hover hide haslogin"><span><a href="<?php echo U('Member/info');?>"><font class="sn_login username" id='head_username'></font></a></span></li>

                        <li class="tg-line icon"></li>
                        <li class="no-hover nologin"><span><a href="/sucai/jquery/demo/2/288/reg.html">注册</a></span></li>
                        <li class='box_color nav_home' id="nav_login">
                            <span><a href="/sucai/jquery/demo/2/288/login.html" class="sn_login">登录</a></span><b class="icon"></b>
                            <ul>
                                <li><a href="/sucai/jquery/demo/2/288/Index/login/type/qq.html"><span>腾讯QQ</span></a></li>
                                <li><a href="/sucai/jquery/demo/2/288/Index/login/type/sina.html"><span>新浪微博</span></a></li>
                                <li><a href="/sucai/jquery/demo/2/288/Index/login/type/renren.html"><span>人人网<i style="visibility: hidden">站</i></span></a></li>
                            </ul>
                        </li><?php endif; ?>


                </ul>

            </div>
        </div>
        <div id="header">
            <div class="tg_tools_home">
                <div class="bbs_enter">
                    <a class="bbs-banner"  href="/sucai/jquery/demo/2/288/help/template" target="_blank"><img src="/sucai/jquery/demo/2/288/Public/images/other/banner.jpg" alt="扒模板"/></a>
                </div>
                <div class="logo">
                    <a class="logo-bd"  href="/sucai/jquery/demo/2/288"><img src="/sucai/jquery/demo/2/288/Public/images/logo.png" alt="素材火logo"/></a>
                </div>
                <form action="/sucai/jquery/demo/2/288/search.html" method="GET" name="form_search">
                    <div id='search'>
                        <div class="search_area">
                            <input type='submit' value='搜 索' class='btn_search' onclick="var keywords = $('#search_input').val();
                                    if (keywords == '请输入搜索内容' || keywords == '') {
                                        location.href = 'http://www.sucaihuo.com';
                                        return false;
                                    }"/>
                            <div class="search_select">
                                <span class="icon-search"></span>
                            </div>
                            <input type='text' value='<?php echo ((isset($keyword) && ($keyword !== ""))?($keyword):"请输入搜索内容"); ?>'  class="search_input" name="keyword" autocomplete="off" id="search_input" data-default="请输入搜索内容" onblur="checkInputBlur($(this))" onfocus="checkInputFocus($(this))" />
                        </div>
                        <div class="search_box hide" id="search_box"></div>
                        <div class='search_keywords' >
                            <span>热门搜索：</span>
                            <a href="/sucai/jquery/demo/2/288/templates/0-0-52-0-0">手机</a>
                            <a href="/sucai/jquery/demo/2/288/search/search.html?keyword=订餐">订餐</a>
                            <a href="/sucai/jquery/demo/2/288/search/search.html?keyword=bootstrap">bootstrap</a>
                            <a href="/sucai/jquery/demo/2/288/search/search.html?keyword=后台">后台</a>
                            <a href="/sucai/jquery/demo/2/288/search/search.html?keyword=上传">上传</a>
                            <a href="/sucai/jquery/demo/2/288/search/search.html?keyword=购物车">购物车</a>
                            <a href="/sucai/jquery/demo/2/288/search/search.html?keyword=瀑布流">瀑布流</a>
                            <a href="/sucai/jquery/demo/2/288/search/search.html?keyword=弹出层">弹出层</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id='nav' class='nav'>
            <div class='nav_main clearfix'>
                <a href='/sucai/jquery/demo/2/288' class="menu<?php echo (getequal($control,'index',' current')); ?>">首 页</a>
                <a href='/sucai/jquery/demo/2/288/js' class="menu<?php echo (getequal($control,'js',' current')); ?>">网页特效</a>
                <a href='/sucai/jquery/demo/2/288/php' class="menu<?php echo (getequal($control,'php',' current')); ?>">PHP</a>
                <a href='/sucai/jquery/demo/2/288/templates' class="menu<?php echo (getequal($control,'templates',' current')); ?>">网站模板</a>
                <a href='/sucai/jquery/demo/2/288/psd' class="menu<?php echo (getequal($control,'psd',' current')); ?>">网站psd</a>
                <?php if(C("DB_PWD")== ''): ?><a href='/sucai/jquery/demo/2/288/source' class="menu<?php echo (getequal($control,'source',' current')); ?>">网站源码</a><?php endif; ?>
                <?php if(C("DB_PWD")== ''): ?><a href='/sucai/jquery/demo/2/288/answer' class="menu<?php echo (getequal($control,'answer',' current')); ?>">有问必答</a><?php endif; ?>
                <a href='/sucai/jquery/demo/2/288/site' class="menu<?php echo (getequal($control,'site',' current')); ?>">精选网址</a>
                <a href='/sucai/jquery/demo/2/288/tools' class="menu<?php echo (getequal($control,'tools',' current')); ?>">工具箱</a>
                <span class='icon_hot'></span>
            </div>
        </div>
<link rel="stylesheet" href="/sucai/jquery/demo/2/288/other/login/css/base.css" />
<div class="wrap_outer">
    <section class="wrap">
        <div class="pop-title">
            <div class="pop_name">
                登录<span class="grey">与网友进行讨论及互动；收藏您喜欢的文章和内容；积累积分下载原创模板、精品源码、(兑换礼品正在开发中...)；分享代码、解决求助赢取金币。</span>
            </div>
            <a class="a_underline" href="/sucai/jquery/demo/2/288/reg.html">注册</a>    
        </div>

        <div class="pop-content accountPage">
            <div class="form_item">
                <div class="item_tip">用户名/邮箱</div>
                <input type="text" tabindex="1" value="" name="username"  class="form_input" id="username" onblur="blurInputLoginBox($(this))"  onfocus ="focusInputLoginBox($(this))" autocomplete="off"/>
                <span class="error">不能为空</span>
                <i class="icon-loginright"></i>
                <span class="grey">允许用中英文、数字、下划线，提交后不可修改</span>
            </div>	
            <div class="form_item">
                <div class="item_tip">密码</div>
                <input type="password" tabindex="3" name="pwd" class="form_input" id="pwd" onblur="blurInputLoginBox($(this))"  onfocus ="focusInputLoginBox($(this))" autocomplete="off"/>
                <span class="error">不能为空</span>
                <span class="grey">6 - 20位</span>
                <i class="icon-loginright"></i>
            </div>
            <div class="twoWeeks">
                <input type="checkbox" class="ckeckBox" name="rememberme" id="rememberme"/>
                <label for="rememberme">两周内免登录</label>
                <a class="a_underline" href="/sucai/jquery/demo/2/288/forget.html">忘记密码？</a>
            </div>
            <p class="notice_error" id="notice_error"></p>
            <input type="button" tabindex="7" value="登&nbsp;&nbsp;录" class="btn_reg btn" id="btn_reg" onclick="subLogin($(this))"/>
            <div class="co_login">
                联合登录
                <a class="a_underline" href="/sucai/jquery/demo/2/288/Index/login/type/qq.html">腾讯QQ</a>
                <a class="a_underline" href="/sucai/jquery/demo/2/288/Index/login/type/sina.html">新浪微博</a>
                <a class="a_underline" href="/sucai/jquery/demo/2/288/Index/login/type/renren.html">人人网</a>
                绑定送<span class="red">200</span>积分
            </div>
        </div>
    </section>
</div>


<div class="footer" id="footer" data-url="/sucai/jquery/demo/2/288/" data-logout="/sucai/jquery/demo/2/288/Download/logout?r=<?php echo ($url_cur); ?>" data-id="<?php echo ($id); ?>" data-mtype="<?php echo ($mtype); ?>"> 
    <div class="footer_main clearfix">
        <div class="guide">
            <span class="guide_icon"></span>
            <ul class="ul_foot">
                <li><strong>网站模板</strong></li>
                <li><a href="/sucai/jquery/demo/2/288/templates/3-0-0-0-0">行业模板</a><a href="/sucai/jquery/demo/2/288/templates/7-0-0-0-0">专题模板</a></li>
                <li><a href="/sucai/jquery/demo/2/288/templates/4-0-0-0-0">商城模板</a><a href="/sucai/jquery/demo/2/288/templates/8-0-0-0-0">后台模板</a></li>
                <li><a href="/sucai/jquery/demo/2/288/templates/5-0-0-0-0">企业模板</a><a href="/sucai/jquery/demo/2/288/templates/9-0-0-0-0">其他模板</a></li>
                <li><a href="/sucai/jquery/demo/2/288/templates/69-0-0-0-0">个人博客</a><a href="/sucai/jquery/demo/2/288/templates/54-0-0-0-0">服装模板</a></li>
            </ul>
        </div>
        <div class="stores">
            <span class="stores_icon"></span>
            <ul class="ul_foot">
                <li><strong>网页特效</strong></li>
                <li><a href="/sucai/jquery/demo/2/288/js/7-0-0-0">图片代码</a><a href="/sucai/jquery/demo/2/288/js/7-0-0-0">悬浮层/弹出层</a></li>
                <li><a href="/sucai/jquery/demo/2/288/js/8-0-0-0">导航菜单</a><a href="/sucai/jquery/demo/2/288/js/14-0-0-0">其它特效</a></li>
                <li><a href="/sucai/jquery/demo/2/288/js/9-0-0-0">选项卡/滑动门</a><a href="/sucai/jquery/demo/2/288/js/53-0-0-0">PHP+Ajax</a></li>
                <li><a href="/sucai/jquery/demo/2/288/js/11-0-0-0">表单代码</a><a href="/sucai/jquery/demo/2/288/js/128-0-0-0">jQuery插件</a></li>
            </ul>
        </div>
        <div class="rebate">
            <span class="rebate_icon"></span>
            <ul class="ul_foot">
                <li><strong>精选网址</strong></li>
                <li><a href="/sucai/jquery/demo/2/288/site/3-0-0-0-0">行业网址</a><a href="/sucai/jquery/demo/2/288/site/22-0-0-0-0">订餐外送</a></li>
                <li><a href="/sucai/jquery/demo/2/288/site/4-0-0-0-0">商城网址</a><a href="/sucai/jquery/demo/2/288/site/23-0-0-0-0">旅游酒店</a></li>
                <li><a href="/sucai/jquery/demo/2/288/site/5-0-0-0-0">企业网址</a><a href="/sucai/jquery/demo/2/288/site/24-0-0-0-0">网络设计</a></li>
                <li><a href="/sucai/jquery/demo/2/288/site/9-0-0-0-0">其他网址</a><a href="/sucai/jquery/demo/2/288/site/77-0-0-0-0">资源分享</a></li>
            </ul>
        </div>

        <div class="follow">
            <span class="follow_icon"></span>
            <ul>
                <li>
                    <strong>联系我们</strong>
                </li>
                <li>
                    <a  class="qq-chat" href="//wpa.b.qq.com/cgi/wpa.php?ln=1&key=XzgwMDA2NjkzMF83MjI3OF84MDAwNjY5MzBfMl8" target="_blank">
                        <img alt="QQ在线客服" src="/sucai/jquery/demo/2/288/Public/images/qq-chat.png">
                    </a>
                </li>
                <li>qq群：35291327</li>
                <li>邮箱：674081005@qq.com</li>
            </ul>
        </div>
        <div class="friendly">
            <?php if(!empty($friends)): ?><div class="link_exchange">
                    <strong>友情链接：</strong>
                    <?php if(is_array($friends)): foreach($friends as $key=>$row): ?><a target="_blank" href="<?php echo ($row["url"]); ?>"><?php echo ($row["name"]); ?></a><?php endforeach; endif; ?>
                </div><?php endif; ?>
            <div class="foot_menu">
                <a href="/sucai/jquery/demo/2/288/help/template" target="_blank">扒模板</a>
                <a href="/sucai/jquery/demo/2/288/help/contact" target="_blank">联系我们</a>
                <a href="/sucai/jquery/demo/2/288/help/index" target="_blank">关于我们</a>
                <a href="/sucai/jquery/demo/2/288/help/job" target="_blank">招纳贤士</a>
                <a href="/sucai/jquery/demo/2/288/sitemap.html" target="_blank">网站地图</a>
                <span class="address">Copyright&copy;2010-2015 All Rights Reserved. 苏ICP备15009298</span>
            </div>
        </div>
    </div>
</div>

<div id="windown_box" class="modal fade">
    <div class="pop_title">
        <div class="pop_name">登录</div>
        <i class="pop_close" onclick="$('#windown_box').modal('hide')"></i>
    </div>
    <div class="pop_content">
        <div class="form_item">
            <div class="item_tip">用户名/邮箱</div>
            <input id="email" name="email"  class="form_input" type="text" autocomplete="off" tabindex="1" value="" onblur="blurInputLoginBox($(this))"  onfocus ="focusInputLoginBox($(this))"/>
        </div>
        <div class="form_item">
            <div class="item_tip">密码</div>
            <input name="pwd" id="pwd"class="form_input" type="password" tabindex="2" value="" onblur="blurInputLoginBox($(this))"  onfocus ="focusInputLoginBox($(this))" />
        </div>
        <div class="captchaBox">
            <div class="two_weeks">
                <input id="rememberme" class="ckeckBox" type="checkbox" name="rememberme">
                <label for="rememberme">两周内免登录</label>
                <a  href="/sucai/jquery/demo/2/288/reg.html" target="_blank" class="loginbox_reg">免费注册</a>
            </div>
        </div>
        <p class="notice_error"></p>
        <input id="btn_login" class="btn" type="button" onclick="sublogin()" tabindex="4" value="登  录">
        <a class="a_underline" href="/sucai/jquery/demo/2/288/forget.html">忘记密码？</a>
        <div class="co_login" style="margin:20px 0 0">
                联合登录
                <a class="a_underline" href="/sucai/jquery/demo/2/288/Index/login/type/qq.html">腾讯QQ</a>
                <a class="a_underline" href="/sucai/jquery/demo/2/288/Index/login/type/sina.html">新浪微博</a>
                <a class="a_underline" href="/sucai/jquery/demo/2/288/Index/login/type/renren.html">人人网</a>
                绑定送<span class="red">200</span>积分
            </div>
    </div>
</div>
<?php if($control == 'js' && $mod == 'detail'): ?><script src="/sucai/jquery/demo/2/288/Public/js/other/jquery_highlight.js" type="text/javascript"></script>
    <?php else: ?>
    <script src="/sucai/jquery/demo/2/288/Public/js/jquery.js" type="text/javascript"></script><?php endif; ?>
<script src="/sucai/jquery/demo/2/288/Public/js/common<?php echo ($version); ?>.js" type="text/javascript"></script>
<?php if($control == 'index' && $mod == 'index'): ?><script src="/sucai/jquery/demo/2/288/Public/js/other/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script><?php endif; ?>

<?php if(($control == 'js' or $control == 'php') && $mod == 'detail'): ?><!--[if !IE]><!-->
    <script src="/sucai/jquery/demo/2/288/Public/js/other/jquery.chili-2.2.js" type="text/javascript"></script>
    <script src="/sucai/jquery/demo/2/288/Public/js/other/recipes.js" type="text/javascript"></script>
    <!--<![endif]--><?php endif; ?>
<div class="mmsg-box mmsg-box-info" id='msg-box' style="margin-top: -23.5px; margin-left: -96.5px;">
    <div class="mmsg-content">
        <i class="mmsg-icon"></i>
        <p id='msg-box-content'></p>
    </div>
    <div class="mmsg-background"></div>
</div>
<script  type="text/javascript">
var _hmt=_hmt||[];(function(){var hm=document.createElement("script");hm.src="//hm.baidu.com/hm.js?5f5a95758129ff157ca4d0d7afabff18";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hm,s)})();
</script>
</body>
</html>
<script type="text/javascript">
    function subLogin(obj) {
        var username = $.trim($('#username').val());
        var pwd = $.trim($('#pwd').val());
        if (username == '') {
            showLoginError("请输入用户名或邮箱");
            return false;
        }
        if (pwd == '') {
            showLoginError("请输入密码");
            return false;
        }

        obj.addClass('disabled').val('登录中...');
        $.post(getUrl('Ajax/checkLogin'), {username: username, pwd: pwd}, function(data) {
            if (data.error != '') {
                showLoginError(data.error);
            } else {
                
                showSuccessTip(data.tip);
                var url = "/sucai/jquery/demo/2/288";
                setTimeout("goUrl('"+url+"')",1000);
            }
            obj.removeClass('disabled').val('登录');
        }, "json")

    }
    function showLoginError(tip) {
        $("#notice_error").text(tip).show();
        $("#notice_error").fadeOut(2500);
    }
</script>