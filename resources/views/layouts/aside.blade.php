<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-fixed hide-on-large-only    ">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="/">
                <span class="logo-text hide-on-med-and-down">
                    SIM BANDUNG
                </span>
            </a>
            <a class="navbar-toggler" href="javascript:void(0)"><i class="material-icons">radio_button_checked</i></a>
        </h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
        data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="bold ">
            <a class="collapsible-header waves-effect waves-cyan " href="javascript:void(0) ">
                <i class="material-icons">markunread</i>
                <span class="menu-title" data-i18n="Dashboard">Persuratan</span>
            </a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
  
                    <li class="">
                        <a href="/kategori" data-turbolinks-eval="false">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Surat Masuk</span>
                        </a>
                    </li>
  
                    <li class="">
                        <a href="ecommerce.html" class=" ">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Surat Keluar</span>
                        </a>
                    </li>
  
                    <li class="">
                        <a href="analytics.html" class=" ">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Analytics">Surket Aktif</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="analytics.html" class=" ">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Analytics">Surket Alumni</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="bold ">
            <a class="collapsible-header waves-effect waves-cyan " href="javascript:void(0) ">
                <i class="material-icons">settings_input_antenna</i>
                <span class="menu-title" data-i18n="Cards">Data Lembur</span>
            </a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    
                    <li class="">
                        <a href="analytics.html" class=" ">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Analytics">Buat Laporan</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="analytics.html" class=" ">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Analytics">Laporan Tervalidasi</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="analytics.html" class=" ">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Analytics">Laporan Lembur All</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="javascript:void(0) " class="collapsible-header waves-effect waves-cyan ">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Vertical">Vertikale</span>
                        </a>
                        <div class="collapsible-body">
                            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
  
                                <li class="">
                                    <a wire:click="kategori"
                                        class="">
                                        <i class="material-icons">radio_button_unchecked</i>
                                        <span data-i18n="Modern Menu">Kategori</span>
                                    </a>
                                </li>
  
                                <li class="">
                                    <a href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/"
                                        class=" ">
                                        <i class="material-icons">radio_button_unchecked</i>
                                        <span data-i18n="Navbar Dark">Navbar Dark</span>
                                    </a>
                                </li>
  
                                <li class="">
                                    <a href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-3/"
                                        class=" ">
                                        <i class="material-icons">radio_button_unchecked</i>
                                        <span data-i18n="Gradient Menu">Verlaufsmenü</span>
                                    </a>
                                </li>
  
                                <li class="">
                                    <a href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-4/"
                                        class=" ">
                                        <i class="material-icons">radio_button_unchecked</i>
                                        <span data-i18n="Dark Menu">Dunkles Menü</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
  
                    <li class="">
                        <a href="javascript:void(0) " class="collapsible-header waves-effect waves-cyan ">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Horizontal">Horizontal</span>
                        </a>
                        <div class="collapsible-body">
                            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
  
                                <li class="">
                                    <a href="index.html" class=" ">
                                        <i class="material-icons">radio_button_unchecked</i>
                                        <span data-i18n="Horizontal Menu">Horizontales Menü</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold ">
            <a class="collapsible-header waves-effect waves-cyan " href="javascript:void(0) ">
                <i class="material-icons">perm_data_setting</i>
                <span class="menu-title" data-i18n="Dashboard">Master Data</span>
            </a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
  
                    <li class="">
                        <a href="{{ route('pejabat') }}" data-turbolinks-eval="false">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Data Pejabat</span>
                        </a>
                    </li>
  
                    <li class="">
                        <a href="ecommerce.html" class=" ">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Data User</span>
                        </a>
                    </li>
  
                    <li class="">
                        <a href="analytics.html" class=" ">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Analytics">Data M Sertifikat</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <div class="navigation-background"></div>
    <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
        href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
  </aside>