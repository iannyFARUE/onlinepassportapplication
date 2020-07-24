<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
            <a class="nav-link active" href="{{route('admin.home')}}">
                     <i class="fa fa-home px-3"></i>
                    Dashboard<span class="sr-only">(current)</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fa fa-folder px-3"></i>
                    Generate Reports
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-flag px-3"></i>
                    Notifications
                </a>
            </li> --}}
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Personalised Settings</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            {{-- <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>

                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fa fa-cog px-3"></i>
                    Settings
                </a>
            </li> --}}
        </ul>
    </div>
</nav>
