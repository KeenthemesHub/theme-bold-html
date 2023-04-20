<?php
return array(
    'index' => array(
        'title' => 'Account',
        'view' => 'index',        
        'assets' => array(
            'vendors' => array('fullcalendar', 'amcharts', 'amcharts-maps'),
        )
    ), 

    'pages' => array(
		'general' => array(
			'about' => array(
				'title' => 'About Us',
				'view' => 'pages/about/main',
				'assets' => array(
					'vendors' => array('fslightbox')
				)
			),
	
			'invoice' => array(
				'title' => 'Invoice',
				'view' => 'apps/invoices/view/invoice-1/main',
				'layout' => array(
					'main' => array(
						'body' => array(
							'class' => 'print-content-only'
						)
					)                
				)
			),
	
			'faq' => array(
				'title' => 'FAQ',
				'view' => 'pages/faq/classic/main',
				'assets' => array(
					'vendors' => array('fslightbox')
				)
			),
	
			'wizard' => array(
				'pro' => true,
				'title' => 'Wizard',
				'view' => 'utilities/wizards/horizontal/horizontal',
				'assets' => array(
					'custom' => array(
						'js' => array(
							'js/custom/utilities/modals/create-account.js'
						)
					)
				)
			),
	
			'pricing' => array(
				'pro' => true,
				'title' => 'Pricing',
				'view' => 'pages/pricing/pricing-2',
				'assets' => array(
					'custom' => array(
						'js' => array(
							'js/custom/pages/pricing/general.js'
						)
					)
				)
			)
		)        
	)
);