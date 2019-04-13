<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ config('name') }}  @yield('title')</title>
	<link rel="stylesheet" href="{{ config('url') }}/asset/css/kilka.css">
	<link rel="stylesheet" href="{{ config('url') }}/asset/css/blog.css">
</head>
<body>
	<header id="header">
		<nav class="navbar container">
		<a href="{{ config('url') }}" class="logo-header"><h1>upux</h1></a>
			<ul class="navbar right">
				<li class="nav-item"><a href="/">بلاگ</a></li>
			</ul>
		</nav>
	</header>


	<!-- main -->
	
	<main id="main">
		@yield('content')
	</main>

	<!-- main -->
</body>
</html>