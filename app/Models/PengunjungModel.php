<?php 

namespace App\Models;

use CodeIgniter\Model;

class PengunjungModel extends Model
{
    protected $table = 'tb_pengunjung';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['tgl_berkunjung', 'nama_pengunjung', 'alamat', 'no_telepon', 'keperluan'];
}

?>