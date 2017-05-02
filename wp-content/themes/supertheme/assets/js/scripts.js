$(document).ready(function () {
    console.log('Scripts are ready');
});

$(document).ready(function () {
    if (!$('#myCanvas')
            .tagcanvas({
                textColour: '#00a88f',
                outlineColour: '#00a88f',
                outlineThickness: 1,
                weight: true,
                initial: [0.02, -0.025],
                depth: 0.5
            })) {

        // TagCanvas failed to load
        $('#myCanvasContainer').hide();
    }
});