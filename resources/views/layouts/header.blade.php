 {{-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="/css/bootstrap-notifications.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-notifications@1.0.3/dist/stylesheets/bootstrap-notifications.min.css" rel="stylesheet">
    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{asset('assets/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('assets/images/logo-dark.png') }}" alt="" height="17">
                        </span>
                    </a>
    
                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{asset('assets/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('assets/images/logo-light.png') }}" alt="" height="18">
                        </span>
                    </a>
                </div>
    
                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                    <i class="mdi mdi-menu"></i>
                </button>
    
            </div>
            <div class="d-flex">
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @php
                            $notifications =notifiction(); 
                            $messages = message(); 
                        @endphp
                        @if(!is_null($notifications))
                        @foreach($notifications as $key)
                        <i class="mdi mdi-bell-outline"></i>
                        @if($key->unread)
                        <span class="badge bg-danger rounded-pill pending">{{ $key->unread }}</span>
                        @endif
                        @endforeach 
                        @endif
                    </button>
                
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    @foreach($notifications as $key)
                                    @if($key->unread)
                                    <h5 class="m-0 font-size-16"> Notifications ({{$key->unread}}) </h5>
                                    @endif
                                    @endforeach 
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                            @foreach($messages as $message)
                            <a href="#" class="text-reset notification-item" data-id="{{$message->id}}">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-xs">
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="mdi mdi-cart-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        @foreach($notifications as $key)
                                        <h6 class="mb-1">{{$key->name}}</h6>
                                        @endforeach 
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">{{$message->message}}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach 
                        </div>
                       
    
    
                        {{-- <div class="p-2 border-top">
                            <div class="d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                    View all
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{asset('assets/images/users/user-4.jpg') }}"
                            alt="Header Avatar">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 align-middle me-1"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="{{route('logout')}}"><i class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> Logout</a>
                    </div>
                </div>
    
            </div>
        </div>
    </header>
    
    