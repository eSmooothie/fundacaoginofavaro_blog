<div class="container mb-5">
        <a class="btn btn-primary" href="<?php echo base_url();?>/admin/view/sites">Back</a>
</div>
<div class="d-flex justify-content-center">
    <form id="editLocation" method="post" class="w-50">
        <div>
            <h4>Edit Site</h4>
            <hr>
            <input type="hidden" name="id" value="<?php echo $info['ID'];?>">
            <div class="input-group">
                <span class="input-group-text">Name</span>
                <input class="form-control" type="text" name="name" value="<?php echo $info['NAME'];?>">
            </div>
            <div class="d-flex">
                <div class="input-group" style="margin-top: 20px;margin-right: 10px;">
                    <span class="input-group-text">Latitude</span>
                    <input class="form-control" type="text" inputmode="numeric" name="latitude" value="<?php echo $info['LAT'];?>">
                </div>
                <div class="input-group" style="margin-top: 20px;margin-left: 10px;">
                    <span class="input-group-text">Longitude</span>
                    <input class="form-control" type="text" inputmode="numeric" name="longitude" value="<?php echo $info['LNG'];?>">
                </div>
            </div>
            <div class="input-group" style="margin-top: 20px;">
                <span class="input-group-text">Address</span>
                <input class="form-control" type="text" name="address" value="<?php echo $info['ADDRESS'];?>">
            </div>
        </div>
        <div style="margin-top: 20px;">
            <label class="form-label">Description:</label>
            <textarea class="form-control form-control-lg" spellcheck="true" wrap="soft" name="description"><?php echo $info['DESCRIPTION'];?></textarea></div>
        <div style="margin-top: 20px;">
            <label class="form-label">Add image:</label>
            <input class="" type="file" name="site_img[]" id="addImg1" accept="image/jpeg, image/x-png" multiple >

        </div>
        <div class="d-flex justify-content-end"><button class="btn btn-primary" type="submit" style="margin-top: 20px;">SUBMIT</button></div>
    </form>
</div>

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
<script type="module" src="<?php echo base_url(); ?>/assets/js/admin_edit.js" charset="utf-8"></script>