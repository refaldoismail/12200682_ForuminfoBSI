        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-user"></i><span class="hide-menu">Profilku</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url('/beranda')?>"><i class="ti-user"></i>MyProfil</a></li>
                                <li><a href="<?=base_url('/pengguna-list')?>"><i class="ti-user"></i>Pengguna</a></li>
                                <li><a href="<?=base_url('/logout')?>"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Dashboard</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url('/dashboard')?>">Halaman UBSI</a></li>
                                <li><a href="<?=base_url('/situs')?>">SITUSUBSI</a></li>
                                <li><a href="https://pmb.bsi.ac.id/2021/index.html">PMBUBSI</a></li>
                                <li><a href="<?=base_url('/alamat')?>">ALAMAT UBSI</a></li>
                                <li><a href="<?=base_url('/sosmet')?>">SOSMED UBSI</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->