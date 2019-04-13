@extends('blog.layouts.master')

@section('title', '- ' .  $post['title'])

@section('content')
		<div class="container">
			<div class="row">

				<article class="post-container col-8 off-1 col-m-10 off-m-0 mv++">
					<h2 class="post-title mb++">{{ $post['title'] }}</h2>
					<div class="meta-post">
						<?php
							$date = jdate($post['create_date']);
							$author = db()->get('users','*',['id[=]'=>$post['userid']]);
						 ?>
							<span>{{ $author['username'] }}</span>
							/
							<span>{{ $date->format('y,m,d') }}</span>
					</div>
					@if($post['image'] != '')
						<img src="{{ config('url') . '/img/' . $post['image'] }}" alt="" class="post-image mb++">
					@endif	
					<div class="post-body">
						{!! $post['body'] !!}
					</div>
				</article>
			</div>
		</div>
@endsection