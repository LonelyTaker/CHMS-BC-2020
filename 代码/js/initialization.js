function logout(){
  window.location.href="Sign.html";
  $.ajax({
    url: './php/logout_username.php',
    type: 'POST',
    contentType: false,
    processData: false,
  });
}
$.ajax({
  url: './php/is_sign.php',
  type: 'POST',
  contentType: false,
  processData: false,
  success: function(json){
    var data=JSON.parse(json);
    if (data.feedback=="Nexist") {
      alert("请先登录");
      window.location.href="Sign.html";
    }
  },
  error: function(){
    alert("error");
  }
});
$.ajax({
  url: './php/get_username.php',
  type: 'POST',
  contentType: false,
  processData: false,
  success: function(json){
    var data=JSON.parse(json);
    $("#user").empty();
    $("#user").append('<a href="javascript:void(0);" onclick="useritem()">'+data.username+'</a>');
  },
  error: function(){
    alert("error");
  }
});