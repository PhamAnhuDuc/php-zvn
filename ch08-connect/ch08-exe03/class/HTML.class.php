<?php

//tạo nhanh ra mã nguồn html = php  và sinh ra các mã html
//dùng nhanh để k phải khởi tạo đối tượng thì dùng static public
class HTML{
			//arrData là các giá trị được chọn trong selecbox  - key được chọn - 
	static public function createSelectbox($arrData, $name, $keySelected = null, $class = null){
		$xhtml = "";
		if(!empty($arrData)) {
			$xhtml = '<select class="'.$class.'" name="'.$name.'">';
			foreach($arrData as $key=>$value){
				if($keySelected == $key && $keySelected != null){
					$xhtml .= '<option value="'.$key.'" selected="true">'.$value.'</option>';
				}else{
					$xhtml .= '<option value="'.$key.'">'.$value.'</option>';
				}
			}
			$xhtml .= '</select>';
		}
		return $xhtml;
	}
}