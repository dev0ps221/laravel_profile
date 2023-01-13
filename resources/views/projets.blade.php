<link rel="stylesheet" href="{{URL::asset("css/projets.css")}}"/>
<section id="projets">
    <section id="github">
        <h2>
            Retrouvez moi sur <a href="https://github.com/dev0ps221"> github </a>
        </h2>
        <em>
            Voici une liste exhaustive de projets publics sur lesquels je travaille <a href="https://github.com/dev0ps221">github</a>
        </em>
        <div class="data">
            
        </div>
                    
                        
        <script>
            const getGitRepos = new XMLHttpRequest()
            function appendNewRepo(data,target){
                console.log(data)
                const {name,language,owner,description,fork,html_url} = data
                if(!fork){
                    const repoElem = document.createElement('section')
                    repoElem.classList.add('github-repo')
                    const repoLabel = document.createElement('h2')
                    repoLabel.innerText = name
                    repoElem.appendChild(repoLabel)
                    
                    const repoDescription = document.createElement('em')
                    repoDescription.innerText = description
                    repoElem.appendChild(repoDescription)
    
                    const repoDetails = document.createElement('div')
                    const repolang = document.createElement('span')
                    repolang.innerHTML = `<em>langage de programmation : </em>${language}`
                    if(language){
                        repoDetails.appendChild(repolang)
                    }
                    repoElem.appendChild(repoDetails)
    
                    const repolinkcontainer = document.createElement('em')
                    const repolink = document.createElement('a')
                    repolink.href = html_url
                    repolink.innerText = 'visiter'
                    repolinkcontainer.appendChild(repolink)
                    repoElem.appendChild(repolinkcontainer)
    
                    target.appendChild(repoElem)
                }
            }
            getGitRepos.open(
                'get','https://api.github.com/users/dev0ps221/repos'
            )
            getGitRepos.onload = ()=>{
                if(getGitRepos.status==200){
                    const repos = JSON.parse(getGitRepos.response)
                    if(repos && repos.length){
                        const reposlist = document.querySelector(
                            '#github .data'
                        )
                        repos.map(
                            repo=>{
                                appendNewRepo(repo,reposlist)
                            }
                        )
                    }
                }else{
                    alert('jap')
                }
            }
            getGitRepos.send()
        </script>
    </section>
</section>