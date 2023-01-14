<link rel="stylesheet" href="{{URL::asset("css/top.css")}}"/>
<nav>
    <a href='/' id="headline">
        <h1 id="logobox">
            El Hadji Seybatou Mbengue
        </h1>
        <h4>
            Developpeur et feru de technologies
        </h4>
    </a>
    <div class="list">
        <a href="/">moi</a>
        <a href="/projets">mes projets</a>
        <a href="/blog">posts</a>
        <a href="/contactez-moi">contactez moi</a>
    </div>
    <div id="showhide" onClick="switchMenuVisibility(event)">
        <span class='la la-equals'></span>
    </div>
</nav>
{{view('mobilenav')}}
<script>
    function switchMenuVisibility(e){
        const target = e.currentTarget
        const isvisible = (list)=>{
            return list.classList.contains('visible')
        }
        const list = document.querySelector('#mobilenav .list');
        const wasvisible = isvisible(list)
        if(!wasvisible){
            target.querySelector('.la').classList.remove('la-equals')
            target.querySelector('.la').classList.add('la-times')
        }else{
            target.querySelector('.la').classList.add('la-equals')
            target.querySelector('.la').classList.remove('la-times')
        }
        list.classList[wasvisible?'remove':'add']('visible')
        setTimeout((list,wasvisible,target)=>{
            if(!wasvisible){
                list.classList.remove('visible')
                target.querySelector('.la').classList.add('la-equals')
                target.querySelector('.la').classList.remove('la-times')
            }
        },5000,list,wasvisible,target)
    }
</script>