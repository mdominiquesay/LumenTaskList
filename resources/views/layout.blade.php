<html>
<head>
    <title>Lumen Task List</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="App">
        <div id="page-body">
            <nav class="nav nav-pills nav-justified">
                <a class="nav-item nav-link" href="/">Home</a> |
                <a class="nav-item nav-link"  href="/form">Add Task</a> |
                <a class="nav-item nav-link"  href="/showData">Show Data</a>
            </nav>
            @yield('content')
        </div>
    </div>
</body>
</html>