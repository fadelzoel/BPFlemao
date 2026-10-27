<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fadel Ahmad - Portfolio</title>
    <meta name="description" content="Portfolio of Fadel Ahmad, an Informatics Engineering student who has been working with computers since age 7.">

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets-portofolio/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-portofolio/css/styles.css') }}">

    <!-- small visual refinements on top of the template (safe to delete) -->
    <style>
        /* keyboard focus */
        a:focus-visible, .btn:focus-visible {
            outline: 2px solid currentColor;
            outline-offset: 4px;
        }

        /* intro: tighter, stronger headline */
        .s-intro__content-title { letter-spacing: -0.02em; line-height: 1.12; }
        .s-intro__content-pretitle { opacity: .75; }

        /* about: story on the left, quick facts on the right */
        .fz-about {
            display: grid;
            grid-template-columns: minmax(0, 1.6fr) minmax(0, 1fr);
            gap: clamp(2.4rem, 6vw, 8rem);
            align-items: start;
            margin-top: 3.2rem;
        }
        .fz-about .attention-getter { margin: 0 0 2.4rem; }
        .fz-about p.fz-body { max-width: 62ch; line-height: 1.8; opacity: .85; margin: 0 0 1.6rem; }

        .fz-facts {
            margin: 0;
            padding: 0;
            list-style: none;
            border-top: 1px solid rgba(128,128,128,.35);
        }
        .fz-facts li {
            display: flex;
            flex-direction: column;
            gap: .2rem;
            padding: 1.6rem 0;
            border-bottom: 1px solid rgba(128,128,128,.35);
        }
        .fz-facts .fz-label { font-size: 1.3rem; opacity: .6; }
        .fz-facts .fz-value { font-size: 1.9rem; line-height: 1.3; }

        .fz-tags { display: flex; flex-wrap: wrap; gap: .8rem; margin: 2.4rem 0 0; padding: 0; list-style: none; }
        .fz-tags li {
            padding: .5rem 1.4rem;
            border: 1px solid rgba(128,128,128,.5);
            border-radius: 999px;
            font-size: 1.4rem;
        }

        @media (max-width: 800px) {
            .fz-about { grid-template-columns: 1fr; }
        }

        /* works: soft lift on thumbnails */
        .folio-entries .entry__thumb { overflow: hidden; border-radius: 4px; }
        .folio-entries .entry__thumb img { transition: transform .5s ease; }
        .folio-entries .entry__link:hover .entry__thumb img,
        .folio-entries .entry__link:focus-visible .entry__thumb img { transform: scale(1.04); }

        .fz-empty { text-align: center; padding: 6rem 2rem; opacity: .7; }

        /* footer admin link stays quiet */
        .fz-admin { opacity: .45; transition: opacity .2s ease; }
        .fz-admin:hover, .fz-admin:focus-visible { opacity: 1; }

        @media (prefers-reduced-motion: reduce) {
            .folio-entries .entry__thumb img { transition: none; }
            .folio-entries .entry__link:hover .entry__thumb img { transform: none; }
        }
    </style>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets-portofolio/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets-portofolio/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets-portofolio/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets-portofolio/site.webmanifest') }}">

</head>


<body id="top">

    
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">


        <!-- # site header 
        ================================================== -->
        <header class="s-header">
            <div class="row s-header__inner">

                <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="#intro">
                            <img src="{{ asset('assets-portofolio/images/logo.svg') }}" alt="Fadel Ahmad - Home">
                        </a>
                    </div>

                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->

                <nav class="s-header__nav">    
                    <ul class="s-header__menu-links">
                        <li class="current"><a class="smoothscroll" href="#intro">Intro</a></li>
                        <li><a class="smoothscroll" href="#about">About</a></li>
                        <li><a class="smoothscroll" href="#works">Projects</a></li>
                        <li><a class="smoothscroll" href="#footer">Contact</a></li>
                    </ul> <!-- s-header__menu-links -->    
                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->
        </header> <!-- end s-header -->


        <!-- # intro
        ================================================== -->
        <section id="intro" class="s-intro target-section">

            <div class="row s-intro__content width-sixteen-col">
                <div class="column lg-12 s-intro__content-inner grid-block grid-16">
                    
                    <div class="s-intro__content-text">

                        <div class="s-intro__content-pretitle text-pretitle">Hello, I'm Fadel</div>
                        <h1 class="s-intro__content-title">
                        Informatics student <br>
                        at home on computers <br>
                        since I was seven.
                        </h1>                            

                        <div class="s-intro__content-btns">
                            <a class="smoothscroll btn" href="#works">See My Projects</a>
                            <a class="smoothscroll btn btn--stroke" href="#footer">Get In Touch</a>
                        </div> <!-- s-intro__content-btns -->   

                    </div> <!-- s-intro__content-text -->                     
                    
                </div> <!-- s-intro__content-inner -->  
            </div> <!-- s-intro__content -->

            <div class="s-intro__content-media">                               
                <img src="{{ asset('assets-portofolio/images/meh.jpeg') }}" srcset="{{ asset('assets-portofolio/images/meh.jpeg') }} 1x, {{ asset('assets-portofolio/images/meh.jpeg') }} 2x" alt="">
            </div> <!-- s-intro__content-media -->                
            
            <div class="s-intro__scroll-down">
                <a href="#about" class="smoothscroll">
                    <div class="scroll-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></svg>
                    </div>
                    <span class="scroll-text u-screen-reader-text">Scroll Down</span>
                </a>
            </div> <!-- s-intro__scroll-down -->

        </section> <!-- end s-intro -->


        <!-- # about
        ================================================== -->
        <section id="about" class="s-about target-section">

            <div class="row s-about__content">
                <div class="column xl-12">    
                    
                    <div class="section-header" data-num="01">
                        <h2 class="text-display-title">About Me.</h2>
                    </div> <!-- end section-header -->

                    <div class="fz-about">

                        <div>
                            <p class="attention-getter">
                            I'm Fadel Ahmad, an Informatics Engineering (Teknik Informatika) student in the G25 cohort. I've been using computers since I was 7, and I never stopped taking them apart to see how they work.
                            </p>

                            <p class="fz-body">
                            In middle school I got curious about how games protect themselves and ended up cracking game DRM. It taught me a lot about how software really runs, how it gets protected, and how those protections break. That curiosity is what drives my work today.
                            </p>

                            <p class="fz-body">
                            I like figuring out how things work and building things of my own. The projects below are a running record of that, and new ones appear here as I add them.
                            </p>

                            <ul class="fz-tags" aria-label="Interests">
                                <li>Software</li>
                                <li>Reverse engineering</li>
                                <li>Troubleshooting</li>
                                <li>Web development</li>
                            </ul>
                        </div>

                        <ul class="fz-facts">
                            <li>
                                <span class="fz-label">Name</span>
                                <span class="fz-value">Fadel Ahmad</span>
                            </li>
                            <li>
                                <span class="fz-label">Studying</span>
                                <span class="fz-value">Teknik Informatika, G25</span>
                            </li>
                            <li>
                                <span class="fz-label">On computers since</span>
                                <span class="fz-value">Age 7</span>
                            </li>
                        </ul>

                    </div> <!-- end fz-about -->

                </div> <!--end column -->
            </div> <!--end s-about__content -->
            
        </section> <!-- end s-about -->   


        <!-- # works
        ================================================== -->
        <section id="works" class="s-works target-section">

            <div class="row">
                <div class="column xl-12">
                    <div class="section-header" data-num="02">
                        <h2 class="text-display-title">My Projects.</h2>
                    </div> <!-- end section-header -->
                </div>
            </div>

            <div class="row folio-entries">

                @if(count($portofolios) > 0)
                    @foreach($portofolios as $item)
                    <div class="column entry">
                        <a href="{{ asset('storage/' . $item->image) }}" class="entry__link glightbox" data-glightbox="title: {{ $item->title }}; description: .entry__desc-{{ $item->id }}">
                            <div class="entry__thumb">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
                            </div>
                            <div class="entry__info">
                                <h4 class="entry__title">{{ $item->title }}</h4>
                                <div class="entry__cat">Project</div>
                            </div>
                        </a>

                        <div class="glightbox-desc entry__desc-{{ $item->id }}">
    <p>
        {{ $item->description }}
        
        @if($item->link)
            <br><br>
            <a href="{{ $item->link }}" target="_blank" style="color: #00a650; text-decoration: underline; font-weight: bold;">Visit Project &rarr;</a>
        @endif
    </p>
</div>
                    </div> <!-- entry -->
                    @endforeach
                @else
                    <div class="column xl-12 fz-empty">
                        <p>No projects yet. Check back soon.</p>
                    </div>
                @endif

            </div> <!-- folio entries -->

        </section> <!-- end s-works --> 


        <!-- # footer 
        ================================================== -->
        <footer id="footer" class="s-footer target-section">

            <div class="row">
                <div class="column lg-12">
                    <div class="section-header light-on-dark" data-num="03">
                        <h2 class="text-display-title">Get In Touch.</h2>
                    </div> <!-- end section-header -->
                </div>
            </div>

            <div class="row s-footer__content">

                <div class="column xl-6 md-12 s-footer__block s-footer__about">                    
                    <p class="attention-getter">
                    Want to talk about a project, a problem, or just computers? Send me an email or a message on Instagram and I'll get back to you.
                    </p>               
                </div> <!-- end section-footer__about -->

                <div class="column xl-6 md-12 s-footer__block s-footer__site-links">
                    <div class="row">
                        <div class="column xl-4 lg-5 md-6 tab-12">
                            <h5>Follow Me</h5>
                            <ul class="link-list">
                                <li><a href="https://www.instagram.com/fadelzoel_" target="_blank" rel="noopener noreferrer">Instagram</a></li>
                                <li><a href="https://www.facebook.com/search/top?q=fadel%20zoel" target="_blank" rel="noopener noreferrer">Facebook</a></li>
                            </ul>
                        </div>
                        <div class="column xl-6 md-6 tab-12">
                            <h5>Contact Me</h5>
                            <ul class="link-list">
                                <li><a href="mailto:fadelzoel30@gmail.com">fadelzoel30@gmail.com</a></li>
                                <li><a href="tel:+6289635584399">+62 896-3558-4399</a></li>
                            </ul> 
                        </div>
                    </div>                    
                </div> <!-- end section-footer__site-links -->

            </div> <!-- end section-footer__content -->

            <div class="row s-footer__bottom">
                
                <div class="column xl-6 lg-12">
                    <p class="ss-copyright">
                        <span>© Copyright Fadel Ahmad 2026</span> 
                        <!-- SECRET ADMIN LINK HERE -->
                        <span> | <a class="fz-admin" href="{{ route('portofolio.admin') }}" style="color: #666; text-decoration: none;">Admin Panel</a></span>
                    </p>
                </div>

            </div> <!-- end section-footer__bottom -->          

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">                 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5.536 21.886a1.004 1.004 0 0 0 1.033-.064l13-9a1 1 0 0 0 0-1.644l-13-9A1 1 0 0 0 5 3v18a1 1 0 0 0 .536.886z"></path></svg>
                </a>                                
                <span>Back To Top</span>   
            </div> <!-- end ss-go-top -->
            
        </footer> <!-- end s-footer -->

    </div> <!-- end page-wrap -->


    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('assets-portofolio/js/plugins.js') }}"></script>
    <script src="{{ asset('assets-portofolio/js/main.js') }}"></script>

</body>
</html>