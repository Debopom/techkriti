window.addEventListener('load', function()
        {
            var xhr = null;

            getXmlHttpRequestObject = function()
            {
                if(!xhr)
                {               
                    // Create a new XMLHttpRequest object 
                    xhr = new XMLHttpRequest();
                }
                return xhr;
            };

            updateLiveData = function()
            {
                
                // Date string is appended as a query with live data 
                // for not to use the cached version 
                var url = 'get_data.php';
                xhr = getXmlHttpRequestObject();
                xhr.onreadystatechange = evenHandler;
                // asynchronous requests
                xhr.open("GET", url, true);
                // Send the request over the network
                xhr.send(null);
            };

            updateLiveData();

            function evenHandler()
            {
                // Check response is ready or not
                if(xhr.readyState == 4 && xhr.status == 200)
                {
                    dataDiv = document.getElementById('liveData');
                    // Set current data text
                    dataDiv.innerHTML = xhr.responseText;
                    // Update the live data every 1 sec
                    setTimeout(updateLiveData(), 30);
                }
            }
        });