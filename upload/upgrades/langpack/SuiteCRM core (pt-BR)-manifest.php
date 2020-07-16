<?PHP
/******************************************
 * SuiteCRM Translations
 * @URL: https://crowdin.com/project/suitecrmtrans
 * @author SuiteCRM Community via Crowdin
 ******************************************/
$manifest = array( 
	'name' => 'Portuguese (Brazil)',
	'description' => 'Tradução: www.crowdin.com/project/suitecrmtranslations',
	'type' => 'langpack',
	'is_uninstallable' => 'Yes',
	'acceptable_sugar_versions' =>
		  array (),
	'acceptable_sugar_flavors' =>
		  array('CE'),
	'author' => 'Comunidade SuiteCRM',
	'version' => '7.11.8.05',
	'published_date' => '2019-10-17',
      );
$installdefs = array(
	'id'=> 'pt_BR',
	'image_dir'=>'<basepath>/images',
	'copy' => array(
	array('from'=> '<basepath>/include','to'=>'include'),
	array('from'=> '<basepath>/modules','to'=>'modules'),
	array('from'=> '<basepath>/install','to'=>'install'),
   )
 );
?>