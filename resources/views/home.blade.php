
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}" />
    <?php
        echo  isset($_GET['success_demande'])? "<script>alert('votre demande a ete enregistree avec success, vous serez contacte sous peu')</script>":""
    ?>
    {{
        view('shortabout')
    }}
    {{
        view('techstack')
    }}
    {{
        view('services')
    }}