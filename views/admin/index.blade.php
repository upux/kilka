@extends('admin.layouts.master')

@section('title')

@section('content')
	<div class="row">
		<div class="col-4">
			<div class="white-box text-center">
				<h3 class="box-tetle">تعداد پست ها</h3>
				<p class="p-t-10">{{ $count_post }}</p>
			</div>
		</div>

		<div class="col-4">
			<div class="white-box text-center">
				<h3 class="box-tetle">تعداد دسته بندی ها</h3>
				<p class="p-t-10">{{ $count_category }}</p>
			</div>
		</div>

		<div class="col-4">
			<div class="white-box text-center">
				<h3 class="box-tetle">تعداد کاربران</h3>
				<p class="p-t-10">{{ $count_user }}</p>
			</div>
		</div>
	</div>
@endsection