$(document).ready(function(){
    $('.demgiohang').load("view/client/ajax/demgiohang.php");
    demgiohang();
    tongdonhang();
      function demgiohang() {
        var giohang = $('#giohang').children('tr');
        var slgh = giohang.length;
        var demgiohang = $('.demgiohang').text(slgh);
        // alert (demgiohang);
      }
      function tongdonhang(){
        var tongdonhang = $('#tongdonhang').children('tr');
        var giohang = $('#giohang').children('tr');
        var tong = 0;
        for (let i = 0; i < giohang.length; i++) {
            tong+= eval(giohang.eq(i).children('td').eq(6).children("input").val());
        }
        tongdonhang.children('td').eq(1).children('input').eq(1).val(tong);
        var tongdh = tongdonhang.children('td').eq(1).children('input').eq(1).val();
        $.post("view/client/ajax/tongdonhangcart.php",{tongdh:tongdh},function(data){
          tongdonhang.children('td').eq(1).children('span').text(data);
        });
      }
        $('.locgia').change(function(){
            var locgia = $('.locgia').val();
            $.post("view/client/ajax/locgia.php",{locgia : locgia},function(data){
                $('.sanpham').html(data);
            });
        });
        $('.addcart').click(function(){
          $('.demgiohang').load("view/client/ajax/demgiohang.php");
              var boxsp = $(this).parent().parent().parent().parent().parent();
              var id = $(this).attr('id');
              var ten_sp = boxsp.children("div").eq(0).children('input').eq(0).val();
              var avatar = boxsp.children("div").eq(0).children('input').eq(1).val();
              var gia_sp = boxsp.children("div").eq(0).children('input').eq(2).val();
              var dungluong_sp = boxsp.children("div").eq(0).children('input').eq(3).val();
              var trangthai_sp = boxsp.children("div").eq(0).children('input').eq(4).val();
              var soluong_sp = boxsp.children("div").eq(0).children('input').eq(5).val();
              var soluong_dh = boxsp.children("div").eq(0).children('input').eq(6).val();
              var tien = boxsp.children("div").eq(0).children('input').eq(8).val();
              $.post("view/client/ajax/addtocart.php",{id:id,ten_sp:ten_sp,avatar:avatar,gia_sp:gia_sp,soluong_sp:soluong_sp,trangthai_sp:trangthai_sp,dungluong_sp:dungluong_sp,soluong_dh:soluong_dh,tien:tien},function(data){
                    $('.demgiohang').html(data);
                    alert("Đã thêm vào giỏ hàng");
              });
        });

        $('#addtocart').click(function(){
          alert("Ok");
        });
      // $('.addcart').click(function(){
      //       var id = $(this).attr("id");
      //       var ten_sp = $("#ten_sp"+id+"").val();
      //       var avatar = $("#avatar"+id+"").val();
      //       var gia_sp = $("#gia_sp"+id+"").val();
      //       var dungluong_sp = $("#dungluong_sp"+id+"").val();
      //       var trangthai_sp = $("#trangthai_sp"+id+"").val();
      //       var soluong_sp = $("#soluong_sp"+id+"").val();
      //       var soluong_dh = $("#soluong_dh"+id+"").val();
      //      $.post("view/model/addtocart.php",{id:id,ten_sp:ten_sp,avatar:avatar,gia_sp:gia_sp,soluong_sp:soluong_sp,trangthai_sp:trangthai_sp,dungluong_sp:dungluong_sp,soluong_dh:soluong_dh},function(data){
      //       $('.giohangmini').html(data);
      //      });
      // });
      // đếm giỏ hàng session
      // xóa giỏ hàng
      $(".remo").click(function (e) { 
        e.preventDefault();
        var tr = $(this).parent().parent().parent();
        var ten_sp = tr.children('td').eq(1).children('p').children('span').text();
        $.post("view/client/ajax/removecart.php",{ten_sp:ten_sp},function(data){

        });
        tr.remove();
       demgiohang();
       tongdonhang();
        // .prop("nodeName"); hàm để gọi ra tên của thẻ
        
      });


      // onchange số lượng giỏ hàng
     $(".soluongcart").change(function (e) { 
      e.preventDefault();
      var sl = this.value;
      var tr = $(this).parent().parent().parent();
      var slsp = tr.children('td').children('div').children('.qtybuttonmax').val();
      if(sl >= slsp){
        sl== slsp;
      }
      var giasp = tr.children('td').eq(3).children("ul").children('input').val();
      var ten_sp = tr.children('td').eq(1).children('p').children('span').text();
      var tong = giasp * sl;
      tr.children('td').eq(6).children('input').val(tong);
      var tienn = tr.children('td').eq(6).children('input').val();
      $.post("view/client/ajax/updatecart.php",{ten_sp : ten_sp, sl:sl,tienn:tienn, giasp:giasp },function(data){ 
        tr.children('td').eq(6).children('span').text(data);
      });
      tongdonhang();
      // .prop("nodeName"); hàm để gọi ra tên của thẻ
     });
     
     $("#signinCreate").click(function (e) { 
      var link = $(this).attr('href');
      var id = $('#tongdonhang').children('tr').children('td').eq(1).children('input').eq(0).val();
      var tongdh = $('#tongdonhang').children('tr').children('td').eq(1).children('input').eq(1).val();
      if(id==0){
        e.preventDefault();
        alert("Vui lòng đăng nhập");
      }else if(tongdh==0){
        e.preventDefault();
        alert("Vui lòng thêm sản phẩm trước khi thanh toán");
      }
      else{
        $.post("view/client/ajax/tongdonhang.php",{tongdh:tongdh},function(data){

        });
      }
     });

//  show dữ liệu điền thông tin nhận hàng
   $("#inforuser").click(function (e) { 
     e.preventDefault();
        var thongtin = $(this).parent();
        var ten = thongtin.children("input").eq(0).val();
        var dc = thongtin.children("input").eq(1).val();
        var ema = thongtin.children("input").eq(2).val();
        var phone = thongtin.children("input").eq(3).val();
        $("#ten_user").val(ten);
        $("#diachi").val(dc);
         $("#email").val(ema);
         $("#sdt").val(phone);
     });

// validate đặt hàng
$(".dathang").click(function (e) { 
  var ten_nguoinhan = $("#ten_user").val();
  var diachi_nguoinhan = $("#diachi").val();
  var email_nguoinhan = $("#email").val();
  var sdt_nguoinhan = $("#sdt").val();
  var mgg = $("#mgg").val();
  var pttt = $('#pttt').val();
  var ngay_dat_hang = $('#ngaydathang').val();
  var tongdh = $('.tongdonhang').children("input").val();
  var link = $(this).attr('href');
  if(ten_nguoinhan!=""&&diachi_nguoinhan!=""&&email_nguoinhan!=""&&sdt_nguoinhan!=""){
      $.post("view/client/ajax/dathang.php",{ten_nguoinhan:ten_nguoinhan,diachi_nguoinhan:diachi_nguoinhan,
        email_nguoinhan:email_nguoinhan,sdt_nguoinhan:sdt_nguoinhan,tongdh:tongdh,mgg:mgg,pttt:pttt,ngay_dat_hang:ngay_dat_hang
        },function(data){
              
        });
        alert('Đặt hàng thành công!');
  }
  else{
    e.preventDefault();
    alert("Vui lòng nhập dữ liệu");
  }
});

// cập nhật lại số lượng trong database 
// $("#updatesl").click(function (e) { 
//   var ten_user = $("#ten_user").val();
//   var diachi = $("#diachi").val();
//   var email = $("#email").val();
//   var sdt = $("#sdt").val(); 
//   var link = $(this).attr('href');
//   if(ten_user!=""&&diachi!=""&&email!=""&&sdt!=""){
//     $.post("view/client/ajax/updatesql.php",{},function(data){

//     });
//   }
//   else{
//     e.preventDefault();
//     alert("Vui lòng nhập dữ liệu");
//   }
  
// });

  //  cập nhật thông tin tài khoản người dùng
    $("#updatetk").click(function (e) { 
      var iduser = $('#iduser').val();
      var tenuser = $('#tenuser').val();
      var emailuser = $('#emailuser').val();
      var sdtuser = $('#sdtuser').val();
      var diachiuser = $('#diachiuser').val();
      var passworduser = $('#passworduser').val();
      if(tenuser==""|| emailuser=="" || sdtuser=="" || diachiuser==""|| passworduser==""){
        e.preventDefault();
        alert("Vui lòng điền đủ thông tin trước khi cập nhật");
      }else{
        $.post("view/client/ajax/updatetkuser.php",{iduser:iduser,tenuser:tenuser,emailuser:emailuser,sdtuser:sdtuser,diachiuser:diachiuser,passworduser:passworduser},function(data){
          alert("Cập nhật thành công!");
          $("#thongtintaikhoan").html(data);
        });
      }
      
    });
    
    
    // onchange phần số lượng trang chi tiết sản phẩm
    // $(".nhapsoluongct").change(function (e) { 
    //   e.preventDefault();
    //   var soluong = $(this).val();
    //   var giaspct = $('#giaspct').val();
    //   var soluongdhct = $('#soluongdhct').val();
    //   var tienct =$('#tienct').val();
    //   soluongdhct = soluong;
    //   var tien = soluong * giaspct;
    //   tienct = tien;
    //   alert(tienct);
    // });


    // addtocart trang chi tiết sản phẩm
    $("#addtocartct").click(function (e) { 
      var dulieu = $(this).parent();
      var id = dulieu.children('input').eq(0).val();
      var ten_sp = dulieu.children('input').eq(1).val();
      var avatar = dulieu.children('input').eq(2).val();
      var dungluong_sp = dulieu.children('input').eq(3).val();
      var gia_sp = dulieu.children('input').eq(4).val();
      var soluong_sp = dulieu.children('input').eq(5).val();
      var trangthai_sp = dulieu.children('input').eq(6).val();
      var soluong_dh = dulieu.children('input').eq(7).val();
      var tien = dulieu.children('input').eq(8).val();
      var soluong = $('.nhapsoluongct').val();
      soluong_dh = soluong;
      tien = soluong_dh * gia_sp;
      $.post("view/client/ajax/addtocart.php",{id:id,ten_sp:ten_sp,avatar:avatar,gia_sp:gia_sp,soluong_sp:soluong_sp,trangthai_sp:trangthai_sp,dungluong_sp:dungluong_sp,soluong_dh:soluong_dh,tien:tien},function(data){
        $('.giohangmini').html(data);
      });
    });

    $("#mgg").change(function (e) { 
      e.preventDefault();
      var id = $(this).val();
     $.post('view/client/ajax/updatetongdonhang.php',{id:id},function(data){
      $('.tongdonhang').html(data);
     });
    });

// cập nhật trạng thái đơn hàng
    $(".capnhatdonhang").click(function (e) { 
      var donhang = $(this).parent();
      var dieukien = donhang.children('input').eq(1).val();
      var id = donhang.children('input').eq(0).val();
      if(dieukien==1){
        if(confirm("Bạn muốn hủy đơn hàng?")==true){
          $.post('view/client/ajax/capnhatttdonhang.php',{id:id, dieukien:dieukien},function(data){
             alert(data);
          });
      }else{

      }
      }else{
        $.post('view/client/ajax/capnhatttdonhang.php',{id:id, dieukien:dieukien},function(data){
          alert(data);
       });
          
        }
     
    });



// Liên hệ
    $("#sendMessage").click(function (e) { 
      e.preventDefault();
      var ten_lh = $("#con_name").val();
      var email_lh = $("#con_email").val();
      var sdt_lh = $("#con_phone").val();
      var id_user = $("#con_id").val();
      var noidung_lh = $("#con_message").val();
      if(ten_lh==""||email_lh==""||sdt_lh==""||noidung_lh==""){
            $("#faillh").text("Vui lòng nhập đủ nội dung");
      }else{
        $.post("view/client/ajax/lienheclient.php",{id_user:id_user,ten_lh:ten_lh,email_lh:email_lh,sdt_lh:sdt_lh,noidung_lh:noidung_lh},function(data){
            alert("Chúng tôi đã nhận được liên hệ của bạn !");
        });
      $("#con_message").val('');
      }
    }); 
// Đơn hàng đã nhận
    $(".showtheott").click(function (e) { 
      e.preventDefault();
      dieukien = $(this).parent().children("input").val();
    $.post("view/client/ajax/showdonhang.php",{dieukien:dieukien},function(data){
        $("#showdonhang").html(data);
    });
    });
});

//Bình luận sản phẩm
$("#guibl").click(function (e) { 
  e.preventDefault();
  var formm = $(this).parent();
  var dieukien = formm.children("input").eq(2).val();
  var id_sp = formm.children("input").eq(0).val();
  var id_user = formm.children("input").eq(1).val();
  var noidungbl = $("#noidungbl").val();
  if(noidungbl==""){
   $("#erro").text("Chưa nhập nội dung");
  }
  else{
    $.post("view/client/ajax/binhluan.php",{id_sp:id_sp,id_user:id_user,noidungbl:noidungbl,dieukien:dieukien},function(data){
            $("#showbinhluan").html(data);
    });
    $("#noidungbl").val('');
    $("#erro").text('');
  }
});
