<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>教师登录</title>
	<link rel="stylesheet" type="text/css" href="/EasyTalk/BackendPublic/css/common.css">
  <link rel="stylesheet" type="text/css" href="/EasyTalk/BackendPublic/css/adminlogin.css">
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/login.js"></script>
</head>
<body>
      <div class="bgbox topbg-1">
      	   <div class="topbg">
      	   	     <img src="/EasyTalk/BackendPublic/images/easytalklogo.png" alt="Easytalk">
      	   	     <a href="#">退出登录</a>
      	   	     <p>您好，请先登录</p>
      	   </div>
      </div>
      <div class="bgbox navbg-1">
      	   <div class="navbg">
      	   	   <ul>
                  <a href="/EasyTalk/admin.php/Home/administration/adminlogin" class="ab"><li>管理员</li></a>
                  <a href="/EasyTalk/admin.php/Home/Teacher/teacherlogin" class="ab nowa"><li>教师</li></a>
      	   	   </ul>
      	   </div>
      </div>
      <div class="bgbox centerbg-1">
            <div class="centerbg">
                  <table cellpadding="0" cellspacing="30">
                        <tr>
                            <td colspan="2"><p class="title">教师登录</p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><hr style="border: 1px solid #B2B2B2;"></td>
                        </tr>
                        <tr>
                            <td>用户名</td>
                            <td><input type="text" class="inputtext" id="tcacc"></td>
                        </tr>
                        <tr>
                            <td>密码</td>
                            <td><input type="password" class="inputtext" id="tcpsw"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="button" value="登录" class="inputbutton" id="tclogin"></td>
                        </tr>

                  </table>
            </div>
      </div>
      <div class="bgbox bottombg-1">
      	   <div class="bottombg">
      	   	   <p>Copyright &copy Easy talk 小语种在线一对一学习社区 | 版权所有 京ICP证008719-5</p>
      	   </div>
      </div>
</body>
</html>