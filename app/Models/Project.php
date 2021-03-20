<?php namespace App\Models;
use CodeIgniter\Model;

class Project extends Model{

    protected $DBGroup = "default";

    protected $table      = 'projects';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['title','type',"location", "img",'added_on','updated_on','deleted_on','status'];

    protected $useTimestamps = true;
    protected $createdField  = 'added_on';
    protected $updatedField  = 'updated_on';
    protected $deletedField  = 'deleted_on';

    // protected $dateFormat = "int";

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}

