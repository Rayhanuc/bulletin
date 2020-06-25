<?php 
Use HasinHayder\WPHelper\Modules\KirkiBuilder;

KirkiBuilder::initialize('lwhh-bulletin');
KirkiBuilder::add_panel('homepage',__('Homepage','lwhhb'));
KirkiBuilder::add_section('featured_post','homepage',__('Featured Post','lwhhb'));
KirkiBuilder::add_posts_repeater_field('featured_posts','featured_post','Featured Post');


KirkiBuilder::add_section('trending_post','homepage',__('Trending Post','lwhhb'));
KirkiBuilder::add_posts_repeater_field('tranding_posts','trending_post',__('Trending Post','lwhhb'),__('Select Item','lwhhb'),__('Add Post','lwhhb'),[],2);


KirkiBuilder::add_simple_field('text','trending_post_count','trending_post',__('Number of Post','lwhhb'));
KirkiBuilder::add_category_select_field('trending_category','trending_post',__('Trending Category','lwhhb'));