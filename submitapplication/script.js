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
                console.log(jQuery.parseJSON(data));
            },
            error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });

    }
});