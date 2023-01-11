$(document).ready(function () {
    setEvents();
    //mở form thêm sản phẩm
    $("#addProduct").click(function (e) {
        e.preventDefault();
        $(".product-popup-box").show();
    });

    //đóng form thêm sản phẩm
    $(".icon-close").click(function (e) {
        e.preventDefault();
        $(".product-popup-box").hide();
        $(".product-popup-edit").hide();
        $(".error--text").text('');
        $('#insertProduct').find('.has-error').removeClass('has-error');
        $(".custom-select").removeClass("error-border");
        $(".custom-select").removeClass("error-border");
    });
    //đóng form thêm sản phẩm
    $("#btnClose").click(function (e) {
        e.preventDefault();
        $(".product-popup-box").hide();
        $('#insertProduct').find('.has-error').removeClass('has-error');
        $(".custom-select").removeClass("error-border");
        $(".custom-select").removeClass("error-border");

    });

    $(".btn-close-edit").click(function (e) {
        e.preventDefault();
        $(".product-popup-edit").hide();
        $(".error--text").text('');
    });

    //double click tr
    $(".ms-tr-product").dblclick(function (e) {
        e.preventDefault();
        $(".product-popup-edit").show();
        var url = $(this).attr('data-url');
        getValue(url);
    });

    $(".ms-tr-product .mi-edit").click(function (e) {
        e.preventDefault();
        $(".product-popup-edit").show();
        var url = $(this).attr('data-url');
        getValue(url);
    });
    $(".file-input_label").click(function (e) {
        e.preventDefault();
        $('.file-input_input').trigger('click');
    });


    $(".ms-tr-product .mi-delete").click(function (e) {
        e.preventDefault();
        $(".message-title").text("Xóa sản phẩm");
        $(".mess-footer-box .btn-text").text("Xóa sản phẩm");
        $(".m-message").show();
        $("#deleteForm").addClass("ms-tr-product");
        var url = $(this).attr('data-url');
        $("#deleteForm").attr('data-url', url);
    });

    addProduct();
    editProduct();
});


function addProduct() {
    $("#insertProduct").submit(function (e) {
        e.preventDefault();
        var url = $(this).attr('data-url');
        var category_id = $(".custom-option.selection").attr('data-value');
        var formData = new FormData($(this)[0]);
        formData.append('_token', $('input[name="_token"]').val());
        $(".error--text").text('');
        if (!category_id != true) {
            formData.append('category_id', category_id);
        }
        $('#insertProduct').find('.has-error').removeClass('has-error');
        $(".custom-select").removeClass("error-border");
        $.ajax({
            url: url,
            type: 'post',
            data: formData,
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function (res) {

                $(this).hide();
                location.reload();
            },
            error: function (res) {
                console.log(res);
                // //nếu password ko trùng khớp
                if (res.responseJSON) {
                    //các trường hợp lỗi khác
                    $.each(res.responseJSON.errors, function (key, value) {
                        console.log(key);
                        var input = '#insertProduct input[name=' + key + ']';
                        //thêm class vào các input lỗi
                        $(input).parent().parent().addClass('has-error');
                        $(input).parents(".has-error").parent().find(".error--text").text(value);
                        if (key == "category_id") {
                            $('.custom-select').addClass("error-border");
                            $(".category_id .error--text").text(value);
                        } //$(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());



                        // $($(input).parent().parent() + ' .error--text').text(value);
                    });
                }
                else {
                    $(this).hide();
                    location.reload();
                }

            }
        })
    });
}


function editProduct() {
    $("#editProduct").submit(function (e) {
        e.preventDefault();
        $('#insertProduct').find('.has-error').removeClass('has-error');
        $(".custom-select").removeClass("error-border");
        var url = $(this).attr('data-url');
        var formData = new FormData($(this)[0]);
        formData.append('_token', $('input[name="_token"]').val());
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
                $(this).hide();
                location.reload();
            },
            error: function (res) {
                console.log(res);
                // //nếu password ko trùng khớp
                if (res.responseJSON) {
                    //các trường hợp lỗi khác
                    $.each(res.responseJSON.errors, function (key, value) {
                        console.log(key);
                        var input = 'form#editProduct input[name=' + key + ']';
                        //thêm class vào các input lỗi
                        $(input).parent().parent().addClass('has-error');
                        $(input).parents(".has-error").parent().find(".error--text").text(value);
                        if (key == "category_id") {
                            $('.custom-select').addClass("error-border");
                            $(".category_id .error--text").text(value);
                        } //$(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());



                        // $($(input).parent().parent() + ' .error--text').text(value);
                    });
                }
                else {
                    // $(this).hide();
                    // location.reload();
                }

            }
        })
    });
}


function getValue(url) {
    $("#editProduct").attr('data-url', url);
    $.ajax({
        type: "get",
        url: url,
        success: function (res) {
            console.log(res);
            $("#editProduct #product_name").val(res.product.product_name);
            $("#editProduct #price").val(res.product.price);
            $("#editProduct #screen").val(res.product.screen);
            $("#editProduct #screen_resolution").val(res.product.screen_resolution);
            $("#editProduct #weight").val(res.product.weight);
            $("#editProduct #chip").val(res.product.chip);
            $("#editProduct #pin").val(res.product.pin);
            $("#editProduct #category_id").val(res.product.category_id);
            $("#selected_filename_1").text(res.product.image);
            $(".custom-select-trigger").text($(".custom-option[data-value=" + res.product.category_id + "]").text());
            $(".custom-options").find(".custom-option[data-value=" + res.product.category_id + "]").addClass("selection");
            $("#editProduct #discount").val(res.product.discount);
        }
    });
}

//lấy ra tên file ảnh đã chọn
function uploadFile(target) {
    $('#selected_filename').text(target.files[0].name);

}
function uploadFile1(target) {
    $("#selected_filename_1").text(target.files[0].name);
}
