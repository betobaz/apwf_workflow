<?php
// created: 2012-03-12 15:35:54
$dictionary["apwf_workflows_apwf_detonadores"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'apwf_workflows_apwf_detonadores' => 
    array (
      'lhs_module' => 'APWF_Workflows',
      'lhs_table' => 'apwf_workflows',
      'lhs_key' => 'id',
      'rhs_module' => 'APWF_Detonadores',
      'rhs_table' => 'apwf_detonadores',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'apwf_worpwf_detonadores_c',
      'join_key_lhs' => 'apwf_woad78lows_ida',
      'join_key_rhs' => 'apwf_wo7470ores_idb',
    ),
  ),
  'table' => 'apwf_worpwf_detonadores_c',
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
      'name' => 'apwf_woad78lows_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'apwf_wo7470ores_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'apwf_wor_apwf_detonadoresspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'apwf_wor_apwf_detonadores_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'apwf_woad78lows_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'apwf_wor_apwf_detonadores_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'apwf_wo7470ores_idb',
      ),
    ),
  ),
);
?>
