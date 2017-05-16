$(".city-select").hide();
$(".model-select").hide();

$(function(){
    $('#country').change(function() {
        $(".city-select").show();
        var code = $("#country").val();
        $.get( '../index.php', {code: code},function(data) {
            wrOption(data, '#city', '.city-select');
        });
    });
});

$(function(){
    $('#city').change(function() {
        $(".model-select").show();
        var lol = $("#city").val();
        $.get( '../index.php', {lol: lol}, function(data) {
            wrOption(data, '#model', '.model-select');
        });
    });
});

function wrOption(data, Wher, classToShow) {
    var obj = $.parseJSON(data);
    for (var i = 0; i < obj.length; i++) {
        $(Wher).append( "<option value='" + obj[i].ID + "'>" + obj[i].Name + "</option>" );
    }
    $(classToShow).fadeIn('slow');
};