<nav class="navbar">
    <div class="navbar-inner">
        <a href="{{ url('/') }}" class="brand">
            <span class="brand-badge">TI</span>
            <span>Institute Portal</span>
        </a>
        <div class="nav-links">
            <a href="{{ route('students.index') }}"
               class="nav-link {{ request()->routeIs('students.*') ? 'active' : '' }}">
                Students
            </a>
            <a href="{{ route('courses.index') }}"
               class="nav-link {{ request()->routeIs('courses.*') ? 'active' : '' }}">
                Courses
            </a>
        </div>
    </div>
</nav>