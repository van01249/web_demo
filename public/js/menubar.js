$(function () {
    $(document)
        //Mở popup đăng nhập
        .on('click', '.item_login', function () {
            $('.overlay_login').show();
        })
        //Đóng popup đăng nhập
        .on('click', '.close_login', function () {
            $('.overlay_login').hide();
        })
        //Mở popup đăng ký        
        .on('click', '.item_register', function () {
            console.log(111)
            $('.overlay_register').show();
        })
        //Đóng popup đăng ký
        .on('click', '.close_register', function () {
            $('.overlay_register').hide();
        })
})