@extends('layouts.blogadmin')

@section('content')
    <link rel="stylesheet" href="{{asset('/css/blogadmin/blogadmin.css')}}">
    <div id="blogadmin" class='row container-fluid gx4'>
        <?php
            echo view('portfoadmin.sidebar',['views'=>$views,'ldview'=>$ldview]);
            if($ldview == 'demandes'){
                echo view('portfoadmin.view',['ldview'=>$ldview,'demandes'=>$demandes]);
            }
            elseif($ldview == 'messages'){
                echo view('portfoadmin.view',['ldview'=>$ldview,'messages'=>$messages]);
            }
            else{
                echo view('portfoadmin.view',['ldview'=>$ldview]);
            }
        ?>
</div>
@endsection
