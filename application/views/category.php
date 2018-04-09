<h1>Catalog - User</h1>

<div id="body">
    <p>List of all accessories available</p>
    
	<!--Color Table-->
    <table style="width:100%">
		<h1>Color</h1>
        <tr>
            <th></th> 
            <th align="left">Accessory Id</th> 
            <th align="left">Description</th>
            <th align="left">Cost</th>
            <th align="left">Popularity</th>
            <th align="left">Quality</th>
        </tr>
        
		{bodyColours}
        <tr>
            <td><img class="myImg" src="{Path}" alt='{Description}' style="width:200px"></td>
            <td>{AccessoryId}</td> 
            <td>{Description}</td>
            <td>{Cost}</td>
            <td>{Popularity}</td>
            <td>{Quality}</td>
        </tr>
	
	
        {/bodyColours}
    </table>
	
	<!--Rim Table-->
	 <table style="width:100%">
		<h1>Rims</h1>
        <tr>
            <th></th> 
            <th align="left">Accessory Id</th> 
            <th align="left">Description</th>
            <th align="left">Cost</th>
            <th align="left">Popularity</th>
            <th align="left">Quality</th>
        </tr>
        {rims}
        <tr>
            <td><img class="myImg" src="{Path}" alt='{Description}' style="width:200px"></td>
            <td>{AccessoryId}</td> 
            <td>{Description}</td>
            <td>{Cost}</td>
            <td>{Popularity}</td>
            <td>{Quality}</td>
        </tr>
        {/rims}
    </table>
	
	<!--Spoiler Table-->
	<table style="width:100%">
		<h1>Spoiler</h1>
        <tr>
            <th></th> 
            <th align="left">Accessory Id</th> 
            <th align="left">Description</th>
            <th align="left">Cost</th>
            <th align="left">Popularity</th>
            <th align="left">Quality</th>
        </tr>
        {spoilers}
        <tr>
            <td><img class="myImg" src="{Path}" alt='{Description}' style="width:200px"></td>
            <td>{AccessoryId}</td> 
            <td>{Description}</td>
            <td>{Cost}</td>
            <td>{Popularity}</td>
            <td>{Quality}</td>
        </tr>
        {/spoilers}
    </table>
	
	<!--Storage Table-->
	<table style="width:100%">
		<h1>Storages</h1>
        <tr>
            <th></th> 
            <th align="left">Accessory Id</th> 
            <th align="left">Description</th>
            <th align="left">Cost</th>
            <th align="left">Popularity</th>
            <th align="left">Quality</th>
        </tr>
        {storages}
        <tr>
            <td><img class="myImg" src="{Path}" alt='{Description}' style="width:200px"></td>
            <td>{AccessoryId}</td> 
            <td>{Description}</td>
            <td>{Cost}</td>
            <td>{Popularity}</td>
            <td>{Quality}</td>
        </tr>
        {/storages}
    </table>
    
    <div id="myModal" class="modal">
	  <span class="close">&times;</span>
	  <img class="modal-content" id="img01">
	  <div id="caption"></div>
	</div>
    
</div>
    <p class="footer">
        Page rendered in
        <strong>
            {elapsed_time}
        </strong>
        seconds.
        {ci_version}
    </p>
	
	<script>
// Retrieve modal
	var modal = document.getElementById('myModal');
	var img = $('.myImg');
	var modalImg = $("#img01");
	var captionText = document.getElementById("caption");
	
	$('.myImg').click( 
	function(){
		modal.style.display = "block";
		var newSrc = this.src;
		modalImg.attr('src', newSrc);
		captionText.innerHTML = this.alt;
	});

	// create an X and closes the modal when clicked
	var span = document.getElementsByClassName("close")[0];
	span.onclick = function() { 
		modal.style.display = "none";
	}
</script>