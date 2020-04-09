$('#url-download-btn').on('click', function() {
    const url = $('#url-download-txt');

    if(!validateURL(url.val())){
        return url.css('border', '1px solid red');
    }

    $.post("/get", {'url':url.val()}, function(data) {
        const video = document.createElement("VIDEO");
        const videoPos = document.getElementById('url-input');

        video.setAttribute("src", data);
        video.setAttribute("width", "320");
        video.setAttribute("height", "240");
        video.setAttribute("controls", "controls");

        videoPos.parentNode.insertBefore(
            video,
            videoPos.nextSibling
        );
    });

});

function validateURL(url) {
    const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([^#\&\?]*).*/;
    const match = url.match(regExp);

    return !!(match && match[2].length === 11);
}