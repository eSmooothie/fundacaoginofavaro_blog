<?php
namespace App\Models;

use CodeIgniter\Model;

class ImageModel extends Model{
  protected $table = 'img_holder';

  protected $primaryKey = 'ID';

  protected $allowedFields = ['PATH', 'DATE', 'SITE_ID', 'NAME','TYPE'];
}
 ?>
