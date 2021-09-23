<?php
	return [
		'subscribe' => [
				'api_key' => '',
				'list_uid' => '',//List unique id from here - http://admin.mailchimp.com/lists/
		        'gateway' => 'file', // allow values are "mailchimp" or "file"
			],
		'contact'   => [
			'to'      => 'info@weabers.com',
			'subject' => 'From website contact form',
			'headers' => "From: (Your site) \r\n Content-type: text/html; charset=utf-8",
			'SmtpHost'   => 'mail.weabers.com',
			'SmtpPort'   => '465',
			'SmtpUser'   => 'webform@weabers.com',
			'SmtpPass'   => '',
			'SmtpSecure' => 'ssl',
			'debug' => false,
		],
	];