<!DOCTYPE html>
<html>
<head>
	<title>Tugas Blade Templating</title>
</head>
<body>

<!-- menambahkan header -->
<link href="{{'assets/css/style.css'}}" rel="stylesheet">
<link href="{{'assets/css/bootstrap.min.css'}}" rel="stylesheet">
<link href="{{'assets/css/bootstrap-theme.min.css'}}" rel="stylesheet">

 @include('partials.navs')

<!-- menambahkan kosong  yang bisa di isi -->
 @yield('konten')

<script type="text/javascript" src="{{'assets/js/jquery.min.js'}}"></script>
<script type="text/javascript" src="{{'assets/js/scripts.js'}}"></script>
<script type="text/javascript" src="{{'assets/js/bootstrap.min.js'}}"></script>

</body>
</html>