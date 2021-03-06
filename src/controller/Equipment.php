<?php
namespace Admin\controller;
    
class Equipment extends Controller{

    public function showView($data=null){
        $errors=is_array($data)?$data:array();
        $list=$this->equipment->selectAll();
        $page=$this->getPage();
        $page_base = 'active';
        $page_products = 'active';
        $Equipment = 'active';
        include 'view/base_files/base_link.php';
    }
    
    public function insert($data){

        $this->equipment->insert($data);
        $this->showView();
    }

    public function delete($id){
        $this->equipment->delete($id);
    }
}