<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('admin')}}" class="nav-link">Anasayfa</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('admin.profile')}}" class="nav-link">Profil</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('logouts')}}" class="nav-link">Çıkış</a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('assets')}}/admin/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{route('admin.message')}}" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>


        </ul>
        <div class="btn-group">
            <button type="button" class="btn btn-default">{{\Illuminate\Support\Facades\Auth::user()->name}}</button>
            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                <span class="sr-only"></span>
            </button>
            <div class="dropdown-menu" role="menu" style="">
                <a class="dropdown-item" href="{{route('admin.profile')}}">Profil</a>
                <a class="dropdown-item" href="{{route('admin.category')}}">Kategori</a>
                <a class="dropdown-item" href="{{route('admin.message')}}">Mesajlar</a>
                <a class="dropdown-item" href="{{route('admin.books')}}">Kitaplar</a>
                <a class="dropdown-item" href="{{route('admin.duyuru')}}">Duyurular</a>
                <a class="dropdown-item" href="{{route('admin.users')}}">Kullanıcılar</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('logouts')}}">Çıkış</a>
            </div>
        </div>
    </nav>
</div>
