<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav>
        <a href="/hello">Hello</a> |
        <a href="/about">About</a> |
        <a href="/tasks">Task</a> |
        <a href="/task-lists">Task List</a>
    </nav>
    <header>
        <h2>My Laravel App Header</h2>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 My Laravel App</p>
    </footer>
</body>
</html>
