        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">COBA-COBA</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/admin/dasboard"
                                class="nav-link    {{ Request::is('admin/dasboard*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/admin/informasi"
                                class="nav-link  {{ Request::is('admin/informasi*') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-file-contract"></i>
                                <p>
                                    Informasi
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="/admin/jurusan"
                                class="nav-link  {{ Request::is('admin/jurusan*') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-file-contract"></i>
                                <p>
                                    Jurusan
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/admin/banner"
                                class="nav-link  {{ Request::is('admin/banner*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-mobile"></i>
                                <p>
                                    Banner
                                </p>
                            </a>
                        </li>

                        <li class="nav-item  {{ Request::is('admin/about') ? 'menu-is-opening menu-open' : '' }}">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fa fa-solid fa-list"></i>
                                <p>
                                    Tentang Kami
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/about" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>About</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/pesan"
                                        class="nav-link  {{ Request::is('admin/pesan*') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-inbox"></i>
                                        <p>Pesan </p>
                                    </a>
                                </li>

                            </ul>
                        </li>




                        <li class="nav-item  {{ Request::is('admin/foto') ? 'menu-is-opening menu-open' : '' }}">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fa fa-solid fa-camera"></i>
                                <p>
                                    Galeri
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/foto"
                                        class="nav-link  {{ Request::is('admin/foto*') ? 'active' : '' }}">
                                        <i class="fa fa-duotune fa-pen nav-icon"></i>
                                        <p>Foto</p>
                                    </a>
                                </li>

                        </li>
                    </ul>
                    </li>



                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
