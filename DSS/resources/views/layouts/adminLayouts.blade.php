<html>
<head>
    <title>@yield("title")</title>
</head>
<body>
    @section("menu")
        <h1>MENU</h1>
    @show
    <div class="container">
        @yield("content")
    </div>
</body>
</html>