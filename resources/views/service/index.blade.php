@extends('layout.app')
@section('Titre', 'ExpertBi SARL')
@section('css')
    <style>
        .service-section {
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            background-color: #f4f4f4;
        }

        .service {
            margin-bottom: 30px;
        }

        .service h3 {
            color: #333;
            text-align: center;
            margin-bottom: 15px;
            margin-top: 15px;
        }

        .service p {
            text-align: justify;
            color: #666;
        }

        .service img {
            max-width: 100%;
            height: 250px;
            border-radius: 10px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 0;
            }

        }
    </style>
@endsection

@section('body')

    <section id="colored" class="page-header page-header-custom-background"
        style="padding: 10px;border-radius: 10px;margin: 10px">
        <div class="container">
            <ul class="breadcrumb breadcrumb-valign-mid">
                <li><a href="{{ route('accueil') }}">Accueil</a></li>
                <li class="active">Services</li>
            </ul>
            <div class="row">

                <div class="col-md-12" style="margin-top: 5px;">
                    <h1>Services</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content">
            <div class="row service-section">
                <div class="col-md-6 service left">
                    <img src="https://th.bing.com/th/id/R.33f12239e92c059edd37427b588020f9?rik=RvcATP2c5UOi5A&pid=ImgRaw&r=0"
                        alt="Analyse de Données">
                    <h3>Analyse de Données</h3>
                    <p>Chez Expert BI, nous transformons vos données en informations exploitables. Nos experts en analyse de données utilisent des techniques avancées pour identifier les tendances, les modèles et les anomalies, permettant ainsi à votre entreprise de prendre des décisions éclairées.</p>
                </div>
                <div class="col-md-6 service top">
                    <img src="https://th.bing.com/th/id/R.4e4a03782e995d6474005be17598cc4d?rik=enoVbP3ZkNQsWw&riu=http%3a%2f%2fwisdomspringstraining.com%2fwp-content%2fuploads%2f2019%2f07%2fdiagram-business-intelligence-1024x1024.png&ehk=bQRtgkxkOesi7qx4yFas1ybJAFy8q3TKtE0QgYSX3nw%3d&risl=&pid=ImgRaw&r=0"
                        alt="Solutions BI">
                    <h3>Solutions BI</h3>
                    <p>Nous offrons des solutions de Business Intelligence (BI) sur mesure pour répondre aux besoins spécifiques de votre entreprise. De la conception à la mise en œuvre, nos solutions vous aident à visualiser et interpréter vos données pour améliorer la performance et la compétitivité.</p>
                </div>
            </div>
            <div class="row service-section">
                <div class="col-md-6 service bottom">
                    <img src="https://th.bing.com/th/id/R.9e832a68a1b952fb9098f830b1360f8d?rik=jYB32yvM37mpmg&riu=http%3a%2f%2fwww.sdgyoungleaders.org%2fwp-content%2fuploads%2f2020%2f11%2fload-image-2020-11-05T230708.790.jpeg&ehk=7BjKczgeKoBzK%2fB1JvATCuKwIqjaKXrlxuX4YGc%2bCgg%3d&risl=&pid=ImgRaw&r=0"
                        alt="Consulting">
                    <h3 class="left">Consulting</h3>
                    <p>Nos services de consulting en BI vous accompagnent dans l'optimisation de vos processus décisionnels.Nous analysons vos besoins, proposons des stratégies adaptées et vous aidons à implémenter des solutions efficaces pour maximiser votre potentiel de croissance.</p>
                </div>
                <div class="col-md-6 service top">
                    <img src="https://th.bing.com/th/id/R.705eaf9bfd7916410247cd2827282c32?rik=jIvyOCHDFyBw1w&pid=ImgRaw&r=0"
                        alt="Formation">
                    <h3>Formation</h3>
                    <p>Nous proposons des formations spécialisées pour vous aider à maîtriser les outils et techniques de BI. Nos formations sont adaptées à tous les niveaux de compétence et visent à renforcer les capacités de votre équipe pour une utilisation optimale des solutions BI.</p>
                </div>
            </div>
            <div class="row service-section left">
                <div class="col-md-6 service">
                    <img src="https://th.bing.com/th/id/OIP.XNjG5F64Ld3ntqCV6TVd5QHaE8?rs=1&pid=ImgDetMain" alt="Audit">
                    <h3>Audit</h3>
                    <p>Expert BI réalise des audits détaillés de vos systèmes d'information pour évaluer leur efficacité et leur conformité. Nos audits vous fournissent des recommandations précises pour améliorer la performance, la sécurité et la fiabilité de vos infrastructures.</p>
                </div>
                <div class="col-md-6 service top">
                    <img src="https://th.bing.com/th/id/OIP.0KlQrVngu0qUnrRbYVGRPQHaEb?rs=1&pid=ImgDetMain"
                        alt="Support Technique">
                    <h3>Support Technique</h3>
                    <p>Nous offrons un support technique complet pour assurer le bon fonctionnement de vos solutions BI. Notre équipe de support est disponible pour résoudre rapidement vos problèmes et vous fournir une assistance continue pour garantir la pérennité de vos systèmes.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
