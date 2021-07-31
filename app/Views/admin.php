
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gallery of FGF</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/untitled.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container"><a class="navbar-brand" href="#"><strong>Fundação Gino Fávaro</strong><br></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>/">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container" style="margin-top: 30px;">
        <div class="row row-cols-2">
            <div class="col">
                <div>
                    <form id="addNewLocation" method="post">
                        <div>
                            <h4>Add new location</h4>
                            <hr>
                            <div class="input-group">
                              <span class="input-group-text">Name</span>
                              <input class="form-control" type="text" required="" name="name">
                            </div>
                            <div class="d-flex">
                                <div class="input-group" style="margin-top: 20px;margin-right: 10px;">
                                  <span class="input-group-text">Latitude</span>
                                  <input class="form-control" type="text" inputmode="numeric" required="" name="latitude">
                                </div>
                                <div class="input-group" style="margin-top: 20px;margin-left: 10px;">
                                  <span class="input-group-text">Longitude</span>
                                  <input class="form-control" type="text" inputmode="numeric" required="" name="longitude">
                                </div>
                            </div>
                            <div class="input-group" style="margin-top: 20px;">
                              <span class="input-group-text">Address</span>
                              <input class="form-control" type="text" name="address">
                            </div>
                        </div>
                        <div style="margin-top: 20px;">
                          <label class="form-label">Description:</label>
                          <textarea class="form-control form-control-lg" spellcheck="true" wrap="soft" name="description"></textarea></div>
                        <div style="margin-top: 20px;">
                          <label class="form-label">Add image:</label>
                          <input class="" type="file" name="site_img[]" id="addImg1" accept="image/jpeg, image/x-png" multiple >

                        </div>
                        <div class="d-flex justify-content-end"><button class="btn btn-primary" type="submit" style="margin-top: 20px;">SUBMIT</button></div>
                    </form>
                </div>
            </div>
            <div class="col">
                <form style="height: 100%;" id="uploadImage">
                    <div>
                        <h4>Upload image</h4>
                        <hr>
                        <div>
                          <label class="form-label">Select a site</label>
                          <select class="form-select" required="" name="site" id="selectSite">
                            <option value="">Choose location...</option>
                          </select>
                        </div>
                    </div>
                    <div style="margin-top: 20px;">
                      <input class="" type="file" name="site_img[]" accept="image/jpeg, image/x-png" multiple id="addImg2">
                    </div>
                    <div class="d-flex justify-content-end" style="margin-top: 20px;"><button class="btn btn-primary" type="submit" style="margin-top: 20px;">SUBMIT</button></div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="responseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="responseType">Server response</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" id="responseBody">
            <h4 id="responseBody"></h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="location.reload();">Close</button>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script type="module" src="<?php echo base_url(); ?>/assets/js/admin_script.js" charset="utf-8"></script>
</body>

</html>
