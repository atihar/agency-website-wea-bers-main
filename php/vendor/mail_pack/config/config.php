<?php
	return [
		'subscribe' => [
				'api_key' => '',
				'list_uid' => '',//List unique id from here - http://admin.mailchimp.com/lists/
		        'gateway' => 'file', // allow values are "mailchimp" or "file"
			],
		'contact'   => [
			'to'      => 'info@weabersinc.com',
			'subject' => 'your subject',
			'headers' => "From: (Your site) \r\n Content-type: text/html; charset=utf-8",
			'SmtpHost'   => 'mail.weabersinc.com',
			'SmtpPort'   => '465',
			'SmtpUser'   => 'webform@weabersinc.com',
			'SmtpPass'   => '',
			'SmtpSecure' => 'ssl',
			'debug' => false,
		],
	];