<?php

class REDE_ResponsiveItem extends ET_Builder_Module {

	public $slug       = 'rede_responsive_demo';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'https://in3days.website',
		'author'     => 'Vasyl Yaremchuk',
		'author_uri' => 'https://abzats.com',
	);

	public function init() {
		$this->name = esc_html__( 'Responsive Item', 'rede-responsive-demo' );
	}

	public function get_fields() {
		return array(
			'url'     => array(
				'label'           => esc_html__( 'url', 'rede-responsive-demo' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input the URL of the site.', 'rede-responsive-demo' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	// Do not include Background Field
	public function get_advanced_fields_config() {
		return array(
			'background' => false,
		);
	}
	
	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<div class="rede_responsive_demo__wrapper"><iframe class="rede_responsive_demo__scaled-frame" src="%1$s"></iframe></div>', $this->props['url'] );
	}
}

new REDE_ResponsiveItem;
