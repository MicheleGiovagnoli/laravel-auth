<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark " style="height:100vh;">
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link text-white">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.projects.index') }}" class="nav-link text-white">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                List
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.projects.create') }}" class="nav-link text-white">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                Create
            </a>
        </li>
    </ul>
    <hr>
</div>
