//Taken from http://www.selfcontained.us/2008/03/08/simple-jquery-image-rollover-script/
// To use, set the 'data-hover' attribute in an image tag to the url of the image you want it to be on rollover
$(function() {
    $('img[data-hover]').each(function(){
        // Preload rollover
        var imageEl = $('<img alt="" />');
        imageEl.attr('src',$(this).attr('data-hover'));

        $(this).hover(
            function(){
                // swap the image.
                var hoverSrc = $(this).attr('data-hover');
                var regSrc = $(this).attr('src');
                $(this).attr('src',hoverSrc);
                $(this).attr('data-hover',regSrc);
            }
        );
    });
});
