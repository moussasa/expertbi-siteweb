@extends('layout.app')
@section('Titre', 'ExpertBi SARL')

@section('body')


<section id="colored" class="page-header page-header-custom-background"
style="padding: 10px;border-radius: 10px;margin: 10px">     <div class="container">
            <ul class="breadcrumb breadcrumb-valign-mid">
                <li><a href="{{ route('accueil') }}">Accueil</a></li>
                <li class="active">Contact</li>
            </ul>
            <div class="row">

                <div class="col-md-12" style="margin-top: 5px;">
                    <h1>Contact</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div>
            Vous avez un projet ou une question ? Contactez-nous dès aujourd'hui et découvrez comment nous pouvons vous
            aider à prendre des décisions efficaces et efficientes.
        </div>
        <div class="row">
            <div class="col-md-6">

                <h2 class="mb-sm mt-sm little-title top"><strong>Contactez</strong>-nous</h2>
                <form id="contactForm"  method="POST">
                    <input type="hidden" name="valid_form" value="valider">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label left">Votre nom complet *</label>
                                <input type="text" value="" required autocomplete="off" class="form-control" name="nom"
                                    placeholder="Votre nom" id="name">
                            </div>
                        </div>

                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Votre téléphone *</label>
                                <input type="text" class="form-control" required autocomplete="off" name="telephone"
                                    placeholder="Numéro de téléphone" id="telephone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label top">Votre adresse email *</label>
                                <input type="text" class="form-control" name="email" id="email" required autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Votre Message *</label>
                                <textarea rows="10" class="form-control" name="message" id="message" required autocomplete="off"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>* Champs obligatoires</p>
                            <input type="submit" value="Envoyer" class="btn btn-primary btn-lg mb-xlg">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">

                <div class="little-title-little top mt-lg" style="margin-bottom: 2vh"><strong>Nos experts</strong> sont à votre disposition
                </div>
                <p class="text-justify">Vous souhaitez améliorer votre système d'information, obtenir des analyses de données précises, réaliser un audit de vos processus ou obtenir des conseils en gestion et en stratégie.Laissez-nous vos
                    coordonnées ou appelez-nous au <strong>+223 62 84 55 92</strong>.</p>
                <hr>

                <div class="little-title top"><strong>ExpertBi</strong></div>
                <ul class="list list-icons list-icons-style-3 mt-xlg">
                    <li><i class="fa fa-phone"></i> <strong>Téléphone:</strong> <span style="color:#0772b7">+223 62 84 55 92</span></li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a
                            href="mailto:expertbi18@gmail.com">expertbi18@gmail.com</a></li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p> <strong>ACI 2000</strong> Bamako (MALI)<br>
                        </p>
                    </li>
                </ul>

                <hr>

                <div class="little-title top">Nos <strong>Horaires</strong></div>
                <ul class="list list-icons list-dark mt-xlg">
                    <li><i class="fa fa-clock-o"></i> Lundi - Vendredi : de 08h00 à 16h00</li>
                </ul>

            </div>

        </div>
        <div class="row">
            <div class="col-md-12 mt-xl">
                <h2 class="little-title-little top">Pas encore client ? Contactez l'un de nos conseillers par téléphone</h2>
                <p>Vous avez la possibilité de joindre un conseiller ExpertBI même si vous n'êtes pas encore client. Nos conseillers sont spécialisés dans les systèmes d'information, l'analyse de données, et les conseils en gestion.</p>
                <p>Pour toute question concernant nos services, contactez-nous au +223 62 84 55 92 .
                <p>Bénéficiez des conseils de nos experts afin d’optimiser vos systèmes d'information et vos processus décisionnels. Profitez des dernières innovations en matière d'analyse de données et de gestion pour améliorer la performance de votre entreprise.</p>
            </div>
        </div>

        {{-- <div class="row">
            <div class="col-md-12 mt-xl">
                <h2 class="mt-xl heading-primary">Pas encore client ? Contacter l'un de nos conseillers par téléphone
                </h2>
                <p>Vous avez la possibilité de joindre un conseiller Altassura même si vous n'êtes pas encore client.
                    Sachez que nos conseillers sont spécialisés en affacturage mais aussi dans la gestion du poste
                    clients : assurance crédit, financement, caution .
                    Demandez votre devis de factoring en ligne gratuitement et sans engagement.</p>
                <p>Pour toute question concernant une offre d'affacturage, contactez-nous au +223 62 84 55 92 (prix d’un
                    appel local selon opérateur, du lundi au vendredi de 9h00 à 19h).
                    Vous pouvez également faire une <a href="../souscription/index.html"
                        title="Demande de devis d'affacturage ou de factoring en ligne">demande de devis d'affacturage
                        en ligne</a>.
                    Si vous avez une question ou si vous souhaitez un devis en matière d'affacturage ou financement pour
                    votre entreprise, appelez-nous au +223 62 84 55 92 (prix d’un appel local selon opérateur, du lundi au
                    vendredi de 9h00 à 19h).</p>
                <p>Bénéficiez des conseils de nos experts afin d’optimiser vos conditions contractuelles et financières.
                    Profitez des dernières innovations au niveau des contrats d'affacturage ou d'assurance-crfédit pour
                    optimiser votre poste clients.</p>
            </div>
        </div> --}}

    </div>



    </div>

@endsection
