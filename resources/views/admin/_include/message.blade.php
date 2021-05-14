@if(Session::has('message'))
    <div>
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    </div>
@endif