<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

class FW_Extension_Social_Facebook extends FW_Extension {

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
		$facebook_tab = array(
			'facebook-tab' => array(
				'title'   => __( 'Facebook', 'fw' ),
				'type'    => 'tab',
				'options' => array(
					'general-settings' => array(
						'title'   => __( 'API Settings', 'fw' ),
						'type'    => 'box',
						'options' => array(
							'facebook-app-id'     => array(
								'type'  => 'text',
								'value' => '',
								'label' => __( 'App ID/API Key:', 'fw' ),
								'desc'  => __( 'Enter Facebook App ID / API Key.', 'fw' ),
							),
							'facebook-app-secret' => array(
								'type'  => 'text',
								'value' => '',
								'label' => __( 'App Secret:', 'fw' ),
								'desc'  => __( 'Enter Facebook App Secret.', 'fw' ),
							),
							apply_filters( 'fw_ext_social_facebook_general_box_options', array() )
						)
					),
					apply_filters( 'fw_ext_social_facebook_boxes_options', array() )
				),
			)
		);

		return array_merge( $tabs, $facebook_tab );
	}
}