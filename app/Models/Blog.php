<?php namespace App\Models;
use CodeIgniter\Model;

class Blog extends Model{

    protected $DBGroup = "default";

    protected $table      = 'blogs';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['title','author','img','added_on','content','updated_on','deleted_on','status'];

    protected $useTimestamps = true;
    protected $createdField  = 'added_on';
    protected $updatedField  = 'updated_on';
    protected $deletedField  = 'deleted_on';

    // protected $dateFormat = "int";

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}

    