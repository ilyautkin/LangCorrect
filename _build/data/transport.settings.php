<?php

$settings = array();

$tmp = array(
	/*'some_setting' => array(
		'xtype' => 'combo-boolean',
		'value' => true,
		'area' => 'langcorrect_main',
	),*/
);

foreach ($tmp as $k => $v) {
	/* @var modSystemSetting $setting */
	$setting = $modx->newObject('modSystemSetting');
	$setting->fromArray(array_merge(
		array(
			'key' => 'langcorrect_'.$k,
			'namespace' => PKG_NAME_LOWER,
		), $v
	),'',true,true);

	$settings[] = $setting;
}

unset($tmp);
return $settings;
