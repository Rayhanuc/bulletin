<?php 
Use HasinHayder\WPHelper\Modules\KirkiBuilder;

KirkiBuilder::initialize('lwhh-bulletin');
KirkiBuilder::add_panel('homepage',__('Homepage','lwhhb'));
KirkiBuilder::add_section('featured_post','homepage',__('Featured Post','lwhhb'));
KirkiBuilder::add_posts_repeater_field('featured_posts','featured_post','Featured Post');