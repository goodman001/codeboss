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
    
    <div class="paper paper-recharge">
            <div class="papercenter recharege-left">
                    <div class="commitleft commit-recharege pull-left">
                        <div class="mod-group">
                            <div class="mod-title">
                                <img src="/images/tool/bookmark.png" class="mod-title-img">
                                <span class="mod-title-name">CodeBOSS 充值码</span>
                            </div>
                            <div class="mod-content">
                                <div class="webcharge">
                                    <img src="../images/tool/logo1.png" class="webchong_logo">
                                    <form id="valueCard" action="<?php echo U('Panel/post_recharge');;?>" method="post">
                                        <ul class="web-form">
                                        <p>
                                            <div class="form-group field-valuecardform-cardpassword required">
                                                <input type="text" id="cardid" class="webbtns-input" name="cardid" maxlength=20 minlength=20 placeholder="请输入已购买充值卡ID(20位充值ID)" required />
                                                <br>
                                                <span style="color:#F06541;font-size:12px;margin-top:-10px;">请输入20位充值ID</span>
                                            </div>                                        
                                        </p>
                                        <p>
                                            <div class="form-group field-valuecardform-cardpassword required">
                                                <input type="password" id="cardpassword" class="webbtns-input" name="cardpassword" maxlength=8 minlength=8 placeholder="请输入8位充值码" required />
                                                <br>
                                                <span style="color:#F06541;font-size:12px;margin-top:-10px;">请输入8位充值码</span>
                                            </div>                                        
                                        </p>
                                        <p>
                                            <div class="form-group field-valuecardform-captcha">
                                                <input type="text" id="captcha" class="webbtns-input web-yan-input" name="captcha" maxlength=4 minlength=4 placeholder="请输入4位验证码" required >
                                                
                                                <img id="valuecardform-captcha-image" src="<?php echo U('Panel/verifycode',array());?>" onClick="this.src=this.src+'?'+Math.random()" />
                                                <p id="vcodeerror" style="color:#F06541;font-size:12px;margin-top:-10px;">看不清?点击验证码可更换</p>
                                            </div>
                                        </p>

                                        <p name="submit">
                                            <p id="valueCardMsg">&nbsp;</p>
                                            <button type="submit" id="chargesubmit" class="btn webbtn web-form-btn" disabled="false">充值码充值</button>
                                        </p>
                                    </form>                                
                                </div>
                            </div>







                        </div>
                    
                            <div class="mod-group">
                                <div class="mod-title">
                                    <img src="/images/tool/wallet.png" class="mod-title-img">
                                    <span class="mod-title-name">支付宝支付</span>
                                </div>
                                <form id="aliForm" class="form-inline" action="/panel/purchase/alipay" method="post" target="_blank">
        <input type="hidden" name="_csrf" value="nLC2bfWpPF0c7OALX6HZAL7jj1Dp-RvYuEFiukyM1tj_yfk-u5BmayTZr3Is-JZ2-5XBCKSwTIj6BSzMPcKsnA==">                        <div class="mod-content">
                                    <ul class="webpayarea">
                                        <li class="webinline">
                                            <img src="/images/tool/zhifubao.jpg">
                                        </li>
                                        <li class="webinline webmoney" style="width: 270px;*width:240px;margin-top:4px;">
                                            <form class="form-inline">
                                                <div class="form-group">
                                                    <label >充值整数金额：</label>
                                                    <input type="text" class="form-control" placeholder="1～20000" name="alipayMoney" value="10">元
                                                    <p style="display: none" class="text-danger"></p>
                                                </div>
                                            </form>
                                        </li>
                                        <li class="webinline">
                                            <button type="submit" class="btn">支付宝支付</button>                                </li>
                                    </ul>
                                </div>
                                </form>                    </div>
                
                            
                            <div class="mod-group">
                                <div class="mod-title">
                                    <img src="/images/tool/wallet.png" class="mod-title-img">
                                    <span class="mod-title-name">微信支付</span>
                                </div>
                                <form id="weixinForm" class="form-inline" action="/panel/purchase/weixin-native" method="post" target="_blank">
                                    <input type="hidden" name="_csrf" value="nLC2bfWpPF0c7OALX6HZAL7jj1Dp-RvYuEFiukyM1tj_yfk-u5BmayTZr3Is-JZ2-5XBCKSwTIj6BSzMPcKsnA==">                        <div class="mod-content">
                                    <ul class="webpayarea">
                                        <li class="webinline">
                                            <img src="/images/tool/WeixinPay.jpg">
                                        </li>
                                        <li class="webinline webmoney" style="width: 270px;*width:240px;margin-top:4px;">
                                            <form class="form-inline">
                                                <div class="form-group">
                                                    <label >充值整数金额：</label>
                                                    <input type="text" class="form-control" placeholder="1～20000" name="wxMoney" value="10">元
                                                    <p style="display: none" class="text-danger"></p>
                                                </div>
                                            </form>
                                        </li>
                                        <li class="webinline">
                                            <button type="submit" class="btn">微信支付</button>                               
                                        </li>
                                    </ul>
                                </div>
                                </form>                    </div>
        
        
                        
        
        
        
                        <div class="mod-group">
                            <div class="mod-title">
                                <img src="../images/tool/wallet.png" class="mod-title-img">
                                <span class="mod-title-name">快钱支付</span>
                            </div>
                            <form id="kqForm" class="form-inline" action="/panel/purchase/kuaiqian" method="post" target="_blank">
                                <input type="hidden" name="_csrf" value="nLC2bfWpPF0c7OALX6HZAL7jj1Dp-RvYuEFiukyM1tj_yfk-u5BmayTZr3Is-JZ2-5XBCKSwTIj6BSzMPcKsnA==">                    <div class="mod-content">
                                <ul class="webpayarea">
                                    <li class="webinline">
                                        <img src="../images/tool/kuaiqian.jpg">
                                    </li>
                                    <li class="webinline webmoney" style="width: 270px;*width:240px;margin-top:4px;">
                                        <div class="form-group">
                                            <label>充值整数金额：</label>
                                            <input class="form-control" placeholder="3～20000" name="kuaiqianPrice" value="10" type="text">元
                                            <p style="" class="text-danger"></p>
                                        </div>
                                    </li>
                                    <li class="webinline">
                                        <button type="submit" class="btn">快钱支付</button>                            </li>
                                </ul>
                            </form>
        
        
        
                            <div class="mod-group">
                                <div class="mod-title">
                                    <img src="/images/tool/package.png" class="mod-title-img">
                                    <span class="mod-title-name">淘宝充值</span>
                                </div>
                                <div class="mod-content">
                                    <ul class="webcharge">
                                        <li class="webli">
                                            <a href="https://detail.tmall.com/item.htm?id=527041478783" target="_blank"><img src="/images/tool/taomao.jpg"></a>
        
                                            <div class="weblinkarea">
                                                <div>
                                                    <a href="https://detail.tmall.com/item.htm?id=527041478783" class="web_offi_link" target="_blank"
                                                        onclick="sa.track('buttonClick',{button_click_name:'taobao_purchase'});">官方店铺</a>
                                                    <br>
        <!--                                            <a href="" target="_blank" style="color:#56B282;font-size:14px;text-decoration: underline;">[专业版充值]</a>-->
                                                    <a href="https://detail.tmall.com/item.htm?id=527041478783" target="_blank" style="color:#56B282;font-size:14px;text-decoration: underline;"
                                                        onclick="sa.track('buttonClick',{button_click_name:'taobao_purchase'});">[电脑购买]</a>
                                                                                                <a href="#" target="_blank" style="color:#56B282;font-size:14px;text-decoration: underline;margin-left: 15px;" data-toggle="modal" data-target=".tianmao">[手机端购买]</a>
                                                                                            </div>
                                                <div class="web_intro">
                                                    <p>亲：</p>
                                                    <p>拍完宝贝后，千万不要忘记在下面输入“购买商品的订单编号”</p>
                                                    <p>并且点击“淘宝/天猫订单编号支付”按钮！ 购买商品的订单编号 </p>
                                                    <p>（一次提交一个，提交次数不限）</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="webbtns">
                                            <form id="tOrder" action="/panel/purchase/t-order" method="post" onkeydown="if(event.keyCode==13){return false;}">
        <input type="hidden" name="_csrf" value="nLC2bfWpPF0c7OALX6HZAL7jj1Dp-RvYuEFiukyM1tj_yfk-u5BmayTZr3Is-JZ2-5XBCKSwTIj6BSzMPcKsnA==">                                    <input type="text" class="webbtns-input" placeholder="请输入购买商品的订单编号" name="orderNumber">
                                            <p style="display: none" id="orderNumberMessage"></p>
                                            <button class="btn webbtn" name="orderBtn" type="button">订单编号支付</button>
                                            </form>                                </li>
                                    </ul>
                                </div>
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
    <script src="/codeboss/Public/js/autowidth.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js" integrity="sha256-UiqIqgNXwR8ChFMaD8VrY0tBUIl/soqb7msaauJWZVc=" crossorigin="anonymous"></script>
    <script>
    $("#captcha").bind("input propertychange",function(event){
        $("#vcodeerror").text("看不清? 点击验证码可更换");
        if(($("#captcha").val()).length == 4){
            var data = {};
            data["code"] = $("#captcha").val();
            console.log(data);
            $.ajax({
            url: "<?php echo U('Panel/checkverifycode');;?>", // server url
            type: 'POST', //POST or GET
            data: data, // data to send in ajax format or querystring format
            datatype: 'json',
            success: function(data) {
                if(data == "t"){
                    $("#vcodeerror").text("验证码 正确 ！");
                    $("#chargesubmit").removeAttr("disabled");//tokenstring
                }else{
                    $("#vcodeerror").text("验证码错误!(如看不清，点击验证码可更换)");
                }
            },
            error: function(xhr, status, error) {
                    alert(xhr.responseText);
            }
        });
        }
        
    });
    </script>

</body>
</html>