<?php 
namespace App\Models;

use CodeIgniter\Model;

class Post extends Model
{

	protected $validationRules    = [
        'name'     => 'alpha_space|min_length[3]|max_length[50]',
        'email'    => 'valid_email|is_unique[posts.email]'
    ];

    protected $table = 'posts'; 
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = ['name', 'email','image'];

}