$(document).ready(function(){
  var $sex="";
  $("#male").click(function () {
    $sex="男";
  });

  $("#female").click(function () {
    $sex="女";
  });

  $("#register_btn").click(function(){
    if ($("#username").val()=='') {
      alert("用户名不能为空");
    }
    else if ($("#password").val()=='' ) {
      alert("密码不能为空");
    }
    else if ($("#password_again").val()=='') {
      alert("请再次输入密码");
    }
    else if ($("#name").val()=='') {
      alert("姓名不能为空");
    }
    else if ($("#phone").val()=='') {
      alert("手机号不能为空");
    }
    else if($("#username").val().length<6 || $("#username").val().length>20){
    	alert("用户名不符合要求");
    }
    else if ($("#password").val().length<6 || $("#password").val().length>18){
    	alert("密码不符合要求");
    }
    else if($("#phone").val().length!=11){
    	alert("手机号不正确");
    }
    else if($("#password").val()!=$("#password_again").val()){
    	alert("密码不一致");
    }
    else{
      var registerData = new FormData();
      registerData.append('username', $("#username").val());
      registerData.append('password', $("#password").val());
      registerData.append('name', $("#name").val());
      registerData.append('birthday', $("#birthday").val());
      registerData.append('phone', $("#phone").val());
      registerData.append('email', $("#email").val());
      registerData.append('sex', $sex);
      $.ajax({
        url: 'php/register.php',
        type: 'POST',
        data: registerData,
        contentType: false,
        processData: false,
        success: function(json){
          var data = JSON.parse(json);
          if(data.feedback=="success"){
            alert("注册成功");
            window.location.href="Sign.html";
          }
          else{
            alert("用户名已被使用，请重新注册");
          }
        },
        error: function(){
          alert("注册失败");
        }
      });
    }
  });

  $("#cancel_btn").click(function(){
    window.location.href="Sign.html";
  });
});