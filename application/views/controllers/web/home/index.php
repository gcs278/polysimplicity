<div class="col-sm-2 col-sm-offset-5">
	<select class="form-control">
	  <option>Map</option>
	  <option>Position</option>
	</select>
</div>
<div class="container col-sm-12" id="map" style="height: 700px">
</div>
<div class="container" id="below_map">
	<h1 id="selected_state" style="text-align: center"></h1>
	<div class="thin-line col-sm-10 col-sm-offset-1"></div><br>
	<ul id="candidate_list" class="list-unstyled"></ul>
</div>

<div class="modal"></div>

<script>
	$('#map').vectorMap({
		map: 'usa_en',
		backgroundColor: '#ffffff',
		borderColor: '#818181',
		borderOpacity: 0.25,
		borderWidth: 1,
		color: '#a0a0a0',
		enableZoom: false,
		hoverColor: '#909090',
		hoverOpacity: null,
		normalizeFunction: 'linear',
		selectedColor: '#505050',
		selectedRegion: null,
		showTooltip: true,
		onRegionClick: function(event, abbrev, state) {
			console.log("Clicked " + state);
			$('#selected_state').text(state);
			$('#candidate_list').html("<li>Loading...</li>");
			getCandidates(abbrev);
			$('html, body').animate({
				scrollTop: $('#candidate_list').offset().top
			}, 2000);
		}
	});
	
	function getCandidates(abbrev) {
		$.get('?state=' + abbrev.toUpperCase(), function(data) {
			var list = $('#candidate_list');
			list.children().remove();
			console.log(data);
			for (var i=0; i<data.length; i++) {
				console.log
				console.log(data[i]);
				var html = "<li>" + data[i] + "</li>";
				list.append(html);
			}
		}, 'json');
	}
	
	$('select').change(function() {
		if ($( "select option:selected" ).text() === "Position") {
			$('#map').animate({
				"left": "-=2000px"
			}, 1500 );
			$('#below_map').hide("slow");
		} else if ($("select option:selected").text() === "Map") {
			$('#map').animate({
				"left": "+=2000px"
			}, 1500 );
			$('#below_map').show("slow")
		}
	});
</script>

