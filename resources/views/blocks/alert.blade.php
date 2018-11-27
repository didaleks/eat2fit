@if(session()->has('message'))

    <div class="pink-bg text-center pt-10 pb-10">
        {{ session()->get('message') }}
    </div>

@endif