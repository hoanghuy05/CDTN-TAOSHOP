$(document).ready(function () {
    setEvents();
});

function setEvents() {
    register();
    bannerSlide();
    login();
    logout();
    //click nút đăng nhập
    $(".btn-login").click(function (e) {
        e.preventDefault();
        $(".m-login-box").show();

    });

    //click icon close trên form đăng nhập/đăng kí
    $(".icon-close").click(function (e) {
        e.preventDefault();
        //ấn form đăng nhập
        $(".m-login-box").hide();
        //xóa các text cảnh báo
        $('#email').val('');
        $('#password').val('');
        $('#phone_number').val('');
        $('#confirmPass').val('');
        $('#address').val('');
        $(".error--text").text('');
        //ấn form đăng kí
        $(".m-register-box").hide();
    });


    //click nút đăng kí trên form đăng nhập
    $(".btn-register").click(function (e) {
        e.preventDefault();
        //xóa các text cảnh báo
        $(".error--text").text('');
        //ẩn form đăng nhập
        $(".m-login-box").hide();
        //mở form đăng kí
        $(".m-register-box").show();
    });



    //show dropdown user
    $('.dropdown-user-box').click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        $('#user-header').removeClass('show');
    });
    //ẩn khi click ra ngoài
    $("#user-header.user-header").click(function (e) {
        e.preventDefault();
        $(this).addClass('show');
    });




    //xử lý nút xem thêm
    var $posts = $("#ProductIphone");
    var $phone = $(".phone-list");
    var $ipad = $(".ipad-page");
    var $ul = $('nav[role]');
    $ul.show();
    $(".see-more").click(function (e) {
        e.preventDefault();
        $.get($ul.find("a[rel='next']").attr("href"), function (response) {
            $posts.append(
                $(response).find("#ProductIphone").html()
            );
        });
    });


    $(".see-more-phone").click(function (e) {
        e.preventDefault();
        $.get($ul.find("a[rel='next']").attr("href"), function (response) {
            $phone.append(
                $(response).find(".phone-list").html()
            );
        });
    });
    $(".see-more-ipad").click(function (e) {
        e.preventDefault();
        $.get($ul.find("a[rel='next']").attr("href"), function (response) {
            $ipad.append(
                $(response).find(".ipad-page").html()
            );
        });
    });


    $(".order-now-no-login").click(function (e) {
        e.preventDefault();
        alert("Vui lòng đăng nhập để thực hiện mua hàng");
    });




    $(".profile_user").click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "get",
            url: "/profile",
            success: function (response) {
                window.location.href = '/profile'
            }
        });
    });



    $(".minusTotal").click(function (e) {
        e.preventDefault();
        // (Number($(".total-quantity").text()) <= 1)
        console.log(Number($(this).parent().find('.total-quantity').text()) <= 1);
        if (!(Number($(this).parent().parent().find('.total-quantity').text()) <= 1)) {
            $($(this).parent().parent().find('.total-quantity')).text(Number($($(this).parent().parent().find('.total-quantity')).text()) - 1);
        }
        var url = $(this).attr('data-url');
        var total_quantity = $(this).parent().parent().find('.total-quantity').text();
        console.log(total_quantity);
        var token = $('input[name="_token"').val();
        $.ajax({
            type: "post",
            url: url,
            data: {
                '_token': token,
                'total_quantity': total_quantity,
            },
            success: function (res) {
                $('.total_price').text(new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(res.total_price[0].total_price));
                location.reload();
            }
        });

    });

    $(".sumTotal").click(function (e) {
        e.preventDefault();
        $($(this).parent().parent().find('.total-quantity')).text(Number($($(this).parent().parent().find('.total-quantity')).text()) + 1);

        var url = $(this).attr('data-url');
        var total_quantity = $(this).parent().parent().find('.total-quantity').text();
        console.log(total_quantity);
        var token = $('input[name="_token"').val();
        $.ajax({
            type: "post",
            url: url,
            data: {
                '_token': token,
                'total_quantity': total_quantity,
            },
            success: function (res) {
                //  $('.total_price').text(res.total_price[0].total_price);
                // new Intl.NumberFormat('en-IN').format(number)
                $('.total_price').text(new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(res.total_price[0].total_price));
                location.reload();
            }
        });
    });


}


function bannerSlide() {
    var currenSlide = 1;
    var $slider = $(".banner-slide");
    var slideCount = $slider.children().length;
    // $slider.css('width', slideCount + "00%");

    // let $position = 0;
    // setInterval(function () {
    //     console.log($position - 100);
    // }, 1000);

    //thời gian chuyển banner
    var slideTime = 4000;
    setInterval(function () {
        $slider.animate({
            marginLeft: '-=100%',

        }, function () {
            currenSlide++;
            if (currenSlide === slideCount) {

                setTimeout(() => {
                    currenSlide = 1;
                    $(this).css("margin-left", "0");
                }, 3500);
            }

        });

    }, slideTime);
}

/**
 * hàm đăng nhập
 * **/
function login() {
    $("#loginForm").submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var email = $('#email').val();
        var password = $('#password').val();
        var token = $('input[name="_token"').val();
        $(".error--text").text('');
        $.ajax({
            type: "POST",
            url: '/login',
            data: {
                '_token': token,
                'email': email,
                'password': password
            },
            success: function (res) {
                console.log(res)
                if (res.error) {
                    $(".error--text").text(res.error);
                }
                if (res.successUser) {
                    $(this).hide();
                    location.reload();
                }
                else if (res.successAdmin) {
                    $(this).hide();
                    window.location.href = '/admin';
                };
            }
        });
    });
}

function logout() {
    $("#logoutForm").click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "get",
            url: "/logout",
            success: function (response) {
                location.reload();
                window.location.href = '/';
            }
        });
    });
}


/***
 * bắt sự kiện submit form đăng kí
 * **/
function register() {
    $("#registerForm").submit(function (e) {
        e.preventDefault();
        //lấy ra các input với propName trên form đăng kí
        var inputs = $("input[propName]");
        var user = {};

        for (const input of inputs) {
            //xóa các border lỗi trước đó
            $(input).parent().removeClass('has-error');

            //lấy ra tên với attribute là propnam
            const propName = $(input).attr("propName");
            //lấy ra value nhập trong inpup
            const value = $(input).val();
            //gắn vào mảng
            user[propName] = value;
        }
        var token = $('input[name="_token"').val();

        $.ajax({
            url: "/register",
            type: 'post',
            data: {
                '_token': token,
                'username': user['username'],
                'password': user['password'],
                'email': user['email'],
                'phone_number': user['phone_number'],
                'address': user['address'],
                'ConfirmPassword': user['confirmPass'],
            },
            success: function (res) {
                console.log(res);
                if (!$.isEmptyObject(res.error)) {
                    var input = 'input[name="confirmPass"]';
                    $(input).parent().addClass('has-error');
                    $(input + '+ .error--text').text(res.error);
                }
                $(this).hide();
                window.location.href = '/';
            },
            error: function (res) {

                //nếu password ko trùng khớp
                if (!$.isEmptyObject(res.error)) {
                    var input = $('input[name="confirmPass"]');
                    console.log(input);
                }
                //các trường hợp lỗi khác
                $.each(res.responseJSON.errors, function (key, value) {
                    var input = '#registerForm input[name=' + key + ']';
                    //thêm class vào các input lỗi
                    $(input).parent().addClass('has-error');
                    $(input + '+ .error--text').text(value);
                });
            }
        })
    });
}

