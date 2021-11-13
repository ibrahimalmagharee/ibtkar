<nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                            class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{route('admin.dashboard')}}">
                        <img class="brand-logo" alt="modern admin logo"
                             src="{{asset('assets/front/images/logo2.png')}}">
                        <h3 class="brand-text">ابتكار</h3>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                            class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                              href="#"><i class="ft-menu"></i></a></li>

                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">{{__('admin/sidebar.hello')}}
                  <span
                      class="user-name text-bold-700"> {{auth('admin') -> user() -> name}}</span>
                </span>
                            <span class="avatar avatar-online">
                  <img style="height: 35px;" src="{{auth('admin') -> user() ->getImage(auth('admin') -> user() ->image )}}"
                       alt="avatar"><i></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{route('edit.profile')}}"><i
                                    class="ft-user"></i>{{__('admin/sidebar.edit_profile')}} </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('admin.logout')}}"><i class="ft-power"></i>
                                {{__('admin/sidebar.logout')}}
                                 </a>
                        </div>
                    </li>

{{--                    <li class="dropdown dropdown-user nav-item">--}}
{{--                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">--}}
{{--                <span class="mr-1">--}}
{{--                  <span--}}
{{--                      class="user-name text-bold-700" style="top: 25px; position: absolute"> <i class="flag-icon  @if(app() -> getLocale() == 'en') flag-icon-us @elseif(app() -> getLocale() =='ar') flag-icon-sa @endif"></i></span>--}}
{{--                </span>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu dropdown-menu-right">--}}
{{--                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"--}}
{{--                                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">--}}
{{--                                  <i class="flag-icon @if($localeCode == 'en') flag-icon-us @elseif($localeCode =='ar') flag-icon-sa @endif"></i>--}}
{{--                                    @if($localeCode == 'en')--}}
{{--                                        English--}}
{{--                                        @elseif($localeCode == 'ar')--}}
{{--                                        العربية--}}
{{--                                    @endif--}}
{{--                                </a>--}}
{{--                                @if(!$loop ->last)--}}
{{--                                    <div class="dropdown-divider"></div>--}}
{{--                                @endif--}}

{{--                            @endforeach--}}

{{--                        </div>--}}
{{--                    </li>--}}

                </ul>
            </div>
        </div>
    </div>
</nav>
