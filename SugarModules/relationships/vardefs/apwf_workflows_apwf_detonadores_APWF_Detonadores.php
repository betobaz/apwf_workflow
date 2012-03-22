<?php
// created: 2012-03-12 15:35:54
$dictionary["APWF_Detonadores"]["fields"]["apwf_wor_apwf_detonadores"] = array (
  'name' => 'apwf_wor_apwf_detonadores',
  'type' => 'link',
  'relationship' => 'apwf_workflows_apwf_detonadores',
  'source' => 'non-db',
  'vname' => 'LBL_APWF_WORKFLOWS_APWF_DETONADORES_FROM_APWF_WORKFLOWS_TITLE',
);
$dictionary["APWF_Detonadores"]["fields"]["apwf_wor_detonadores_name"] = array (
  'name' => 'apwf_wor_detonadores_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_APWF_WORKFLOWS_APWF_DETONADORES_FROM_APWF_WORKFLOWS_TITLE',
  'save' => true,
  'id_name' => 'apwf_woad78lows_ida',
  'link' => 'apwf_wor_apwf_detonadores',
  'table' => 'apwf_workflows',
  'module' => 'APWF_Workflows',
  'rname' => 'name',
);
$dictionary["APWF_Detonadores"]["fields"]["apwf_woad78lows_ida"] = array (
  'name' => 'apwf_woad78lows_ida',
  'type' => 'link',
  'relationship' => 'apwf_workflows_apwf_detonadores',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_APWF_WORKFLOWS_APWF_DETONADORES_FROM_APWF_DETONADORES_TITLE',
);
