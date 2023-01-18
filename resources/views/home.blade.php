
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}" />
    <?php
        echo  isset($_GET['success_demande'])? "<script>alert('votre demande a ete enregistree avec success, vous serez contacte sous peu');document.location.href='/'</script>":""
    ?>
    <?php
        echo  isset($_GET['success_message'])? "<script>alert('votre message a ete envoye, merci de m\'avoir contacte');document.location.href='/'</script>":""
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