

function mailPHP(name, data) {
    post_ury("mail.php", name, data)
}

function post_ury(url, name, data) {
    var str = '';

    $.each(data.split('.'), function (k, v) {
        m = $('#' + v).val();//0 1 2
        let f = m.split(' ');
        str += '&' + v + '='; m = $('#' + v).val(); str += m;
        //console.log(str);
    });

    $.ajax({
        url: "/" + url,
        type: "POST",
        data: name + '_f=1' + str,
        cache: false,
        success: function (result) {
            console.log(result);
            obj = jQuery.parseJSON(result);
            console.log(obj)
            if (obj.message == 'true') closse_modal("modalSheet")
            else alert(obj.message);
        },
        error: function () {
            $('<p>Ошибка при передаче данных !</p>').appendTo('.success');
        }
    });

}


function closse_modal(id) {
    var s = $(`#${id}`);

    if (!s.toggleClass('open_modal')) {
        s.addClass('open_modal');
        s.removeClass('closse_modals');
    }
    else if (!s.toggleClass('closse_modals')) {
        s.removeClass('open_modal');
        s.addClass('closse_modals');
    }
}


//closse_modals
//open_modal

