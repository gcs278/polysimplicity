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
	
	<div class="loading" id="dim" style="display: none"></div>
	<div class="loading" id="content" style="display: none">
		<span class="close">&times;</span>
		<h4 id="selected_state"></h4>
		<hr>
		<div class="spinner"> <!--<?php echo HTML::image('media/images/ajax-loader.gif',array('width'=>20,'height'=>20))?> -->
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
		<ul id="candidate_list" class="list-unstyled"></ul>
	</div>
	<!-- Modal
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="selected_state">Modal title</h4>
				</div>
				<div class="modal-body">
					<ul id="candidate_list" class="list-unstyled"></ul>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div> /.modal -->

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
			$('#candidate_list').children().remove();
			console.log("Clicked " + state);
			$('#selected_state').text(state);
			$('.loading').css('display', 'inherit');
			$('.loading').animate({
				opacity: 1
			});
			getCandidates(abbrev);
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
				if (data[i].id >= 0)
					var html = "<a href='candidate/" + data[i].id + "'><img id='small-profile' src='data:image/jpg;base64, "
						+ data[i].image + "' class='img-rounded img-responsive' \><br><li>" + data[i].name + "</a></li>";
				else
					var html = "<li>" + data[i].name + "</li>";
				list.append(html);
			}
			$('.spinner').css("display", "none");
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
	
	$('body').on("click", "#dim", function() {
		$('.loading').animate({
			opacity: 0
		}, function() {
			$('.loading').css("display", "none");
			$('.spinner').css("display", "inherit");
		});
	});
	
	$('.loading').on('click', '.close', function() {
		$('.loading').animate({
			opacity: 0
		}, function() {
			$('.loading').css("display", "none");
			$('.spinner').css("display", "inherit");
		});
	});
</script>

