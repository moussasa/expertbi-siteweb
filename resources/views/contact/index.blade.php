@extends('layout.app')
@section('Titre', 'ExpertBi SARL')

@section('body')



    <style>
        .form-control:focus {
            border-color: #66afe9;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(102, 175, 233, 0.6);
            outline: 0 none;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#contactForm').bootstrapValidator({
                // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    nom: {
                        validators: {
                            notEmpty: {
                                message: 'Votre Nom est obligatoire'
                            },
                            stringLength: {
                                max: 100,
                                message: 'Votre Nom ne doit pas dépasser 100 caractères de long'
                            },
                            regexp: {
                                regexp: /^[a-z \-A-ZÀ-ÿ]+$/,
                                message: 'Votre Nom doit être alphabétique'
                            },
                            different: {
                                field: 'prenom',
                                message: 'Votre Nom et votre Prénom ne peuvent pas être identique'
                            }
                        }
                    },
                    prenom: {
                        validators: {
                            notEmpty: {
                                message: 'Votre Prénom est obligatoire'
                            },
                            stringLength: {
                                max: 100,
                                message: 'Votre Prénom ne doit pas dépasser 100 caractères de long'
                            },
                            regexp: {
                                regexp: /^[a-z \-A-ZÀ-ÿ]+$/,
                                message: 'Votre Prénom doit être alphabétique'
                            },
                            different: {
                                field: 'nom',
                                message: 'Votre Nom et votre Prénom ne peuvent pas être identique'
                            }
                        }
                    },
                    societe: {
                        validators: {
                            notEmpty: {
                                message: 'Le nom de votre société est obligatoire'
                            },
                            stringLength: {
                                min: 2,
                                max: 100,
                                message: 'Le nom de votre société doit avoir au minimum 2 caractères et ne doit pas dépasser 100 caractères'
                            }
                        }
                    },
                    siren: {
                        validators: {
                            regexp: {
                                regexp: /^[0-9]{3}?[0-9]{3}?[0-9]{3}$/i,
                                message: 'Le numéro de siren doit être valide'
                            }
                        }
                    },
                    email: {
                        validators: {
                            regexp: {
                                regexp: /^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/i,
                                message: 'Votre email doit être valide.'
                            }
                        }
                    },
                    telephone: {
                        validators: {
                            notEmpty: {
                                message: 'Votre numéro de téléphone est obligatoire'
                            },
                            stringLength: {
                                min: 2,
                                max: 100,
                                message: 'Votre numéro de téléphone doit avoir au minimum 2 caractères et ne doit pas dépasser 20 caractères de long'
                            }
                        }
                    },
                    sujet: {
                        validators: {
                            stringLength: {
                                min: 2,
                                max: 100,
                                message: 'Votre message doit avoir au minimum 2 caractères et ne doit pas dépasser 100 caractères de long'
                            }
                        }
                    },
                    message: {
                        validators: {
                            stringLength: {
                                min: 2,
                                max: 500,
                                message: 'Votre message doit avoir au minimum 2 caractères et ne doit pas dépasser 500 caractères de long'
                            }
                        }
                    }
                }
            });
        });
    </script>
    <section id="colored" class="page-header page-header-custom-background" style="padding: 10px;border-radius: 10px;">
        <div class="container">
            <ul class="breadcrumb breadcrumb-valign-mid">
                <li><a href="{{ route('accueil') }}">Accueil</a></li>
                <li class="active">Contact</li>
            </ul>
            <div class="row">
                <br>
                <br>
                <div class="col-md-12">
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

                <h2 class="mb-sm mt-sm"><strong>Contactez</strong>-nous</h2>
                <form id="contactForm"  method="POST">
                    <input type="hidden" name="valid_form" value="valider">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Votre nom *</label>
                                <input type="text" value="" class="form-control" name="nom"
                                    placeholder="Votre nom" id="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Votre prénom *</label>
                                <input type="text" class="form-control" name="prenom" placeholder="Votre prénom"
                                    id="firstname">
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Votre téléphone *</label>
                                <input type="text" class="form-control" name="telephone"
                                    placeholder="Numéro de téléphone" id="telephone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Votre adresse email</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Société *</label>
                                <input type="text" class="form-control" name="societe"
                                    placeholder="Nom de votre entreprise" id="societe">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Objet de la demande</label>
                                <input type="text" value="" maxlength="100" class="form-control" name="sujet"
                                    id="sujet">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Votre Message</label>
                                <textarea rows="10" class="form-control" name="message" id="message"></textarea>
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

                <div class="title-sibebar heading-primary mt-lg"><strong>Nos experts</strong> sont à votre disposition
                </div>
                <p class="text-justify">Vous souhaitez souscrire un contrat d'affacturage, obtenir du financement,
                    effectuer un audit ou avoir des renseignements sur nos solutions de factoring. Laissez-nous vos
                    coordonnées ou appelez-nous au <strong>01 84 21 85 40</strong>.</p>
                <hr>

                <div class="title-sibebar heading-primary"><strong>Altassura</strong></div>
                <ul class="list list-icons list-icons-style-3 mt-xlg">
                    <li><i class="fa fa-phone"></i> <strong>Téléphone:</strong> <span style="color:#0772b7">01 84 21
                            85 40</span></li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a
                            href="mailto:info@affacturage.fr">info@affacturage.fr</a></li>
                    <li><i class="fa fa-building-o"></i>
                        <p> <strong>Siren</strong> : 497 784 454<br>
                            <strong>N° ORIAS:</strong> 08042408 RCS Nice 497 784 454
                        </p>
                    </li>
                </ul>

                <hr>

                <div class="title-sibebar heading-primary">Nos <strong>Horaires</strong></div>
                <ul class="list list-icons list-dark mt-xlg">
                    <li><i class="fa fa-clock-o"></i> Lundi - Vendredi : de 9h00 à 19h00</li>
                </ul>

            </div>

        </div>

        <div class="row">
            <h2 class="mt-xl heading-primary">Déjà client ? Contacter directement nos experts par téléphone</h2>
            <div class="col-md-8 mt-xl">
                <p>Vous êtes déjà client auprès d'Altassura ? Vous pouvez nous contacter pour obtenir une assistance ou
                    des informations sur votre contrat d'affacturage existant.</p>
                <p>Pour tout changement relatif à votre contrat d'affacturage (modification, suppression, consultation
                    de vos contrats ou demandes d'information détaillées ou complémentaires par rapport aux solutions de
                    financement), vous pouvez contacter par téléphone à ce numéro depuis la France ou l'étranger : +33 1
                    84 21 85 40 (numéro non surtaxé, coût selon opérateur, dès 9h00 et jusqu’à 19h en semaine). Un
                    numéro unique pour joindre tous nos services</p>
                <p>L'attachement envers nos clients et nos partenaires fait de Altassura un courtier unique sur le
                    marché de l'affacturage. Nos financements et nos garanties spécialement adaptées aux besoins
                    exprimés par nos clients et partenaires nous permettent de revendiquer une qualité de service
                    exclusive.</p>
                <p>Altassura développe son expertise de spécialiste depuis 2007 en France comme à l’international avec
                    les principaux acteurs du financement et de l’assurance, afin de vous apporter des solutions de
                    factoring adaptées à votre entreprise.
                    Notre expérience nous permet de vous apporter un éclairage objectif sur chaque type de solution
                    d'affacturage pour financer votre trésorerie, tout en libérant vos capacités de financement auprès
                    de vos partenaires bancaires.</p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 mt-xl">
                <img class="img-responsive appear-animation" src="../img/produits/question-reponse-affacturage.jpg"
                    alt="Les question et les réponses sur l'affacturage" data-appear-animation="fadeInRight">
                <div style="background-color: #eee;">
                    <div style="font-size:30px;padding : 20px 20px 10px 20px">Une question ?</div>
                    <div style="padding : 10px 20px 5px 20px">Trouvez votre réponse parmi les questions les plus
                        fréquentes.</div>
                    <div style="padding : 5px 20px 10px 20px"><a href="../assistance/faq-question-reponse/index.html"
                            class="btn btn-lg btn-primary"
                            title=">Accéder aux questions et aux réponses sur l'affacturage">Accéder aux FAQ</a></div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 mt-xl">
                <h2 class="mt-xl heading-primary">Pas encore client ? Contacter l'un de nos conseillers par téléphone
                </h2>
                <p>Vous avez la possibilité de joindre un conseiller Altassura même si vous n'êtes pas encore client.
                    Sachez que nos conseillers sont spécialisés en affacturage mais aussi dans la gestion du poste
                    clients : assurance crédit, financement, caution .
                    Demandez votre devis de factoring en ligne gratuitement et sans engagement.</p>
                <p>Pour toute question concernant une offre d'affacturage, contactez-nous au 01 84 21 85 40 (prix d’un
                    appel local selon opérateur, du lundi au vendredi de 9h00 à 19h).
                    Vous pouvez également faire une <a href="../souscription/index.html"
                        title="Demande de devis d'affacturage ou de factoring en ligne">demande de devis d'affacturage
                        en ligne</a>.
                    Si vous avez une question ou si vous souhaitez un devis en matière d'affacturage ou financement pour
                    votre entreprise, appelez-nous au 01 84 21 85 40 (prix d’un appel local selon opérateur, du lundi au
                    vendredi de 9h00 à 19h).</p>
                <p>Bénéficiez des conseils de nos experts afin d’optimiser vos conditions contractuelles et financières.
                    Profitez des dernières innovations au niveau des contrats d'affacturage ou d'assurance-crfédit pour
                    optimiser votre poste clients.</p>
            </div>
        </div>

    </div>



    </div>

@endsection
