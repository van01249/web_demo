$(function () {
    //Mở popup đăng nhập
    $(document)
        .on('click', '.box_login', function () {
            $('.overlay_login').show();
        })
        //Đóng popup đăng nhập
        .on('click', '.close_login', function () {
            $('.overlay_login').hide();
        })
})