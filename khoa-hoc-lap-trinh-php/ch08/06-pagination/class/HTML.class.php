<?php
class HTML{
	
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