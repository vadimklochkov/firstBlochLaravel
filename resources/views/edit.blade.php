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
									<a href="#menu"><img src="images/avatar.jpg"></a>
								</li>
							</ul>
						</nav>
					</header>

				@include('menu')

				<!-- Main -->
					<div id="main">

						<!-- Post -->
                        <form action="/add/{{$post->id}}/edit" method="post" enctype="multipart/form-data">
								<h1>Add Post</h1>
                                @csrf
								<input type="text" name="title" placeholder="Post title"><br>
								<input type="text" name="anons" placeholder="Subtitle"><br>
								<input type="text" name="tags" placeholder="Tags"><br>
								<textarea name="text" placeholder="Post content"></textarea><br>
								<input type="file" name="image"><br><br>
								<button type="submit" class="button big fit" value="Add Post"> Add Post </button>
                            </form>

					</div>

				<!-- Footer -->
					<section id="footer">
						<p class="copyright">&copy; Blog. Design: <a href="http://html5up.net">HTML5 UP</a>.</p>
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