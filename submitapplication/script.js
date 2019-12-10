$( document ).ready(function() {
    $(document).on('change','#uploade-file',function(e) {
        $("input[name=download_file]").val($(this).val());

        e.preventDefault();
    });

    $(document).on('submit','form.profile',function(e){
        call();

        e.preventDefault();
    });

    function call() {
        var msg = $('form.profile').serialize();
        $.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: msg,
            success: function(data) {
                if (jQuery.parseJSON(data) == "Y") {
                    $("form.profile").html("Спасибо, ваше анкета отправлена!");
                    $("form.profile").css({
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