<section>
    <nav class="navbar navbar-expand-lg navbar-light"
         style="background-color: #c0c0c0;position: fixed;width: 100%;z-index: 1000;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img style="padding-left: 1em;" src="{{ asset('resFiles/logoTP.png') }}"
                                                  width="30%" height="30%"/></a>


        </div>
        @if(Auth::user()->is_super_admin==1)
            <span class="badge bg-primary" style="font-size: 13px;margin-right: 20px">Super Admin</span>
        @elseif(Auth::user()->is_admin==1 and Auth::user()->is_super_admin==0)
            <span class="badge bg-primary" style="font-size: 13px;margin-right: 20px">Admin</span>
        @endif

        <a class="nav-link" href="{{ route('logout')}}" style="text-decoration: none">
            <span class="badge bg-warning text-dark" style="font-size: 13px;margin-right: 20px">Log Out</span>
        </a>
    </nav>


</section>
