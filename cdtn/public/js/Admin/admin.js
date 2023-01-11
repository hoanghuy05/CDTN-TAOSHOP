$(document).ready(function () {
    setEvents();
});

function setEvents() {
    register();
    logout();
    $(".sub-btn").unbind().click(function (e) {
        e.preventDefault();
        $(this).next(".navbar-menu-child").slideToggle();
        $(this).find(".arrow-right").toggleClass('rotate');
    });

    //mở form thêm khách hàng
    $("#addUser").click(function (e) {

        e.preventDefault();
        $(".title-popup-user").text("Thêm thông tin khách hàng");
        $(".customer-popup-box").show();
        //sét url thêm mới cho form
        var url = $("form[mode]").attr('default-url');
        $("form[mode]").attr('mode', 0);
        $("form[mode]").attr('data-url', url);
        //gắn lại các giá trị
        $("#username").val('');
        $("#address").val('');
        $("#email").val('');
        $("#phone_number").val('');
    });


    //đóng form
    $(".icon-close").click(function (e) {
        e.preventDefault();
        $(".customer-popup-box").hide();
        $(".error--text").text('');
        $("form[mode] div.has-error").removeClass('has-error');
    });


    $(".ms-tr-user").click(function (e) {
        e.preventDefault();
    });



    //double click tr
    $(".ms-tr-user").dblclick(function (e) {
        e.preventDefault();
        var url = $(this).attr('data-url');
        $(".title-popup-user").text("Sửa thông tin khách hàng");
        $("form[mode]").attr('mode', '1');
        $("form[mode]").attr('data-url', url);
        edit(url);
    });


    //click icon chỉnh sửa
    $(".ms-tr-user .mi-edit").click(function (e) {
        e.preventDefault();
        $(".title-popup-user").text("Sửa thông tin khách hàng");
        var url = $(this).attr('data-url');
        $("form[mode]").attr('mode', '1');
        edit(url);
    });


    //click icon xóa
    $(".ms-tr-user .mi-delete").click(function (e) {
        e.preventDefault();
        var url = $(this).attr('data-url');
        //gắn url tương ứng lên form cảnh báo
        $("#deleteForm").attr('data-url', url);
        $(".mess-footer-box").addClass("ms-tr-user");
        $(".mess-footer-box form").attr('id', 'deleteUser');
        $(".m-message").show();
    });

    //đóng message cảnh báo xóa
    $(".mi-close").click(function (e) {
        e.preventDefault();
        $(".m-message").hide();
    });
    $(".close-message").click(function (e) {
        e.preventDefault();
        $(".m-message").hide();
    });


    $("#deleteForm").submit(function (e) {
        e.preventDefault();
        var url = $(this).attr('data-url');
        $.ajax({
            type: 'get',
            url: url,
            success: function (response) {
                $(this).hide();
                location.reload();
                // $(".m-toast-box").show();
                // setTimeout(function () {
                //     $(".m-toast-box").hide();
                // }, 2000);
            },
            error: function (res) {
                $(this).hide();

                // $("#toast-content").text("Có lỗi xảy ra");
                // setTimeout(function () {
                //     $(".m-toast-box").hide();
                // }, 2000);
            }
        });
    });



    var $posts = $("#ProductIphone");
    var $ul = $('.wrapper-list.row nav[role]');
    $ul.hide();
    $("#upload_image").submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "/image",
            data: new FormData(this),
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function (res) {
                console.log(res);
            },
            error: function (res) {
                console.log(res);
            }
        });
    });
}

//lấy ra tên file ảnh đã chọn
function uploadFile(target) {
    document.getElementById("fileName").innerHTML = target.files[0].name;
}

function logout() {
    $("#logoutAdmin").unbind().click(function (e) {
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

function edit(url) {
    $("form#registerForm").attr('data-url', url);
    $(".customer-popup-box").show();
    var token = $('input[name="_token"').val();
    $.ajax({
        type: "get",
        url: url,
        data: {
            '_token': token,
        },
        success: function (res) {
            $("#username").val(res.user.username);
            $("#address").val(res.user.address);
            $("#email").val(res.user.email);
            $("#phone_number").val(res.user.phone_number);
            $("input[name='gender'][value=" + res.user.gender + "]").prop('checked', true);
            $("#registerForm").attr('data-url', url);
        }
    });
}



/***
 * bắt sự kiện submit form đăng kí
 * **/
function register() {
    $("form#registerForm").unbind().submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var formData = new FormData($(this)[0]);
        formData.append('password', '123456');
        formData.append('ConfirmPassword', '123456');
        formData.append('_token', $('input[name="_token"]').val());
        // $.ajax({
        //     type: "post",
        //     url: "/image",
        //     data: formData,
        //     dataType: "JSON",
        //     contentType: false,
        //     cache: false,
        //     processData: false,
        //     success: function (res) {
        //         console.log(res);
        //     },
        //     error: function (res) {
        //         console.log(res);
        //     }
        // });



        var mode = $(this).attr('mode');
        $(".title-popup-user").text(mode == 0 ? 'Thêm thông tin khách hàng' : 'Sửa thông tin khách hàng');
        $(".error--text").text('');
        var url = $(this).attr('data-url');
        var gender = $("#registerForm input[type='radio']:checked").val();
        if (gender) {
            gender = Number(gender);
        }
        else {
            gender = 2;
        }
        if (mode == "0") {

            $.ajax({
                url: url,
                type: 'post',
                data: formData,
                dataType: "JSON",
                contentType: false,
                cache: false,
                processData: false,
                success: function (res) {
                    console.log(res);
                    if (!$.isEmptyObject(res.error)) {
                        var input = 'input[name="confirmPass"]';
                        $(input).parent().addClass('has-error');
                        $(input + '+ .error--text').text(res.error);
                    }
                    $(this).hide();
                    location.reload();
                },
                error: function (res) {
                    //nếu password ko trùng khớp
                    if (res.responseJSON) {
                        //các trường hợp lỗi khác
                        $.each(res.responseJSON.errors, function (key, value) {
                            var input = '#registerForm input[name=' + key + ']';
                            //thêm class vào các input lỗi
                            $(input).parent().addClass('has-error');
                            $(input + '+ .error--text').text(value);
                        });
                    }
                    else {
                        $(this).hide();
                        location.reload();
                    }

                }
            })
        }
        else {
            var update_url = $(".ms-tr-user[update-url]").attr('update-url');
            console.log(update_url);
            $.ajax({
                url: update_url,
                type: 'POST',
                data: formData,
                dataType: "JSON",
                contentType: false,
                cache: false,
                processData: false,
                success: function (res) {
                    console.log(res);
                    $(this).hide();
                    location.reload();
                },
                error: function (res) {
                    console.log(res);
                    //nếu password ko trùng khớp
                    if (!$.isEmptyObject(res.error)) {
                        var input = $('input[name="confirmPass"]');
                        $(input).parent().addClass('has-error');
                        $(input + '+ .error--text').text(res.error);
                        $(this).hide();
                        location.reload();
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
        }














    });
}
