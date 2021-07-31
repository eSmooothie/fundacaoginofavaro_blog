<?php
namespace App\Models;

use CodeIgniter\Model;

class SiteModel extends Model{
  protected $table = 'site_info';

  protected $primaryKey = 'ID';

  protected $allowedFields = ['NAME', 'LAT', 'LNG', 'DESCRIPTION', 'ADDRESS'];
}
 ?>
