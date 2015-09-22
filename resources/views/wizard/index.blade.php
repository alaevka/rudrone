@extends('layouts.main')
@section('title', 'index page')


@section('content')
    


<div class="container container-body">
	<div class="page-header" style="text-transform: uppercase;">
	    <h3>{{{ Lang::get('site/user.construct_your_uav_title') }}}</h3>
	</div>
	<div class="row">
		<div class="col-md-8">
			<form class="wizard-form">
			<div class="label-type">
				{{{ Lang::get('site/user.preferred_uav_type') }}}
			</div>
			<ul class="nav nav-tabs" role="tablist">
			  	<li role="presentation" class="active"><a href="#multicopters" aria-controls="multicopters" role="tab" data-toggle="tab">{{{ Lang::get('site/user.multicopters') }}}</a></li>
			  	<li role="presentation"><a href="#airplanes" aria-controls="airplanes" role="tab" data-toggle="tab">{{{ Lang::get('site/user.airplanes') }}}</a></li>
			  	<li role="presentation"><a href="#helicopters" aria-controls="helicopters" role="tab" data-toggle="tab">{{{ Lang::get('site/user.helicopters') }}}</a></li>
			  	<li role="presentation"><a href="#electric_jets" aria-controls="electric_jets" role="tab" data-toggle="tab">{{{ Lang::get('site/user.electric_jets') }}}</a></li>
			</ul>
			<div class="tab-content">
		    	<div role="tabpanel" class="tab-pane active" id="multicopters">
		    		<!-- multicopter -->
					<div class="label-type">
						{{{ Lang::get('site/mc.frame_type') }}} <a class="site-link-underline pull-right" href="">{{{ Lang::get('site/mc.more_about_frames_link') }}}</a>
					</div>
					<div class="radio">
		    			<label>
						    <input type="radio" name="optionsRadios" id="optionsRadios1" value="type1">
						    {{{ Lang::get('site/mc.tricopter_IY6_Y6') }}}
						    <span class="detail-desc">(Good for smooth flying with fast response of yaw control.)</span>
						</label>
		  			</div>
		  			<div class="radio">
		    			<label>
						    <input type="radio" checked name="optionsRadios" id="optionsRadios2" value="type2">
						    {{{ Lang::get('site/mc.quadcopter_I4_X4') }}}
						    <span class="detail-desc">(Easy to set up, lots of frame options and no servos required.)</span>
						</label>
		  			</div>
		  			<div class="radio">
		    			<label>
						    <input type="radio" name="optionsRadios" id="optionsRadios3" value="type3">
						    {{{ Lang::get('site/mc.hexecopter_I6_X6') }}}
						    <span class="detail-desc">(More power than a quad with slightly better yaw control.)</span>
						</label>
		  			</div>
		  			<div class="radio">
		    			<label>
						    <input type="radio" name="optionsRadios" id="optionsRadios4" value="type4">
						    {{{ Lang::get('site/mc.octocopter_I8_V8') }}}
						    <span class="detail-desc">(Most powerful and reliable.)</span>
						</label>
		  			</div>
		  			<div class="radio">
		    			<label>
						    <input type="radio" name="optionsRadios" id="optionsRadios4" value="type4">
						    {{{ Lang::get('site/mc.Y6') }}}
						    <span class="detail-desc">(More lift and more reliable then a quad (not as much lift as a hex).</span>
						</label>
		  			</div>
		  			<div class="radio">
		    			<label>
						    <input type="radio" name="optionsRadios" id="optionsRadios4" value="type4">
						    {{{ Lang::get('site/mc.X8') }}}
						    <span class="detail-desc">(Slightly more lift then a hex but more compact and reliable.)</span>
						</label>
		  			</div>
		  			<hr>
		  			<div class="wizard-results-table">
			  			<table class="table table-striped table-hover wizard-table">
			  				<tr>
			  					<th width="30"></th>
			  					<th>{{{ Lang::get('site/mc.frame_title') }}}</th>
			  					<th>{{{ Lang::get('site/mc.frame_size') }}}</th>
			  					<th>{{{ Lang::get('site/mc.frame_img') }}}</th>
			  					<th>{{{ Lang::get('site/mc.frame_links') }}}</th>
			  				</tr>
			  				<tr>
			  					<td><input type="radio" name="optionsFrame"></td>
			  					<td>ZMR250 V2 Carbon Fiber Mini FPV Quadcopter Frame</td>
			  					<td>250 mm</td>
			  					<td><img src="/images/temp/img_6046.jpg" height="50"></td>
			  					<td><a href="">http://www.fpvmodel.com/zmr250-v2-carbon-fiber-mini-fpv-quadcopter-frame-without-pdb_g1071.html</a></td>
			  				</tr>
			  				<tr>
			  					<td><input type="radio" name="optionsFrame"></td>
			  					<td>FMX250 Mini Quadcopter Frame Kit with PCB Board</td>
			  					<td>250 mm</td>
			  					<td><img src="/images/temp/img_6046.jpg" height="50"></td>
			  					<td><a href="">http://www.fpvmodel.com/fmx250-mini-quadcopter-frame-kit-with-pcb-board-and-led_g852.html</a></td>
			  				</tr>
			  				<tr>
			  					<td><input type="radio" name="optionsFrame"></td>
			  					<td>the The Minion Mini FPV H-Quad</td>
			  					<td>250 mm</td>
			  					<td><img src="/images/temp/img_6046.jpg" height="50"></td>
			  					<td><a href="">http://patsminihquad.com/the-minion/</a></td>
			  				</tr>
			  				<tr>
			  					<td><input type="radio" name="optionsFrame"></td>
			  					<td>Blackout H-Quad</td>
			  					<td>250 mm</td>
			  					<td><img src="/images/temp/img_6046.jpg" height="50"></td>
			  					<td><a href="">http://www.minihquad.com/frames/blackout-mini-h-quad/</a></td>
			  				</tr>
			  				<tr>
			  					<td><input type="radio" name="optionsFrame"></td>
			  					<td>ZMR250 V2 Carbon Fiber Mini FPV Quadcopter Frame</td>
			  					<td>250 mm</td>
			  					<td><img src="/images/temp/img_6046.jpg" height="50"></td>
			  					<td><a href="">http://www.fpvmodel.com/zmr250-v2-carbon-fiber-mini-fpv-quadcopter-frame-without-pdb_g1071.html</a></td>
			  				</tr>
			  				<tr>
			  					<td><input type="radio" name="optionsFrame"></td>
			  					<td>FMX250 Mini Quadcopter Frame Kit with PCB Board</td>
			  					<td>250 mm</td>
			  					<td><img src="/images/temp/img_6046.jpg" height="50"></td>
			  					<td><a href="">http://www.fpvmodel.com/fmx250-mini-quadcopter-frame-kit-with-pcb-board-and-led_g852.html</a></td>
			  				</tr>
			  				<tr>
			  					<td><input type="radio" name="optionsFrame"></td>
			  					<td>the The Minion Mini FPV H-Quad</td>
			  					<td>250 mm</td>
			  					<td><img src="/images/temp/img_6046.jpg" height="50"></td>
			  					<td><a href="">http://patsminihquad.com/the-minion/</a></td>
			  				</tr>
			  				<tr>
			  					<td><input type="radio" name="optionsFrame"></td>
			  					<td>Blackout H-Quad</td>
			  					<td>250 mm</td>
			  					<td><img src="/images/temp/img_6046.jpg" height="50"></td>
			  					<td><a href="">http://www.minihquad.com/frames/blackout-mini-h-quad/</a></td>
			  				</tr>
			  				<tr>
			  					<td><input type="radio" name="optionsFrame"></td>
			  					<td>ZMR250 V2 Carbon Fiber Mini FPV Quadcopter Frame</td>
			  					<td>250 mm</td>
			  					<td><img src="/images/temp/img_6046.jpg" height="50"></td>
			  					<td><a href="">http://www.fpvmodel.com/zmr250-v2-carbon-fiber-mini-fpv-quadcopter-frame-without-pdb_g1071.html</a></td>
			  				</tr>
			  				<tr>
			  					<td><input type="radio" name="optionsFrame"></td>
			  					<td>FMX250 Mini Quadcopter Frame Kit with PCB Board</td>
			  					<td>250 mm</td>
			  					<td><img src="/images/temp/img_6046.jpg" height="50"></td>
			  					<td><a href="">http://www.fpvmodel.com/fmx250-mini-quadcopter-frame-kit-with-pcb-board-and-led_g852.html</a></td>
			  				</tr>
			  				<tr>
			  					<td><input type="radio" name="optionsFrame"></td>
			  					<td>the The Minion Mini FPV H-Quad</td>
			  					<td>250 mm</td>
			  					<td><img src="/images/temp/img_6046.jpg" height="50"></td>
			  					<td><a href="">http://patsminihquad.com/the-minion/</a></td>
			  				</tr>
			  				<tr>
			  					<td><input type="radio" name="optionsFrame"></td>
			  					<td>Blackout H-Quad</td>
			  					<td>250 mm</td>
			  					<td><img src="/images/temp/img_6046.jpg" height="50"></td>
			  					<td><a href="">http://www.minihquad.com/frames/blackout-mini-h-quad/</a></td>
			  				</tr>
			  			</table>
		  			</div>
		  			<div class="recomendations-block">
		  				<div class="alert alert-info">
		  					Recommendation. For the frame selected by you we used motors with kv = ~ 1800 - 2300 
		  				</div>
		  			</div>
		  			<div class="label-type">
						{{{ Lang::get('site/mc.motors') }}} <a class="site-link-underline pull-right" href="">{{{ Lang::get('site/mc.more_about_motors_link') }}}</a>
					</div>
		    	</div>
		    	<div role="tabpanel" class="tab-pane" id="airplanes">airplanes panel</div>
		    	<div role="tabpanel" class="tab-pane" id="helicopters">helicopters panel</div>
		    	<div role="tabpanel" class="tab-pane" id="electric_jets">electric_jets panel</div>
		  	</div>


  			</form>
		</div>
		<div class="col-md-4 right-panel">
			<h3>{{Lang::get('site/user.config_result') }}</h3>
			<div class="config-result-row">
				{{Lang::get('site/user.preferred_uav_type') }}: <span>undefined</span>
			</div>
			<div class="config-result-row">
				{{Lang::get('site/user.frame_type') }}: <span>undefined</span>
			</div>
			<div class="config-result-row">
				{{Lang::get('site/user.motors') }}: <span>undefined</span>
			</div>
			<div class="config-result-row">
				{{Lang::get('site/user.esc`s') }}: <span>undefined</span>
			</div>
			<div class="config-result-row">
				{{Lang::get('site/user.flight_controller') }}: <span>undefined</span>
			</div>
			<div class="config-result-row">
				{{Lang::get('site/user.props') }}: <span>undefined</span>
			</div>
			<div class="config-result-row">
				{{Lang::get('site/user.accessories') }}: <span>undefined</span>
			</div>
			<hr>
			<div>
				<a class="btn btn-primary btn-sm pull-right" href="">{{Lang::get('site/user.save_configuration') }}</a>

			</div>
		</div>
	</div>
</div>
	

@endsection