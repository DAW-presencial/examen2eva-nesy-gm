<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title>@yield('title','igolpe')</title>
</head>
<body>
	<h1 class="text-center mt-20">@yield('land','heading')</h1>
	<!-- <h1>Crear tutores</h1>
usamos dos interrogantes con el condicional
para el caso de que la variblae no esté definida-->
{{--Bienvenido {{ $nombre ?? "" }}--}}
@yield('content')

</body>
</html>