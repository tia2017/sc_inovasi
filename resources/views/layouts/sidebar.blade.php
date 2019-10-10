BEGIN::Menu Utama -->
    <div class="app-sidebar colored">
        <div class="sidebar-header">
            <a class="header-brand" href="dashboard">
                <div class="logo-img">
                   <img src="{{asset('assets/src/img/logo_ya.png')}}" class="header-brand-img" alt="ipi"> 
                </div>
            </a>
            <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
            <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
        </div>
        
        <div class="sidebar-content">
            <div class="nav-container">
                <nav id="main-menu-navigation" class="navigation-main">
                    <div class="nav-lavel">Navigasi</div>
                    <div class="nav-item active">
                        <a href="dashboard"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                    </div>
                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-aperture"></i><span>Inovasi</span></a>
                        <div class="submenu-content">
                            <a href="/inovasi" class="menu-item">Data Inovasi</a>
                            <a href="/tambah-inovasi" class="menu-item">Tambah Inovasi</a>
                        </div>
                    </div>
                    <div class="nav-lavel">Bantuan</div>
                    <div class="nav-item">
                        <a href="dokumentasi"><i class="ik ik-monitor"></i><span>Dokumentasi</span></a>
                    </div>
                    <div class="nav-item">
                        <a href="keluhan"><i class="ik ik-help-circle"></i><span>Keluhan</span></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
<!-- BEGIN::Menu Utama