<link rel="stylesheet" href="{{URL::asset('/css/contactmessage.css')}}">
<section id="contactmessage">
    <h4>
        envoyez moi un message
    </h4>
    <form method='post' action='/message/nouveau'>
        @csrf
        <div class="field">
            <label for="nom_complet">
                votre nom_complet
            </label>
            <input type="text" name='nom_complet'  placeholder='nom_complet'>
        </div>
        <div class="field">
            <label for="adresse_email">
                adresse e-mail
            </label>
            <input type="text" name='email'  placeholder='email'>
        </div>
        <div class="field">
            <label for="telephone">
                votre telephone
            </label>
            <input type="number" name='telephone'  placeholder='telephone'>
        </div>
        <div class="field">
            <label for="message">
                ecrivez moi
            </label>
            <textarea name='message' placeholder='ecrivez moi'></textarea>
        </div>
        <div class="field">
            <button>
                envoyer
            </button>
        </div>
    </form>
</section>
<script src="{{URL::asset('/js/contactmessage.js')}}"></script>