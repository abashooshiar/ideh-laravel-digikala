let Toggle = false;
$("#sidebar_menu li").click(function () {

    if (!$(this).hasClass('active')) {
        $("#sidebar_menu li").removeClass('active');
        $(this).addClass('active');

        $('.child_menu').slideUp(500);
        // $('.child_menu', this).slideDown(500);
        $('#sidebar_menu .fa-angle-down').removeClass('fa-angle-down'); // vase felesh ro be paeen
        $('.fa-angle-right', this).addClass('fa-angle-down');

        if (!Toggle) {
            $('.child_menu', this).slideDown(500);
        } else {
            $('.child_menu', this).show();
        }
    } else if (Toggle) {
        $('.child_menu').slideUp(500);
        $('.child_menu', this).show();
    } else if ($(this).hasClass('active')) {
        $('.child_menu', this).slideToggle(500);
        $('.fa-angle-right', this).toggleClass('fa-angle-down');
    }

});
$("#sidebarToggle").click(function () {

    if ($('.page_sidebar').hasClass('toggled')) {
        Toggle = false;
        $('.page_sidebar').removeClass('toggled');
        $("sidebar_menu").find('.active .child_menu').css('display', 'block');
        $('.page_content').css('margin-left', '240px');

    } else {
        Toggle = true;
        $('.page_sidebar').addClass('toggled');
        $(".child_menu").hide();
        $('.page_content').css('margin-left', '50px');
    }
});
$(window).resize(function () {
    set_sidebar_width();
});
$(document).ready(function () {
    set_sidebar_width();
});
set_sidebar_width = function () {
    const width = document.body.offsetWidth;
    //console.log(width);
    if (width < 850) {
        $('.page_sidebar').addClass('toggled');
        $('.page_content').css('margin-right', '50px');
        $(".child_menu").hide();
    } else {
        if (Toggle == false) {
            $('.page_sidebar').removeClass('toggled');
            $('.page_content').css('margin-left', '240px');
        }
    }
};
select_file = function () {
    $("#pic").click();
}
loadFile = function (event) {
    const render = new FileReader();
    render.onload = function () {
        const output = document.getElementById('output');
        output.src = render.result;
    };
    render.readAsDataURL(event.target.files[0]);
};
let delete_url;
let token;
let send_array_data = false;
let _method = 'DELETE';
del_row = function (url, t, message_text) {
    _method = 'DELETE';
    delete_url = url;
    token = t;
    $("#msg").text(message_text);
    $(".message_div").show();
};
delete_row = function () {
    if (send_array_data) {
        $("#data_form").submit();
    } else {
        let form = document.createElement('form');
        form.setAttribute('method', 'POST');
        form.setAttribute('action', delete_url);

        const hiddenField1 = document.createElement('input');
        hiddenField1.setAttribute('name', '_method');
        hiddenField1.setAttribute('value', _method);
        form.appendChild(hiddenField1);

        const hiddenField2 = document.createElement('input');
        hiddenField2.setAttribute('name', '_token');
        hiddenField2.setAttribute('value', token);
        form.appendChild(hiddenField2);

        document.body.appendChild(form);
        form.submit();
        document.body.removeChild(form);
    }
};
hide_box = function () {
    token = '';
    delete_url = '';
    $(".message_div").hide();
};
$('.check_box').click(function () {
    send_array_data = false;
    const $checkbox = $('table tr td input[type = "checkbox"]');
    const count = $checkbox.filter(':checked').length;
    //alert(count);
    if (count > 0) {
        $("#remove_items").removeClass('off');
        $("#restore_items").removeClass('off');
    } else {
        $("#remove_items").addClass('off');
        $("#restore_items").addClass('off');
    }
});
$('.item_form').click(function () {
    send_array_data = true;
    const $checkbox = $('table tr td input[type = "checkbox"]');
    const count = $checkbox.filter(':checked').length;
    if (count > 0) {
        const href = window.location.href.split('?');
        //console.log(href);
        let action = href [0] + "/" + this.id;
        if (href.length == 2) {
            action = action + "?" + href[1];
        }
        $("#data_form").attr('action', action);
        $("#msg").text($(this).attr('msg'));
        $('.message_div').show();
    }
});
$('span').tooltip();
restore_row = function (url, t, message_text) {
    _method = 'post';
    delete_url = url;
    token = t;
    $("#msg").text(message_text);
    $('.message_div').show();
}
