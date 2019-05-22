<?php
//Nice and simple
require( get_template_directory() . '/lib/ac-inuk.php' );
add_filter( 'wpcf7_support_html5_fallback', '__return_true' );


function langSwitch(){
    if( ! function_exists('icl_get_languages')){
      return;
    }
    $langs = array_reverse(icl_get_languages('skip_missing=N&orderby=KEY&order=DIR&link_empty_to=str'));
   unset($langs['ar']);

    $current_lang = ICL_LANGUAGE_CODE;

    $count = count($langs);


    $output = '';
    foreach ($langs as $key => $lang){
        $activeClass = ($current_lang == $key)? 'lang-active' : '';
        $output .= '<span class="header--master__lang" ><a class=" header--master__lang-a '.$activeClass.' " href="'.$lang['url'].'" >'.$lang[native_name].'</a></span>';
        if ($count > 1)
        {
            $output .= '<span> | </span>';
        }
        $count -= 1;
    }
    return $output;
}


if (!defined('ACAI1M_FTP_TYPE'))
{
    define('ACAI1M_FTP_TYPE', 'sftp');
}
if (!defined('ACAI1M_HOSTNAME'))
{
    define('ACAI1M_HOSTNAME', 'shell.gridhost.co.uk');
}
if (!defined('ACAI1M_AUTHENTICATION'))
{
    define('ACAI1M_AUTHENTICATION', 'password');
}
if (!defined('ACAI1M_USERNAME'))
{
    define('ACAI1M_USERNAME', 'xamberco');
}
if (!defined('ACAI1M_PASSWORD'))
{
    define('ACAI1M_PASSWORD', 'yppmqosb2s8evn1j');
}
if (!defined('ACAI1M_DIRECTORY'))
{
    define('ACAI1M_DIRECTORY', '/var/sites/x/x.ambercouch.co.uk/wp-backups');
}
if (!defined('ACAI1M_PORT'))
{
    define('ACAI1M_PORT', '22');
}