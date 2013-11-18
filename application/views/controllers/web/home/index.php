<!--Grant 11/18/13, we can fix-->
<div class="lead span9" style="margin: 0 auto !important; float: none !important;">
<p>Hi, we are a startup website that takes a political candidate's information and condenses it all on to one page in an easy, understandable way.  Our hope is that you will read our site and base informed decisions off of the knowledge you obtain from us.  Our goal is to make voting easy for people like you and I without imposing bias into that information other sources may unavoidably do.</p>
<p> Please leave us a comment or feedback at our email feedback@politicalsimplicity.com.  We would really appreciate any comments or suggests you have for us.  If you have a candidate you would like to learn about please let us know and we will move them to the front of the list of candidates to be posted first.</p>
</div>


<div class="lead span9" style="margin: 0 auto !important; float: none !important; font-size: 31px !important;">
<p><strong>We are currently under construction, but please visit back shortly to see if your local candidate has been posted yet.</strong></p>
</div>

<div class="container" id="map" style="height: 900px">
</div>
<div class="container">
	<h1 id="selected_state" style="text-align: center"></h1>
	<div class="thin-line col-sm-10 col-sm-offset-1"></div><br>
	<ul id="candidate_list" class="list-unstyled"></ul>
</div>

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
</script>

