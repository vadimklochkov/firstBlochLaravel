@include('style')
<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Single - Future Imperfect by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="single">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="#">Blog</a></h1>
						<nav class="main">
							<ul>
								<li class="menu user">
									<a href="#menu"><img src="/images/avatar.jpg"></a>
								</li>
							</ul>
						</nav>
					</header>

				@include('menu')

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">{{$post->title}}</a></h2>
										<p>{{$post->anons}}</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">{{$post->updated_at}}</time>
										<a href="#" class="author"><span class="name">{{$post->author}}</span><img src="/images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="{{ asset('/storage/' . $post->image) }}" /></span>
								<p>{{$post->text}} </p>
								<footer>
                                    @if($post->author_id == auth()->user()->id)
									<ul class="stats">
										<li><a href="/post/{{$post->id}}/edit">Edit</a></li>
										<li><a href="/post/{{$post->id}}/delete" class="red">Delete</a></li>
										<!-- <li><a href="#" class="red">Blocked</a></li>
										<li><a href="#" class="icon fa-heart">28</a></li>
										<li><a href="#" class="icon fa-comment">128</a></li> -->
									</ul>
                                    @endif
								</footer>
							</article>

						<!-- Comments -->
							<div class="post">
								<section class="comments">
									<h3>Comments</h3>
									<form action="/post/{{$post->id}}" method="POST">
                                    @csrf
										<textarea name="com"></textarea><br>
										<input type="submit" class="button big fit" value="Add Comment">
									</form>
								</section>
                                @foreach($comments as $el)
								<article class="comment">
									<div class="comment-autor">
										<a href="#"><img src="/images/avatar.jpg"></a>
										<a href="#">{{$el->author}}</a>
									</div>
									<p>{{$el->comment}}</p>
								</article>
                                @endforeach
							</div>

					</div>

				<!-- Footer -->
					<section id="footer">
						<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>.</p>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>