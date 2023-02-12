<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title", "Pin Verification App")</title>

    <link rel="dns-prefect" href="cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

    <link media="all" rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" as="style" onload="this.rel='stylesheet'">
    <link media="all" rel="preload" href="{{asset("web/assets/css/style.min.css?v=1.0.0")}}" as="style" onload="this.rel='stylesheet'">

</head>
<body>
<div>
    @yield("content")
</div>

<script defer src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script defer src="{{asset("web/assets/js/script.min.js?v=1.0.0")}}"></script>
</body>
</html>
