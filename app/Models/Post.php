<?php 
namespace App\Models;

use CodeIgniter\Model;

class Post extends Model
{
    protected $table = 'posts'; 
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = ['name', 'email'];

}