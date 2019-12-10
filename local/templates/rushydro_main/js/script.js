$( document ).ready(function() {
    $(document).on('submit','form.askquestion',function(e){
        call();

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
                    $(".askquestion").html("Спасибо, ваше сообщение отправлено!");
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
});