<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <title>后台管理系统</title>
  <link rel="stylesheet" type="text/css" href="/EasyTalk/BackendPublic/css/common.css">
  <link rel="stylesheet" type="text/css" href="/EasyTalk/BackendPublic/css/adsystem.css">
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/tcsystem.js"></script>
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/tcquitlogin.js"></script>
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
                  <a href="/EasyTalk/admin.php/Home/administration/adminlogin" class="ab"><li>管理员</li></a>
                  <a href="/EasyTalk/admin.php/Home/Teacher/teacherlogin" class="ab nowa"><li>教师</li></a>
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
                        <div class="tnav">
                              <ul>
                                   <a href="/EasyTalk/admin.php/Home/Teacher/tcclass?lan=21"><li>完成课程</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Teacher/tcunclass?lan=22" class="now-a"><li>未完成课程</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Teacher/tcacc-psw" class="seca"><li>账户管理</li></a>
                              </ul>
                        </div>
                        <div class="searchbox">
                              <div class="searchdiv"></div>
                              <p>未完成课程</p>
                        </div>
                        <div class="conbox">
                              <table class="contitle" style="margin-left: 30px;">
                                     <tr> 
                                          <td style="width: 110px">课程编号</td>
                                          <td style="width: 130px">课程名</td>
                                          <td style="width: 100px">语种</td>
                                          <td style="width: 100px">等级</td>
                                          <td style="width: 160px">学员用户名</td>
                                          <td style="width: 180px">目前进度</td>
                                          <td style="width: 180px">已完成</td>
                                          <td style="width: 60px">操作</td>
                                     </tr>
                              </table>
                              <hr>
                              <div class="condiv">
                                    <table class="contable" style="margin-left: 30px;">
                                           <tr>
                                               <td style='width: 110px'>1113</td>
                                               <td style='width: 130px'>20人法语班</td>
                                               <td style='width: 100px'>法语</td>
                                               <td style='width: 100px'>中级</td>
                                               <td style='width: 160px'>欧阳</td>
                                               <td style='width: 180px'><span class="f1">1</span>/15</td>
                                               <td style='width: 180px;text-align: center;'>
                                                   <img src="/EasyTalk/BackendPublic/images/min.png" class="addcss imgreduce">
                                                   <p class="addcss classp" id="a1" name='10'>0</p>
                                                   <img src="/EasyTalk/BackendPublic/images/plus.png" class="addcss  imgup">
                                               </td>
                                               <td style="width: 60px">
                                                   <p hidden="hidden">f1</p>
                                                   <p hidden="hidden">a1</p>
                                                   <input type="button" value="保存"  name='11' class="save">
                                               </td>
                                           </tr>
                                    </table>
                              </div>
                        </div>
                        <div class="call">
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