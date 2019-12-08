$( document ).ready(function() {
    $(".content-photo_select").change(function(){
        if($(this).val() == 0) return false;

        $(location).attr('href',$('.content-photo_select option:selected').attr("data-href"));
    });
});