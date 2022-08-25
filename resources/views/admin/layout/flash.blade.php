@if(Session::has('error'))
    <script>
        let myToasteur = new Toasteur("top-center");
        myToasteur.success('{{Session::get('error')}}', 'Hata', () => {})
    </script>


@endif
@if(Session::has('success'))
    <script>
        let myToasteur = new Toasteur("top-center");
        myToasteur.success('{{Session::get('success')}}', 'Başarılı', () => {})
    </script>


@endif
