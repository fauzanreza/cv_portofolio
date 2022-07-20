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
    <style>
        .nav-link.active{
            background: #fff !important;
            color: #4802fa !important;
            font-weight: 500;
        }
        .btn-primary,
        .btn-primary:hover,
        .btn-primary:active,
        .btn-primary:visited,
        .btn-primary:focus {
            background-color: #fff !important;
            border-color: #4802fa !important;
            color: #4802fa !important;
            font-weight: 500;
        }
        .welcome{
            padding-left: 150px !important;
        }
        a:link {
        text-decoration: none;
        }

        a:visited {
        text-decoration: none;
        }

        a:hover {
        text-decoration: underline;
        color: blue !important;
        }

        a:active {
        text-decoration: underline;
        }
        .nav{
            padding-left: 150px !important;
        }
    </style>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
        <section>
                    <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg navbar-dark fixed-top p-3" style="background:#9933ff;" >
                        <ul class="nav nav-pills px-5">
                            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-white">Experience</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-white">Project</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-white">FAQs</a></li>                           
                        </ul>
                        <div class="col-md text-end pe-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contactModal">
                                Contact Me
                                </button>

                        </div>
                        </nav>
                    </div>
    </section>

    <section>
                <!-- Modal -->
                <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fs-4" id="contactModalLabel">Contact Me</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <table class="table table-borderless fs-5">
                                    <tbody>
                                        <tr>
                                        <th scope="row">Email</th>
                                        <td><a href="mailto:fauzan.rez@gmail.com" target="_blank" style="color: black;">fauzan.rez@gmail.com</a></td>
                                        <td><a class="btn btn-primary bi bi-arrow-right" href="mailto:fauzan.rez@gmail.com" target="_blank" role="button"> Email Me</a></td>
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
                                                <img src="{{asset('assets/qr-wa.jpeg')}}" alt='WhatsApp Contact'
                                                style='margin-left: auto; margin-right: auto; width:200px;'>
                                            </div>
                                            <div class="col text-center">
                                                <a href="https://www.linkedin.com/in/fauzan-reza-716bb122a/" target="_blank" style="color: black; display: block;">Linkedin</a>
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
                <div class="container-fluid p-4 mt-4" style="background: linear-gradient(to bottom, #9933ff 15%, #4802fa 100%);">
                    
                    <div class="row pt-4">
                        <div class="col-md p-2 welcome">
                        <h1 class="text-white mt-5 fw-bold fs-1">Fauzan Reza Arnanda</h1>
                        <h1 class="text-white mt-2 fs-4">Back End Developer | Software Architecture</h1>
                        <p class="text-white mt-2 fw-bolder mt-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure enim, omnis, itaque ut nesciunt repellat atque alias earum, esse in quam eveniet natus doloremque dolorum sed voluptatibus? Totam, aperiam rerum. In, nesciunt laudantium minus quos doloribus voluptates itaque natus.</p>
                        </div>
                        <div class="col-md p-2">
                            <img class="rounded-circle img-fluid d-block mx-auto mb-3" src="http://127.0.0.1:8000/assets/ozan.jpeg" alt='Fauzan Reza Arnanda'
                                style='width:50%;'>
                        </div>
                    </div>
                </div>
                

                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#4802fa" fill-opacity="1" d="M0,160L120,176C240,192,480,224,720,234.7C960,245,1200,235,1320,229.3L1440,224L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z" style="user-select: auto;"></path>
</svg> -->
    </section>
    <img class="img-fluid" src="{{asset('assets/wave.png')}}" alt='wave' width="125%">
    <section>
        <div class="container">
        <div class="col fw-bold text-center fs-2 pt-4">
            <p>About Me</p>
        </div>
        <div class="row pt-3 justify-content-evenly" style="margin-bottom: 2000px;">
            <div class="col-md-5">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium earum ducimus placeat? Libero impedit officia velit ab dolorum laborum reiciendis esse illum quo laboriosam, voluptate doloremque, nemo quam sint voluptatem? Iure voluptas culpa, quos assumenda neque facere est, ducimus nostrum obcaecati beatae quaerat accusantium omnis!</p>
            </div>
            <div class="col-md-5">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, quasi assumenda nesciunt doloribus error delectus at placeat explicabo temporibus quod. Veniam, debitis itaque sunt nostrum nesciunt illo dignissimos reprehenderit laborum dolore voluptatem nisi nam asperiores eaque accusamus et quos enim aliquid! Eaque iure.</p>
            </div>
        </div>
        </div>
        
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>