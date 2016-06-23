<?php 
	include_once 'class_MYSQLI_connection.php';
	class Product extends MYSQLI_connection{

		public function loadProductItem(){
			$sucess = false;
			$qry = "
					SELECT
					id, 
					name, 
					quantity, 
					(SELECT category FROM tbl_categories WHERE id = p.category_id) as category_id,
					(SELECT name FROM tbl_suppliers WHERE id = p.supplier_id) as supplier_id
					FROM tbl_products as p;";
			$res = $this->con->query($qry);
			require_once '../includes/helpers/helper_product_stock';
			
		}

	}
?>