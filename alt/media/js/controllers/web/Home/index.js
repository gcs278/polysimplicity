$(document).ready(function() {
    $('#slider').camera({ //here I declared some settings, the height and the presence of the thumbnails 
        height: '45%',
        pagination: false,
        loader: 'none',
        fx: 'simpleFade',
        playPause: false
    });
    
    $('#ticketer').ticker({
        speed: 0.10,
         titleText: '',
         displayType: 'reveal',
        controls: false
    });
});