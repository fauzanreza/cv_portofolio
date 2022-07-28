<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CV - Portofolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
      .nav-link.active{
            background: #000 !important;
            color: #fff !important;
            font-weight: 500;
            border-radius: 0.25rem;
            padding: 0.375rem 0.75rem;
            line-height: 1.5;
        }
        .welcome{
            margin-top:8%;
        }
      @media only screen and (min-width: 768px) {
        .navbar-nav{
            padding-left: 150px !important;
        }
        }
    </style>
  </head>
  <body>
        <section>
                  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background:#fff;">
                          <div class="container-fluid p-1">
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon text-dark"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                              <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-cv text-center">
                                  <li class="nav-item px-1"><a href="/" class="nav-link text-dark" aria-current="page">Home</a></li>
                                  <li class="nav-item px-1"><a href="#" class="nav-link active">Experience</a></li>
                                  <li class="nav-item px-1"><a href="#" class="nav-link text-dark">Project</a></li>
                                  <li class="nav-item px-1"><a href="#" class="nav-link text-dark">FAQs</a></li>                           
                              </ul>
                              </div>
                              <div class="col-md text-end pe-3">
                              <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#contactModal">
                                      Contact Me
                                      </button>

                              </div>
                          </div>
                          </nav>
          </section>
          <section>
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
                <div class="container-fluid" style="background: linear-gradient(180deg, #222  5%, #000 100%);">
                    
                    <div class="col p-5">
                        <div class="col-md welcome textread text-center pt-5">
                        <h1 class="text-white fw-bold fs-1">Experience</h1>
                        <h4 class="text-white fw-bold">Software Engineering Student</h4>
                        <p class="text-white mt-3">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, officia!
                        </p>
                        <ul>
                            <a href="https://www.instagram.com/arz_co/?hl=id" target="_blank"><i class="bi bi-instagram text-white" data-bs-toggle="tooltip" data-bs-placement="left" title="Instagram | @arz_co"></i></a>
                            <a href="https://www.linkedin.com/in/fauzan-reza-arnanda-716bb122a/" target="_blank"><i class="bi bi-linkedin text-white" data-bs-toggle="tooltip" data-bs-placement="left" title="Linkedin"></i></a>
                            <a href="https://github.com/fauzanreza" target="_blank"><i class="bi bi-github text-white" data-bs-toggle="tooltip" data-bs-placement="left" title="GitHub | fauzanreza"></i></a>
                            <i class="bi bi-discord text-white" data-bs-toggle="tooltip" data-bs-placement="left" title="Discord | fauzanreza#2082"></i>
                        </ul>
                        </div>
                    </div>
                </div>
                <img class="img-fluid" src="{{asset('assets/waveupbk.png')}}" alt='' width="100%">

                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#4802fa" fill-opacity="1" d="M0,160L120,176C240,192,480,224,720,234.7C960,245,1200,235,1320,229.3L1440,224L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z" style="user-select: auto;"></path>
</svg> -->
        <div class="container">
        <div class="col fw-bolder text-center fs-2 pt-4 hc">
            <p>About Me</p>
        </div>
        <div class="row pt-3 justify-content-around p-2">
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