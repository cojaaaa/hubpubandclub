$(document).ready(function() {
    $(".poruci").click(function () {
        $(".notify").toggleClass("active");
        $("#notifyType").toggleClass("success");
    
        setTimeout(function () {
            $(".notify").removeClass("active");
            $("#notifyType").removeClass("success");
        }, 1000);
    });
});
