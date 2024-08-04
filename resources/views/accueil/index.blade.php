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


        /*
                        .slide img {
                            max-width: 100%;
                            max-height: 100%;
                        } */

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

        .little-title {
            font-weight: 800;
            font-family: 'Consolas', monospace;
            font-size: 1.63rem;
        }

        .little-title-little {
            font-weight: 800;
            font-family: 'Consolas', monospace;
            font-size: 1.25rem;
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

        .left,
        .top,
        .bottom {
            opacity: 0;
        }

        .left {
            transform: translateX(-200px);
            filter: blur(5px);
            transition: 2.4s;
        }

        .top {
            transform: translateY(-200px);
            filter: blur(5px);
            transition: 2.4s;
        }

        .bottom {
            transform: translateY(200px);
            filter: blur(5px);
            transition: 2.4s;
        }

        .left.visible,
        .top.visible,
        .bottom.visible {
            opacity: 1;
            transform: translate(0);
            filter: blur(0);
            opacity: 1;
        }
        .content{
            padding: 10px;
        }
    </style>

@endsection
@section('body')



    <section id="colored" class="page-header page-header-custom-background" style="padding: 10px;border-radius: 10px;margin: 10px">
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
        <p>
            Transparence : Nous nous engageons à fournir des informations réelles et vérifiées. La transparence est au
            cœur de notre approche, et nous évitons les fausses informations.
        </p>
        <p>
            Travail : Nous faisons preuve d’un engagement constant auprès de nos clients, cherchant à les satisfaire
            pleinement car ils sont au centre de notre activité.
        </p>
        <p>
            Excellence : Nous visons à offrir un conseil d’excellence, à toujours améliorer nos services et à garantir
            une satisfaction totale à nos clients.
        </p>

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


    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const elementsToObserve = document.querySelectorAll('.left, .top, .bottom');

            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observerCallback = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        // observer.unobserve(entry.target); // Optional: Remove the observer after it becomes visible
                    } else {
                        entry.target.classList.remove('visible');
                    }
                });
            };

            const observer = new IntersectionObserver(observerCallback, observerOptions);

            elementsToObserve.forEach(element => {
                observer.observe(element);
            });
        });
    </script>
@endsection
{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider with Navigation Dots</title>
    <style>
        body,
        html {
            padding: 0;
            margin: 0;
            font-family: Arial, sans-serif;
            box-sizing: border-box;
            font-family: Lato, sans-serif;
            font-size: 18px;

        }

        body {
            padding: 0 5px;
        }

        .slider-container {
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            height: 85vh;
            /* Height of the slider container */
            position: relative;
            overflow: hidden;
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
            /* height: auto; */
            height: auto;
            max-height: 100%;
        }


        /*
        .slide img {
            max-width: 100%;
            max-height: 100%;
        } */

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

        .little-title {
            font-weight: 800;
            font-family: 'Consolas', monospace;
            font-size: 1.63rem;
        }

        .little-title-little {
            font-weight: 800;
            font-family: 'Consolas', monospace;
            font-size: 1.25rem;
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

        .left,
        .top,
        .bottom {
            opacity: 0;
        }

        .left {
            transform: translateX(-200px);
            filter: blur(5px);
            transition: 2.4s;
        }

        .top {
            transform: translateY(-200px);
            filter: blur(5px);
            transition: 2.4s;
        }

        .bottom {
            transform: translateY(200px);
            filter: blur(5px);
            transition: 2.4s;
        }

        .left.visible,
        .top.visible,
        .bottom.visible {
            opacity: 1;
            transform: translate(0);
            filter: blur(0);
            opacity: 1;
        }
    </style>
</head>

<body>


    <div class="slider-container">
        <div class="slider" id="slider">
            <div class="slide"><img src="https://cdn.pixabay.com/photo/2014/07/06/13/55/calculator-385506_1280.jpg"
                    alt="Image 1"></div>
            <div class="slide"><img src="https://cdn.pixabay.com/photo/2018/07/10/07/56/business-3528035_960_720.jpg"
                    alt="Image 2"></div>
            <div class="slide"><img
                    src="https://cdn.pixabay.com/photo/2020/08/09/14/25/business-5475660_960_720.jpg"
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


    {{-- ripple --}} {{--
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
    <p>
        Transparence : Nous nous engageons à fournir des informations réelles et vérifiées. La transparence est au
        cœur de notre approche, et nous évitons les fausses informations.
    </p>
    <p>
        Travail : Nous faisons preuve d’un engagement constant auprès de nos clients, cherchant à les satisfaire
        pleinement car ils sont au centre de notre activité.
    </p>
    <p>
        Excellence : Nous visons à offrir un conseil d’excellence, à toujours améliorer nos services et à garantir
        une satisfaction totale à nos clients.
    </p>

</div>

<div style="height: 300vh"></div>
<!-- Load Three.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
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


<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const elementsToObserve = document.querySelectorAll('.left, .top, .bottom');

        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observerCallback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    // observer.unobserve(entry.target); // Optional: Remove the observer after it becomes visible
                } else {
                    entry.target.classList.remove('visible');
                }
            });
        };

        const observer = new IntersectionObserver(observerCallback, observerOptions);

        elementsToObserve.forEach(element => {
            observer.observe(element);
        });
    });
</script>
</body>

</html>



{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider with Navigation Dots</title>
    <style>
        body,
        html {
            padding: 0;
            margin: 0;
            font-family: Arial, sans-serif;
            box-sizing: border-box;
        }

        .slider-container {
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            height: 90vh;
            position: relative;
            overflow: hidden;
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            box-sizing: border-box;
        }

        .slide img {
            width: 100%;
            display: block;
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
            max-width:  100%;
        }

        #rippleCanvas {
            width: 100%;
            height: 50vh;
        }
        }
    </style>
</head>

<body>
    <div>
        <p>Moussa Samaké</p>
    </div>
    <div class="slider-container">
        <div class="slider" id="slider">
            <div class="slide"><img src="https://m.media-amazon.com/images/I/71K4CkU04bL._AC_SL1500_.jpg" alt="Image 1"></div>
            <div class="slide"><img src="https://i5.walmartimages.com/asr/299c9aef-fd6d-426d-bcbc-f1945574730a.7933d342c6d74b4bb3f11a6cf10c4115.jpeg?odnWidth=612&odnHeight=612&odnBg=ffffff" alt="Image 2"></div>
            <div class="slide"><img src="https://www.zdnet.com/a/hub/i/r/2014/10/03/97692bbe-4b47-11e4-b6a0-d4ae52e95e57/thumbnail/770x578/0334cc45e06ff4f57c53b498a4540d47/lenovo-h320.jpg" alt="Image 3"></div>
            <div class="slide"><img src="https://th.bing.com/th/id/OIP.-ENEhUI4XTYBBmMkoron1AHaEn?rs=1&pid=ImgDetMain" alt="Image 4"></div>
        </div>
        <div class="navigation-dots" id="navigationDots">
            <span class="navigation-dot active" data-index="0"></span>
            <span class="navigation-dot" data-index="1"></span>
            <span class="navigation-dot" data-index="2"></span>
            <span class="navigation-dot" data-index="3"></span>
        </div>
    </div>

    <div class="content">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, magni adipisci ad ducimus odio, cum molestiae,
            quasi illo accusantium culpa laboriosam? Natus aliquam soluta quam quisquam odio tempore at quibusdam?</p>
    </div>
    <div id="ripple">
        <div id="rippleCanvas"></div>
        <div id="rippleText">
            <p>ExpertBi ipsum, dolor sit amet consectetur adipisicing elit. Earum temporibus minus facilis maiores quasi,
                officia modi, eos quod nihil non delectus commodi eveniet. Architecto quo eaque saepe corrupti! Corporis, a?
            </p>
        </div>
    </div>
    <div class="content">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, magni adipisci ad ducimus odio, cum molestiae,
            quasi illo accusantium culpa laboriosam? Natus aliquam soluta quam quisquam odio tempore at quibusdam?</p>
    </div>

    <!-- Load Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script>
        var scene = new THREE.Scene();
        var canvasContainer = document.getElementById('rippleCanvas');
        var canvasContainerWidth = canvasContainer.clientWidth;
        var canvasContainerHeight = canvasContainer.clientHeight;
        var camera = new THREE.PerspectiveCamera(75, canvasContainerWidth / canvasContainerHeight, 0.1, 1000);

        var renderer = new THREE.WebGLRenderer({ alpha: true }); // Enable transparency
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
</body>

</html> --}}
