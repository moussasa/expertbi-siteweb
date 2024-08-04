@extends('layout.app')
@section('Titre', 'ExpertBi SARL')
@section('css')
    <style>
        .slider-container {
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            height: 60vh;
            position: relative;
            overflow: hidden;
            margin-bottom: 12vh;
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
            height: 100%;
            /* Make slider full height of container */
        }

        .slide {
            min-width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            /* background-color: red */
        }

        .slide img {
            width: 100%;
            height: 100%;
            height: auto;
            max-height: 100%;
        }

        .navigation-dots {
            position: absolute;
            background-color: black;
            bottom: 0px;
            width: 100%;
            text-align: center;
        }

        .navigation-dot {
            display: inline-block;
            width: 15px;
            height: 15px;
            margin: 5px;
            border-radius: 50%;
            background-color: #000;
            cursor: pointer;
            border: 2px solid #fff;
        }

        .navigation-dot.active {
            background-color: #fff;
        }

        #ripple {
            padding: 10px;
            height: 100%;
            margin: auto;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        #rippleText {
            padding: 10px;
            max-width: 45%;
        }

        #rippleCanvas {
            width: 50%;
            height: 50vh;
        }



        @media (max-width: 600px) {
            #ripple {
                padding: 10px;
                height: 100%;
                margin: auto;
                display: inline-flex;
                flex-direction: column;
                justify-content: flex-start;
            }

            #rippleText {
                padding: 10px;
                max-width: 100%;
            }

            #rippleCanvas {
                width: 100%;
                height: 50vh;
            }

            .slider-container {
                width: 100%;
                max-width: 100%;
                margin: 0 auto;
                height: 45vh;
                position: relative;
                overflow: hidden;
            }
        }

        .typing {
            text-align: center;
            font-family: 'Courier New', monospace;
            font-size: 36px;
            background: linear-gradient(90deg, #ff6ec4, #7873f5);
            -webkit-background-clip: text;
            color: transparent;
            white-space: nowrap;
            overflow: hidden;
            margin-bottom: 2vh;
        }

        .typing::after {
            content: '';
            animation: typing 2s steps(8, end) infinite, blink-caret .75s step-end infinite;
            white-space: nowrap;
            overflow: hidden;
            border-right: .15em solid orange;
            font-family: 'Courier New', monospace;
            font-size: 24px;
        }

        @keyframes typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes blink-caret {

            from,
            to {
                border-color: transparent;
            }

            50% {
                border-color: orange;
            }
        }
    </style>

@endsection
@section('body')



    <section id="colored" class="page-header page-header-custom-background"
        style="padding: 10px;border-radius: 10px;margin: 10px">
        <div class="container">
            <ul class="breadcrumb breadcrumb-valign-mid">
                {{-- <li><a href="{{ route('accueil') }}">Accueil</a></li> --}}
                <li class="active">Accueil</li>
            </ul>
            <div class="row">

                <div class="col-md-12" style="margin-top: 5px;">
                    <h1>Accueil</h1>
                </div>
            </div>
        </div>
    </section>



    <div class="slider-container">
        <div class="slider" id="slider">
            <div class="slide"><img src="https://cdn.pixabay.com/photo/2019/09/30/15/30/credit-4516068_1280.jpg"
                    alt="Image 1"></div>
            <div class="slide"><img src="https://cdn.pixabay.com/photo/2018/07/10/07/56/business-3528035_960_720.jpg"
                    alt="Image 2"></div>
            <div class="slide"><img src="https://cdn.pixabay.com/photo/2020/08/09/14/25/business-5475660_960_720.jpg"
                    alt="Image 3"></div>
            <div class="slide"><img src="https://cdn.pixabay.com/photo/2024/03/07/22/55/pen-8619484_1280.jpg"
                    alt="Image 4"></div>
        </div>
        <div class="navigation-dots top" id="navigationDots">
            <span class="navigation-dot active" data-index="0"></span>
            <span class="navigation-dot" data-index="1"></span>
            <span class="navigation-dot" data-index="2"></span>
            <span class="navigation-dot" data-index="3"></span>
        </div>
    </div>


    {{-- ripple --}}
    <div id="ripple">
        <div id="rippleCanvas"></div>
        <div id="rippleText">
            <div class="typing left">

            </div>
            <p class="left">L’histoire d’Expert BI commence il y a plusieurs années.

            </P>
            <P class="left">
                En juin 2018, le promoteur, alors étudiant en fin de cycle master à l’Université de Montpellier, fonde
                une entreprise individuelle nommée Paul-Service.

            </p>
            <p class="bottom">
                Cette entreprise est créée au Mali, avec son siège social à Bamako. Au même moment, l’auteur poursuit un
                autre master en systèmes d’information économique et financière à l’Université de Montpellier, qu’il
                termine en 2021. Les ambitions du promoteur se tournent alors vers l'analyse de données.

            </p>
            <p class="left">
                Il commence à réaliser des missions de data analyste en freelance en France, sous le statut de portage
                salarial. Ainsi, en janvier 2024, Paul-Service devient Expert BI SARL, immatriculée au registre du
                commerce et du crédit mobilier sous l’identifiant MA.BKO.2024.B.157 et le numéro NINA 4209195397003Z.
            </p>
        </div>
    </div>
    <div class="content">
        <div>
            <p class="little-title left">Objectif</p>
        </div>
        <p>
            L’objectif d’Expert BI est de tirer parti des outils informatiques pour aider les entreprises à améliorer le
            suivi de leurs activités quotidiennes et à visualiser leurs indicateurs clés de performance.
        </p>
        <p>
            Nous sommes spécialisés dans le conseil en gestion pour les entreprises, prenant en charge la gestion des
            ressources humaines, le conseil fiscal, les missions d’expertise judiciaire et les audits.
        </p>
    </div>

    <div class="content">
        <div>
            <p class="little-title top">Missions et valeurs</p>
        </div>
        <div>
            <p class="little-title-little top">Missions</p>
        </div>
        <p>
            Accompagner les entreprises dans leur prise de décision quotidienne pour garantir des choix efficaces et
            efficients.
        </p>
        <div>
            <p class="little-title-little left">Valeurs</p>
        </div>
        <p class="top">
            Transparence : Nous nous engageons à fournir des informations réelles et vérifiées. La transparence est au
            cœur de notre approche, et nous évitons les fausses informations.
        </p>
        <p>
            Travail : Nous faisons preuve d’un engagement constant auprès de nos clients, cherchant à les satisfaire
            pleinement car ils sont au centre de notre activité.
        </p>
        <p class="left">
            Excellence : Nous visons à offrir un conseil d’excellence, à toujours améliorer nos services et à garantir
            une satisfaction totale à nos clients.
        </p>

    </div>

    <div class="content">
        <div>
            <p class="little-title left">Notre localisation</p>
            <div class="map" style="width: 100%;height: 40vh;">
                <iframe style="border-radius: 10px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31145.92754471349!2d-8.045254091026179!3d12.632192359760115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe51cc5df81b5b11%3A0x572b6d6dbdd05f4!2sACI%202000%2C%20Bamako!5e0!3m2!1sfr!2sml!4v1722778064595!5m2!1sfr!2sml" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <br>
        </div>
    </div>
@endsection

@section('script')

    <!-- Load Three.js -->
    <script src="{{ asset('local/three.min.js') }}"></script>
    <script>
        var scene = new THREE.Scene();
        var canvasContainer = document.getElementById('rippleCanvas');
        var canvasContainerWidth = canvasContainer.clientWidth;
        var canvasContainerHeight = canvasContainer.clientHeight;
        var camera = new THREE.PerspectiveCamera(75, canvasContainerWidth / canvasContainerHeight, 0.1, 1000);

        var renderer = new THREE.WebGLRenderer({
            alpha: true
        }); // Enable transparency
        renderer.setSize(canvasContainerWidth, canvasContainerHeight);
        renderer.setClearColor(0x000000, 0); // Set background color to transparent
        canvasContainer.appendChild(renderer.domElement);

        var textureLoader = new THREE.TextureLoader();
        var texture = textureLoader.load('{{ asset('img/logo/logo.png') }}');

        var geometry = new THREE.PlaneGeometry(10, 10); // Adjust the size of the plane
        var material = new THREE.MeshBasicMaterial({
            map: texture,
            side: THREE.DoubleSide
        });
        var plane = new THREE.Mesh(geometry, material);
        scene.add(plane);

        camera.position.z = 11;

        function animate() {
            requestAnimationFrame(animate);
            plane.rotation.x += 0.01;
            plane.rotation.y += 0.01;
            renderer.render(scene, camera);
        }

        animate();

        window.addEventListener('resize', function() {
            canvasContainerWidth = canvasContainer.clientWidth;
            canvasContainerHeight = canvasContainer.clientHeight;
            renderer.setSize(canvasContainerWidth, canvasContainerHeight);
            camera.aspect = canvasContainerWidth / canvasContainerHeight;
            camera.updateProjectionMatrix();
        });

        // Slider functionality
        const slider = document.getElementById('slider');
        const dots = document.querySelectorAll('.navigation-dot');
        let currentIndex = 0;

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                const index = dot.getAttribute('data-index');
                currentIndex = index;
                updateSlider();
            });
        });

        function updateSlider() {
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
            dots.forEach(dot => dot.classList.remove('active'));
            dots[currentIndex].classList.add('active');
        }

        // Touch events for mobile
        let startX;
        let isDragging = false;

        slider.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            isDragging = true;
        });

        slider.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            const touch = e.touches[0];
            const moveX = touch.clientX - startX;
            slider.style.transform = `translateX(calc(-${currentIndex * 100}% + ${moveX}px))`;
        });

        slider.addEventListener('touchend', (e) => {
            if (!isDragging) return;
            isDragging = false;
            const touch = e.changedTouches[0];
            const moveX = touch.clientX - startX;

            if (moveX > 50 && currentIndex > 0) {
                currentIndex--;
            } else if (moveX < -50 && currentIndex < dots.length - 1) {
                currentIndex++;
            }

            updateSlider();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let typingElement = document.querySelector('.typing');
            let text = "ExpertBI";
            let index = 0;
            let speed = 150;

            function type() {
                if (index < text.length) {
                    typingElement.innerHTML += text.charAt(index);
                    index++;
                    setTimeout(type, speed);
                } else {
                    setTimeout(() => {
                        typingElement.innerHTML = '';
                        index = 0;
                        type();
                    }, 2000);
                }
            }

            type();
        });
    </script>




@endsection
