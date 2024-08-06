@extends('layout.app')
@section('Titre', 'A propos')
@section('css')
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        } */

        h1,
        h2,
        h3 {
            color: #0056b3;
        }

        .content-section {
            margin-bottom: 30px;
        }
    </style>
@endsection

@section('body')
<section  class="page-header page-header-custom-background"
style="background: linear-gradient(90deg, #ff6ec4, #7873f5);padding: 10px;border-radius: 10px;margin: 10px">
<div class="container">
            {{-- <ul class="breadcrumb breadcrumb-valign-mid">
                <li><a href="{{ route('accueil') }}">Accueil</a></li>
                <li class="active">A propos</li>
            </ul> --}}
            <div class="row">

                <div class="col-md-12" style="margin-top: 5px;">

                    <h1>A propos</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <div class="content-section">
            <h2 class="little-title top">Création</h2>
            <p>
                L’idée de la création de Expert BI remonte à plusieurs années. En juin 2018, le promoteur a créé une
                entreprise
                individuelle appelée Paul-Service, immatriculée au registre du commerce sous le numéro NINA :
                31809195397571C
                RCCM:MA.BKO.218.A.4893, alors qu’il était étudiant en fin de cycle master à l’université de Montpellier. Son
                objectif était de mettre ses compétences au service des entreprises. Située à Bamako, Mali, cette entreprise
                a
                évolué avec le temps.
            </p>
            <p>
                Par la suite, le promoteur s’est inscrit à un second master en système d’information économique et
                financière,
                qu’il a terminé en 2021. Avec des ambitions grandissantes vers l’analyse de données, il a commencé à
                exécuter
                des missions de data analyste en freelance en France. En janvier 2024, Paul-Service est devenu Expert BI
                SARL,
                immatriculée au registre du commerce et du crédit mobilier avec MA.BKO.2024.B.157 et le numéro NINA
                4209195397003Z.
            </p>
        </div>

        <div class="content-section">
            <h2 class="little-title left">Gérant et équipe</h2>
            <p>
                La société Expert BI SARL est dirigée par Mr Daniel Paul COULIBALY, diplômé de deux masters de l’université
                de
                Montpellier : expertise socio-économique emplois et compétences et système d’information économique et
                financière. Avec plus de 6 ans d’expérience professionnelle en finance, en contrôle de gestion et en système
                d’information, Mr COULIBALY est un consultant hautement expérimenté dans le conseil aux entreprises.
            </p>
            <p>
                Expert BI se compose de deux catégories d’équipes : une équipe de consultants en informatique et une équipe
                permanente. Nos consultants, incluant des ingénieurs en développement, en sécurité de l’information et en
                réseau
                informatique, fournissent leurs services en fonction des besoins spécifiques de nos clients, avec certains
                consultants basés en France.
            </p>
            <p>
                L’équipe permanente comprend un chargé commercial, un comptable data analyste, et plusieurs autres
                compétences
                disponibles, garantissant une prestation de services de haute qualité.
            </p>
        </div>

        <div class="content-section">
            <h2 class="little-title bottom">Stratégie</h2>
            <h3 class="little-title left">Objectif</h3>
            <p>
                L’objectif de Expert BI est d’utiliser des outils informatiques pour aider les entreprises à suivre
                efficacement
                leurs activités quotidiennes et à visualiser leurs indicateurs clés de performance. Nous sommes spécialisés
                dans
                le conseil en gestion d’entreprises, incluant la gestion des ressources humaines, le conseil fiscal, les
                missions d’expertise judiciaire et les audits.
            </p>

            <h3 class="little-title top">Mission et valeurs</h3>
            <p>
                <strong class="little-title-little bottom">Mission :</strong> Aider les entreprises à prendre des décisions
                efficaces et efficientes au quotidien.
            </p>
            <p>
                <strong class="little-title-little left">Valeurs :</strong> Transparence, travail et excellence.
            </p>
            <p>
                <strong class="little-title-little top">Transparence :</strong> Nous basons nos actions sur des informations
                réelles et fiables.
            </p>
            <p>
                <strong class="little-title-little left">Travail :</strong> Nous nous engageons à rester aux côtés de nos
                clients en permanence, cherchant
                toujours à les satisfaire, car ils sont notre raison d’être.
            </p>
            <p>
                <strong class="little-title-little bottom">Excellence :</strong> Nous nous efforçons de toujours mieux
                faire, de conseiller avec excellence et de
                garantir une satisfaction totale à nos clients.
            </p>
        </div>
    </div>
    </div>

@endsection
