$(document).ready(function(){
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

      $('.addcart').click(function(){
                $('.demgiohang').load('view/model/demgiohang.php')
      });
});
