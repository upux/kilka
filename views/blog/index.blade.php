@extends('blog.layouts.master')

@section('title')

@section('content')




		<div class="container">
			<div class="row">
				
				<div class="card-container mt++ col-s-10 off-s-0 col-xl-6 off-xl-2">
					<div class="row">
					<h2 class="title col-10 mb+">
						مقالات
					</h2>
					@foreach($posts as $post)

						<?php
							$categorys = db()->select('post_to_category' , 'category_id',['post_id[=]' => $post['id']]);
							$categorys = db()->select('categorys' ,'*',['id[=]' => $categorys]);
						?>

					<div class="col-5 col-m-10">
						<div class="card-box">
							@if($post['image'] != '')
								<a href="{{ config('url') . '/blog/post/' . $post['slug'] }}">
								<img src="{{ config('url') . '/img/' . $post['image'] }}" alt="" class="card-top-img">
							</a>
							@endif
							<div class="card-body">
								<div class="card-meta">
									@foreach($categorys as $category)
									<a href="{{ $category['slug'] }}">
										<span class="card-tag">{{ $category['name'] }}</span>
									</a>
									@endforeach
								</div>
							<a href="{{ config('url') . '/blog/post/' . $post['slug'] }}">

								<p class="card-content">{{ $post['title'] }}</p>
						</a>
							</div>
						</div>
					</div>	
					@endforeach
				</div>
				</div>
			</div>
		</div>


@endsection