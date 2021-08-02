<div class="d-flex justify-content-center w-100">
  <?php if(!empty($info['ID'])){ ?>
  <form class="w-50" method="post" id="removeSite">
    <div class="" style="margin-bottom: 50px;">

    </div>
    <div class="border border-rounded p-3">
      <h1 class="col-10">Confirmation</h1>
      <hr>
      <input type="hidden" name="id" value="<?php echo $info['ID']; ?>">
      <p>Please enter <span style="font-size: larger; color:red;" class="fw-bold"><?php echo $info['NAME']; ?></span> for confirmation.</p>
      <input type="text" name="siteName" value="" class="form-control">
      <div class="d-flex justify-content-end">
        <button class="btn btn-outline-danger" type="submit" style="margin-top: 20px;margin-right:5px;">Delete</button>
        <a href="<?php echo base_url(); ?>/admin/view/sites" class="btn btn-primary" style="margin-top: 20px;margin-left:5px;">Back</a>
      </div>
    </div>
  </form>
<?php }else{ ?>
  <div class="w-50">
    <h1 class="col-10">Success</h1>
    <hr>
    <a href="<?php echo base_url(); ?>/admin/view/sites" class="btn btn-primary" style="margin-top: 20px;margin-left:5px;">Back</a>
  </div>
  <?php
} ?>
</div>

<script type="module" src="<?php echo base_url(); ?>/assets/js/admin_edit.js" charset="utf-8"></script>
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="location.reload();" id="modalBtn">Close</button>
      </div>
    </div>
  </div>
</div>
