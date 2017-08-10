
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css">
	<title></title>
</head>
<body>
@include('inc.topbar')
<br>
	<div class="row">
	@include('inc.messages')
		@yield('content')
	</div>

</body>
</html>