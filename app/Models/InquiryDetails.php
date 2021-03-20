<?php namespace App\Models;
use CodeIgniter\Model;

class InquiryDetails extends Model{

    protected $DBGroup = "default";

    protected $table      = 'inquiry_details';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['first_name','last_name','phone','service_type','message','added_on','updated_on','deleted_on','status'];

    protected $useTimestamps = true;
    protected $createdField  = 'added_on';
    protected $updatedField  = 'updated_on';
    protected $deletedField  = 'deleted_on';

    // protected $dateFormat = "int";

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}

    