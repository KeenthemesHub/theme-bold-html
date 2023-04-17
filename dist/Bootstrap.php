<?php
class Bootstrap extends BootstrapBase {	
	// Properties
	private static $sidebarMenu;

	private static function initSidebarMenu() {
		self::$sidebarMenu = new Menu( Theme::getOption('menu', 'sidebar'), Theme::getPagePath() );
	}

	private static function initScripts() {
		// Global widgets
		Theme::addPageJs('js/widgets.bundle.js');

		// Custom widgets
		Theme::addPageJs('js/custom/widgets.js');
		
		// Chat app
		Theme::addPageJs('js/custom/apps/chat/chat.js');		 
	}

	private static function initWidthSettings() {
		$pageWidth = "";

		// Prepare page width value
		if ( Theme::getOption('layout', 'app/general/page-width') === 'fluid' ) {
			$pageWidth = "fluid";
		} elseif ( Theme::getOption('layout', 'app/general/page-width') === 'fixed' ) {
			$pageWidth = "fixed";
		} 
		
		// Set page width
		if ( $pageWidth === 'fluid' ) {
			Theme::setOption("layout", "app/header/default/container", "fluid");
			Theme::setOption("layout", "app/toolbar/container", "fluid");
			Theme::setOption("layout", "app/content/container", "fluid");  
			Theme::setOption("layout", "app/footer/container", "fluid");
		} elseif ( $pageWidth === 'fixed' ) {
			Theme::setOption("layout", "app/header/default/container", "fixed");
			Theme::setOption("layout", "app/toolbar/container", "fixed");
			Theme::setOption("layout", "app/content/container", "fixed");  
			Theme::setOption("layout", "app/footer/container", "fixed");
		}
	}

	public static function getSidebarMenu() {
		return self::$sidebarMenu;
	}

	public static function getBreadcrumb() {
		$options = array(
			'skip-active' => false
		);

		return Bootstrap::getSidebarMenu()->getBreadcrumb($options);
	}

	public static function initLayout() {
		Theme::addHtmlAttribute("body", "id", "kt_app_body");

		self::initWidthSettings();
		self::initSidebarMenu();	
		self::initScripts();		
	}
}