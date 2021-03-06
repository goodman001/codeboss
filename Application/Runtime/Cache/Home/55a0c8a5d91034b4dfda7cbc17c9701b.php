<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="0BQ8Is-AyZe-vZaN_9eg5g31ST0_GHAbbSBFDNBXNea7ZFZPnviF-NPK-6Cysey2OL8PYm55Mk85ETVhpGNFoA==">
    <title>注册_PaperPass论文检测</title>
    <meta  name="description" content="★PaperPass★论文检测-全球首个中文论文相似度检测网站;提供论文查重,免费论文检测系统,毕业论文抄袭检测。最权威,动态指纹技术保障,已服务超300万人论文检测。"/>
    <meta name="keywords" content="论文,论文检测,论文查重,免费论文检测,检测系统,论文抄袭,毕业论文"/>
    <link href="/codeboss/Public/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="/codeboss/Public/css/style.css" rel="stylesheet">
    <script src="https://www.recaptcha.net/recaptcha/api.js" async defer></script>
      
</head>
<body>
    <style type="text/css">
    /*闪动new小图标*/
    .topnavli{position: relative}
    .new{position: absolute;
        top: 6px;
        right: 8px;
        width: 16px;
        height: 18px;
    }
    </style>
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
            <li><a href="/"  class="topnavli ">首页</a></li><li><a href="/check"  class="topnavli ">查询真伪</a></li><li><a href="/help.htm"  class="topnavli ">帮助</a></li><li><a href="/faq.htm"  class="topnavli ">常见问题</a></li><li><a href="/site/jigou" target=_blank class="topnavli ">机构版</a></li><li><a href="/job"  class="topnavli ">招募</a></li><li><a href="/about"  class="topnavli ">关于</a></li>            </ul>
        </div>
        <!--[if lt IE 9]>
        </div>
        <![endif]-->

    </header>
    <div class="flashInfo">
    </div>
    <div class="signmain">
        <div class="signcenter">
            <div class="signinputA">
                <div class="loginWay">
                    <div class="tab-pane" id="accountlogin">
                        <div class="login-wrapper">
                            <div class="login-other-tip">
                                <div class="login-other-line text-center">
                                    <span class="login-other-text">免注册登录</span>
                                </div>
                            </div>
                            <div class="login-other">
                                <div class="login-other-logo clearfix">
                                    <a href="<?php echo U('Index/oauth_login',array('type'=>'google'));;?>"> <img src="/codeboss/Public/images/google/1x/btn_google_signin_dark_pressed_web.png"/>
                                        <span class="loginlogo loglogo1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="login-other-tip">
                                <div class="login-other-line text-center">
                                    <span class="login-other-text">Email登录</span>
                                </div>
                            </div>
                            <form id="w0" class="login-account-form" action="<?php echo U('Index/post_login_email');;?>" method="post">
                                <input type="hidden" name="_csrf" value="0niLxv2VG9Nny-EjC6gHb1gBFBy3cyRD-f47NJgFUY2xAcSVs6xB5V_-rlp48UgZHXdaRPo6cxO7unVC6UsryQ==">                        <div class="form-group field-loginform-username required has-success">
                                <div class="form-group">
                                    <label class="control-label" for="email">Email</label>
                                    <p class="help-block help-block-error"></p>
                                    <input type="email" id="email" class="form-control" name="email" tabindex="1" required>
                                </div>

                                <div class="form-group has-feedback">
                                    <label class="control-label" for="loginform-password">密码</label>
                                    <p class="help-block help-block-error"></p>
                                    <a class="forget-pwd pull-right" href="<?php echo U('Index/get_password');;?>">忘记密码？</a>
                                    <input type="password" id="loginform-password" class="form-control" name="password" tabindex="2" required>
                                </div>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-callback="robotVerified" data-sitekey="<?php echo C('RECAPTCHAR');;?>"></div>
                                    <input type="hidden" id="tokenstring" class="form-control" name="tokenstring">
                                </div>
                                <button type="submit" id="login-button" class="btn btn-green login-account-btn" name="login-button" tabindex="3" disabled="false">登录</button>                       
                            </form>                       
                            <p class="login-noaccount">
                                还没有<?php echo C('WEB_NAME');;?>账号？<a href="<?php echo U('Index/signup');;?>">立即注册</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<script>
    function robotVerified(data){
        console.log(data);
        
        if(data.length >10){
            $("#login-button").removeAttr("disabled");//tokenstring
            $("#tokenstring").val(data);
        }else{
            console.log('Verified: is robot');
        }
        
    }
    </script>
<script src="/codeboss/Public/js/jquery.js"></script>
<script src="/codeboss/Public/bootstrap/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js" integrity="sha256-UiqIqgNXwR8ChFMaD8VrY0tBUIl/soqb7msaauJWZVc=" crossorigin="anonymous"></script>
<script>
//$('form').validator()
</script>
</body>
</html>