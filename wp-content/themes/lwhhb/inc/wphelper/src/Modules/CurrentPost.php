<?php

namespace HasinHayder\WPHelper\Modules;
use HasinHayder\WPHelper\OutputProcessors\TaxonomyOutputProcessor;

class CurrentPost {
    static function meta( $key, $default = '' ) {
        echo self::get_meta( $key, $default );
    }

    static function get_meta( $key, $default = '' ) {
        global $post;
        $_meta_value = get_post_meta( $post->ID, $key, true );

        return $_meta_value ? $_meta_value : $default;
    }

    static function get_categories( $count = WPHELPER_ALL_CATEGORIES, $return_type = WPHELPER_CATEGORY_NAME ) {
        global $post;
        $_categories = wp_get_post_categories( $post->ID, array( 'fields' => 'all', 'number' => $count ) );
        return TaxonomyOutputProcessor::category_output( $_categories, $return_type );
    }

    static function get_tags( $return_type = WPHELPER_TAG_NAME ) {
        global $post;
        $_tags = get_the_tags( $post->ID );
        return TaxonomyOutputProcessor::category_output( $_tags, $return_type );
    }

    static function get_single_category( $return_type = WPHELPER_CATEGORY_NAME ) {
        global $post;
        $_categories = wp_get_post_categories( $post->ID, array( 'id', 'name' ) );
        $_single_category = array_unshift( $_categories );
        return TaxonomyOutputProcessor::single_category_output( $_single_category, $return_type );
    }

    static function get_single_tag( $return_type = WPHELPER_TAG_NAME ) {
        global $post;
        $_tags = get_the_tags( $post->ID );
        $_single_tag = array_unshift( $_tags );
        return TaxonomyOutputProcessor::single_category_output( $_single_tag, $return_type );
    }
}
