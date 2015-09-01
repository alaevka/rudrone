@extends('layouts.main')
@section('title', 'index page')


@section('content')
    


<div class="container container-body">
	<div class="row">
		<div class="col-md-8">
			<div class="top-post">
				<a href="#">
					<img class="img-responsive" src="{{ asset('images/temp/8104734af313783478959d5ea105c640.jpg') }}">
					<div class="top-post-title">
						<div class="top-post-main-title"><a href="">Main page top post biggest title</a></div>
						<div class="top-post-subtitle">Some short description about this post. This may contain some one, two or three sentense. some short description about this post. This may contain some one, two or three sentense.</div>
						
					</div>
					<div class="top-post-options">
						<button type="button" class="btn btn-default btn-sm">{{Lang::get('site/user.rating_counter') }}</button>
						<button type="button" class="btn btn-primary btn-sm">{{Lang::get('site/user.read_more_button') }}</button>
					</div>
				</a>
			</div>
			<hr>
			<div class="main-page-last-posts">
				<h3>{{Lang::get('site/user.last_posts_title') }}</h3>
				<?php
				    $faker = Faker\Factory::create();
				?>
				@for ($i = 1; $i <= 10; $i++)
				    <div class="row last-post">
				    	<div class="col-md-4"><img class="img-responsive" src="{{ asset('images/temp/'.$i.'.jpg') }}"></div>
				    	<div class="col-md-8 last-post-description">
				    		
				    		<div class="last-post-title"><a href=""><?= $faker->sentence(rand(10,15)); ?></a></div>
				    		<div class="last-post-preview-text"><?= $faker->paragraph($nbSentences = 5); ?></div>
				    	</div>
				    </div>
				@endfor
			</div>
		</div>
		<div class="col-md-4 right-panel">
			<h3>{{Lang::get('site/user.community_categories') }}</h3>
			<div class="row">
				@for ($i = 1; $i <= 10; $i++)
				<div class="community-category-block col-md-12" style="border-left-color: <?= $faker->hexcolor(); ?>">
					<div>
						<h4>
							<a href=""><span class="category-name"><?= $faker->sentence(rand(6,10)); ?></span></a>
						</h4>
					</div>
					<div class="community-category-subtitle">
						<?= $faker->paragraph($nbSentences = 3); ?>
					</div>
				</div>
				@endfor
			</div>
		</div>
	</div>
</div>
	

@endsection