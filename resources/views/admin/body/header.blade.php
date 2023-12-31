<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src=" {{ asset('logo/logo.png') }}" alt="logo-sm" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src=" {{ asset('logo/logo.png') }}" alt="logo-dark" height="20">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src=" {{ asset('logo/logo.png') }}" alt="logo-sm-light" height="70">
                    </span>
                    <span class="logo-lg">
                        <img src=" {{ asset('logo/logo.png') }}" alt="logo-light" height="70">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>    
        </div>

        <div class="d-flex"> 
            {{-- assistant button --}}
            <div class="d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" id="assistant">
                    <i class="ri-apps-2-line"></i>
                </button>
            </div>
                 
            {{-- <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="ri-apps-2-line"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="px-lg-2">
                        <div class="row g-0">
                           
                            <div class="mt-3 mb-3 text-center">
                               
                                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>
                                    Employee's Present Today</span>
                            </div>
                            <hr>
                            <div class="col border rounded border-success me-1 mb-1">
                                <a class="dropdown-icon-item" href="#">
                                    <img src=" {{ asset('backend/assets/images/brands/github.png') }}"
                                        alt="Github">
                                    <span><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>Employee-1</span>
                                </a>
                            </div>
                            <div class="col border rounded border-success me-1 mb-1">
                                <a class="dropdown-icon-item" href="#">
                                    <img src=" {{ asset('backend/assets/images/brands/bitbucket.png') }}"
                                        alt="bitbucket">
                                    <span><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>Employee-2</span>
                                </a>
                            </div>
                            <div class="col border rounded border-success me-1 mb-1">
                                <a class="dropdown-icon-item" href="#">
                                    <img src=" {{ asset('backend/assets/images/brands/dribbble.png') }}"
                                        alt="dribbble">
                                    <span><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>Employee-3</span>
                                </a>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col border rounded border-success me-1 mb-1">
                                <a class="dropdown-icon-item" href="#">
                                    <img src=" {{ asset('backend/assets/images/brands/dropbox.png') }}"
                                        alt="dropbox">
                                    <span><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>Employee-4</span>
                                </a>
                            </div>
                            <div class="col border rounded border-success me-1 mb-1">
                                <a class="dropdown-icon-item" href="#">
                                    <img src=" {{ asset('backend/assets/images/brands/mail_chimp.png') }}"
                                        alt="mail_chimp">
                                    <span><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>Employee-5</span>
                                </a>
                            </div>
                            <div class="col border rounded border-success me-1 mb-1">
                                <a class="dropdown-icon-item" href="#">
                                    <img src=" {{ asset('backend/assets/images/brands/slack.png') }}" alt="slack">
                                    <span><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>Employee-6</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ri-notification-3-line"></i>
                    <span class="noti-dot"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Notifications </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small"> View All</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">

                        {{-- <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="ri-shopping-cart-line"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">Your order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src=" {{ asset('backend/assets/images/users/avatar-3.jpg') }}"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="mb-1">James Lemire</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">It will seem like simplified English.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a> --}}

                        @if (isset($notifs))
                            <a href="{{ route('inventory.product.outofstocks') }}" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-danger rounded-circle font-size-16">
                                            <i class="ri-close-circle-line"></i> <!-- Use a different icon for out of stock -->
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mb-1">{{ count($notifs)}} Product(s) Out of Stock</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">
                                                Your product
                                                @foreach ($notifs as $notif)
                                                    <span class="text-danger"><b>{{ $notif->product_name }}.</b></span><br>
                                                @endforeach 
                                                is now out of stock
                                            </p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 
                                            @php
                                                echo $currentDateTime = date('H:i:s'); // Format: HH:MM:SS    
                                            @endphp <!-- Replace with your actual timestamp --></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endif
                        

                        {{-- <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src=" {{ asset('backend/assets/images/users/avatar-4.jpg') }}"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="mb-1">Salena Layfield</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">As a skeptical Cambridge friend of mine occidental.
                                        </p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a> --}}

                    </div>
                    <div class="p-2 border-top">
                        <div class="d-grid">
                            <a class="btn btn-sm btn-link font-size-14 text-center" href="{{ route('inventory.product.outofstocks') }}">
                                <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ asset('logo/logo.png') }}" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="ri-user-line align-middle me-1"></i>
                        Profile</a>
                    <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> My
                        Wallet</a>
                    <a class="dropdown-item d-block" href="#"><span
                            class="badge bg-success float-end mt-1">11</span><i
                            class="ri-settings-2-line align-middle me-1"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle me-1"></i>
                        Lock screen</a>
                    <div class="dropdown-divider"></div>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();"><i
                            class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                
                    </form>
                    
                </div>
            </div>

        </div>
    </div>
</header>

