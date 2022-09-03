<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>CV - Portofolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        *::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
        .nav-link.active{
            background: #212121 !important;
            color: #fff !important;
            font-weight: 500;
            border-radius: 0.25rem;
            padding: 0.375rem 0.75rem;
            line-height: 1.5;
        }
        body{
        background: #F5F5F5;
        overflow-x: hidden;
        font-family: 'Inter', sans-serif;
        text-align: justify;
        }
       
        .row-cols-1 {
            padding: 0 10%;
        }
        .btn-primary,
        .btn-primary:hover,
        .btn-primary:active,
        .btn-primary:visited,
        .btn-primary:focus {
            background-color: #fff !important;
            color: #212121 !important;
            font-weight: 500;
        }
        .welcome{
            padding: 2% 0;
        }
        a:link {
        text-decoration: none;
        }

        a:visited {
        text-decoration: none;
        }
        img, svg {
            vertical-align: baseline !important;
        }

        .pas{
            position: relative;
            top:24% !important;
            /* padding-top:45%;
            margin-top:-45%; */
            left:30%;
        } 
        
        .bi{
            
            margin: 0 10% 0 0 !important;
        }
        .hc{
            font-family: 'Inter', sans-serif;
            font-weight: 600;
        }
        ul#footer-list li {
        display:inline;
        }
        .footer-logo{
            padding-left:13%;
        }
        .footer-logo a{
            color:#4802fa !important;
        }
                
                :root {
    --prm-color: #000;
    --prm-gray: #cdcdcd;
        }

        /* CSS */
        .steps {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            position: relative;
        }

        .step-button {
            border-radius: 0.35rem;
            padding: 0.275rem 0.65rem;
            line-height: 1.5;
            border: none;
            background-color: var(--prm-gray);
            transition: .4s;
        }

        .step-button[aria-expanded="true"] {
            padding: 0.375rem 0.75rem;
            background-color: var(--prm-color);
            color: #fff;
        }

        .done {
            background-color: var(--prm-color);
            color: #fff;
        }

        .step-item {
            z-index: 10;
            text-align: center;
        }

        #progress {
        -webkit-appearance:none;
            position: absolute;
            width: 95%;
            z-index: 5;
            height: 3px;
            margin-left: 18px;
            margin-bottom: 18px;
        }

        /* to customize progress bar */
        #progress::-webkit-progress-value {
            background-color: var(--prm-color);
            transition: .5s ease;
        }

        #progress::-webkit-progress-bar {
            background-color: var(--prm-gray);

        }

       .passive{
        color: #ababab !important;
       }

       .active{
        color: #7986CB !important;
       }
    
    .textread p{
    font-size: 18px;
    font-weight: 500;
    font-family: 'Inter', sans-serif;
    }

    .action{
    text-align: center;
    display: block;
    margin-top: 20px;
    }

    a.btn {
    text-decoration: none;
    color: #666;
    border: 2px solid #666;
    padding: 10px 15px;
    display: inline-block;
    margin-left: 5px;
    }
    a.btn:hover{
    background: #666;
    color: #fff;
        transition: .3s;
    -webkit-transition: .3s;
    }
    .btn:before{
    font-family: FontAwesome;
    font-weight: normal;
    margin-right: 10px;
    }
    .github:before{content: "\f09b"}
    .down:before{content: "\f019"}
    .back:before{content:"\f112"}
    .credit{
        background: #fff;
        padding: 12px;
        font-size: 9pt;
        text-align: center;
        color: #333;
        margin-top: 40px;

    }
    .credit span:before{
    font-family: FontAwesome;
    color: #e41b17;
    content: "\f004";


    }
    .credit a{
    color: #333;
    text-decoration: none;
    }
    .credit a:hover{
    color: #1DBF73; 
    }
    .credit a:hover:after{
        font-family: FontAwesome;
        content: "\f08e";
        font-size: 9pt;
        position: absolute;
        margin: 3px;
    }
    main{
    background: #FFF;
    border-radius: 0.5rem;
    padding:: 20px;
    
    }

    article li{
    color: #444;
    font-size: 15px;
    margin-left: 33px;
    line-height: 1.5;
    padding: 5px;
    }
    article h1,
    article h2,
    article h3,
    article h4,
    article p{
    padding: 14px;
    color: #333;
    }
    article p{
    font-size: 15px;
        line-height: 1.5;
    }
    
    @media only screen and (min-width: 720px){
        main{
        max-width: 1060px;
        margin-left: auto;
        margin-right: auto; 
        padding: 24px;
        }


    }

    .set-overlayer,
    .set-glass,
    .set-sticky {
        cursor: pointer;
        height: 45px;
        line-height: 45px;
        padding: 0 15px;
        color: #333;
        font-size: 16px;
    }
    .set-overlayer:after,
    .set-glass:after,
    .to-active:after,
    .set-sticky:after {
        font-family: FontAwesome;
        font-size: 18pt;
        position: relative;
        float: right;
    }
    .set-overlayer:after,
    .set-glass:after,
    .set-sticky:after {
        content: "\f204";
        transition: .6s;
    }

    .to-active:after {
        content: "\f205";
        color: #008080;
        transition: .6s;
    }
    .set-overlayer,
    .set-glass,
    .set-sticky,
    .source,
    .theme-tray {
        margin: 10px;
        background: #f2f2f2;
        border-radius: 5px;
        border: 2px solid #f1f1f1;
        box-sizing: border-box;
    }
    /* Syntax Highlighter*/

    pre.prettyprint {
        padding: 15px !important;
    margin: 10px;
        border: 0 !important;
    background: #f2f2f2;
    overflow: auto;
    }

    .source {
        white-space: pre;
        overflow: auto;
        max-height: 400px;
    }
    code{
        border:1px solid #ddd;
        padding: 2px;
        border-radius: 2px;
    }
    /* TIMELINE
    –––––––––––––––––––––––––––––––––––––––––––––––––– */

    .timeline ul {
    background: #F5F5F5;
    padding: 50px 0;
    }

    .timeline ul li {
    list-style-type: none;
    position: relative;
    width: 6px;
    margin: 0 auto;
    padding-top: 50px;
    background: #BDBDBD;
    }

    .timeline ul li::after {
    content: "";
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: inherit;
    z-index: 1;
    }

    .timeline ul li div {
    position: relative;
    bottom: 0;
    width: 400px;
    padding: 15px;
    background: #FFF;
    }

    .timeline ul li div::before {
    content: "";
    position: absolute;
    bottom: 7px;
    width: 0;
    height: 0;
    border-style: solid;
    }

    .timeline ul li:nth-child(odd) div {
    left: 45px;
    }

    .timeline ul li:nth-child(odd) div::before {
    left: -15px;
    border-width: 8px 16px 8px 0;
    border-color: transparent #fff transparent transparent;
    }

    .timeline ul li:nth-child(even) div {
    left: -439px;
    }

    .timeline ul li:nth-child(even) div::before {
    right: -15px;
    border-width: 8px 0 8px 16px;
    border-color: transparent transparent transparent #fff;
    }

    time {
    display: block;
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 8px;
    }


    /* EFFECTS
    –––––––––––––––––––––––––––––––––––––––––––––––––– */

    .timeline ul li::after {
    transition: background 0.5s ease-in-out;
    }

    .timeline ul li.in-view::after {
    background: #212121;
    }

    .timeline ul li div {
    visibility: hidden;
    opacity: 0;
    transition: all 0.5s ease-in-out;
    }

    .timeline ul li:nth-child(odd) div {
    transform: translate3d(200px, 0, 0);
    }

    .timeline ul li:nth-child(even) div {
    transform: translate3d(-200px, 0, 0);
    }

    .timeline ul li.in-view div {
    transform: none;
    visibility: visible;
    opacity: 1;
    }


    /* GENERAL MEDIA QUERIES
    –––––––––––––––––––––––––––––––––––––––––––––––––– */

    @media screen and (max-width: 900px) {
    .timeline ul li div {
        width: 250px;
    }
    .timeline ul li:nth-child(even) div {
        left: -289px;
        /*250+45-6*/
    }
    }

    @media screen and (max-width: 600px) {
    .timeline ul li {
        margin-left: 20px;
    }
    .timeline ul li div {
        width: calc(100vw - 91px);
    }
    .timeline ul li:nth-child(even) div {
        left: 45px;
    }
    .timeline ul li:nth-child(even) div::before {
        left: -15px;
        border-width: 8px 16px 8px 0;
        border-color: transparent #BDBDBD transparent transparent;
    }
    }


    /* EXTRA/CLIP PATH STYLES
    –––––––––––––––––––––––––––––––––––––––––––––––––– */
    .timeline-clippy ul li::after {
    width: 40px;
    height: 40px;
    border-radius: 0;
    }

    .timeline-rhombus ul li::after {
    clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
    }

    .timeline-rhombus ul li div::before {
    bottom: 12px;
    }

    .timeline-star ul li::after {
    clip-path: polygon(
        50% 0%,
        61% 35%,
        98% 35%,
        68% 57%,
        79% 91%,
        50% 70%,
        21% 91%,
        32% 57%,
        2% 35%,
        39% 35%
    );
    }

    .timeline-heptagon ul li::after {
    clip-path: polygon(
        50% 0%,
        90% 20%,
        100% 60%,
        75% 100%,
        25% 100%,
        0% 60%,
        10% 20%
    );
    }

    .timeline-infinite ul li::after {
    animation: scaleAnimation 2s infinite;
    }

    @keyframes scaleAnimation {
    0% {
        transform: translateX(-50%) scale(1);
    }
    50% {
        transform: translateX(-50%) scale(1.25);
    }
    100% {
        transform: translateX(-50%) scale(1);
    }
    }

    .home{
        background-image: url("{{asset('assets/computer.jpg')}}");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .overlayh{
        background: linear-gradient(to bottom, rgba(33,33,33,0.5) -20%, #212121 85%);
        padding-top: 10%;
        position: relative;
    }

    .wrapper {
        /*This part is important for centering*/
        display: grid;
        place-items: center;
        }

        .typing-demo {
        width: 34ch;
        animation: typing 3s steps(34), blink .5s step-end infinite alternate;
        white-space: nowrap;
        overflow: hidden;
        border-right: 3px solid;
        border-color: white;
        font-family: monospace;
        font-size: 2em;
        }

        @keyframes typing {
        from {
            width: 0
        }
        }
            
        @keyframes blink {
        50% {
            border-color: transparent
        }
        }
        /* If the screen size is 601px or more, set the font-size of <div> to 80px */
        @media only screen and (min-width: 768px) {
        .navbar-nav{
            padding-left: 150px !important;
        }
        .pas{
            position: relative;
            top: 27% !important;
          
        }
        .bi{
            margin: 0 10% 0 -5% !important;
        }
        .sosmed{
            padding-left:0% !important;
            display: inline;
        }
        img.wave-down{
            position: absolute;
            margin-top:-90px !important;
        }
   
        }

        .skill-item{
            background: #FFF !important;
            color: #000 !important;
            font-weight: 500;
            font-size: 20px;
            border-radius: 1.25rem;
            padding: 0.375rem 0.75rem;
            line-height: 1.2;
        }

        /* If the screen size is 600px or less, set the font-size of <div> to 30px */
        @media only screen and (max-width: 767px) {
        .welcome{
            margin-top: 25%;
        }
        .nav-cv{
            padding:15px !important;
        }
       
        .pas{
            position: relative;
            top: 1% !important;
        }
        img.wave-down{
            position: absolute;
            margin-top:-90px !important;
        }
        .inwave{
            padding-bottom:100px !important;
        }
        }
    </style>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <!-- #4802fa -->
        <header id="header">
            <nav id="navbar" class="navbar navbar-expand-lg navbar-light fixed-top" style="background:#fff;">
                    <div class="container-fluid p-1">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon text-dark"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-cv text-center">
                            <li class="nav-item px-1"><a href="#hero" class="nav-link scrollto" aria-current="page">Home</a></li>
                            <li class="nav-item px-1"><a href="#aboutme" class="nav-link scrollto " aria-current="page">About Me</a></li>
                            <li class="nav-item px-1"><a href="#experience"" class="nav-link scrollto ">Experience</a></li>
                            <li class="nav-item px-1"><a href="#project" class="nav-link scrollto ">Project</a></li>
                        </ul>
                        </div>
                        <div class="col-md text-end pe-3">
                        <button type="button" class="btn" style="background:#212121 !important; color:#FFF;" data-bs-toggle="modal" data-bs-target="#contactModal">
                                Contact Me
                                </button>

                        </div>
                    </div>
                    </nav>
    </header>

    <section id="hero">
                <!-- Modal -->
                <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fs-4 hc fw-bolder" id="contactModalLabel">Contact Me</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <table class="table table-borderless fs-5">
                                    <tbody>
                                        <tr>
                                        <th scope="row">Email</th>
                                        <td><a href="mailto:fauzan.rez@gmail.com" target="_blank" style="color: black;">fauzan.rez@gmail.com</a></td>
                                        </tr>
                                        <tr>
                                        <th></th>
                                        <td><div class="col-md px-3"><a class="btn btn-primary bi bi-arrow-right " href="mailto:fauzan.rez@gmail.com" target="_blank" role="button"> Email Me</a></div></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Phone Number</th>
                                        <td>+6282118452010</td>
                                        </tr>
                                    </tbody>
                                    </table>
                                    <div class="col fw-bolder text-center fs-5">
                                        <p>Other Contact</p>
                                    </div>
                                    <div class="container fs-5">
                                        <div class=" row justify-content-center pb-4">
                                            <div class="col text-center">
                                                <p>WhatsApp</p>
                                                <!-- <img src="{{asset('assets/qr-wa.jpeg')}}" alt='WhatsApp Contact'
                                                style='margin-left: auto; margin-right: auto; width:200px;'> -->
                                                <img src="{{asset('assets/qr-wa.jpeg')}}" alt='WhatsApp Contact'
                                                style='margin-left: auto; margin-right: auto; width:200px;'>
                                            </div>
                                            <div class="col text-center">
                                                <a href="https://www.linkedin.com/in/fauzan-reza-arnanda-716bb122a/" target="_blank" style="color: black; display: block;">Linkedin</a>
                                                <img src="{{asset('assets/qr-linkedin.jpeg')}}" alt='Linkedin Profile'class="mt-3"
                                                style='margin-left: auto; margin-right: auto; width:200px;'>
                                            </div>
                                            <div class="col text-center">
                                                <p>Telegram</p>
                                                <img src="{{asset('assets/qr-tele.jpeg')}}" alt='Telegram Profile'
                                                style='margin-left: auto; margin-right: auto; width:200px;'>
                                            </div>
                                        </div>
                                    </div>

                                    </div>
                                    <!-- <div class="modal-footer justify-content-center">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div> -->
                                    </div>
                                </div>
                                </div>
                <div class="home">
                <div class="container-fluid text-center justify-content-center overlayh" style="padding: 4% 8%;">
                    <div class="row pb-5 justify-content-around" style="padding-top: 12%;">
                        <div class="col-md-6 welcome textread pt-2">
                            <div class="col-md wrapper">
                                <div class="typing-demo">
                                    <h1 class="text-white" style="font-size: 56px; font-weight: 500;">Fauzan Reza Arnanda</h1>
                                </div>
                            </div>
                            <p class="text-white" style="font-size: 28px; font-weight: 500;">Software Engineering Student</p>
                            <p class="text-white" style="padding: 0 3%;">
                                Saya adalah seorang mahasiswa software engineering
                                yang tertarik dengan pengembangan software, terutama
                                dalam bidang web development dan mobile development
                            </p> 
                            <div class="col-md sosmed">
                            <ul>
                                <a href="https://www.instagram.com/arz_co/?hl=id" target="_blank"><i class="bi bi-instagram text-white" data-bs-toggle="tooltip" data-bs-placement="left" title="Instagram | @arz_co"></i></a>
                                <a href="https://www.linkedin.com/in/fauzan-reza-arnanda-716bb122a/" target="_blank"><i class="bi bi-linkedin text-white" data-bs-toggle="tooltip" data-bs-placement="left" title="Linkedin"></i></a>
                                <a href="https://github.com/fauzanreza" target="_blank"><i class="bi bi-github text-white" data-bs-toggle="tooltip" data-bs-placement="left" title="GitHub | fauzanreza"></i></a>
                                <i class="bi bi-discord text-white" data-bs-toggle="tooltip" data-bs-placement="left" title="Discord | fauzanreza#2082"></i>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md">
                                <img class="rounded-circle img-fluid d-block mx-auto p-4" src="{{asset('assets/ozan-free.jpg')}}" alt=''style='width:85%;'>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <img class="img-fluid" src="{{asset('assets/waveupgy.png')}}" alt='' width="100%">
    </section>

                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#4802fa" fill-opacity="1" d="M0,160L120,176C240,192,480,224,720,234.7C960,245,1200,235,1320,229.3L1440,224L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z" style="user-select: auto;"></path>
</svg> -->
<section id="aboutme">
        <div class="container" style="padding: 0 8%;">
        <div class="col text-center fs-1 pt-4 hc">
            <p>About Me</p>
        </div>
        {{-- <div class="row pt-3 justify-content-around">
            <div class="col-md-5 textread">
                <p>
                    Saya merupakan mahasiswa yang sedang mengemban
                    pendidikan di Telkom University. Saya memiliki
                    ketertarikan di bidang pembuatan software, terutama
                    dengan apa yang terjadi di dalam software tersebut. Oleh
                    karena itu, saya selalu terbuka akan kritik dan selalu
                    mencari kesempatan untuk mendapatkan ilmu-ilmu baru
                    yang belum pernah saya ketahui sebelumnya.
                </p>
            </div>
            <div class="col-md-5 textread">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, quasi assumenda nesciunt doloribus error delectus at placeat explicabo temporibus quod. Veniam, debitis itaque sunt nostrum nesciunt illo dignissimos reprehenderit laborum dolore voluptatem nisi nam asperiores eaque accusamus et quos enim aliquid! Eaque iure.</p>
            </div>
        </div> --}}
        <div class="col-md pt-3 textread">
            <p>
                Saya merupakan mahasiswa yang sedang mengemban
                pendidikan di Telkom University. Saya memiliki
                ketertarikan di bidang pembuatan software, terutama
                dengan apa yang terjadi di dalam software tersebut. Oleh
                karena itu, saya selalu terbuka akan kritik dan selalu
                mencari kesempatan untuk mendapatkan ilmu-ilmu baru
                yang belum pernah saya ketahui sebelumnya.
            </p>
        </div>
        </div>
   
    <div class="col text-center fs-1 mb-4 pt-5 hc">
            <p>Riwayat Pendidikan</p>
        </div>
    <main class="mb-4 p-3">
    <!-- Start Stepper HTML -->
    <div class="container">
    <div class="accordion" id="accordionExample">
    <div class="steps pt-3">
        <progress id="progress" value=0 max=100 ></progress>
        <div class="step-item">
            <button class="step-button text-center" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                2016
            </button>
            <div class="step-title">
                SMA
            </div>
        </div>
        <div class="step-item">
            <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                2019
            </button>
            <div class="step-title">
                S1
            </div>
        </div>
        <div class="step-item">
            <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                2024
            </button>
            <div class="step-title">
                S2
            </div>
        </div>
    </div>

    <div class="card">
        <div  id="headingOne">
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="card-body textread">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                probably haven't heard of them accusamus labore sustainable VHS.</p>

            </div>
        </div>
    </div>
    <div class="card">
        <div  id="headingTwo">

        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="card-body textread">
                <p>nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                probably haven't heard of them accusamus labore sustainable VHS.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div  id="headingThree">

        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="card-body textread">
                <p>nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                beer labore wes anderson cred nesciunt sapiente ea proident. Lorem ipsum dolor sit amet 
                consectetur adipisicing elit. Deserunt sunt aliquid necessitatibus accusantium? Nesciunt Saepe!.</p>
            </div>
        </div>
    </div>
    </div>
    </div>
            <!-- End Start Stepper HTML -->
    </main>
    </section>
    <section id="experience">
        <img class="img-fluid" src="{{asset('assets/wavednsklgy.png')}}" alt='' width="100%">
        <div class="container-fluid pb-5 inwave" style="background: #212121; margin-top: -8px;" style="padding: 0 8%;">
        <div class="col text-center fs-1 mb-3 pb-4 pt-5 text-white hc" style="font-family: 'Inter', sans-serif;">
            <p>SKILLS</p>
        </div>
        <div class="container pb-2">
        <div class="row justify-content-around p-3">
            <div class="col-md-5 text-center">
                <div class="col-md">
                    <p class="text-white fs-2 fw-bolder">Coding</p>
                </div>
                <div class="col-md">
                    <div class="row pt-3">
                        <div class="col">
                            <p class="skill-item">HTML</p>
                        </div>
                        <div class="col">
                            <p class="skill-item">CSS</p>
                        </div>
                        <div class="col">
                            <p class="skill-item">Javascript</p>
                        </div>
                        <div class="col">
                            <p class="skill-item">PHP</p>
                        </div>
                        <div class="col">
                            <p class="skill-item">MySQL</p>
                        </div>
                        <div class="col">
                            <p class="skill-item">MongoDB</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 text-center">
                <div class="col-md">
                    <p class="text-white fs-2 fw-bolder">Tools</p>
                </div>
                <div class="col-md">
                    <div class="row pt-3">
                        <div class="col">
                            <p class="skill-item">Bootstrap</p>
                        </div>
                        <div class="col">
                            <p class="skill-item">Bash</p>
                        </div>
                        <div class="col">
                            <p class="skill-item">Git</p>
                        </div>
                        <div class="col">
                            <p class="skill-item">Github</p>
                        </div>
                        <div class="col">
                            <p class="skill-item">Gitlab</p>
                        </div>
                        <div class="col">
                            <p class="skill-item">VS Code</p>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="row justify-content-around p-3 mt-4">
            <div class="col-md-5 text-center">
                <div class="col-md">
                    <p class="text-white fs-2 fw-bolder">Familiar But Not Very Skilled</p>
                </div>
                <div class="col-md">
                    <div class="row pt-3">
                        <div class="col">
                            <p class="skill-item">C++</p>
                        </div>
                        <div class="col">
                            <p class="skill-item">JAVA</p>
                        </div>
                        <div class="col">
                            <p class="skill-item">Docker</p>
                        </div>
                        <div class="col">
                            <p class="skill-item">Flutter</p>
                        </div>
                        <div class="col">
                            <p class="skill-item">Kubernetes</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 text-center">
                <div class="col-md">
                    <p class="text-white fs-2 fw-bolder">Language</p>
                </div>
                <div class="col-md">
                    <div class="row pt-3">
                        <div class="col">
                            <p class="skill-item">Indonesia</p>
                        </div>
                        <div class="col">
                            <p class="skill-item">English</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-4">
            <div class="card rounded-3">
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque facilis dolores eius, at vero inventore sequi optio ducimus iure quas asperiores quae officia, qui provident illo modi cum veritatis et similique delectus incidunt porro! Enim, beatae quos voluptatibus ad iure ab ea voluptates laboriosam saepe!
                </div>
            </div>
            </div> -->
        </div>
        </div>
        </div>
        <img class="img-fluid" src="{{asset('assets/wavedngy2.png')}}" alt='' width="100%">
        <div class="container-fluid">
        <div class="col text-center fs-1 pt-4 hc" style="margin: -100px;">
            <p>Experience</p>
        </div>
        </div>
        <div class="timeline mt-5 pt-5">
        <ul>
          <li>
            <div>
              <time>1934</time> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
            </div>
          </li>
          <li>
            <div>
              <time>1937</time> Proin quam velit, efficitur vel neque vitae, rhoncus commodo mi. Suspendisse finibus mauris et bibendum molestie. Aenean ex augue, varius et pulvinar in, pretium non nisi.
            </div>
          </li>
          <li>
            <div>
              <time>1940</time> Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros.
            </div>
          </li>
          <li>
            <div>
              <time>1943</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
            </div>
          </li>
          <li>
            <div>
              <time>1946</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
            </div>
          </li>
          <li>
            <div>
              <time>1956</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
            </div>
          </li>
          <li>
            <div>
              <time>1957</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
            </div>
          </li>
          <li>
            <div>
              <time>1967</time> Aenean condimentum odio a bibendum rhoncus. Ut mauris felis, volutpat eget porta faucibus, euismod quis ante.
            </div>
          </li>
          <li>
            <div>
              <time>1977</time> Vestibulum porttitor lorem sed pharetra dignissim. Nulla maximus, dui a tristique iaculis, quam dolor convallis enim, non dignissim ligula ipsum a turpis.
            </div>
          </li>
          <li>
            <div>
              <time>1985</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
            </div>
          </li>
          <li>
            <div>
              <time>2000</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
            </div>
          </li>
          <li>
            <div>
              <time>2005</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
            </div>
          </li>
        </ul>
    </div>
    </section>
    <section id="project">
    <img class="img-fluid" src="{{asset('assets/wavedngyexp.png')}}" alt='' width="100%">
    <div class="container-fluid p-5 inwave" style="background: #212121; margin-top: -8px;">
        <div class="col text-center fs-1 pt-4 text-white hc">
            <p>Project</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center mt-5">
        <div class="col-md-3 m-2">
            <div class="card bg-dark text-white">
            <img src="{{asset('assets/ferarri.png')}}" class="card-img" alt="..." style="background: #212121;  opacity: 0.5;">
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text</p>
                <p class="card-text">Last updated 3 mins ago</p>
            </div>
            </div>
        </div>
        <div class="col-md-3 m-2">
            <div class="card bg-dark text-white">
            <img src="{{asset('assets/ferarri.png')}}" class="card-img" alt="..." style="background: #212121;  opacity: 0.5;">
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text</p>
                <p class="card-text">Last updated 3 mins ago</p>
            </div>
            </div>
        </div>
        <div class="col-md-3 m-2">
            <div class="card bg-dark text-white">
            <img src="{{asset('assets/ferarri.png')}}" class="card-img" alt="..." style="background: #212121;  opacity: 0.5;">
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text</p>
                <p class="card-text">Last updated 3 mins ago</p>
            </div>
            </div>
        </div>
        <div class="col-md-3 m-2">
            <div class="card bg-dark text-white">
            <img src="{{asset('assets/ferarri.png')}}" class="card-img" alt="..." style="background: #212121;  opacity: 0.5;">
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text</p>
                <p class="card-text">Last updated 3 mins ago</p>
            </div>
            </div>
        </div>
        <div class="col-md-3 m-2">
            <div class="card bg-dark text-white">
            <img src="{{asset('assets/ferarri.png')}}" class="card-img" alt="..." style="background: #212121;  opacity: 0.5;">
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text</p>
                <p class="card-text">Last updated 3 mins ago</p>
            </div>
            </div>
        </div>
        <div class="col-md-3 m-2">
            <div class="card bg-dark text-white">
            <img src="{{asset('assets/ferarri.png')}}" class="card-img" alt="..." style="background: #212121;  opacity: 0.5;">
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text</p>
                <p class="card-text">Last updated 3 mins ago</p>
            </div>
            </div>
        </div>
        </div>
        </div>
    <img class="img-fluid" src="{{asset('assets/wavesklgy.png')}}" alt='' width="100%">
    </section>
    <section>
        <footer class="container-fluid pb-5 text-center" style="background:white; margin-top: -90px; padding-top:110px;">
        <ul id="footer-list" class="px-2">
        <li class="p-3"><a href="#" class="text-dark fs-6">Home</a></li>
        <li class="p-3"><a href="#aboutme" class="passive fs-6">About Me</a></li>
        <li class="p-3"><a href="#experience" class="passive fs-6">Experience</a></li>
        <li class="p-3"><a href="#project" class="passive fs-6">Project</a></li>
        </ul>
        <ul class="footer-logo">
            <a href="https://www.instagram.com/arz_co/?hl=id" target="_blank"><i class="bi bi-instagram active" data-bs-toggle="tooltip" data-bs-placement="left" title="Instagram | @arz_co"></i></a>
            <a href="https://www.linkedin.com/in/fauzan-reza-arnanda-716bb122a/" target="_blank"><i class="bi bi-linkedin active" data-bs-toggle="tooltip" data-bs-placement="left" title="Linkedin"></i></a>
            <a href="https://github.com/fauzanreza" target="_blank"><i class="bi bi-github active" data-bs-toggle="tooltip" data-bs-placement="left" title="GitHub | fauzanreza"></i></a>
            <i class="bi bi-discord active" data-bs-toggle="tooltip" data-bs-placement="left" title="Discord | fauzanreza#2082"></i>
        </ul>
        <p class="text-dark" style="font-size: 14px; font-weight: 500;">Web Resume by Fauzan Reza A.</p>
        </footer>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
    const stepButtons = document.querySelectorAll('.step-button');
    const progress = document.querySelector('#progress');

    Array.from(stepButtons).forEach((button,index) => {
        button.addEventListener('click', () => {
            progress.setAttribute('value', index * 100 /(stepButtons.length - 1) );//there are 3 buttons. 2 spaces.

            stepButtons.forEach((item, secindex)=>{
                if(index > secindex){
                    item.classList.add('done');
                }
                if(index < secindex){
                    item.classList.remove('done');
                }
            })
        })
    })
    </script>
    <script>
        const links = document.querySelectorAll('.nav-link');
    
    if (links.length) {
      links.forEach((link) => {
        link.addEventListener('click', (e) => {
          links.forEach((link) => {
              link.classList.remove('active');
          });
          link.classList.add('active');
        });
      });
    }
    </script>
     <script>
        (function () {
        "use strict";

        // define variables
        var items = document.querySelectorAll(".timeline li");

        // check if an element is in viewport
        // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <=
                (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        function callbackFunc() {
            for (var i = 0; i < items.length; i++) {
            if (isElementInViewport(items[i])) {
                items[i].classList.add("in-view");
            }
            }
        }

        // listen for events
        window.addEventListener("load", callbackFunc);
        window.addEventListener("resize", callbackFunc);
        window.addEventListener("scroll", callbackFunc);
        })();
    </script>
    
    <script>
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 20
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

})()
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>