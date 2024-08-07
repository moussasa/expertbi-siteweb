<style>
    .little-title {
        position: relative;
        font-weight: 800;
        font-family: 'Consolas', monospace;
        font-size: 1.63rem;
        background: linear-gradient(90deg, #ff6ec4, #7873f5);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .little-title::before {
        position: absolute;
        content: '';
        width: 80px;
        height: 5px;
        bottom: -8px;
        left: 5px;
        background: linear-gradient(90deg, #ff6ec4, #7873f5);

    }


    .little-title-little {
        position: relative;
        font-weight: 800;
        font-family: 'Consolas', monospace;
        font-size: 1.25rem;
        background: linear-gradient(90deg, #ff6ec4, #7873f5);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .little-title-little::before {
        position: absolute;
        content: '';
        width: 80px;
        height: 5px;
        bottom: -8px;
        left: 5px;
        background: linear-gradient(90deg, #ff6ec4, #7873f5);

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

    .content {
        padding: 10px;
    }

    footer {
        width: 100%;
        height: auto;
        background: linear-gradient(90deg, #ff6ec4, #7873f5);
        color: white;
    }

    .all_footer {
        padding: 15px;
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        color: white;
    }

    .footer_contact {
        width: 35%;
        color: white;
        margin-left: 20px;
    }

    .footer_logo {
        display: block;
        width: 65%;
    }

    .footer_logo_text p {
        color: white;
    }

    .footer_logo .img {
        width: 30px;
        height: 100px;
        margin: auto;
        transform: translateX(-40px)
    }

    .footer_logo .img img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }

    #footer_i {
        color: white;
        margin-right: 10px;
    }

    .footer_contact a {
        color: white;
        text-decoration: none;
    }

    .footer_contact p {
        color: white;
    }

    .footer_about a {
        color: yellow;
        text-decoration: none;
    }

    .footer_about {
        padding: 0 20px;
        width: 30%;
    }


    @media (max-width: 910px) {
        footer {
            width: 100%;
            margin: 0;
        }

        .footer_logo {
            display: block;
            width: 100%;
        }

        .footer_logo_text {
            width: 100%;
        }

        .footer_contact {
            width: 100%;
        }

        .all_footer {
            padding: 20px;
            margin: 0;
            width: 100%;
            display: flex;
            flex-direction: column;
            color: white;
        }

        .footer_logo {
            display: block;
        }

        #footer_i {
            margin-right: 15px;
            color: white;
        }

        .footer_logo .img {
            margin: 0 auto;
            width: 90px;
            height: 90px;
            transform: translateX(0px)
        }

        .footer_contact {
            border-top: 4px solid white;
            margin-top: 5px;
            padding-top: 10px;
            margin-left: 0
        }

        .footer_contact h5 {
            text-align: center;
            font-weight: 900;
            color: white;
        }



        .footer_logo_text {
            margin-top: 15px;
        }

    }
</style>
</div>
</div>
<footer>
    <div class="all_footer">

        <div class="footer_logo">
            <div class="img">
                <img src="{{ asset('img/logo/logo.png') }}" alt="expertbi">
            </div>
            <div class="footer_logo_text">
                {{-- <h4>ExpertBI</h4> --}}
                <p>Nous utilisons les outils informatiques pour aider les entreprises à réaliser un meilleur
                    suivi de leurs activités quotidiennes et à visualiser leurs indicateurs clés de
                    performance. Spécialisés dans le conseil en gestion, nous nous chargeons également de la
                    gestion des ressources humaines, du conseil fiscal, des missions d'expertise judiciaire
                    et des audits.</p>
                <span>Copyright &copy; 2024 - <?php echo date('Y'); ?></span> All rights reserved.
            </div>
        </div>

        <div class="footer_contact">
            <h5>Contacts</h5>
            <p><i id="footer_i" class="fa fa-map-marker" aria-hidden="true"></i>ACI 200 Bamako (MALI)</p>
            <p><a href="tel:+22362845592" style="text-decoration: none;color:white;"><i id="footer_i"
                        class="fa fa-phone"></i>+223-62-84-55-92</a></p>
            <p><i id="footer_i" class="fa fa-envelope"></i><a
                    href="mailto:expertbi18@gmail.com">expertbi18@gmail.com</a></p>
        </div>


    </div>

    {{-- <footer id="footer">
    <div class="container">
        <div class="row"> --}}
    <!-- <div class="footer-ribbon">
                <span>ExpertBI-SARL</span>
            </div> -->
    {{-- <div class="col-md-6">
                <div class="newsletter bottom-texte-blanc">
                    <div class="bottom-title"
                        style="font-size: 3em;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;padding-bottom: 21px;">
                        ExpertBI-SARL</div>
                    <p>Nous utilisons les outils informatiques pour aider les entreprises à réaliser un meilleur
                        suivi de leurs activités quotidiennes et à visualiser leurs indicateurs clés de
                        performance. Spécialisés dans le conseil en gestion, nous nous chargeons également de la
                        gestion des ressources humaines, du conseil fiscal, des missions d'expertise judiciaire
                        et des audits.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-details">
                    <div class="bottom-title">Contactez-nous</div>
                    <ul class="list-icons contact bottom-texte-blanc">
                        <li>
                            <p><i class="fa fa-map-marker"></i> <strong>Adresse :</strong> Hamdallaye ACI 2000
                            </p>
                        </li>
                        <li>
                            <p><i class="fa fa-phone"></i> <strong>Téléphone :</strong> 0022362845592</p>
                        </li>
                        <li>
                            <p><i class="fa fa-envelope"></i> <strong>Email :</strong> <a
                                    href="mailto:expertbi18@gmail.com"
                                    title="Envoyez un email à ExpertBI">expertbi18@gmail.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
    <div class="footer-copyright" style="padding-bottom: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-1"><img alt="ExpertBI-SARL.com" width="80" height="27" style="min-width:none"
                        loading="lazy" src="{{ asset('img/logo/logo.png') }}" alt="expertbi"></div>
                <div class="col-md-7">
                    <p>© Copyright 2024. All Rights Reserved.</p>
                </div>
                <div class="col-md-4">
                    <nav id="sub-menu">
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer> --}}
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
    @yield('script')

    <!-- Head Libs -->
    <script src="{{ asset('vendor/jquery.validation/jquery.validation.min.js') }}" async="async"></script>

    <!-- Vendor -->
    <script src="{{ asset('vendor/jquery.appear/jquery.appear.min.js') }}" async="async"></script>
    <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}" async="async"></script>
    <script src="{{ asset('vendor/jquery-cookie/jquery-cookie.min.js') }}" async="async"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/common/common.min.js') }}" async="async"></script>

    <script src="{{ asset('vendor/jquery.lazyload/jquery.lazyload.min.js') }}" async="async"></script>
    <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}" async="async"></script>

    <script src="{{ asset('vendor/vide/vide.min.js') }}" async="async"></script>
    <!-- Theme Base, Components and Settings -->
    {{-- btn to top --}}
    <script src="{{ asset('js/theme.min.js') }}"></script>
    {{-- btn to top --}}

    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}" async="async"></script>
    <script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}" async="async"></script>
    <!-- <script src="/js/views/view.home.js"></script> -->
    <!-- Current Page Vendor and Views -->
    <!-- javascript pour formulaire sur le coté -->
    <!--<script src="/js/views/view.contact.js"></script>-->
    <!-- Theme Custom -->
    <script src="{{ asset('js/custom.js') }}" async="async"></script>
    <!-- Theme Initialization Files -->
    <script src="{{ asset('js/theme.init.min.js') }}" async="async"></script>
    <!-- Examples -->
    <!-- <script src="/js/examples/examples.portfolio.js"></script> -->
    <!-- Cookie Consent by TermsFeed https://www.TermsFeed.com -->
    <!-- <script type="text/javascript" src="js/termsfeed/cookie-consent.js" charset="UTF-8"></script>
<script type="text/javascript" charset="UTF-8">
    document.addEventListener('DOMContentLoaded', function() {
        cookieconsent.run({
            "notice_banner_type": "simple",
            "consent_type": "express",
            "palette": "light",
            "language": "fr",
            "page_load_consent_levels": ["strictly-necessary"],
            "notice_banner_reject_button_hide": false,
            "preferences_center_close_button_hide": false,
            "page_refresh_confirmation_buttons": false,
            "website_name": "ExpertBI-SARL.fr"
        });
    });
</script> -->
    <!-- Google GA4 tag (gtag.js) -->
    <!-- <script type="text/plain" data-cookie-consent="tracking" async src="https://www.googletagmanager.com/gtag/js?id=G-QLSLZGE3M7"></script>
<script type="text/plain" data-cookie-consent="tracking">
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-QLSLZGE3M7');
</script> -->
    <!-- Javascript pour les liens -->
    <script>
        $(document).ready(function() {
            $('.data-product').click(function(event) {

                location.href = $(this).attr("data-product");
            });

        });
    </script>
    <!-- Tag MS -->
    <!-- <script type="text/plain" data-cookie-consent="targeting">(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"17497594"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script> -->
    <!-- Start of HubSpot Embed Code -->
    <!-- <script type="text/plain" data-cookie-consent="strictly-necessary" id="hs-script-loader" async defer src="https://js.hs-scripts.com/4107829.js"></script> -->
    <!-- End of HubSpot Embed Code -->
    </body>

    </html>
