<div class="modal fade" id="contributeModal" tabindex="-1" aria-labelledby="contributeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="text-align: center">
                <h3 class="modal-title" id="contributeModalLabel" style="color: black; text-align: center"><span style="color: #0A954E">Atha</span>Hitha</h3>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @auth
                    <h5 class="modal-title" id="contributeModalLabel" style="color: black">How do you wish to continue?</h5>
                    <p>If you're willing to contribute, please choose an option:</p>
                    <a href="{{route('donateGoods')}}" class="btn btn-success">Goods</a>
                    <a href="{{route('donateMoney')}}" class="btn btn-primary">Money</a>
                @else
                    <h5 class="modal-title" id="contributeModalLabel" style="color: black">Sorry, you can't contribute!</h5>
                    <p style="color: #1a1e21">Sorry, You are logged in, please <a href="{{ route('userLogin') }}">login</a> or <a href="{{ route('register') }}">register</a> to proceed.</p>
                @endauth
            </div>
        </div>
    </div>
</div>
