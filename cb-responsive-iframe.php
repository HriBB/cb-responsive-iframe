<?php
/**
 * Plugin Name: CB Responsive iFrame
 * Plugin URI: http://climbuddy.com/
 * Description: Allows iFrames to adapt to responsive layouts and also go fullscreen. Fork of B.J de Haan Solutions plugin http://codecanyon.net/user/BJD-Solutions?ref=BJD-Solutions.
 * Version: 1.0.0
 * Author: Bojan Hribernik
 * Author URI: http://climbuddy.com/
 * License: GPL2
 */

defined( 'ABSPATH' ) or die( 'Direct access not available' );

class CB_Responsive_Iframe
{
    public static function cb_responsive_iframe_func( $atts )
    {
        $a = shortcode_atts( array(
            'id' => ''
            ,'width' => ''
            ,'height' => ''
            ,'frameborder' => '0'
            ,'scrolling' => 'no'
            ,'marginheight' => '0'
            ,'marginwidth' => '0'
            ,'allowfullscreen' => 'true'
            ,'src' => ''
            ,'name'=>''
        ), $atts );

        if( empty($a['src']) )
            return "";

        $str = '<div class="cb-responsive-iframe-cntr">';
        $str .= '<iframe';
        if( !empty($a['id']) )
            $str .= ' id="'.htmlspecialchars($a['id'],ENT_QUOTES,'',false).'"';
        if( !empty($a['name']) )
            $str .= ' name="'.htmlspecialchars($a['name'],ENT_QUOTES,'',false).'"';
        if( !empty($a['width']) )
            $str .= ' width="'.htmlspecialchars($a['width'],ENT_QUOTES,'',false).'"';
        if( !empty($a['height']) )
            $str .= ' height="'.htmlspecialchars($a['height'],ENT_QUOTES,'',false).'"';
        $str .= ' allowfullscreen="'.htmlspecialchars($a['allowfullscreen'],ENT_QUOTES,'',false).'"';
        $str .= ' frameborder="'.htmlspecialchars($a['frameborder'],ENT_QUOTES,'',false).'"';
        $str .= ' scrolling="'.htmlspecialchars($a['scrolling'],ENT_QUOTES,'',false).'"';
        $str .= ' marginheight="'.htmlspecialchars($a['marginheight'],ENT_QUOTES,'',false).'"';
        $str .= ' marginwidth="'.htmlspecialchars($a['marginwidth'],ENT_QUOTES,'',false).'"';
        if( !empty($a['src']) )
            $str .= ' src="'.htmlspecialchars($a['src'],ENT_QUOTES,'',false).'"';

        $str .= ' ></iframe>';
        $str .= '</div>';

        return $str;
    }
}
wp_register_style( 'cb-responsive-iframe-css', plugins_url('stylesheet.css', __FILE__) );
wp_enqueue_style( 'cb-responsive-iframe-css' );
add_shortcode( 'cb-responsive-iframe', array( 'CB_Responsive_Iframe', 'cb_responsive_iframe_func' ) );

?>
