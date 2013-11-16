
<div class="container" id="map" style="height: 100%">
</div>
<div class="container">
	<h1 id="selected_state" style="text-align: center"></h1>
	<ul id="candidate_list"></ul>
</div>

<script>
	$('#map').vectorMap({
		map: 'usa_en',
		backgroundColor: '#a5bfdd',
		borderColor: '#818181',
		borderOpacity: 0.25,
		borderWidth: 1,
		color: '#f4f3f0',
		enableZoom: false,
		hoverColor: '#c9dfaf',
		hoverOpacity: null,
		onRegionClick: function(event, abbrev, state) {
			console.log("Clicked " + state);
			$('#selected_state').text(state);
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
	
	$(document).keydown(function(e){
		if (e.keyCode == 37) { 
		   alert( "left pressed" );
		   return false;
		}
	});
</script>

