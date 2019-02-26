<?php
/**
 * Breadcrumbs Options for Astra theme.
 *
 * @package     Astra
 * @author      Brainstorm Force
 * @copyright   Copyright (c) 2019, Brainstorm Force
 * @link        https://www.brainstormforce.com
 * @since       Astra 1.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Astra_Breadcrumbs_Configs' ) ) {

	/**
	 * Customizer Sanitizes Initial setup
	 */
	class Astra_Breadcrumbs_Configs extends Astra_Customizer_Config_Base {

		/**
		 * Register Astra-Breadcrumbs Settings.
		 *
		 * @param Array                $configurations Astra Customizer Configurations.
		 * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
		 * @since 1.6.15
		 * @return Array Astra Customizer Configurations with updated configurations.
		 */
		public function register_configuration( $configurations, $wp_customize ) {

			$_configs = array(

				/*
				 * Breadcrumb
				 */
				array(
					'name'     => 'section-breadcrumb',
					'type'     => 'section',
					'title'    => __( 'Breadcrumb', 'astra' ),
					'panel'    => 'panel-layout',
					'priority' => 70,
				),

				/**
				 * Option: Breadcrumb Position
				 */
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[breadcrumb-position]',
					'default'  => 'none',
					'section'  => 'section-breadcrumb',
					'title'    => __( 'Breadcrumb Position', 'astra' ),
					'type'     => 'control',
					'control'  => 'select',
					'priority' => 10,
					'choices'  => array(
						'none'                	=> __( 'None', 'astra' ),
						'inside-header-bottom'  => __( 'Inside Header Bottom', 'astra' ),
						'after-header'   		=> __( 'After Header', 'astra' ),
						'inside-content-top' 	=> __( 'Inside Content Top', 'astra' ),
					),
				),

				/**
				 * Option: Disable Breadcrumb on Home Page
				 */
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[breadcrumb-disable-home]',
					'default'  => astra_get_option( 'breadcrumb-disable-home' ),
					'type'     => 'control',
					'section'  => 'section-breadcrumb',
					'required' => array( ASTRA_THEME_SETTINGS . '[breadcrumb-position]', '!=', 'none' ),
					'title'    => __( 'Disable on Home Page?', 'astra' ),
					'priority' => 15,
					'control'  => 'checkbox',
				),

				/**
				 * Option: Disable Breadcrumb on Categories
				 */
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[breadcrumb-disable-categories]',
					'default'  => astra_get_option( 'breadcrumb-disable-categories' ),
					'type'     => 'control',
					'section'  => 'section-breadcrumb',
					'required' => array( ASTRA_THEME_SETTINGS . '[breadcrumb-position]', '!=', 'none' ),
					'title'    => __( 'Disable on Categories?', 'astra' ),
					'priority' => 20,
					'control'  => 'checkbox',
				),

				/**
				 * Option: Disable Breadcrumb on Search
				 */
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[breadcrumb-disable-search]',
					'default'  => astra_get_option( 'breadcrumb-disable-search' ),
					'type'     => 'control',
					'section'  => 'section-breadcrumb',
					'required' => array( ASTRA_THEME_SETTINGS . '[breadcrumb-position]', '!=', 'none' ),
					'title'    => __( 'Disable on Search?', 'astra' ),
					'priority' => 25,
					'control'  => 'checkbox',
				),

				/**
				 * Option: Disable Breadcrumb on Archive
				 */
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[breadcrumb-disable-archive]',
					'default'  => astra_get_option( 'breadcrumb-disable-archive' ),
					'type'     => 'control',
					'section'  => 'section-breadcrumb',
					'required' => array( ASTRA_THEME_SETTINGS . '[breadcrumb-position]', '!=', 'none' ),
					'title'    => __( 'Disable on Archive?', 'astra' ),
					'priority' => 30,
					'control'  => 'checkbox',
				),

				/**
				 * Option: Disable Breadcrumb on Single Page
				 */
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[breadcrumb-disable-single-page]',
					'default'  => astra_get_option( 'breadcrumb-disable-single-page' ),
					'type'     => 'control',
					'section'  => 'section-breadcrumb',
					'required' => array( ASTRA_THEME_SETTINGS . '[breadcrumb-position]', '!=', 'none' ),
					'title'    => __( 'Disable on Single Page?', 'astra' ),
					'priority' => 35,
					'control'  => 'checkbox',
				),

				/**
				 * Option: Disable Breadcrumb on Single Post
				 */
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[breadcrumb-disable-single-post]',
					'default'  => astra_get_option( 'breadcrumb-disable-single-post' ),
					'type'     => 'control',
					'section'  => 'section-breadcrumb',
					'required' => array( ASTRA_THEME_SETTINGS . '[breadcrumb-position]', '!=', 'none' ),
					'title'    => __( 'Disable on Single Post?', 'astra' ),
					'priority' => 40,
					'control'  => 'checkbox',
				),

				/**
				 * Option: Disable Breadcrumb on Singular
				 */
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[breadcrumb-disable-singular]',
					'default'  => astra_get_option( 'breadcrumb-disable-singular' ),
					'type'     => 'control',
					'section'  => 'section-breadcrumb',
					'required' => array( ASTRA_THEME_SETTINGS . '[breadcrumb-position]', '!=', 'none' ),
					'title'    => __( 'Disable on Singular?', 'astra' ),
					'priority' => 45,
					'control'  => 'checkbox',
				),

				/**
				 * Option: Disable Breadcrumb on 404 Page
				 */
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[breadcrumb-disable-404-page]',
					'default'  => astra_get_option( 'breadcrumb-disable-404-page' ),
					'type'     => 'control',
					'section'  => 'section-breadcrumb',
					'required' => array( ASTRA_THEME_SETTINGS . '[breadcrumb-position]', '!=', 'none' ),
					'title'    => __( 'Disable on 404 Page?', 'astra' ),
					'priority' => 50,
					'control'  => 'checkbox',
				),

			);

			return array_merge( $configurations, $_configs );

		}
	}
}

new Astra_Breadcrumbs_Configs();