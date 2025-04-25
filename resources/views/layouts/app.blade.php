<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Site')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>@import ('~lucide-static/font/Lucide.css');</style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <a href="{{ route('dashboard') }}"><i class="bi bi-speedometer2"></i> <div>Dashboard</div></a>
        <a href="{{ route('posts.index') }}"><i class="bi bi-postcard"></i> <div>Posts</div></a>
        <a href="{{ route('categories.index') }}"><i class="bi bi-list-stars"></i> <div>Categorias</div></a>
        <a href="#" class="logout-btn" onclick="document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-left" ></i> <div>Logout</div></a>
        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
            @csrf
        </form>
    </div>

    <div class="toggle-btn" id="toggle-btn">
        <i class="bi bi-list" style="font-size: 1.5rem;"></i>
    </div>

    <div class="content main-content">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggle-btn');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
        });
    </script>
</body>
</html>