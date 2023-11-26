$(document).ready(function(){
      var giohang = $('#giohang').children('tr');
      var slgh = giohang.length;
      var demgiohang = $('.demgiohang').text(slgh);
      // alert (demgiohang);


        $('.locgia').change(function(){
            var locgia = $('.locgia').val();
            $.post("view/model/locgia.php",{locgia : locgia},function(data){
                $('.sanpham').html(data);
            });
        });

      $('.addcart').click(function(){
            var id = $(this).attr("id");
            var ten_sp = $("#ten_sp"+id+"").val();
            var avatar = $("#avatar"+id+"").val();
            var gia_sp = $("#gia_sp"+id+"").val();
            var dungluong_sp = $("#dungluong_sp"+id+"").val();
            var trangthai_sp = $("#trangthai_sp"+id+"").val();
            var soluong_sp = $("#soluong_sp"+id+"").val();
            var soluong_dh = $("#soluong_dh"+id+"").val();
           $.post("view/model/addtocart.php",{id:id,ten_sp:ten_sp,avatar:avatar,gia_sp:gia_sp,soluong_sp:soluong_sp,trangthai_sp:trangthai_sp,dungluong_sp:dungluong_sp,soluong_dh:soluong_dh},function(data){
            $('.giohangmini').html(data);
           });
      });

      // đếm giỏ hàng session
      $('.addcart').click(function(){
        $('.demgiohang').load('view/model/demgiohang.php');
      });
      $('.demgiohang').load('view/model/demgiohang.php');

      // xóa giỏ hàng
      $(".remo").click(function (e) { 
        e.preventDefault();
        var tr = $(this).parent().parent().parent();
        var tensp = tr.children('td').eq(1).children('p').children('span').text();
        tr.remove();
        var giohang = $('#giohang').children('tr');
        var slgh = giohang.length;
        var demgiohang = $('.demgiohang').text(slgh);
        // .prop("nodeName"); hàm để gọi ra tên của thẻ
        alert(tensp);
        
      });


      // onchange số lượng giỏ hàng
     $(".soluong").change(function (e) { 
      e.preventDefault();
      var sl = this.value;
      var tr = $(this).parent().parent().parent();
      var slsp = tr.children('td').children('div').children('.qtybuttonmax').val();
      if(sl >= slsp){
        sl== slsp;
      }
      var giasp = tr.children('td').eq(3).children("ul").children('li').text();
      var tensp = tr.children('td').eq(1).children('p').children('span').text();
      var tong = giasp * sl;
      tr.children('td').eq(6).children('span').text(tong);
      
      // .prop("nodeName"); hàm để gọi ra tên của thẻ
     });
});
