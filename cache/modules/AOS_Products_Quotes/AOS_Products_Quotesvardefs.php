<?php 
 $GLOBALS["dictionary"]["AOS_Products_Quotes"]=array (
  'table' => 'aos_products_quotes',
  'audited' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
      'inline_edit' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'text',
      'link' => true,
      'unified_search' => true,
      'required' => true,
      'importable' => 'required',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'aos_products_quotes_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'aos_products_quotes_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'aos_products_quotes_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'currency_id' => 
    array (
      'required' => false,
      'name' => 'currency_id',
      'vname' => 'LBL_CURRENCY',
      'type' => 'id',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'len' => 36,
      'size' => '20',
      'studio' => 'visible',
      'function' => 
      array (
        'name' => 'getCurrencyDropDown',
        'returns' => 'html',
        'onListView' => true,
      ),
    ),
    'part_number' => 
    array (
      'required' => false,
      'name' => 'part_number',
      'vname' => 'LBL_PART_NUMBER',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'AOS_Products_Quotespart_number',
    ),
    'item_description' => 
    array (
      'name' => 'item_description',
      'vname' => 'LBL_PRODUCT_DESCRIPTION',
      'type' => 'text',
      'comment' => '',
      'rows' => 6,
      'cols' => 80,
    ),
    'number' => 
    array (
      'required' => false,
      'name' => 'number',
      'vname' => 'LBL_LIST_NUM',
      'type' => 'int',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 0,
      'reportable' => true,
      'len' => '11',
      'disable_num_format' => '',
    ),
    'product_qty' => 
    array (
      'required' => false,
      'name' => 'product_qty',
      'vname' => 'LBL_PRODUCT_QTY',
      'type' => 'decimal',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'len' => '18',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => '4',
    ),
    'product_cost_price' => 
    array (
      'required' => false,
      'name' => 'product_cost_price',
      'vname' => 'LBL_PRODUCT_COST_PRICE',
      'type' => 'currency',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 0,
      'reportable' => true,
      'len' => '26,6',
    ),
    'product_cost_price_usdollar' => 
    array (
      'name' => 'product_cost_price_usdollar',
      'vname' => 'LBL_PRODUCT_COST_PRICE_USDOLLAR',
      'type' => 'currency',
      'group' => 'product_cost_price',
      'disable_num_format' => true,
      'duplicate_merge' => '0',
      'audited' => true,
      'comment' => '',
      'studio' => 
      array (
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
      ),
      'len' => '26,6',
    ),
    'product_list_price' => 
    array (
      'required' => false,
      'name' => 'product_list_price',
      'vname' => 'LBL_PRODUCT_LIST_PRICE',
      'type' => 'currency',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 1,
      'reportable' => true,
      'len' => '26,6',
    ),
    'product_list_price_usdollar' => 
    array (
      'name' => 'product_list_price_usdollar',
      'vname' => 'LBL_PRODUCT_LIST_PRICE_USDOLLAR',
      'type' => 'currency',
      'group' => 'product_list_price',
      'disable_num_format' => true,
      'duplicate_merge' => '0',
      'audited' => true,
      'comment' => '',
      'studio' => 
      array (
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
      ),
      'len' => '26,6',
    ),
    'product_discount' => 
    array (
      'required' => false,
      'name' => 'product_discount',
      'vname' => 'LBL_PRODUCT_DISCOUNT',
      'type' => 'currency',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 1,
      'reportable' => true,
      'len' => '26,6',
    ),
    'product_discount_usdollar' => 
    array (
      'name' => 'product_discount_usdollar',
      'vname' => 'LBL_PRODUCT_DISCOUNT_USDOLLAR',
      'type' => 'currency',
      'group' => 'product_discount',
      'disable_num_format' => true,
      'duplicate_merge' => '0',
      'audited' => true,
      'comment' => '',
      'studio' => 
      array (
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
      ),
      'len' => '26,6',
    ),
    'product_discount_amount' => 
    array (
      'required' => false,
      'name' => 'product_discount_amount',
      'vname' => 'LBL_PRODUCT_DISCOUNT_AMOUNT',
      'type' => 'currency',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 1,
      'reportable' => true,
      'len' => '26,6',
    ),
    'product_discount_amount_usdollar' => 
    array (
      'name' => 'product_discount_amount_usdollar',
      'vname' => 'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR',
      'type' => 'currency',
      'group' => 'product_discount_amount',
      'disable_num_format' => true,
      'duplicate_merge' => '0',
      'audited' => true,
      'comment' => '',
      'studio' => 
      array (
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
      ),
      'len' => '26,6',
    ),
    'discount' => 
    array (
      'required' => false,
      'name' => 'discount',
      'vname' => 'LBL_DISCOUNT',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'Percentage',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 1,
      'reportable' => true,
      'len' => 255,
      'options' => 'discount_list',
      'studio' => 'visible',
    ),
    'product_unit_price' => 
    array (
      'required' => '1',
      'name' => 'product_unit_price',
      'vname' => 'LBL_PRODUCT_UNIT_PRICE',
      'type' => 'currency',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 1,
      'reportable' => true,
      'len' => '26,6',
    ),
    'product_unit_price_usdollar' => 
    array (
      'name' => 'product_unit_price_usdollar',
      'vname' => 'LBL_PRODUCT_UNIT_PRICE_USDOLLAR',
      'type' => 'currency',
      'group' => 'product_unit_price',
      'disable_num_format' => true,
      'duplicate_merge' => '0',
      'audited' => true,
      'comment' => '',
      'studio' => 
      array (
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
      ),
      'len' => '26,6',
    ),
    'vat_amt' => 
    array (
      'required' => '1',
      'name' => 'vat_amt',
      'vname' => 'LBL_VAT_AMT',
      'type' => 'currency',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 1,
      'reportable' => true,
      'len' => '26,6',
    ),
    'vat_amt_usdollar' => 
    array (
      'name' => 'vat_amt_usdollar',
      'vname' => 'LBL_VAT_AMT_USDOLLAR',
      'type' => 'currency',
      'group' => 'vat_amt',
      'disable_num_format' => true,
      'duplicate_merge' => '0',
      'audited' => true,
      'comment' => '',
      'studio' => 
      array (
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
      ),
      'len' => '26,6',
    ),
    'product_total_price' => 
    array (
      'required' => '1',
      'name' => 'product_total_price',
      'vname' => 'LBL_PRODUCT_TOTAL_PRICE',
      'type' => 'currency',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 1,
      'reportable' => true,
      'len' => '26,6',
    ),
    'product_total_price_usdollar' => 
    array (
      'name' => 'product_total_price_usdollar',
      'vname' => 'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR',
      'type' => 'currency',
      'group' => 'product_total_price',
      'disable_num_format' => true,
      'duplicate_merge' => '0',
      'audited' => true,
      'comment' => '',
      'studio' => 
      array (
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
      ),
      'len' => '26,6',
    ),
    'vat' => 
    array (
      'required' => false,
      'name' => 'vat',
      'vname' => 'LBL_VAT',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => '5.0',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 0,
      'reportable' => true,
      'len' => 100,
      'options' => 'vat_list',
      'studio' => 'visible',
    ),
    'parent_name' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'parent_name',
      'vname' => 'LBL_FLEX_RELATE',
      'type' => 'parent',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 1,
      'reportable' => 0,
      'len' => 25,
      'options' => 'product_quote_parent_type_dom',
      'studio' => 'visible',
      'type_name' => 'parent_type',
      'id_name' => 'parent_id',
      'parent_type' => 'record_type_display',
    ),
    'parent_type' => 
    array (
      'required' => false,
      'name' => 'parent_type',
      'vname' => 'LBL_PARENT_TYPE',
      'type' => 'parent_type',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => 0,
      'reportable' => 0,
      'len' => 100,
      'dbType' => 'varchar',
      'studio' => 'hidden',
    ),
    'parent_id' => 
    array (
      'required' => false,
      'name' => 'parent_id',
      'vname' => 'LBL_PARENT_ID',
      'type' => 'id',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => 0,
      'reportable' => 0,
      'len' => 36,
    ),
    'product_id' => 
    array (
      'required' => false,
      'name' => 'product_id',
      'vname' => 'LBL_PRODUCT_ID',
      'type' => 'id',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => 0,
      'reportable' => 0,
      'len' => 36,
    ),
    'group_name' => 
    array (
      'name' => 'group_name',
      'rname' => 'name',
      'vname' => 'LBL_GROUP_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'aos_line_item_groups',
      'id_name' => 'group_id',
      'module' => 'AOS_Line_Item_Groups',
      'duplicate_merge' => 'disabled',
    ),
    'group_id' => 
    array (
      'required' => false,
      'name' => 'group_id',
      'vname' => '',
      'type' => 'id',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => 0,
      'reportable' => 0,
      'len' => 36,
    ),
    'aos_products' => 
    array (
      'name' => 'aos_products',
      'vname' => 'LBL_AOS_PRODUCTS',
      'type' => 'link',
      'relationship' => 'aos_product_quotes_aos_products',
      'module' => 'AOS_Products',
      'bean_name' => 'AOS_Products',
      'source' => 'non-db',
    ),
    'aos_contracts' => 
    array (
      'name' => 'aos_contracts',
      'vname' => 'LBL_AOS_CONTRACTS',
      'type' => 'link',
      'relationship' => 'aos_contracts_aos_products_quotes',
      'module' => 'AOS_Contracts',
      'bean_name' => 'AOS_Contracts',
      'source' => 'non-db',
    ),
    'aos_quotes' => 
    array (
      'name' => 'aos_quotes',
      'vname' => 'LBL_AOS_QUOTES',
      'type' => 'link',
      'relationship' => 'aos_quotes_aos_product_quotes',
      'module' => 'AOS_Quotes',
      'bean_name' => 'AOS_Quotes',
      'source' => 'non-db',
    ),
    'aos_invoices' => 
    array (
      'name' => 'aos_invoices',
      'vname' => 'LBL_AOS_INVOICES',
      'type' => 'link',
      'relationship' => 'aos_invoices_aos_product_quotes',
      'module' => 'AOS_Invoices',
      'bean_name' => 'AOS_Invoices',
      'source' => 'non-db',
    ),
    'random_number_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Número Aleatório',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'random_number_c',
      'vname' => 'LBL_RANDOM_NUMBER',
      'type' => 'int',
      'massupdate' => 0,
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 255,
      'size' => '20',
      'enable_range_search' => false,
      'disable_num_format' => '',
      'min' => false,
      'max' => false,
      'id' => 'AOS_Products_Quotesrandom_number_c',
      'custom_module' => 'AOS_Products_Quotes',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'aos_products_quotespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_aospq_par_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'parent_id',
        1 => 'parent_type',
        2 => 'deleted',
      ),
    ),
  ),
  'relationships' => 
  array (
    'aos_products_quotes_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Products_Quotes',
      'rhs_table' => 'aos_products_quotes',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'aos_products_quotes_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Products_Quotes',
      'rhs_table' => 'aos_products_quotes',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'aos_products_quotes_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Products_Quotes',
      'rhs_table' => 'aos_products_quotes',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'aos_product_quotes_aos_products' => 
    array (
      'lhs_module' => 'AOS_Products',
      'lhs_table' => 'aos_products',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Products_Quotes',
      'rhs_table' => 'aos_products_quotes',
      'rhs_key' => 'product_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_lock' => true,
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => true,
);