$(document).ready(function(){
  var id="user";
  $("#user").click(function () {
    id='user';
  });

  $("#manager").click(function () {
    id='manager';
  });

  $("#sign_btn").click(function(){
    if ($("#username").val()=='') {
      alert("请输入用户名");
    }
    else if($("#password").val()==''){
      alert("请输入密码");
    }
    else{
      var signData = new FormData();
      signData.append('username', $("#username").val());
      signData.append('password', $("#password").val());
      signData.append('id', id);
      $.ajax({
        url: 'php/Sign.php',
        type: 'POST',
        data: signData,
        contentType: false,
        processData: false,
        success: function(json){
          var data = JSON.parse(json);
          if(data.feedback=="success"){
            if (id=='user') {
              window.location.href="index.html";
            }
            else if (id=='manager') {
              window.location.href="announce_admin_query.php";
            }
          }
          else if (data.feedback=="fail") {
            alert("密码错误");
          }
          else if (data.feedback=="Nexist") {
            alert("用户不存在");
          }
        },
        error: function(){
          alert("error");
        }
      });
    }
  });

  $("#register_btn").click(function(){
    window.location.href="register.html";
  });

});