<?php
  if(session()->has('allow')){
    session()->remove('allow');
  }
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Fundação Gino Fávaro</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/untitled.css">

</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="/"><strong>Fundação Gino Fávaro</strong><br></a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ms-auto">
                <a href="/" class="btn navbar-brand">Home</a>
              </ul>
              <div class="d-flex align-items-center">
                <a href="<?php echo base_url(); ?>/explore/" class="btn navbar-brand" >Explore TIMOR-leste</a>
                <span class="text-white" style="margin-left:20px;"><a href="<?php echo base_url(); ?>/admin/login" class="navbar-brand"><i class="fa fa-lock"></i></a></span>
              </div>

            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/home-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="site-heading">
                        <h1>Fundação Gino&nbsp;Fávaro<br></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="">
                  <div class="d-flex justify-content-center">
                      <img class="img-fluid" src="<?php echo base_url();?>/image/084_edited.jpg" alt="" style="height:250;width:200;">
                  </div>

                    <article>
                        <p style="text-align: justify;"><br>Ever since independence was granted to the people of Timor-Leste, the nation is still growing and is gradually developing. While the other parts of the world are learning how to control the lights to turn into blue or red, the people of Timor-Leste are still learning how to enact the theories that they have learned from their ancestors and of recently from their schools. As a result, a number of foundations have emerged from this small nation. One of these foundations is the Gino Favaro Foundation or is locally called the&nbsp;<strong><em>Fundação Gino Favaro</em></strong><em>.</em><br><br></p>
                    </article>
                </div>
                <!-- <section class="contact-clean" style="background: rgb(255,255,255);">
                    <form method="post">
                        <h2 class="text-center">Contact us</h2>
                        <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                        <div class="mb-3"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"><small class="form-text text-danger">Please enter a correct email address.</small></div>
                        <div class="mb-3"><textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea></div>
                        <div class="mb-3"><button class="btn btn-primary" type="submit">send </button></div>
                    </form>
                </section> -->
            </div>
            <div class="col-md-10 col-lg-8">
                <div>
                    <h2 class="post-title" style="text-align: center;">Blogs<br></h2>
                </div>
                <hr>
                <div class="post-preview"><a href="<?php echo base_url(); ?>/blog/post/1" target="_blank">
                        <h2 class="post-title">Timor-Leste: A Better Future&nbsp;Ahead<br></h2>
                        <h3 class="post-subtitle"></h3>
                    </a>
                    <p class="post-meta">Posted by&nbsp;Francis Ian Montecalvo</p>
                </div>
                <hr>
                <div class="post-preview"><a href="<?php echo base_url(); ?>/blog/post/2" target="_blank">
                        <h2 class="post-title">Deep Gulf and Fundação Gino Fávaro partnership<br></h2>
                        <h3 class="post-subtitle"></h3>
                    </a>
                    <p class="post-meta">Posted by&nbsp;Francis Ian Montecalvo</p>
                </div>
                <hr>
                <div class="post-preview"><a href="<?php echo base_url(); ?>/blog/post/3" target="_blank">
                        <h2 class="post-title">Energy for Our People<br></h2>
                        <h3 class="post-subtitle"></h3>
                    </a>
                    <p class="post-meta">Posted by&nbsp;Francis Ian Montecalvo</p>
                </div>
                <hr>
                <div class="post-preview"><a href="<?php echo base_url(); ?>/blog/post/4" target="_blank">
                        <h2 class="post-title">Signing of MOU<br></h2>
                        <h3 class="post-subtitle"></h3>
                    </a>
                    <p class="post-meta">Posted by&nbsp;Francis Ian Montecalvo</p>
                </div>
                <hr>
                <div class="post-preview"><a href="<?php echo base_url(); ?>/blog/post/5" target="_blank">
                        <h2 class="post-title">The Potential Development of Soibada<br></h2>
                        <h3 class="post-subtitle"></h3>
                    </a>
                    <p class="post-meta">Posted by&nbsp;Francis Ian Montecalvo</p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                  <ul class="list-group">
                    <li class="list-group-item mb-5">Contact Us:
                      <p class="m-2"><i class="fa fa-envelope-o"></i> Email: <a href="mailto:fundacaoginofavaro@gmail.com" style="text-decoration:none;">fundacaoginofavaro@gmail.com</a></p>
                      <div class="d-flex justify-content-around m-5">
                        <div class="">
                          <p class="m-0">President Director</p>
                          <p class="m-0">Mr. Gino Favaro</p>
                          <p class="m-0"><i class="fa fa-phone"></i> : +670 772 31058</p>
                        </div>
                        <div class="">
                          <p class="m-0">President Director of Administration</p>
                          <p class="m-0">Dr. Joao Concalves</p>
                          <p class="m-0"><i class="fa fa-phone"></i> : +670 782 58770</p>
                        </div>
                      </div>


                    </li>
                  </ul>
                    <p class="text-muted copyright">This website develop by: <a href="mailto:sherwin.sandoval026@gmail.com" style="text-decoration:none;">Sherwin D. Sandoval</a></p>
                    <p class="text-muted copyright">Blog information develop by: Francis Ian Montecalvo</p>
                    <p class="text-muted copyright">Copyright&nbsp;©&nbsp;Fundação Gino Fávaro 2021</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/clean-blog.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/Lightbox-Gallery.js"></script>
</body>

</html>
