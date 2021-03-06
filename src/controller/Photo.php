<?php 
namespace Admin\controller;

use Admin\model\ProductsDao;
use Admin\model\OwnersDao;
use Admin\model\PhotoDao;

class Photo extends Controller {

	public function showPhotos(){
		
		$id=isset($_GET['id'])?$_GET['id']:"";

		$photo=new PhotoDao();
		$photos=$photo->selectByProduct($id);

		if (empty($photos)) {
			$msg='No pictures in the database';
		}

        $page_product='active';
		$page_product_photo = 'active';
		include 'view/app_link.php';
	}
	
	public function showEditPhotos(){
		$id_product=isset($_GET['id_pro'])?$_GET['id_pro']:"";
		
		$photos = $this->daopropho->selectFromProductsPhoto($id_product);

		if (empty($photos)) {
			$msg='No pictures in the database';
		}

		$page_productpa='active';
		$page_edit_photo = 'active';
		include 'app_link.php';
	}

	public function deletePhoto(){
		
		$id_photo=isset($_GET['id_photo'])?$_GET['id_photo']:"";
		
		
			$all=$this->daopropho->selectFromProductsPhotoById($id_photo);
			foreach ($all as $s) {
				$id_product=$s['id_products'];
				 $file= '../css/image/'.$s['name_photo'];
	          			  unlink($file);
			}
			
			$this->dao->deleteFromProductPhoto($id_photo);
	
			$photos = $this->daopropho->selectFromProductsPhoto($id_product);
			
			if (!empty($photos)){
				
				$page_productpa='active';
				$page_edit_photo = 'active';
				include 'app_link.php';
				
			}else {
				
				$msg='ProductInfo ID: '.$id_product.' does not have any more photos in the database';

				$productlist=$this->daoproduct->selectFromProducts();
				$ownerlist=$this->daoowner->selectFromOwners();
		
				$page_productpa='active';
				$page_list_productpa='active';	
				include 'app_link.php';	
			}
	}
	
	
	
}

?>