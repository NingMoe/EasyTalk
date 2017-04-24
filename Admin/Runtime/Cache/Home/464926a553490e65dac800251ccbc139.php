<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="/EasyTalk/BackendPublic/css/common.css">
  <link rel="stylesheet" type="text/css" href="/EasyTalk/BackendPublic/css/adsystem.css">
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/adcomment.js"></script>
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/quitlogin.js"></script>
</head>
<body>
      <div class="bgbox topbg-1">
      	   <div class="topbg">
      	   	     <img src="/EasyTalk/BackendPublic/images/easytalklogo.png" alt="Easytalk">
      	   	     <a href="#">退出登录</a>
      	   </div>
      </div>
      <div class="bgbox navbg-1">
      	   <div class="navbg">
      	   	   <ul>
                  <a href="/EasyTalk/admin.php/Home/Administration/adminlogin" class="ab nowa"><li>管理员</li></a>
                  <a href="/EasyTalk/admin.php/Home/teacher/teacherlogin" class="ab"><li>教师</li></a>
      	   	   </ul>
      	   </div>
      </div>
      <div class="bgbox centerbg-1">
            <div class="centerbg">
                  <div class="ctop">
                        <p>后台管理系统</p>
                        <span>管理员：11232</span>
                  </div>
                  <div class="ccenter">
                        <div class="cnav">
                              <ul>
                                   <a href="/EasyTalk/admin.php/Home/Administration/aduser?html=11" class="labg"><li>用户管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adteacher?html=12"><li>教师管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adtradata?html=13" class="labg"><li>交易数据</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adclass?html=14"><li>课程管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adexe_index?html=15" class="labg"><li>练习管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adlangindex?html=16" class="labg"><li>语种管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adpicindex" class="labg" id="moreul"><li>图片上传</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adnav" class="labg"><li>导航栏</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adcomment" class="now-a"><li>意见反馈</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/ad-cpsw" class="labg"><li>密码修改</li></a>
                              </ul>
                        </div>
                        <div class="searchbox">
                              <div class="searchdiv"></div>
                              <p>意见反馈</p>
                        </div>
                        <div class="conbox" style="position: relative;">
                              <ul class="ulmore">
                                  <a href="/EasyTalk/admin.php/Home/Administration/adpicindex"><li>首页图片</li></a>
                                  <a href="/EasyTalk/admin.php/Home/Administration/adpiccl"><li>课程体系</li></a>
                              </ul>
                              <table class="contitle">
                                     <tr>
                                          <td width='155px'>用户名</td>
                                          <td width='170px'>时间</td>
                                          <td width='590px'>建议</td>
                                          <td>操作</td>
                                     </tr>
                              </table>
                              <hr>
                              <div class="condiv">
<!--                                     <table class='contable'>
                                         <tr>
                                              <td width='155px'>法语1232</td>
                                              <td width='170px'>2017-01-01</td>
                                              <td width='590px'><div class='td-over'>今天毛概考死人了啊啊啊，刷了几百道题库，TMD没有一道中哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈</div></td>
                                              <td><input type='button' value='查看'' class='com-see' name=''></td>
                                         </tr>
                                    </table> -->
                              </div>
                        </div>
                        <div class="call">
                              <div class="call-2">
                                    <input type="button" value="清空" class="call-bu call-bu1" id="common_empty">
                              </div>
                        </div>
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