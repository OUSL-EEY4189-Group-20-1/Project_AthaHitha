<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var url = window.location.href;
        $('.sidebar a').filter(function() {
            return this.href === url;
        }).addClass('active');
    });
</script>

<div class="sidebar" style="margin-top: 63px">
    <div>
        <div>
            <div><a href="{{ route("admin.home") }}">About</a></div>
            <div><a href="{{ route("admin.allProjects") }}">Manage Projects</a></div>
            <div><a href="{{ route("admin.VolunteerInfo") }}">Volunteer Details</a></div>
            <div><a href="{{ route("admin.manageUsers") }}">Manage Users</a></div>
            @if(Auth::user()->is_super_admin == 1)
                <div><a href="{{ route("admin.manage") }}">Manage Admins</a></div>
            @endif
            <div><a href="{{route("admin.moneyDonationInfo")}}">Money Donations</a></div>
            <div><a href="{{route("admin.GoodDonationInfo")}}">Good Donations</a></div>

        </div>
    </div>
</div>
