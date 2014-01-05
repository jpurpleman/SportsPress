<?php
global $sportspress_sports;

$sportspress_sports['soccer'] = array(
	'name' => __( 'Association Football (Soccer)', 'sportspress' ),
	'posts' => array(
		// Table Columns
		'sp_column' => array(
			array(
				'post_title' => 'P',
				'post_name'  => 'p',
				'meta'       => array(
					'sp_equation'     => '$eventsplayed',
					'sp_format'       => 'integer',
					'sp_precision'    => 1,
				),
			),
			array(
				'post_title' => 'W',
				'post_name'  => 'w',
				'meta'       => array(
					'sp_equation'     => '$w',
					'sp_format'       => 'integer',
					'sp_precision'    => 1,
				),
			),
			array(
				'post_title' => 'D',
				'post_name'  => 'd',
				'meta'       => array(
					'sp_equation'     => '$d',
					'sp_format'       => 'integer',
					'sp_precision'    => 1,
				),
			),
			array(
				'post_title' => 'L',
				'post_name'  => 'l',
				'meta'       => array(
					'sp_equation'     => '$l',
					'sp_format'       => 'integer',
					'sp_precision'    => 1,
				),
			),
			array(
				'post_title' => 'F',
				'post_name'  => 'f',
				'meta'       => array(
					'sp_equation'     => '$goalsfor',
					'sp_priority'     => '3',
					'sp_order'        => 'DESC',
					'sp_format'       => 'integer',
					'sp_precision'    => 1,
				),
			),
			array(
				'post_title' => 'A',
				'post_name'  => 'a',
				'meta'       => array(
					'sp_equation'     => '$goalsagainst',
					'sp_format'       => 'integer',
					'sp_precision'    => 1,
				),
			),
			array(
				'post_title' => 'GD',
				'post_name'  => 'gd',
				'meta'       => array(
					'sp_equation'     => '$goalsfor - $goalsagainst',
					'sp_priority'     => '2',
					'sp_order'        => 'DESC',
					'sp_format'       => 'integer',
					'sp_precision'    => 1,
				),
			),
			array(
				'post_title' => 'Pts',
				'post_name'  => 'pts',
				'meta'       => array(
					'sp_equation'     => '$w * 3 + $d',
					'sp_priority'     => '1',
					'sp_order'        => 'DESC',
					'sp_format'       => 'integer',
					'sp_precision'    => 1,
				),
			),
		),
		// Statistics
		'sp_statistic' => array(
			array(
				'post_title' => __( 'Appearances', 'sportspress' ),
				'post_name'  => 'appearances',
				'meta'       => array(
					'sp_equation'     => '$eventsplayed',
					'sp_format'       => 'integer',
					'sp_precision'    => 1,
				),
			),
			array(
				'post_title' => __( 'Goals', 'sportspress' ),
				'post_name'  => 'goals',
				'meta'       => array(
					'sp_equation'     => '',
					'sp_priority'     => '1',
					'sp_order'        => 'DESC',
					'sp_format'       => 'integer',
					'sp_precision'    => 1,
				),
			),
			array(
				'post_title' => __( 'Assists', 'sportspress' ),
				'post_name'  => 'assists',
				'meta'       => array(
					'sp_equation'     => '',
					'sp_format'       => 'integer',
					'sp_precision'    => 1,
				),
			),
			array(
				'post_title' => __( 'Yellow Cards', 'sportspress' ),
				'post_name'  => 'yellowcards',
				'meta'       => array(
					'sp_equation'     => '',
					'sp_format'       => 'integer',
					'sp_precision'    => 1,
				),
			),
			array(
				'post_title' => __( 'Red Cards', 'sportspress' ),
				'post_name'  => 'redcards',
				'meta'       => array(
					'sp_equation'     => '',
					'sp_format'       => 'integer',
					'sp_precision'    => 1,
				),
			),
		),
		// Results
		'sp_result' => array(
			array(
				'post_title' => __( 'Goals', 'sportspress' ),
				'post_name'  => 'goals',
				'meta'       => array(
					'sp_format'       => 'integer',
				),
			),
		),
		// Outcomes
		'sp_outcome' => array(
			array(
				'post_title' => 'W',
				'post_name'  => 'w',
			),
			array(
				'post_title' => 'D',
				'post_name'  => 'd',
			),
			array(
				'post_title' => 'L',
				'post_name'  => 'l',
			),
		),
	),
);