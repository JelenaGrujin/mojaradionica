<?php

namespace Admin\controller;

class Bathroom extends Controller
{

    public function showView($data=null){
        $errors=is_array($data)?$data:array();
        $list=$this->bathroom->selectAll();
        $page=$this->getPage();
        $page_base = 'active';
        $page_products = 'active';
        $Bathroom = 'active';
        include 'view/base_files/base_link.php';
    }

    public function insert($data){
        $this->bathroom->insert($data);
        $this->showView();
    }

    public function delete($id){
        $this->bathroom->delete($id);
    }
}