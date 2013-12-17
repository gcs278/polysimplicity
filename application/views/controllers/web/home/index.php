<div id="konami" style="display: none; text-align: center;"><?php echo HTML::image('media/images/konami-logo.gif',array("width"=>100,"height"=>100))?></div>

<div class="container">
	<div class="col-sm-2 col-sm-offset-5">
		<select class="form-control">
			<option>Map</option>
			<option>Position</option>
		</select>
	</div>
	<div class="col-sm-12" id="map" style="height: 700px">
	</div>
	<div id="below_map" style="padding-bottom: 100px;">
		<h1 id="selected_state" style="text-align: center"></h1>
		<div class="thin-line col-sm-10 col-sm-offset-1"></div><br>
		<div id="loading" style="display: none; text-align: center;"><?php echo HTML::image('media/images/ajax-loader.gif',array('width'=>20,'height'=>20))?></div>
		<ul id="candidate_list" class="list-unstyled"></ul>
	</div>

	<div class="col-sm-12" id="positions" style="right: -4000px; margin-top: -650px; display: none;">
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
</div>

<script>
	$.fn.konami = function( options ) {
					var opts, masterKey, controllerCode, code;
					opts = $.extend({}, $.fn.konami.defaults, options);

					return this.each(function() {

									controllerCode = [];

									$( window ).keyup(function( evt ) {

													code = evt.keyCode || evt.which;

													if ( opts.code.length > controllerCode.push( code ) ) {
																	return;
													} // end if

													if ( opts.code.length < controllerCode.length ) {
																	controllerCode.shift();
													} // end if

													if ( opts.code.toString() !== controllerCode.toString() ) {
																	return;
													} // end for

													opts.cheat();

									}); // end keyup

					}); // end each

	}; // end opts

	$.fn.konami.defaults = {
					code : [38,38,40,40,37,39,37,39,66,65],
					cheat: null
	};

	$( window ).konami({  
			cheat: function() {
					$("#konami").css("display", "inherit");
			}
	});

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
			$('#loading').css("display", "inherit");
			getCandidates(abbrev);
			$('html, body').animate({
				scrollTop: $('#candidate_list').offset().top
			}, 2000);
		}
	});
	
	function getCandidates(abbrev) { // Change to return candidate object!!!!!!!!!!!!!
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
			$('#loading').css("display", "none");
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
			}, 1500);
			$('#positions').css('display', 'inherit');
		} else if ($("select option:selected").text() === "Map") {
			$('#map').animate({
				"left": "+=4000px"
			}, 1500 );
			$('#below_map').show("slow");
			$('#positions').animate({
				"right": "-=4000px"
			}, 1500, function() {
				$('#positions').css('display', 'none');
			});
		}
	});
</script>

