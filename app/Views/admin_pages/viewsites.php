
    <div class="container" style="margin-top: 30px;">
        <div class="container mb-5">
            <a class="btn btn-primary" href="<?php echo base_url();?>/admin">Back</a>
        </div>
        <div class="row row-cols-2 justify-content-center">
            <?php
            foreach($sites as $key => $site){
            ?>
            <div class="col card m-3 p-3" style="width: 18rem;">
                <img src="https://via.placeholder.com/400x400" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $site['NAME']?></h5>
                </div>
                <div class="d-flex justify-content-around">
                        <a href="<?php echo base_url();?>/admin/site/edit/<?php echo $site['ID'];?>" class="btn btn-primary w-50">Edit</a>
                        <a href="<?php echo base_url(); ?>/admin/site/remove/<?php echo $site['ID']; ?>" class="btn btn-danger w-50">Remove</a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <script type="module" src="<?php echo base_url(); ?>/assets/js/admin_view.js" charset="utf-8"></script>
