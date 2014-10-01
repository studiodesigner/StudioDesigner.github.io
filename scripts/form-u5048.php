<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2014.1.375
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Studio Designer表單 送出',
	'heading' => '新的表單送出',
	'success_redirect' => '',
	'email' => array(
		'from' => 'mail@studiodesigner.info',
		'to' => 'mail@studiodesigner.info'
	),
	'fields' => array(
		'custom_U5061' => array(
			'type' => 'string',
			'label' => '名稱',
			'required' => false,
			'errors' => array(
			)
		),
		'Email' => array(
			'type' => 'email',
			'label' => '電子郵件',
			'required' => true,
			'errors' => array(
				'required' => '欄位「電子郵件」為必填。',
				'format' => '「電子郵件」欄位有無效的電子郵件。'
			)
		),
		'custom_U5055' => array(
			'type' => 'string',
			'label' => '訊息',
			'required' => true,
			'errors' => array(
				'required' => '欄位「訊息」為必填。'
			)
		),
		'custom_U5065' => array(
			'type' => 'string',
			'label' => '公司',
			'required' => true,
			'errors' => array(
				'required' => '欄位「公司」為必填。'
			)
		),
		'custom_U5069' => array(
			'type' => 'string',
			'label' => '手機',
			'required' => true,
			'errors' => array(
				'required' => '欄位「手機」為必填。'
			)
		)
	)
);

process_form($form);
?>