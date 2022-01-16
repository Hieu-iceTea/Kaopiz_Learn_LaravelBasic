@if(session('notifications'))

    @foreach(session('notifications') as $notification)

        <div class="alert alert-success alert-dismissible fade show font-weight-normal mx-5 mt-5">
            {{ $notification }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endforeach

@endif
