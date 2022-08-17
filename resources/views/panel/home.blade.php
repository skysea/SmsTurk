@if(auth()->user() && auth()->user()->isAdmin == 'E')
    Admin Panel
@else
    Müşteri Paneli
@endif
