<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="0BQ8Is-AyZe-vZaN_9eg5g31ST0_GHAbbSBFDNBXNea7ZFZPnviF-NPK-6Cysey2OL8PYm55Mk85ETVhpGNFoA==">
    <title><?php echo C("WEB_NAME");;?>code检测</title>
    <meta  name="description" content="★PaperPass★论文检测-全球首个中文论文相似度检测网站;提供论文查重,免费论文检测系统,毕业论文抄袭检测。最权威,动态指纹技术保障,已服务超300万人论文检测。"/>
    <meta name="keywords" content="论文,论文检测,论文查重,免费论文检测,检测系统,论文抄袭,毕业论文"/>
    <link href="/codeboss/Public/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="/codeboss/Public/css/codecheck.css" rel="stylesheet">
    
    <style>.groupline .form-group{display: inline-block;*display: inline;width: 200px;}</style>
</head>
<body>
    <header class="navtop">
        <!--[if lt IE 9]>
        <div class="navtop">
        <![endif]-->
        <div class="topimg pull-left"><a href="/"><img src="/images/tool/logo.jpg" class="topimgsize"></a></div>
        <ul class="nav-tabs userpaper pull-left">
        <li id="index" ><a href="<?php echo U('Panel/index');;?>">提交code</a></li>
        <li ><a href="/panel/report">查看报告</a></li>
        <li ><a href="/panel/selfbuild">自建库</a></li>
        <li id="account_page" ><a href="<?php echo U('Panel/account_page');;?>">账户</a></li>
        <li id="recharge_page"><a href="<?php echo U('Panel/recharge_page');;?>">充值中心</a></li>
        <li ><a href="/panel/promotion">推广赚钱</a></li>
        <li ><a href="/panel/free">免费使用</a></li>
        <li><a href="https://pdf.wps.cn/?from=paperpass_normal&payconfig=pdf_module&position=paperpass_normal" target="_blank">PDF转换</a></li>
        <li><a href="/kuai/go" target="_blank">自动排版</a></li>         </ul>
        <div class="toploginfo pull-right">
            <div class="headimg">
                <img src="/images/tool/user.png">
                <div class="usermeng"></div>
            </div>
            <div class="userarea">
                <ul class="userinfo">
                <li class="user_saw"></li>
                <li class="userinfo_li"><span class="userinfo_name">账户类型</span>PaperPass用户</li>
                                <li class="userinfo_li"><span class="userinfo_name">用&nbsp;户&nbsp;&nbsp;名&nbsp;</span>taisite</li>
                    <li class="userinfo_li noborder"> <span class="userinfo_name">余&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;额</span>0元</li>
                </ul>
                <div class="userinfo_li bg_clearlog"><a class="btn_clearsession" href="/site/logout" data-method="post">注销登录</a></div>
            </div>
        </div>
        <!--[if lt IE 9]>
        </div>
        <![endif]-->
    </header>
    <div class="flashInfo">hahah </div>
    
    <div class="paper">
        <div class="papercenter">
            <!--<p class="paperinfo">若有通知，将会出现在这里</p>-->
            <div class="tabbable commitleft pull-left">
                <ul id="w0" class="nav nav-tabs copyload">
                    <li class="active">
                        <a href="<?php echo U('Panel/account_page');;?>">基本信息</a>
                    </li>
                    <li><a href="/panel/account/purchase">充值记录</a></li>
                    <li><a href="/panel/account/change-password">修改密码</a></li>
                    <li><a href="/panel/account/weixin">微信绑定</a></li>
                </ul>            
                <div class="tab-content">
                    <ul class="tab-pane personinforlist active" id="personinfor">
                        <li class="pername"></li>
                        <li class="perinfor">
                            <span class="informark">用户名：</span>
                            <span class="inforvalue"><?php echo ($info["username"]); ?></span>
                        </li>
                        <li class="perinfor">
                            <span class="informark">账户类型：</span>
                            <span class="inforvalue"><?php echo ($info["usertype"]); ?>用户</span>
                        </li>
                        <li class="perinfor">
                            <span class="informark">电子邮箱：</span>
                            <span class="inforvalue"><?php echo ($info["email"]); ?></span>
                        </li>
                        <li class="perinfor">
                            <span class="informark">账户余额：</span>
                            <span class="inforvalue"> <span class="money">0</span> 元</span>
                        </li>
                        <li class="rechargeimg">
                                <span class="btnrecharge">
                                    <a href="/panel/purchase"><img src="/images/tool/recharge.jpg">
                                    <p class="initgreen">点此充值</p></a>
                                </span>
                        </li>
                        <li><button class="btn btn-modal btn-warning" href="/site/logout" data-method="post">退出登录</button></li>
                        <li class="signtime MT20">注册时间： <?php echo ($info["createtime"]); ?></li>
                    </ul>
                </div>
            </div>
            <div class="pull-right">
    
                    <div class="processcenter">
                        <ul class="processlist">
                            <li class="processtitle">检测论文操作流程</li>
                            <li class="process"><span class="circleul">1</span><span class="processintro">登录本网站（www.paperpass.com）</span></li>
                            <li class="stripe"></li>
                            <li class="process"><span class="circleul">2</span><span class="processintro">进入“充值中心”页面，计算充值金额，然后充值</span></li>
                            <li class="stripe"></li>
                            <li class="process"><span class="circleul">3</span><span class="processintro">进入“提交论文”页面，提交成功之后，在“查看报告”页面等待检测结果</span>
                            </li>
                        </ul>
                        <ul class="processlist">
                            <li class="processtitle">常见问题</li>
                            <li><a href="/faq.htm#faq_articleclass" class="process" target="_blank">可以检测哪些类别的文章？</a></li>
                            <li><a href="/faq.htm#faq_zhiwenku" class="process" target="_blank">比对指纹数据库有哪些？</a></li>
                            <li><a href="/faq.htm#faq_large" class="process" target="_blank">单次最多可以提交多少字？</a></li>
                            <li><a href="/faq.htm#faq_database" class="process" target="_blank">检测的论文是否会被添加到比对数据库？</a></li>
                            <li><a href="/faq.htm#faq_results" class="process" target="_blank">提交论文后多久能获得检测报告？</a></li>
                        </ul>
                    </div>
            </div>



        </div>
    </div>

    <script src="/codeboss/Public/js/jquery.js"></script>
    <script src="/codeboss/Public/bootstrap/bootstrap.js"></script>
    <script src="/codeboss/Public/js/autowidth.js"></script>
    <script>
        $("#"+"<?php echo ($activenavid); ?>").addClass("active");
        //console.log("<?php echo ($activenavid); ?>");
    </script>
    
    <script>console.log("test");</script>

</body>
</html>