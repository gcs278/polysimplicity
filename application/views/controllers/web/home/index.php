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

<div class="container col-sm-12" id="positions" style="right: -4000px; margin-top: -650px;">
	<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          President
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
				Replace with relevant data and picture :)
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Senate
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
				Replace with relevant data and picture :)
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          House of Representatives
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
				Replace with relevant data and picture :)
      </div>
    </div>
  </div>
</div>
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
				"left": "-=4000px"
			}, 1500 );
			$('#below_map').hide("slow");
			$('#positions').animate({
				"right": "+=4000px"
			}, 1500 );
		} else if ($("select option:selected").text() === "Map") {
			$('#map').animate({
				"left": "+=4000px"
			}, 1500 );
			$('#below_map').show("slow");
			$('#positions').animate({
				"right": "-=4000px"
			}, 1500 );
		}
	});
</script>

