@extends('layout.app')
@section('Titre', 'ExpertBi SARL')
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
<section id="colored" class="page-header page-header-custom-background" style="padding: 10px;border-radius: 10px;margin: 10px">
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

<div class="content">
    <section class="heading">
        <div class="container">
            <h2 class="little-title left">Rencontrez notre équipe</h2>
            <p class="top">Chez Expert BI, notre équipe est composée de professionnels expérimentés et passionnés par leur travail. Nous nous engageons à fournir des services de haute qualité et à dépasser les attentes de nos clients.</p>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="team-member left">
                <img src="https://th.bing.com/th/id/R.6b0022312d41080436c52da571d5c697?rik=ejx13G9ZroRrcg&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fuser-png-icon-young-user-icon-2400.png&ehk=NNF6zZUBr0n5i%2fx0Bh3AMRDRDrzslPXB0ANabkkPyv0%3d&risl=&pid=ImgRaw&r=0" alt="Daniel Paul COULIBALY">
                <h3>Daniel Paul COULIBALY</h3>
                <p>Daniel est le fondateur et le gérant de Expert BI. Diplômé de deux masters de l'Université de Montpellier, il possède plus de 6 ans d'expérience en finance, contrôle de gestion et systèmes d'information. Sa vision et son leadership ont conduit l'entreprise vers de nouveaux sommets.</p>
            </div>
            <div class="team-member">
                <img src="https://th.bing.com/th/id/R.6b0022312d41080436c52da571d5c697?rik=ejx13G9ZroRrcg&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fuser-png-icon-young-user-icon-2400.png&ehk=NNF6zZUBr0n5i%2fx0Bh3AMRDRDrzslPXB0ANabkkPyv0%3d&risl=&pid=ImgRaw&r=0" alt="Sophie Dupont">
                <h3>Sophie Dupont</h3>
                <p>Sophie est notre chef de projet en analyse de données. Avec un diplôme en statistiques et une expertise en data science, elle dirige nos projets d'analyse de données avec une précision et une efficacité remarquables.</p>
            </div>
            <div class="team-member bottom">
                <img src="https://th.bing.com/th/id/R.6b0022312d41080436c52da571d5c697?rik=ejx13G9ZroRrcg&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fuser-png-icon-young-user-icon-2400.png&ehk=NNF6zZUBr0n5i%2fx0Bh3AMRDRDrzslPXB0ANabkkPyv0%3d&risl=&pid=ImgRaw&r=0" alt="Jean Martin">
                <h3>Jean Martin</h3>
                <p>Jean est notre expert en sécurité informatique. Avec plus de 10 ans d'expérience dans le domaine, il s'assure que toutes nos solutions sont sécurisées et conformes aux normes de l'industrie.</p>
            </div>
            <div class="team-member left">
                <img src="https://th.bing.com/th/id/R.6b0022312d41080436c52da571d5c697?rik=ejx13G9ZroRrcg&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fuser-png-icon-young-user-icon-2400.png&ehk=NNF6zZUBr0n5i%2fx0Bh3AMRDRDrzslPXB0ANabkkPyv0%3d&risl=&pid=ImgRaw&r=0" alt="Marie Lefebvre">
                <h3>Marie Lefebvre</h3>
                <p>Marie est notre comptable et analyste de données. Elle apporte une rigueur exceptionnelle à la gestion financière de l'entreprise et à l'analyse des données de nos clients.</p>
            </div>
            <div class="team-member top">
                <img src="https://th.bing.com/th/id/R.6b0022312d41080436c52da571d5c697?rik=ejx13G9ZroRrcg&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fuser-png-icon-young-user-icon-2400.png&ehk=NNF6zZUBr0n5i%2fx0Bh3AMRDRDrzslPXB0ANabkkPyv0%3d&risl=&pid=ImgRaw&r=0" alt="Ahmed Traoré">
                <h3>Ahmed Traoré</h3>
                <p>Ahmed est notre ingénieur en réseau informatique. Son expertise assure une infrastructure réseau robuste et fiable pour nos clients, facilitant ainsi une communication fluide et sécurisée.</p>
            </div>
            <div class="team-member">
                <img src="https://th.bing.com/th/id/R.6b0022312d41080436c52da571d5c697?rik=ejx13G9ZroRrcg&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fuser-png-icon-young-user-icon-2400.png&ehk=NNF6zZUBr0n5i%2fx0Bh3AMRDRDrzslPXB0ANabkkPyv0%3d&risl=&pid=ImgRaw&r=0" alt="Fatoumata Koné">
                <h3>Fatoumata Koné</h3>
                <p>Fatoumata est notre développeur web et mobile. Avec une forte expérience en développement d'applications, elle crée des solutions innovantes pour répondre aux besoins de nos clients.</p>
            </div>
        </div>
    </section>
</div>
@endsection
