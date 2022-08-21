@if(Session::has('error'))
    <script>
        let myToasteur = new Toasteur("top-center");
        myToasteur.success('{{Session::get('error')}}', 'Başarılı', () => {})
    </script>


@endif
@if(Session::has('success'))
    <script>
        let myToasteur = new Toasteur("top-center");
        myToasteur.success('{{Session::get('success')}}', 'Başarılı', () => {})
    </script>


@endif
