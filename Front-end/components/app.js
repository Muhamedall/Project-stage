const apiKey ='AIzaSyCKzj8WaWCcWtmMu1qSrlWiHXWMxjAiQ24';


const channelId ='UC4muHgvt5FNOUm-lxvMB6TQ'; 

const apiUrl = `https://www.googleapis.com/youtube/v3/search?key=${apiKey}&channelId=${channelId}&part=snippet&order=date&maxResults=10`;

fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
        const videosContainer = document.getElementById('videos');

        data.items.forEach(item => {
            const videoId = item.id.videoId;
            const title = item.snippet.title;
            
            
       

            const videoElement = `
                <div  class="bg-red-200 border border-4 w-[150%] h-[70%] text-center">
                
                  
                    
                    
                    <iframe  class="rounded-lg w-[100%] h-[60%] "  src="https://www.youtube.com/embed/${videoId}"  ></iframe>
                    <h2 class="text-sm">${title}</h2>

                </div>
                <hr>
            `;

            videosContainer.innerHTML += videoElement;
        });
    })
    .catch(error => console.error('Error fetching YouTube videos:', error));
  
 