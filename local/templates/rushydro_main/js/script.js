$( document ).ready(function() {
    $(document).on('submit','form.askquestion',function(e){
        var response = grecaptcha.getResponse();

        if(!grecaptcha.getResponse()) {
            alert('Вы не заполнили поле Я не робот!!');
        } else {
            alert("Отправляем форму");
            call();
        }

        e.preventDefault();
    });

    function call() {
        var msg = $('form.askquestion').serialize();
        $.ajax({
            type: 'POST',
            url: '/asqquestion/ajax.php',
            data: msg,
            success: function(data) {
                if (jQuery.parseJSON(data) == "Y") {
                    $(".askquestion").html("Спасибо, ваше сообщение отправлено!!");
                    $(".askquestion").css({
                        "color": "#026340",
                        "font-size": "16px",
                        "font-weight": "bold",
                        "margin-top": "50px",
                    })
                }
            },
            error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });
    }

    $(document).on('submit','form.search-news',function(e){
        if ($(".search-news_checkbox").prop("checked")) {
            $(".cururl").val(window.location.href);
            $(".newsdate").val($(".search-news_date").val());
            searchForDate();

            e.preventDefault();
        }
    });

    function searchForDate() {
        var msg = $('form.search-news').serialize();
        $.ajax({
            type: 'POST',
            url: '/ajax/searchfordate.php',
            data: msg,
            success: function(data) {
                let obj = jQuery.parseJSON(data);
                $(location).attr('href',obj['url']);
            },
            error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });
    }
});