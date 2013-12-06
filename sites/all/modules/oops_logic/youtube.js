
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var widget;
var player;
function onYouTubeIframeAPIReady() {
    widget = new YT.UploadWidget('widget', {
    width: 500,
    events: {
        'onUploadSuccess': onUploadSuccess,
        'onProcessingComplete': onProcessingComplete
    }
    });
}

function onUploadSuccess(event) {
    alert('Video ID ' + event.data.videoId + ' was uploaded and is currently being processed.');
}

function onProcessingComplete(event) {
   player = new YT.Player('player', {
            height: 335,
            width: 500,
            videoId: event.data.videoId,
            events: {}
    });
   document.getElementById('edit-field-youtube-video-und-0-input').value = "http://www.youtube.com/watch?v=" + event.data.videoId;
   //console.log(event.data.videoId);

}


