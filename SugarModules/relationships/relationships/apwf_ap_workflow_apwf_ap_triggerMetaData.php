<?php
// created: 2012-03-09 13:59:31
$dictionary["apwf_ap_workflow_apwf_ap_trigger"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'apwf_ap_workflow_apwf_ap_trigger' => 
    array (
      'lhs_module' => 'APWF_WorkFlow',
      'lhs_table' => 'apwf_workflow',
      'lhs_key' => 'id',
      'rhs_module' => 'APWF_AP_Trigger',
      'rhs_table' => 'apwf_ap_trigger',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'apwf_ap_apwf_ap_trigger_c',
      'join_key_lhs' => 'apwf_ap696bflow_ida',
      'join_key_rhs' => 'apwf_apae5agger_idb',
    ),
  ),
  'table' => 'apwf_ap_apwf_ap_trigger_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'apwf_ap696bflow_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'apwf_apae5agger_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'apwf_ap_w_apwf_ap_triggerspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'apwf_ap_w_apwf_ap_trigger_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'apwf_ap696bflow_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'apwf_ap_w_apwf_ap_trigger_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'apwf_apae5agger_idb',
      ),
    ),
  ),
);
?>
