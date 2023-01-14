<section id="servicesbox">

    <section id="services">
        <h2>
            Les services que je propose actuellement
        </h2>
        <ul id="serviceslist">
            <li class="service">
                <h4>
                    <span class="la la-connectdevelop"></span>
                    developpement de site web
                </h4>
            </li>
            <li class="service">
                <h4>
                    <span class="la la-code"></span>
                    integration de fonctionnalites
                </h4>
            </li>
            <li class="service">
                <h4>
                    <span class="la la-code"></span>
                    revue de code
                </h4>
            </li>
            <li class="service">
                <h4>
                    <span class="la la-code"></span>
                    developpement d'applications
                </h4>
            </li>
            <li class="service">
                <h4>
                    <span class="la la-book"></span>
                    cours de renforcement en programmation
                </h4>
            </li>
        </ul>
    </section>
    <section id="actionsservices">
        <h1>
            LOUEZ MES SERVICES
        </h1>
        <em>
            Remplissez ce formulaire et je vous fais une offre dans les 72h qui suivent
        </em>
        <form id="demander-offre" method="post" onSubmit="event.preventDefault();demandeoffre(event.currentTarget)">
            <div class="field">
                <label for="nom_complet">
                    Votre nom complet
                </label>
                <input required="" type="text" id="nom_complet" name="nom_complet">
            </div>
            <div class="field">
                <label for="telephone">
                    Votre numéro de téléphone
                </label>
                <input required="" type="number" id="telephone" name="telephone">
            </div>
            <div class="field">
                <label for="compte">
                    Pour qui faites vous la demande
                </label>
                <select required="" id="compte" name="compte">
                    <option value="self">Moi-meme</option>
                    <option value="company">Mon|Une entreprise</option>
                    <option value="other">Quelqu'un d'autre</option>
                </select>
            </div>
            <div class="field">
                <label for="besoin">
                    Besoin
                </label>
                <select required="" name="besoin" id="besoin">
                    <option value="siteweb">
                        Site web
                    </option>
                    <option value="review">
                        Une revue de code
                    </option>
                    <option value="integration">
                        Integrer des fonctionnalites a un projet existant
                    </option>
                    <option value="app">
                        Application
                    </option>
                    <option value="cours">
                        Formation | Mise à niveau
                    </option>
                </select>
            </div>
            <div class="field">
                <label for="description_demande">
                    Faites une description détaillée de votre demande en quelques lignes..
                </label>
                <textarea type="text" id="description_demande" name="description_demande" placeholder="Description de la demande.."></textarea>
            </div>
            <div class="field">
                <label for="reclamer_offre">
                    Vous y êtes presque, cliquez sur réclamer une offre !
                </label>
                <button id="reclamer_offre" name="reclamer_offre">
                    Reclamer une offre
                </button>
            </div>
        </form>
    </section>
</section>

<script src="{{URL::asset('/js/demandeoffre.js')}}"></script>