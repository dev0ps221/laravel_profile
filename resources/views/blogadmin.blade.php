@extends('layouts.blogadmin')

@section('content')
    <link rel="stylesheet" href="{{asset('/css/blogadmin/blogadmin.css')}}">
    <div id="blogadmin" class='row container-fluid gx4'>
        <?php
            echo view('blogadmin.sidebar',['views'=>$views,'ldview'=>$ldview]);
            if($ldview == 'liste'){
                echo view('blogadmin.view',['ldview'=>$ldview,'articles'=>$articles]);
            }
            elseif($ldview == 'modifier'){
                echo view('blogadmin.view',['ldview'=>$ldview,'article'=>$article]);
            }
            else{
                echo view('blogadmin.view',['ldview'=>$ldview]);
            }
        ?>
</div>
@endsection
