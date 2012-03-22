<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class APWF_DetonadoresViewDetail extends ViewDetail {	

	public function getHtmlDetailRow($detonador, $detonadorFields, $moduleFields ){
		$html = <<<html
	<tr>
		<td>{$moduleFields[$detonador->field_trigger]['label']}</td>
		<td>{$detonadorFields['comparacion']['options'][$detonador->comparacion]['value']}</td>
		<td>{$detonador->value_trigger}</td>
	</tr>
html;
		return $html;
	}	
}
?>
