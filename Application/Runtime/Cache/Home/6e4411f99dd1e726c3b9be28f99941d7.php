<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="OodpqZN-7xOcBc81oI3fsyno9LLtzOOHwjcoPkSHiYlTtArE3zCiIehkrFqNv4qeUJKa36GnrvD7Wlt5dtD4-A==">
    <title>PaperPass论文检测_论文查重_免费论文检测系统_毕业论文抄袭检测</title>
    <meta  name="description" content="★PaperPass★论文检测-全球首个中文论文相似度检测网站;提供论文查重,免费论文检测系统,毕业论文抄袭检测。最权威,动态指纹技术保障,已服务超300万人论文检测。"/>
    <meta name="keywords" content="论文,论文检测,论文查重,免费论文检测,检测系统,论文抄袭,毕业论文"/>
    <link href="/codeboss/Public/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="/codeboss/Public/css/home.css" rel="stylesheet">
    <style></style>
</head>
<body>
    <header class="top">
        <!--[if lt IE 9]>
        <div class="top">
        <![endif]-->
        <div class="top_con">
            <div class="topimg pull-left"><a href="/" class="topimgsize"></a></div>
                <div class="topbtn pull-right">
                    <a href="<?php echo U('Index/login');;?>" class="btn_login">登录</a>
                    <a href="<?php echo U('Index/signup');;?>" class="btn_sign">注册</a>
                </div>
                        <ul class="topnav pull-right">
                <li><a class="topnavli activenav" href="/">首页</a></li>
                <li><a class="topnavli " href="/check">查询真伪</a></li>
                <li><a class="topnavli " href="/help.htm">帮助</a></li>
                <li><a class="topnavli " href="/faq.htm">常见问题</a></li>
                <li><a class="topnavli " target="_blank" href="http://jigou.paperpass.com/">机构版</a></li>
                <li><a class="topnavli " href="/job">招募</a></li>
                <li><a class="topnavli " href="/about">关于</a></li>
            </ul>
        </div>
        <!--[if lt IE 9]>
        </div>
        <![endif]-->
    </header>
    <!-- body main div -->
    <div class="bg_grey report_banner">
        <div class="major-area">
                <div class="majorarea-auto clearfix">
                    <div class="p-rel pull-left">
                        <img src="/codeboss/Public/images/major.png">
                        <div class="detail-wrapper clearfix">
                            <img class="arrow-img pull-left" src="/codeboss/Public/images/btn-detail-arrow.png">
                            <a href="site/campaign" class="btn btn-detail pull-left">了解详情</a>
                        </div>
                    </div>
                    <div class="login-area pull-left">
                        <div class="login-wrapper login-input">
                            <img src="/codeboss/Public/images/login-book.png" class="loginbook-img">
                            <div class="login-form-tit">
                                <h4>马上登录</h4>
                                <div class="form-dividing-line">
                                    <div class="paper-staples-1 p-rel">
                                        <div class="left-circle"></div>
                                        <div class="staple"></div>
                                        <div class="right-circle"></div>
                                    </div>
                                    <div class="paper-staples-2 p-rel">
                                        <div class="left-circle"></div>
                                        <div class="staple"></div>
                                        <div class="right-circle"></div>
                                    </div>
                                    <div class="paper-staples-3 p-rel">
                                        <div class="left-circle"></div>
                                        <div class="staple"></div>
                                        <div class="right-circle"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="logway">
                                <div class="signother">
                                    <div class="addline text-center"><span class="hovertext">免注册登录</span></div>
                                </div>
                                <div class="logwaylogo clearfix">
                                    <a href="/codeboss/Public/social-login?social=qq"
                                        onclick="sa.track('buttonClick',{button_click_name:'reg_social'});">
                                        <span class="logowayimg location1"></span>
                                    </a>
                                    <a href="/codeboss/Public/social-login?social=weixin"
                                        onclick="sa.track('buttonClick',{button_click_name:'reg_social'});">
                                        <span class="logowayimg location2"></span>
                                    </a>
                                </div>
                            </div>

                            <div class="logway">
                                <div class="signother">
                                    <div class="addline text-center"><span class="hovertext">用户名登录</span></div>
                                </div>
                            </div>

                            <form id="w0" class="login-form" action="login" method="post">
                                <input type="hidden" name="_csrf" value="4IyFEyOEjheqb5yzCJdaZstFE90MmdZr9jjMeSXQNTqL_O9-cvzCeMcY8Z5F8RY2_g9Vgl34lD-iCbwUUeRFfA==">                    <div class="form-group field-loginform-username required">
                                <p class="help-block help-block-error"></p><div class="input-group"><div class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-user"></span>
                                                                </div><input type="text" id="loginform-username" class="form-control" name="LoginForm[username]" tabindex="1" placeholder="用户名" aria-required="true"></div>
                                </div>
                                                    <div class="form-group field-loginform-password required">

                                                <p class="help-block help-block-error"></p><div class="input-group"><div class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-lock"></span>
                                                                </div><input type="password" id="loginform-password" class="form-control" name="LoginForm[password]" tabindex="2" placeholder="密码" aria-required="true"></div><div class="form-group text-right"><a class="forgetpwd" href="<?php echo U('Index/get_password');;?>">忘记密码？</a></div>
                                                    
                                </div>
                                <div class="form-group MT30">
                                    <button type="submit" class="btn bg_green defaultBtn" tabindex="3">登录</button>                        </div>
                                <div class="form-group text-right">
                                    <a href="/signup" class="registfree"
                                        onclick="sa.track('buttonClick',{button_click_name:'reg_index'});">免费注册</a>
                                </div>
                            </form>
                        </div>
                                    </div>
                </div>
            </div>
            <img src="/codeboss/Public/images/majorImg-bot.png" class="major-bot">
        </div>
    </div>
</body>
</html>