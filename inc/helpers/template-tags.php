<?php
/**
 * Custom template tags for the theme.
 *
 * @package FinestDiamond
 */
if( ! function_exists( 'is_FwpActive' ) ) {
  function is_FwpActive( $opt ) {
    if( ! defined( 'FINEST_DIAMOND_WOO_ADDON_OPTIONS' ) ) {return false;}
    return ( isset( FINEST_DIAMOND_WOO_ADDON_OPTIONS[ $opt ] ) && FINEST_DIAMOND_WOO_ADDON_OPTIONS[ $opt ] == 'on' );
  }
}
if( ! function_exists( 'get_FwpOption' ) ) {
  function get_FwpOption( $opt, $def = false ) {
    if( ! defined( 'FINEST_DIAMOND_WOO_ADDON_OPTIONS' ) ) {return false;}
    return isset( FINEST_DIAMOND_WOO_ADDON_OPTIONS[ $opt ] ) ? FINEST_DIAMOND_WOO_ADDON_OPTIONS[ $opt ] : $def;
  }
}