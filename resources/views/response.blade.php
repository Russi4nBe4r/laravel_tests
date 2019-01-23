<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	var evtSource = new EventSource("/test/redis/response/");
	evtSource.onmessage = function(e) {
		var eventList = $('.eventList');
		var newElement = document.createElement("li");
	  	newElement.innerHTML = "message: " + e.data;
		eventList.append(newElement);
	}
</script>

<ul class="eventList">
</ul>
