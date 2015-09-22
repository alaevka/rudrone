@extends('layouts.main')
@section('title', 'index page')


@section('content')
    


<div class="container container-body">
	<div class="page-header" style="text-transform: uppercase;">
	    <h3>{{{ Lang::get('site/user.community') }}}</h3>
	</div>
	<!-- <div class="row">
		community header menu
	</div> -->
	<div class="row">
		<table class="table community-table">
			<thead>
				<tr>
					<th>{{{ Lang::get('site/user.topic') }}}</th>
					<th>{{{ Lang::get('site/user.category') }}}</th>
					<th>{{{ Lang::get('site/user.users') }}}</th>
					<th>{{{ Lang::get('site/user.comments') }}}</th>
					<th>{{{ Lang::get('site/user.views') }}}</th>
					<th>{{{ Lang::get('site/user.activity') }}}</th>
				</tr>
			</thead>
			<tbody>
				<?php
				    $faker = Faker\Factory::create();
				?>
				@for ($i = 1; $i <= 25; $i++)
				<tr>
					<td><?= $faker->sentence(rand(10,15)); ?><br><span><?= $faker->paragraph($nbSentences = 3); ?>..</span></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				@endfor
			</tbody>
		</table>
	</div>
</div>
	

@endsection