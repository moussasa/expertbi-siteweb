@extends('layout.app')
@section('Titre', 'Expert bi sarl - Votre partenaire en Business Intelligence')
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
            /* .container {
                padding: 0;
            } */

        }
    </style>
@endsection

@section('body')

<section  class="page-header page-header-custom-background"
style="background: linear-gradient(90deg, #ff6ec4, #7873f5);padding: 10px;border-radius: 10px;margin: 10px">
<div class="container">
            {{-- <ul class="breadcrumb breadcrumb-valign-mid">
                <li><a href="{{ route('accueil') }}">Accueil</a></li>
                <li class="active">Services</li>
            </ul> --}}
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
                    <img src="{{ asset('img/img/s1.jpeg') }}"
                        alt="Analyse de Données">
                    <h3>Analyse de Données</h3>
                    <p>Chez Expert BI, nous transformons vos données en informations exploitables. Nos experts en analyse de données utilisent des techniques avancées pour identifier les tendances, les modèles et les anomalies, permettant ainsi à votre entreprise de prendre des décisions éclairées.</p>
                </div>
                <div class="col-md-6 service top">
                    <img src="{{ asset('img/img/s2.png') }}"
                        alt="Solutions BI">
                    <h3>Solutions BI</h3>
                    <p>Nous offrons des solutions de Business Intelligence (BI) sur mesure pour répondre aux besoins spécifiques de votre entreprise. De la conception à la mise en œuvre, nos solutions vous aident à visualiser et interpréter vos données pour améliorer la performance et la compétitivité.</p>
                </div>
            </div>
            <div class="row service-section">
                <div class="col-md-6 service bottom">
                    <img src="{{ asset('img/img/s3.jpeg') }}"
                        alt="Consulting">
                    <h3 class="left">Consulting</h3>
                    <p>Nos services de consulting en BI vous accompagnent dans l'optimisation de vos processus décisionnels.Nous analysons vos besoins, proposons des stratégies adaptées et vous aidons à implémenter des solutions efficaces pour maximiser votre potentiel de croissance.</p>
                </div>
                <div class="col-md-6 service top">
                    <img src="{{ asset('img/img/s4.jpeg') }}"
                        alt="Formation">
                    <h3>Formation</h3>
                    <p>Nous proposons des formations spécialisées pour vous aider à maîtriser les outils et techniques de BI. Nos formations sont adaptées à tous les niveaux de compétence et visent à renforcer les capacités de votre équipe pour une utilisation optimale des solutions BI.</p>
                </div>
            </div>
            <div class="row service-section left">
                <div class="col-md-6 service">
                    <img src="{{ asset('img/img/s5.jpeg') }}" alt="Audit">
                    <h3>Audit</h3>
                    <p>Expert BI réalise des audits détaillés de vos systèmes d'information pour évaluer leur efficacité et leur conformité. Nos audits vous fournissent des recommandations précises pour améliorer la performance, la sécurité et la fiabilité de vos infrastructures.</p>
                </div>
                <div class="col-md-6 service top">
                    <img src="{{ asset('img/img/s6.jpeg') }}"
                        alt="Support Technique">
                    <h3>Support Technique</h3>
                    <p>Nous offrons un support technique complet pour assurer le bon fonctionnement de vos solutions BI. Notre équipe de support est disponible pour résoudre rapidement vos problèmes et vous fournir une assistance continue pour garantir la pérennité de vos systèmes.</p>
                </div>
            </div>
            <div class="row service-section left">
                <div class="col-md-6 service">
                    <img src="{{ asset('img/img/s7.png') }}" alt="Conseil en gestion des ressources humaines">
                    <h3>Conseil en gestion des ressources humaines</h3>
                    <p>Expert BI offre des services de conseil en gestion des ressources humaines pour optimiser la performance de votre personnel et améliorer la satisfaction des employés. Nos experts fournissent des recommandations personnalisées pour renforcer l'efficacité des processus RH, favoriser le développement des compétences et assurer la conformité aux réglementations en vigueur.</p>

                </div>
                <div class="col-md-6 service top">
                    <img src="{{ asset('img/img/s8.jpg') }}"
                        alt="Conseil en informatique">
                    <h3>Conseil en informatique</h3>
                    <p>Expert BI propose des services de conseil en informatique pour optimiser et sécuriser vos systèmes d'information. Nos experts vous accompagnent dans l'analyse de vos infrastructures, la mise en place de solutions adaptées et l'amélioration continue de vos performances informatiques. Nous vous fournissons des recommandations sur mesure pour répondre à vos besoins technologiques et garantir la fiabilité de vos systèmes.</p>

                </div>
            </div>
            <div class="row service-section left">
                <div class="col-md-6 service">
                    <img src="{{ asset('img/img/s9.jpg') }}" alt="Conseil en gestion financière et stratégique">
                    <h3>Conseil en gestion financière et stratégique</h3>
                    <p>Expert BI offre des services de conseil en gestion financière et stratégique pour vous aider à optimiser vos ressources et améliorer vos performances. Nous analysons vos données financières et stratégiques pour fournir des recommandations éclairées sur la gestion des investissements, la planification budgétaire et les stratégies de croissance. Notre objectif est de vous aider à atteindre vos objectifs financiers tout en minimisant les risques et en maximisant la rentabilité.</p>


                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
