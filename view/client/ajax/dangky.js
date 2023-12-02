$("#dangkyacc").click(function (e) { 
    e.preventDefault();
    var ten_user = $("#cr_ten").val();
    var username = $("#cr_username").val();
    var pass = $("#cr_pass").val();
    var email = $("#cr_email").val();
    var sdt = $("#cr_sdt").val();
    var diachi = $("#cr_diachi").val();
    if(ten_user==""|| username=="" ||pass==""||email==""||sdt==""||diachi==""){
      alert("Vui lòng nhập đủ dữ liệu");
    }else{
      $.post("view/client/ajax/dangkyacc.php",{ten_user:ten_user,username:username,pass:pass,email:email,sdt:sdt,diachi:diachi},function(data){
        alert(data);
  });
    }

  });