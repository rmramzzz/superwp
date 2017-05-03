$(document).ready(function () {
    $('#myCanvas').hide();
    if (!$('#myCanvas')
            .tagcanvas({
                textColour: '#00a88f',
                outlineColour: '#00a88f',
                outlineThickness: 1,
                weight: true,
                depth: 0.5
            })) {

    }
    $("#myCanvas").tagcanvas("tagtofront", {index: 0, callback: function () {
        $("#myCanvas").tagcanvas("setspeed", [0.1, -0.2]).show();
    }});

});