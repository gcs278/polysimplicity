
<div class="container" id="map" style="height: 100%">
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
		onRegionClick: function() {
			console.log(arguments);
		}
	});
</script>