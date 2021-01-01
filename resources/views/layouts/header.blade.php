<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed ">
      <nav class="navbar-main navbar-color nav-collapsible sideNav-lock  navbar-dark gradient-45deg-indigo-light-blue">
        <div class="nav-wrapper">
          <ul class="left">
            <li>
              <h1 class="logo-wrapper">
                <a class="brand-logo darken-1" href="{{ route('home') }}">
                  <img src="images/logo/materialize-logo.png" alt="materialize logo">
                  <span class="logo-text hide-on-med-and-down">
                    SIM BANDUNG
                  </span>
                </a>
              </h1>
            </li>
          </ul>
          <div class="header-search-wrapper hide-on-med-and-down">
            <i class="material-icons">search</i>
            <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Cari sesuatu ..."
              data-search="template-list">
            <ul class="search-list collection display-none"></ul>
          </div>
          <ul class="navbar-list right">
            <li class="hide-on-med-and-down">
              <a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);">
                <i class="material-icons">settings_overscan</i>
              </a>
            </li>
            <li class="hide-on-large-only">
              <a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);">
                <i class="material-icons">search </i>
              </a>
            </li>
            <li>
              <a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);"
                data-target="notifications-dropdown">
                <i class="material-icons">notifications_none
                  <small class="notification-badge orange accent-3">5</small>
                </i>
              </a>
            </li>
            <li>
              <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
                data-target="profile-dropdown">
                <span class="avatar-status avatar-online">
                  <img src="images/avatar/avatar-7.png" alt="avatar">
                  <i></i>
                </span>
              </a>
            </li>
          </ul>
          <ul class="dropdown-content" id="notifications-dropdown">
            <li>
              <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
            </li>
            <li class="divider"></li>
          </ul>
          <!-- profile-dropdown-->
          <ul class="dropdown-content" id="profile-dropdown">
            <li>
              <a class="grey-text text-darken-1" href="user-profile-page.html">
                <i class="material-icons">person_outline</i>
                {{ Auth::user()->name }}
              </a>
            </li>
            <li>
              <a class="grey-text text-darken-1" href="app-chat.html">
                <i class="material-icons">chat_bubble_outline</i>
                Chat
              </a>
            </li>
            <li>
              <a class="grey-text text-darken-1" href="page-faq.html">
                <i class="material-icons">help_outline</i>
                Help
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a class="grey-text text-darken-1" href="user-lock-screen.html">
                <i class="material-icons">lock_outline</i>
                Lock
              </a>
            </li>
            <li>
              <a class="grey-text text-darken-1" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                <i class="material-icons">keyboard_tab</i>
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
          </ul>
        </div>
        <nav class="display-none search-sm">
          <div class="nav-wrapper">
            <form id="navbarForm">
              <div class="input-field search-input-sm">
                <input class="search-box-sm" type="search" required="" placeholder='Explore Materialize' id="search"
                  data-search="template-list">
                <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i
                  class="material-icons search-sm-close">close</i>
                <ul class="search-list collection search-list-sm display-none"></ul>
              </div>
            </form>
          </div>
        </nav>
      </nav>
      <!-- BEGIN: Horizontal nav start-->
      <nav class="white hide-on-med-and-down" id="horizontal-nav">
        <div class="nav-wrapper">
          <ul class="left hide-on-med-and-down" id="ul-horizontal-nav" data-menu="menu-navigation">
            {{-- Menu Persuratan --}}
            <li>
              <a class="dropdown-menu" href="javascript:void(0)" data-target="DashboardDropdown">
                <i class="material-icons">markunread</i>
                <span>
                  <span class="dropdown-title" data-i18n="Persuratan">Persuratan</span>
                  <i class="material-icons right">keyboard_arrow_down</i>
                </span>
              </a>
              <ul class="dropdown-content dropdown-horizontal-list" id="DashboardDropdown">
                <li class="" data-menu="">
                  <a href="{{ url('/kategori') }}" data-turbolinks-eval="true" class="" data-target=""><span data-i18n="Modern">Surat Masuk</span>
                  </a>
                </li>
                <li class="" data-menu="">
                  <a href="{{ url('/') }}" data-turbolinks-eval="true" class="" data-target="">
                    <span data-i18n="eCommerce">Surat Keluar</span>
                  </a>
                </li>
                <li class="" data-menu="">
                  <a href="{{ url('/') }}" class="" data-target="">
                    <span data-i18n="Analytics">Surket Aktif</span>
                  </a>
                </li>
                <li class="" data-menu="">
                  <a href="{{ url('/') }}" class="" data-target="">
                    <span data-i18n="Analytics">Surket Alumni</span>
                  </a>
                </li>
                <li class="dropdown-submenu " data-menu="dropdown-submenu" tabindex="0">
                  <a href="javascript:void(0)" class="dropdownSub-menu" data-target="userDropdown">
                    <span data-i18n="User">Kategori Lain</span>
                          <i class="material-icons right">chevron_right</i>
                        </a>
                  <ul class="dropdown-content dropdown-horizontal-list" id="userDropdown" tabindex="0" style="">
                    <li class="" data-menu="" tabindex="0">
                  <a href="{{ url('/') }}" class="" data-target="">
                    <span data-i18n="List">Liste</span>
                        </a>
                    </li>
                    <li class="" data-menu="" tabindex="0">
                  <a href="{{ url('/') }}" class="" data-target="">
                    <span data-i18n="View">Aussicht</span>
                        </a>
                    </li>
                    <li class="" data-menu="" tabindex="0">
                  <a href="{{ url('/') }}" class="" data-target="">
                    <span data-i18n="Edit">Bearbeiten</span>
                        </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            {{-- Menu Lembur --}}
            <li>
              <a class="dropdown-menu" href="javascript:void(0)" data-target="TemplatesDropdown">
                <i class="material-icons">settings_input_antenna</i>
                <span>
                  <span class="dropdown-title" data-i18n="DataLembur">Data Lembur</span>
                  <i class="material-icons right">keyboard_arrow_down</i>
                </span>
              </a>
              <ul class="dropdown-content dropdown-horizontal-list" id="TemplatesDropdown">
                <li class="" data-menu="">
                  <a href="{{ url('/') }}" class=""
                  data-target="">
                    <span data-i18n="Modern Menu">Buat Laporan</span>
                  </a>
                </li>
                <li class="" data-menu="">
                  <a href="{{ url('/') }}" class=""
                  data-target="">
                    <span data-i18n="Navbar Dark">Laporan Tervalidasi</span>
                  </a>
                </li>
                <li class="" data-menu="">
                  <a href="{{ url('/') }}" class="" data-target="">
                    <span data-i18n="Gradient Menu">Laporan Lembur All</span>
                  </a>
                </li>
              </ul>
            </li>
            {{-- Master Data --}}
            <li>
              <a class="dropdown-menu" href="javascript:void(0)" data-target="AppsDropdown">
                <i class="material-icons">settings</i>
                <span>
                  <span class="dropdown-title" data-i18n="MasterData">Master Data</span>
                  <i class="material-icons right">keyboard_arrow_down</i>
                </span>
              </a>
              <ul class="dropdown-content dropdown-horizontal-list" id="AppsDropdown">
                <li class="" data-menu="">
                  <a href="{{ route('pejabat') }}" class=""
                  data-target="">
                    <span data-i18n="Modern Menu">Data Pejabat</span>
                  </a>
                </li>
                <li class="" data-menu="">
                  <a href="{{ url('/') }}" class=""
                  data-target="">
                    <span data-i18n="Navbar Dark">Data Pegawai</span>
                  </a>
                </li>
                <li class="" data-menu="">
                  <a href="{{ url('/') }}" class="" data-target="">
                    <span data-i18n="Gradient Menu">Master Sertifikat</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <!-- END: Horizontal nav start-->
    </div>  
  </header>