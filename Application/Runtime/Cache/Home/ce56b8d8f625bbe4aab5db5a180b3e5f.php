<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>个人中心</title>
	<link rel="stylesheet" type="text/css" href="/EasyTalk/Public/css/pccenter.css">
	<link rel="stylesheet" type="text/css" href="/EasyTalk/Public/css/common.css">
      <script type="text/javascript" src="/EasyTalk/Public/js/jquery-3.1.1.js"></script>
      <script type="text/javascript" src="/EasyTalk/Public/js/jquery.form.js"></script>
      <script type="text/javascript" src="/EasyTalk/Public/js/nav.js"></script>
      <script type="text/javascript" src="/EasyTalk/Public/js/pccenter.js"></script>
      <script type="text/javascript" src="/EasyTalk/Public/js/common.js"></script>
</head>
<body>
      <div class="bgbox topbg-1">
      	   <div class="topbg">
      	   	     <img src="/EasyTalk/Public/src/images/easytalklogo.png" alt="Easytalk">
      	   	     <a href="#">退出登录</a>
      	   	     <p>您好，请先登录</p>
      	   </div>
      </div>
      <div class="bgbox navbg-1">
      	   <div class="navbg">
      	   	   <ul>
      	   	   	  <a href="/EasyTalk/index.php/"><li id="nav1">首页</li></a>
      	   	   	  <a href="/EasyTalk/index.php/Home/coursesys/course_system_1" class="nava"><li id="nav2">课程体系</li></a>
      	   	   	  <a href="/EasyTalk/index.php/Home/teacher/tea_ara?lan=01" class="nava"><li id="nav3">老师介绍</li></a>
      	   	   	  <a href="/EasyTalk/index.php/Home/course/buyclass_vie" class="nava"><li id="nav4">课程购买</li></a>
      	   	   	  <a href="/EasyTalk/index.php/Home/User/pccenter" class="nava nowa"><li id="nav5">个人中心</li></a>
      	   	   	  <a href="/EasyTalk/index.php/Home/exercise/practiceclass?lan=01" class="nava"><li id="nav6">练习中心</li></a>
      	   	   </ul>
      	   </div>
      </div>
      <div class="bgbox centerbg-1">
            <div class="centerbg">
                  <div class="cleft">
                        <div class="chead">
                             <form action="/EasyTalk/index.php/Home/User/updateHead" method="post" id="upheadform" enctype="multipart/form-data">
                                    <img src="#" name="userhead" alt="head" id="imghead">
                                    <label for="headfile">
                                           <div class="forhead cheadb">
                                                <div>修改头像</div>
                                           </div>
                                    </label>
                                    <input type="file" accept="image/jpeg image/jpg image/png" id="headfile" style="display: none;" name="photo">
                                    <label for="uphead">
                                           <div class="forhead upheadbu" style="display: none;">
                                                <div>确定</div>
                                           </div>
                                    </label>
                                    <input type="button" value="uphead" style="display: none;" id="uphead">
                              </form>
                        </div>
                        <a href="/EasyTalk/index.php/Home/User/pccenter" class="pcnava nowa">账号信息</a>
                        <a href="/EasyTalk/index.php/Home/user/pcmyclass" class="pcnava">我的课程</a>
                        <a href="/EasyTalk/index.php/Home/user/pccomment" class="pcnava">意见反馈</a>

                  </div>
                  <div class="cright">
                        <div class="title1 basic">
                              <p>基本信息</p>
                              <img src="/EasyTalk/Public/src/images/account_edit.png" id="basicimg">
                              <input type="button" value="确定" style="display: none;" id='upbasci'>
                              <hr>
                        </div>
                        <table class="table1" cellpadding="0" cellspacing="0">
                              <tr>
                                    <td style="text-align: left;" class="tabletd">Q&nbspQ</td>
                                    <td class="tabletd"><p class="tablep tablep1" id="userqq"></p></td>
                                    <td class="tabletd"><input type="text" class="tableinput tableinput1" id="basicqq"></td>
                              </tr>
                              <tr>
                                    <td style="text-align: left;" class="tabletd">邮箱</td>
                                    <td class="tabletd"><p class="tablep tablep1" id="usermail"></p></td>
                                    <td class="tabletd"><input type="text" class="tableinput tableinput1" id="basicmail"></td>
                              </tr>
                        </table>

                        <div class="title1 safeset">
                              <p>安全设置</p>
                              <img src="/EasyTalk/Public/src/images/account_setting.png" id="safesetimg">
                              <input type="button" value="确定" style="display: none;" id="upsafeset">
                              <hr>
                        </div>
                        <table class="table1" cellpadding="0" cellspacing="0">
                              <tr>
                                    <td style="text-align: left;" class="tabletd">账号</td>
                                    <td class="tabletd"><p style="width: 200px;padding-left: 90px;" class="tablep tablep2" id="useracc"></p></td>
                                    <td  style="vertical-align: top;">
                                        <img src="/EasyTalk/Public/src/images/true.png" alt="true" class="reture retacc">
                                        <div class="refalse refacc">
                                                <img src="/EasyTalk/Public/src/images/false.png" alt="false">
                                                <p></p>
                                         </div>
                                    </td>
                                    <td class="tabletd inputtd"><input type="text" class="tableinput tableinput2" id="safeacc"></td>
                              </tr>
                              <tr>
                                    <td style="text-align: left;" class="tabletd tabletds">密码</td>
                                    <td class="tabletd"><p class="tablep tablep2" id="userqq" style="width: 200px;padding-left: 90px;">******</p></td>
                                    <td  style="vertical-align: top;">
                                    </td>
                                    <td class="tabletd inputtd"><input type="password" class="tableinput tableinput2" id="safepass1"></td>
                              </tr>
                              <tr>
                                    <td style="text-align: left;" class="tabletd tabletds tabletdpass">确认密码</td>
                                    <td></td>
                                    <td  style="vertical-align: top;">
                                        <img src="/EasyTalk/Public/src/images/true.png" alt="true" class="reture retpass2">
                                        <div class="refalse refpass2">
                                                <img src="/EasyTalk/Public/src/images/false.png" alt="false">
                                                <p>密码不一致</p>
                                         </div>
                                    </td>
                                    <td class="tabletd inputtd"><input type="password" class="tableinput tableinput2" id="safepass2"></td>
                              </tr>
                              <tr>
                                    <td style="text-align: left;" class="tabletd tabletds tabletdpass">原密码</td>
                                    <td></td>
                                    <td  style="vertical-align: top;">
                                        <img src="/EasyTalk/Public/src/images/true.png" alt="true" class="reture retpass3">
                                        <div class="refalse refpass3">
                                                <img src="/EasyTalk/Public/src/images/false.png" alt="false">
                                                <p>密码错误</p>
                                         </div>
                                    </td>
                                    <td class="tabletd inputtd"><input type="password" class="tableinput tableinput2" id="safepass3"></td>
                              </tr>
                        </table>

                  </div>
            </div>
      </div>
      <div class="bgbox bottombg-1">
      	   <div class="bottombg">
      	   	   <p>Copyright &copy Easy talk 小语种在线一对一学习社区 | 版权所有 京ICP证008719-5</p>
      	   </div>
      </div>
</body>
</html>