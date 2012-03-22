<?php
// created: 2012-03-09 13:59:31
$dictionary["APWF_AP_Trigger"]["fields"]["apwf_ap_w_apwf_ap_trigger"] = array (
  'name' => 'apwf_ap_w_apwf_ap_trigger',
  'type' => 'link',
  'relationship' => 'apwf_ap_workflow_apwf_ap_trigger',
  'source' => 'non-db',
  'vname' => 'LBL_APWF_AP_WORKFLOW_APWF_AP_TRIGGER_FROM_APWF_WORKFLOW_TITLE',
);
$dictionary["APWF_AP_Trigger"]["fields"]["apwf_ap_f_ap_trigger_name"] = array (
  'name' => 'apwf_ap_f_ap_trigger_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_APWF_AP_WORKFLOW_APWF_AP_TRIGGER_FROM_APWF_WORKFLOW_TITLE',
  'save' => true,
  'id_name' => 'apwf_ap696bflow_ida',
  'link' => 'apwf_ap_w_apwf_ap_trigger',
  'table' => 'apwf_workflow',
  'module' => 'APWF_WorkFlow',
  'rname' => 'name',
);
$dictionary["APWF_AP_Trigger"]["fields"]["apwf_ap696bflow_ida"] = array (
  'name' => 'apwf_ap696bflow_ida',
  'type' => 'link',
  'relationship' => 'apwf_ap_workflow_apwf_ap_trigger',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_APWF_AP_WORKFLOW_APWF_AP_TRIGGER_FROM_APWF_AP_TRIGGER_TITLE',
);
