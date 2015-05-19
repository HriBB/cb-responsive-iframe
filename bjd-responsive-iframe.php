<?php
/**
 * Plugin Name: BJD Responsive iFrame
 * Plugin URI: http://codecanyon.net/user/BJD-Solutions?ref=BJD-Solutions
 * Description: Allows iFrames to adapt to responsive layouts
 * Version: 1.0.0
 * Author: B.J de Haan Solutions
 * Author URI: http://codecanyon.net/user/BJD-Solutions?ref=BJD-Solutions
 * License: GPL2
 */

defined( 'ABSPATH' ) or die( 'Direct access not available' );

class BJD_Responsive_Iframe 
{
    public static function bjd_responsive_iframe_func( $atts ) 
    {
        $a = shortcode_atts( array(
            'id' => ''
            ,'width' => ''
            ,'height' => ''
            ,'frameborder' => '0'
            ,'scrolling' => 'no'
            ,'marginheight' => '0'
            ,'marginwidth' => '0'
            ,'src' => ''
            ,'name'=>''
        ), $atts );
        
        if( empty($a['src']) )
            return "";
        
        $str = '<div class="bjd-responsive-iframe-cntr">';
        $str .= '<iframe';
        if( !empty($a['id']) )
            $str .= ' id="'.htmlspecialchars($a['id'],ENT_QUOTES,'',false).'"';
        if( !empty($a['name']) )
            $str .= ' name="'.htmlspecialchars($a['name'],ENT_QUOTES,'',false).'"';
        if( !empty($a['width']) )
            $str .= ' width="'.htmlspecialchars($a['width'],ENT_QUOTES,'',false).'"';
        if( !empty($a['height']) )
            $str .= ' height="'.htmlspecialchars($a['height'],ENT_QUOTES,'',false).'"';
        $str .= ' frameborder="'.htmlspecialchars($a['frameborder'],ENT_QUOTES,'',false).'"';
        $str .= ' scrolling="'.htmlspecialchars($a['scrolling'],ENT_QUOTES,'',false).'"';
        $str .= ' marginheight="'.htmlspecialchars($a['marginheight'],ENT_QUOTES,'',false).'"';
        $str .= ' marginwidth="'.htmlspecialchars($a['marginwidth'],ENT_QUOTES,'',false).'"';
        if( !empty($a['src']) )
            $str .= ' src="'.htmlspecialchars ($a['src'],ENT_QUOTES,'',false).'"';
        
        $str .= ' ></iframe>';
        $str .= '</div>';
        
        return $str;
    }
}
wp_register_style( 'bjd-responsive-iframe-css', plugins_url('stylesheet.css', __FILE__) );
wp_enqueue_style( 'bjd-responsive-iframe-css' );
add_shortcode( 'bjd-responsive-iframe', array( 'BJD_Responsive_Iframe', 'bjd_responsive_iframe_func' ) );

?>