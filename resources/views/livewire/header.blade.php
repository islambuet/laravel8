<header id="system_top_bar" class="d-print-none">
    <!-- LOGO -->
    <div id="logo_container" class="d-none d-lg-block d-xl-block float-left">
        <img style="height: 25px;" src="http://shaiful.me/wp-content/uploads/2015/11/cropped-20151108_1558521.jpg" alt="">
    </div>
    <!-- Left Sidebar handler -->
    <button id="handler_left_sidebar" class="handler-sidebar float-left">
        <i class="fe-menu"></i>
    </button>
    <!-- Right Sidebar handler -->
    <button id="handler_right_sidebar" class="handler-sidebar float-right">
        <i class="fe-bell"></i>
    </button>    
    <!-- Users options -->
    <ul class="list-unstyled float-right mb-0">
        <li class="dropdown">
            <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">{{__('Change Language')}}</a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('login') }}" class="dropdown-item notify-item">
                    <span>English</span>
                </a>
                <a href="{{ route('register') }}" class="dropdown-item notify-item">
                    <span>বাংলা</span>
                </a>
            </div>
        </li>
        <li class="dropdown">
            <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                @auth
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <img src="{{ Auth::user()->profile_photo_url }}"  alt="{{ Auth::user()->name_en }}" class="rounded-circle" style="height: 32px;width: 32px;"/>
                    @else
                            
                    @endif
                    <span class="pro-user-name ml-1">{{ Auth::user()['name_'.'en'] }}</span>
                    
                @else
                <img src="{{ asset('assets/mytheme/images/avatar-1.jpg') }}"  alt="user-image" class="rounded-circle" style="height: 32px;width: 32px;"/>
                <span class="pro-user-name ml-1">{{ __('Guest') }}</span>
                @endauth    
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                @auth
                <!-- Authentication -->
                <a href="{{ route('dashboard') }}" class="dropdown-item notify-item">
                    <span>Profile Settings</span>
                </a>
                <div class="dropdown-item notify-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                            {{ __('Logout') }}
                        </x-jet-dropdown-link>
                    </form>
                </div>
                @else
                <a href="{{ route('login') }}" class="dropdown-item notify-item">
                    <span>Login</span>
                </a>
                <a href="{{ route('register') }}" class="dropdown-item notify-item">
                    <span>Registration</span>
                </a>
                @endauth 

            </div>
        </li>
    </ul>
</header>