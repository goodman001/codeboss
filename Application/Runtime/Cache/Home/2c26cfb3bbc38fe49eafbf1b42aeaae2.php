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
                    <a href="/login" class="btn_login">登录</a>
                    <a href="/signup" class="btn_sign">注册</a>
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
            <form id="w0" class="sign-form" action="<?php echo U('Index/post_signup_email');;?>" method="post" data-toggle="validator" role="form">
                <div class="form-group field-signupform-username required">
                    <div class="form-group">
                    <label  class="control-label" for="signupform-username">用户名</label>
                    <p style="font-size:12px;margin-top:-10px;" class="help-block with-errors help-block-error"></p>
                    <input type="text" id="signupform-username" class="form-control" name="username" pattern="^\w+$" maxlength="30" required>
                </div>
                <p style="color:#F06541;font-size:12px;margin-top:-10px;">用户名仅允许使用英文字母、数字、下划线_，且长度不超过30</p>
        </div>            
        <div class="form-group field-signupform-password required">
            <div class="form-group">
            <label class="control-label" for="signupform-password">密码</label>
            <p style="font-size:12px;margin-top:-10px;" class="help-block with-errors help-block-error"></p>
            <input type="password" id="password" class="form-control" pattern="^[\w_-]{6,16}$" minlength="6" maxlength="30" name="password" required>
            </div>
            <p style="color:#F06541;font-size:12px;margin-top:-10px;">密码可以包含大小写、下划线_和减号 -，长度6-30之间</p>
        </div>            
        <div class="form-group field-signupform-password_repeat required">
            <div class="form-group">
                <label class="control-label" for="signupform-password_repeat">密码确认</label>
                <p style="font-size:12px;margin-top:-10px;" class="help-block with-errors help-block-error"></p>
                <input type="password" id="signupform-password_repeat"  data-match="#password" data-match-error="sorry, 密码不匹配 !" placeholder="Confirm Password ..." class="form-control" name="password_repeat" aria-required="true" required />

            </div>
        </div>           
        <div class="form-group field-signupform-email required">
            <div class="form-group">
                <label class="control-label" for="signupform-email">邮箱</label>
                <p style="font-size:12px;margin-top:-10px;" class="help-block with-errors help-block-error"></p>
                <input type="email" id="email" class="form-control" name="email" required />
                
            </div>
            <p style="color:#F06541;font-size:12px;margin-top:-10px;">邮箱注册成功不可更改，请一定注意</p>
        </div>            
        <div class="form-group field-signupform-promoterstring">
            <div class="form-group">
            <label class="control-label" for="signupform-promoterstring">推广员ID</label>(可选)
            <p style="font-size:12px;margin-top:-10px;" class="help-block with-errors help-block-error"></p>
            <input type="text" id="signupform-promoterstring" class="form-control" name="promoterid">
            <p class="help-block help-block-error"></p></div>
        </div>            
        <div id="w1div"></div> 
        <div class="form-group field-signupform-promoterstring">
            <div class="form-group">
                <div class="g-recaptcha" data-callback="robotVerified" data-sitekey="<?php echo C('RECAPTCHAR');;?>"></div>
                <input type="hidden" id="tokenstring" class="form-control" name="tokenstring">
            </div>
        </div>
        <button type="submit" id="signup-button" class="btn btn-green" name="signup-button" disabled="false">同意以下协议并注册</button>            
        <div class="text-center"><a class="agreeprofile redcolor" data-toggle="modal" data-target="#mymod-protocol">PaperPass用户协议</a>
        </div>
            </form>            <div class="logway">
                <div class="signother">
                    <div class="addline text-center"><span class="hovertext">第三方登录</span></div>
                </div>
                                    <p>
                        <a class="logowayimg location1" href="/site/social-login?social=qq"></a>

                        <a class="logowayimg location3" href="/site/social-login?social=weixin"></a>
                    </p>
                            </div>
        </div>
    </div>
</div>
<div class="kefu">
<!--    <a target="_blank" href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&key=XzgwMDA5OTMyMV80NjIyOTNfODAwMDk5MzIxXzJf"><span class="kefuqq"></span></a>-->
    <a href="javascript:void(0)" onclick="openWin('http://www.sobot.com/chat/pc/index.html?sysNum=9cf4199e87fa4693aca9188042fab045',600,700)"><span class="kefurobot"></span></a>
    <span class="kefutext">在线客服</span>
</div>


<div class="modal fade meng" id="mymod-protocol" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content mengcommit">
            <div class="modal-header check-header">
                <button type="button" class="close" style="color: #ffffff; opacity: 1;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                PaperPass&nbsp;&nbsp;&nbsp;用户协议<span class="copy_r">®</span>
            </div>
            <div class="modal-body mymod-body">
                <h4>一、总则 </h4>
                <p>1．1　用户应当同意本协议的条款并按照页面上的提示完成全部的注册程序。用户在进行注册程序过程中点击"同意"按钮即表示用户与本站达成协议，完全接受本协议项下的全部条款。 </p>
                <p>1．2　用户注册成功后，本站将给予每个用户一个用户帐号及相应的密码，该用户帐号和密码由用户负责保管；用户应当对以其用户帐号进行的所有活动和事件负法律责任。
                    您在使用本站提供的各项服务之前，应仔细阅读本服务协议。如您不同意本服务协议及/或随时对其的修改，您可以主动取消本站提供的服务；您一旦使用本站服务，即视为您已了解并完全同意本服务协议 各项内容，包括本站对服务协议随时所做的任何修改，并成为本站用户。</p>
                <h4>二、注册信息和隐私保护 </h4>
                <p>2．1　本站帐号的所有权归PaperPass网站，用户完成注册申请手续后，获得本站帐号的使用权。用户应提供及时、详尽及准确的个人资料，并不断更新注册资料，符合及时、详尽准确的要求。所有原始键入的 资料将引用为注册资料。如果因注册信息不真实而引起的问题，并对问题发生所带来的后果，本站不负任何责任。 </p>
                <p>2．2　用户不应将其帐号、密码转让或出借予他人使用。如用户发现其帐号遭他人非法使用，应立即通知本站。因黑客行为或用户的保管疏忽导致帐号、密码遭他人非法使用，本站不承担任何责任。</p>
                <p>2．3　本站不对外公开或向第三方提供单个用户的注册资料，除非：</p>
                <p>（1）事先获得用户的明确授权； </p>
                <p>（2）只有透露你的个人资料，才能提供你所要求的产品和服务； </p>
                <p>（3）根据有关的法律法规要求； </p>
                <p>（4）按照相关政府主管部门的要求； </p>
                <p>（5）为维护本站的合法权益。 </p>
                <p>2．4　在你注册本站帐户，使用其他本站产品或服务，访问本站网页, 或参加促销和有奖游戏时，本站会收集你的个人身份识别资料，并会将这些资料用于：改进为你提供的服务及网页内容。 </p>
                <h4>三、使用规则 </h4>
                <p>3．1　用户在使用本站服务时，必须遵守中华人民共和国相关法律法规的规定，用户应同意将不会利用本服务进行任何违法或不正当的活动，包括但不限于下列行为∶ </p>
                <p>（1）上载、展示、张贴、传播或以其它方式传送含有下列内容之一的信息：</p>
                <p>1） 反对宪法所确定的基本原则的； 2） 危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的； 3） 损害国家荣誉和利益的； 4） 煽动民族仇恨、民族歧视、破坏民族团结的； 5） 破坏国家宗 教政策，宣扬邪教和封建迷信的； 6） 散布谣言，扰乱社会秩序，破坏社会稳定的； 7） 散布淫秽、色 情、赌博、暴力、凶杀、恐怖或者教唆犯罪的； 8） 侮辱或者诽谤他人，侵害他人合法权利的； 9） 含 有虚假、有害、胁迫、侵害他人隐私、骚扰、侵害、中伤、粗俗、猥亵、或其它道德上令人反感的内容； 10） 含有中国法律、法规、规章、条例以及任何具有法律效力之规范所限制或禁止的其它内容的； </p>
                <p>（2）不得为任何非法目的而使用网络服务系统； </p>
                <p>（3）不利用本站服务从事以下活动： </p>
                <p>1) 未经允许，进入计算机信息网络或者使用计算机信息网络资源的； </p>
                <p>2) 未经允许，对计算机信息网络功能进行删除、修改或者增加的； </p>
                <p>3) 未经允许，对进入计算机信息网络中存储、处理或者传输的数据和应用程序进行删除、修改或者增加的； </p>
                <p>4) 故意制作、传播计算机病毒等破坏性程序的； </p>
                <p>5) 其他危害计算机信息网络安全的行为。 </p>
                <p>3．2　用户违反本协议或相关的服务条款的规定，导致或产生的任何第三方主张的任何索赔、要求或损失 ，包括合理的律师费，您同意赔偿本站与合作公司、关联公司，并使之免受损害。对此，本站有权视用户 的行为性质，采取包括但不限于删除用户发布信息内容、暂停使用许可、终止服务、限制使用、回收本站 帐号、追究法律责任等措施。对恶意注册本站帐号或利用本站帐号进行违法活动、捣乱、骚扰、欺骗、 其他用户以及其他违反本协议的行为，本站有权回收其帐号。同时，本站会视司法部门的要求，协助调查 。 </p>
                <p>3．3　用户不得对本服务任何部分或本服务之使用或获得，进行复制、拷贝、出售、转售或用于任何其它 商业目的。 </p>
                <p>3．4　用户须对自己在使用本站服务过程中的行为承担法律责任。用户承担法律责任的形式包括但不限于 ：对受到侵害者进行赔偿，以及在本站首先承担了因用户行为导致的行政处罚或侵权损害赔偿责任后，用 户应给予本站等额的赔偿。 </p>
                <h4>四、服务内容 </h4>
                <p>4．1　本站网络服务的具体内容由本站根据实际情况提供。 </p>
                <p>4．2　除非本服务协议另有其它明示规定，本站所推出的新产品、新功能、新服务，均受到本服务协议之规范。 </p>
                <p>4．3　为使用本服务，您必须能够自行经有法律资格对您提供互联网接入服务的第三方，进入国际互联网 </p>，并应自行支付相关服务费用。此外，您必须自行配备及负责与国际联网连线所需之一切必要装备，包括 计算机、数据机或其它存取装置。 </p>
                <p>4．4　鉴于网络服务的特殊性，用户同意本站有权不经事先通知，随时变更、中断或终止部分或全部的网络服务（包括收费网络服务）。本站不担保网络服务不会中断，对网络服务的及时性、安全性、准确性也 都不作担保。 </p>
                <p>4．5　本站需要定期或不定期地对提供网络服务的平台或相关的设备进行检修或者维护，如因此类情况而造成网络服务（包括收费网络服务）在合理时间内的中断，本站无需为此承担任何责任。本站保留不经事 先通知为维修保养、升级或其它目的暂停本服务任何部分的权利。 </p>
                <p>4．6 本服务或第三人可提供与其它国际互联网上之网站或资源之链接。由于本站无法控制这些网站及资源，您了解并同意，此类网站或资源是否可供利用，本站不予负责，存在或源于此类网站或资源之任何内 容、广告、产品或其它资料，本站亦不予保证或负责。因使用或依赖任何此类网站或资源发布的或经由此 类网站或资源获得的任何内容、商品或服务所产生的任何损害或损失，本站不承担任何责任。 </p>
                <p>4．7　用户明确同意其使用本站网络服务所存在的风险将完全由其自己承担。用户理解并接受下载或通过本站服务取得的任何信息资料取决于用户自己，并由其承担系统受损、资料丢失以及其它任何风险。本站 对在服务网上得到的任何商品购物服务、交易进程、招聘信息，都不作担保。</p>
                <p>4．8　3个月未登陆的帐号，本站保留关闭的权利。 </p>
                <p>4．9　本站有权于任何时间暂时或永久修改或终止本服务（或其任何部分），而无论其通知与否，本站对用户和任何第三人均无需承担任何责任。</p>
                <p>4．10　终止服务 </p>
                <p>您同意本站得基于其自行之考虑，因任何理由，包含但不限于长时间未使用，或本站认为您已经违反本服务协议的文字及精神，终止您的密码、帐号或本服务之使用（或服务之任何部分），并将您在本服务内任 何内容加以移除并删除。您同意依本服务协议任何规定提供之本服务，无需进行事先通知即可中断或终止 ，您承认并同意，本站可立即关闭或删除您的帐号及您帐号中所有相关信息及文件，及/或禁止继续使用 前述文件或本服务。此外，您同意若本服务之使用被中断或终止或您的帐号及相关信息和文件被关闭或删除，本站对您或任何第三人均不承担任何责任。</p>
                <h4>五、服务承诺</h4>
                <p>5. 1 本系统不提供下载论文服务，只提供文献相似度比对服务。 </p>
                <p>5. 2 本系统的检测报告仅仅是计算机程序生成的结果，不包含任何人的主观思想，检测报告不是论文通过与否的最终判断依据。</p>
                <p>5. 3 由于程序算法以及对比指纹库的差异，所以本系统的检测报告与其它检测系统的检测报告存在差异。 </p>
                <p>5. 4 本系统提供的检测报告可以作为修改文献的依据，但并不保证您修改过的文献通过学校的审核。 </p>
                <p>5. 5 PaperPass系统只能用户本人进行使用，如利用该系统在任何电子商务平台进行赢利，本网站有追究其法律责任的权利。 </p>
                <h4>六、其他 </h4>
                <p>6．1　本协议的订立、执行和解释及争议的解决均应适用中华人民共和国法律。 </p>
                <p>6．2　如双方就本协议内容或其执行发生任何争议，双方应尽量友好协商解决；协商不成时，任何一方均可向本站所在地的人民法院提起诉讼。</p>
                <p>6．3　本站未行使或执行本服务协议任何权利或规定，不构成对前述权利或权利之放弃。 </p>
                <p>6．4　如本协议中的任何条款无论因何种原因完全或部分无效或不具有执行力，本协议的其余条款仍应有效并且有约束力。
                    PaperPass联系方式 </p>
                <p>E-mail: service@paperpass.com</p>
            </div>
            <div class="modal-footer mymod-footer">
                <button class="btn btn_p_close" data-dismiss="modal" aria-label="Close">关闭</button>
            </div>
        </div>
    </div>
</div>
    <footer class="copyright">
        <!--[if lt IE 9]>
        <div class="copyright">
        <![endif]-->
        Copyright © 2007-2020 PaperPass.Com. 智齿数汇. 京ICP备13040071号-2.京公网安备11010802012623.京ICP证140121号 All Rights Reserved.
        <span style="display: none">
            
        </span>
        <!--[if lt IE 9]>
        </div>
        <![endif]-->
    </footer>
    <script>
        function robotVerified(data){
            console.log(data);
            
            if(data.length >10){
                $("#signup-button").removeAttr("disabled");//tokenstring
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