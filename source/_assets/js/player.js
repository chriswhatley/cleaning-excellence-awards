// Sets up a YouTube video player (via their API) that we use in an AlpineJS modal
window.videoApiLoaded = [];
window.videoApiLoaded.youtube = false;

var player;

function loadYoutubeVideo(videoId) {
    window.onYouTubeIframeAPIReady = function() { document.dispatchEvent(new CustomEvent('onYouTubeIframeAPIReady', {})) };

    if(window.videoApiLoaded.youtube == false) {
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        window.videoApiLoaded.youtube = true;
    }
   
    document.addEventListener('onYouTubeIframeAPIReady', function (e) {
        player = new YT.Player('youTubePlayer', {
          height: '400',
          width: '600',
          videoId: videoId,			         
        });
    }, false);    	
}

// when the modal containing the player is closed, we need to stop playing the video
function stopVideo() {
	player.stopVideo();
}