<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/auth/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Medinizer</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/backend/images/OIP.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Ahmad</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        @include('backend.components.sidesearch')

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="pages/calendar.html" class="nav-link @if (request()->is('pages/calendar')) active @endif">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Documents
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Simple Tables</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Profile Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('userProfile') }}"
                                class="nav-link @if (request()->routeIs('userProfile')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile Information</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Password Update</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Two-step Verification</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Logged in Devices</p>
                            </a>
                        </li>

                    </ul>
                </li>

                {{-- user logout --}}
                <li class="nav-item mt-5">
                    <a href="" class="nav-link lg-out" style="background-color: rgba(0, 0, 0, 0.226)">
                        <center>
                            <i class="nav-icon far fa-window-close"></i>
                            <p>Logout</p>
                        </center>
                    </a>
                </li>
                {{--  --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const sidebarItems = document.querySelectorAll('.nav-item.has-treeview');

        sidebarItems.forEach(function(item) {
            item.addEventListener('click', function(event) {
                event.preventDefault();
                const submenu = this.querySelector('.nav-treeview');
                if (submenu) {
                    if (submenu.classList.contains('show')) {
                        submenu.classList.remove('show');
                    } else {
                        submenu.classList.add('show');
                    }
                }
            });
        });

        // Handling submenu click event
        const submenuLinks = document.querySelectorAll('.nav-item.has-treeview .nav-link');

        submenuLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const contentUrl = this.getAttribute('href');
                loadContent(contentUrl); // Load content when submenu link is clicked
            });
        });

        // Function to load content dynamically
        function loadContent(url) {
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    // Update the content area with the fetched content
                    document.querySelector('#content').innerHTML = data;
                })
                .catch(error => console.error('Error fetching content:', error));
        }
    });
</script>
