$(document).ready(function(){
        $('.locgia').change(function(){
            var locgia = $('.locgia').val();
            alert(locgia);
            $.post("view/model/locgia.php",{locgia : locgia},function(data){
                $('.sanpham').html(data);
            });
        });
});