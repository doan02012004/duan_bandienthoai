// xóa commnet
$(".xoacmt").click(function (e) { 
    e.preventDefault();
   var id_bl = $(this).parent().children("input").eq(0).val();
   var iduser = $(this).parent().children("input").eq(1).val();
   var id_sp = $(this).parent().children("input").eq(2).val();
   $.post("view/client/ajax/xoabinhluan.php",{id_bl:id_bl,iduser:iduser,id_sp:id_sp},function(data){
    $("#showbinhluan").html(data);
    });
  });