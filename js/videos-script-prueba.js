var channelName = 'conferenciasMEL';

$(document).ready(function(){
	
	
	var contenedorvideos = document.getElementById('cnt-videos');

	$.get(
		"https://www.googleapis.com/youtube/v3/channels", {
			
			part:'contentDetails',
			forUsername: channelName,
			key:'AIzaSyA5LtNS8lOqoQW-CyR1PdiJSUCmZdts46U'},
			
			function(data){
				$.each(data.items,function(i, item){
					
					//console.log(item);
					pid = item.contentDetails.relatedPlaylists.uploads;
					traerVideos(pid);
				});
			}
	);
	
	function traerVideos(pid){
		$.get(
			"https://www.googleapis.com/youtube/v3/playlistItems", {
				
				part:'snippet',
				maxResults: 19,
				playlistId: pid,
				key:'AIzaSyA5LtNS8lOqoQW-CyR1PdiJSUCmZdts46U'},
				
				function(data){
					
					$.each(data.items,function(i, item){
						
						videoId = item.snippet.resourceId.videoId;
						titulo = item.snippet.title;
						//console.log(item.snippet.thumbnails.default.url);
						imagen = item.snippet.thumbnails.default.url;
						
						//var iframe = document.createElement('IFRAME');
						//iframe.setAttribute('src', 'http://www.youtube.com/embed/' + videoId);
						//iframe.setAttribute('width', 720);
						//iframe.setAttribute('height', 410);
						
						var cntVideo = document.createElement('div');
						cntVideo.className = 'cnt-video';
						cntVideo.setAttribute('data', videoId);
						
						
						var cntTitulo = document.createElement('div');
						cntTitulo.className = 'cnt-titulo';
						cntTitulo.innerHTML = titulo;
						
						var thumb = document.createElement('img');
						thumb.className = 'thumb';
						thumb.src = imagen;
	
						cntVideo.appendChild(thumb)
						cntVideo.appendChild(cntTitulo)
						contenedorvideos.appendChild(cntVideo)
					
					});
				}
			
		);
		
	}
	
	
		
	
});