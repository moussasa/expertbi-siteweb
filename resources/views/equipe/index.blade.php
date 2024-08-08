@extends('layout.app')
@section('Titre', 'Expert bi sarl - Votre partenaire en Business Intelligence')
@section('css')
    <style>
        .header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77aaff 3px solid;
        }

        .header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }

        .header ul {
            padding: 0;
            list-style: none;
        }

        .header ul li {
            display: inline;
            padding: 0 20px 0 20px;
        }

        .heading {
            text-align: left;
        }

        .container {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .content {
            width: 100%;
        }

        .team-member {
            background: #fff;
            margin: 20px 10px;
            padding: 5px 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: calc(33.333% - 20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 2px solid rgba(0, 0, 0, 0.1);
        }

        .team-member h3 {
            margin: 10px 0;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            background: linear-gradient(90deg, #ff6ec4, #7873f5);
            color: white;
            border-radius: 15px;
            padding: 5px 0;
            width: 100%;
            line-height: 1.1;

        }

        .team-member p {
            padding: 0 10px;
            text-align: justify;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .team-member {
                width: 90%;
            }
        }
    </style>
@endsection

@section('body')
    <section class="page-header page-header-custom-background"
        style="background: linear-gradient(90deg, #ff6ec4, #7873f5);padding: 10px;border-radius: 10px;margin: 10px">
        <div class="container">
            {{-- <ul class="breadcrumb breadcrumb-valign-mid">
                <li><a href="{{ route('accueil') }}">Accueil</a></li>
                <li class="active">Services</li>
            </ul> --}}
            <div class="row">
                <div class="col-md-12" style="margin-top: 5px;">
                    <h1>Equipe</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <section class="heading">
            <div class="container">
                <h2 class="little-title left">Rencontrez notre équipe</h2>
                <p class="top">Chez Expert BI, notre équipe est composée de professionnels expérimentés et passionnés par
                    leur travail. Nous nous engageons à fournir des services de haute qualité et à dépasser les attentes de
                    nos clients.</p>
            </div>
        </section>

        <section class="content">
            <div class="container">
                <div class="team-member left">
                    <img src="{{ asset('img/img/e1.jpg') }}" alt="Daniel Paul COULIBALY">
                    <h3>Daniel Paul COULIBALY</h3>
                    <p>Daniel est le fondateur et le gérant de Expert BI. Diplômé de deux masters de l'Université de
                        Montpellier, il possède plus de 6 ans d'expérience en finance, contrôle de gestion et systèmes
                        d'information. Sa vision et son leadership ont conduit l'entreprise vers de nouveaux sommets.</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('img/img/e2.jpg') }}" alt="Seydou NIARE">
                    <h3>Seydou NIARE</h3>
                    <p>Seydou est notre ingénieur développeur et data scientist formé à l'université de Grenoble et à
                        l'université de Montpellier.
                        Il fait partie de nos équipes de développement.</p>
                </div>
                <div class="team-member bottom">
                    <img src="{{ asset('img/img/e4.jpg') }}" alt="expertbi">
                    <h3>Abdoulaye Coulibaly</h3>
                    <p>Expert chargé du logiciel Sage, il a un master en audit et contrôle de gestion, et est formateur
                        spécialisé en Sage avec plusieurs années d'expériences dans le métier.</p>
                    {{-- <p>NOM est notre expert en comptabilité. Avec plus de 10 ans d'expérience dans le domaine, il supervise
                        l'audit de nos processus comptables pour garantir leur conformité aux normes comptables et
                        réglementaires. Il veille également à l'intégrité financière et à la transparence de nos opérations.
                    </p> --}}
                </div>
                <div class="team-member left">
                    <img src="{{ asset('img/img/e3.jpg') }}" alt="expertbi">
                    <h3>Moussa Samaké</h3>
                    <p>Notre développeur informatique conçoit, programme et maintient des applications et des systèmes
                        logiciels. Il travaille en étroite collaboration avec les équipes de projet pour comprendre les
                        besoins des utilisateurs.</p>
                </div>
                <div class="team-member top">
                    <img src="{{ asset('img/img/user1.png') }}" alt="expertbi">
                    <h3>NOM</h3>
                    <p>NOM est notre expert financier. Avec une vaste expérience dans la gestion des finances et des
                        investissements, il assure la stabilité et la croissance financière de notre entreprise. Son
                        expertise nous permet de naviguer efficacement dans le monde complexe de la finance.</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('img/img/user1.png') }}" alt="expertbi">
                    <h3>NOM</h3>
                    <p>NOM est notre gestionnaire expérimenté. Avec une expertise approfondie dans la coordination des
                        opérations et la gestion des équipes, il assure le bon déroulement des projets et le respect des
                        objectifs de l'entreprise. Sa capacité à optimiser les ressources et à résoudre les problèmes
                        garantit une efficacité maximale et une performance exceptionnelle.</p>
                </div>
            </div>
        </section>
    </div>
@endsection
