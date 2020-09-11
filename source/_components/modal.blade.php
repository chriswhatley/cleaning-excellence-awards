<div class="fixed top-0 left-0 w-full h-full flex items-center justify-center z-50" style="background-color: rgba(0,0,0,.75);" x-show="open">
	<div class="relative">
		<button @click="open = !open" class="absolute mt-8 -ml-3 bg-yellow-500 p-2 rounded-full h-10 w-10 flex items-center justify-center text-white focus:outline-none focus:border-blue-500 focus:shadow-outline-none">                                       
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 22 22" class="w-4 h-4">
                <path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/>
            </svg>                       
        </button>
 
        <div class="text-left bg-white h-auto mt-12 p-3 md:max-w-3xl shadow-xl rounded mx-2 md:mx-0" @click.away="open = false">
        	{{-- load our highlights video ready for the YouTube player in our modal --}}
        	<script>
        		@include('_assets/js/player')
        		var videoID = @php echo json_encode($videoID, JSON_HEX_TAG); @endphp;
             	loadYoutubeVideo(videoID);
            </script>
            <div id="youTubePlayer"></div>		                
        </div>
   </div>
</div>