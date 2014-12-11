<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

class FW_Extension_Social_LinkedIn extends FW_Extension {

	/**
	 * @internal
	 */
	public function _init() {
		$this->add_filters();
	}

	private function add_filters() {
		add_filter( 'fw_ext_social_tabs', array( $this, '_filter_fw_ext_social_tabs' ) );
	}

	/**
	 * Insert options from /options/tabs.php
	 *
	 * @param $tabs
	 *
	 * @internal
	 * @return array
	 */
	public function _filter_fw_ext_social_tabs( $tabs ) {
		$linked_in_tab = array(
			'linked-in-tab' => array(
				'title'   => __( 'LinkedIn', 'fw' ),
				'type'    => 'tab',
				'options' => array(
					'general-settings' => array(
						'title'   => __( 'API Settings', 'fw' ),
						'type'    => 'box',
						'options' => array(
							'linkedin-app-id'              => array(
								'type'  => 'text',
								'value' => '',
								'label' => __( 'Consumer Key', 'fw' ),
								'desc'  => __( 'Enter LinkedIn API Key', 'fw' ),
							),
							'linkedin-app-secret'          => array(
								'type'  => 'text',
								'value' => '',
								'label' => __( 'Consumer Secret', 'fw' ),
								'desc'  => __( 'Enter LinkedIn Secret Key', 'fw' ),
							),
							'linkedin-access-token'        => array(
								'type'  => 'text',
								'value' => '',
								'label' => __( 'Access Token', 'fw' ),
								'desc'  => __( 'Enter LinkedIn OAuth 1.0a User Token', 'fw' ),
							),
							'linkedin-access-token-secret' => array(
								'type'  => 'text',
								'value' => '',
								'label' => __( 'Access Token Secret', 'fw' ),
								'desc'  => __( 'Enter LinkedIn OAuth 1.0a User Secret', 'fw' ),
							),
							apply_filters( 'fw_ext_social_linked_in_general_box_options', array() )
						)
					),
					apply_filters( 'fw_ext_social_linked_in_boxes_options', array() )
				),
			)
		);

		return array_merge( $tabs, $linked_in_tab );
	}
}