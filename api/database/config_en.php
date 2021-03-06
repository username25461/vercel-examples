<?php
/*
* Website's configuration data for english language
* More: https://opensolution.org/docs/?p=en-settings
*/

/*
* Start page id
* More: https://opensolution.org/docs/?p=en-settings#start_page
*/
$config['start_page'] = "1";

/*
* Website logo. To insert an image use HTML code
* More: https://opensolution.org/docs/?p=en-settings#logo
*/
$config['logo'] = "Quick<span>.</span><strong>Cms</strong>";

/*
* The title which is displays in the TITLE tag next to the name of the currently viewed page
* More: https://opensolution.org/docs/?p=en-settings#title
*/
$config['title'] = "Quick.Cms - fast and simple content management system";

/*
* Description of the page that displays in the META DESCRIPTION tag, if the page does not have own meta description entered
* More: https://opensolution.org/docs/?p=en-settings#description
*/
$config['description'] = "Simple to use and easy to modify free Content Management Script written in PHP. Installation takes less than 5 minutes and it doesn't require MySQL.";

/*
* Slogan that appears by default under the logo. You can use the HTML code
* More: https://opensolution.org/docs/?p=en-settings#slogan
*/
$config['slogan'] = "Fast and easy to use content management system";

/*
* Content of the page footer, which by default is located on the left side
* More: https://opensolution.org/docs/?p=en-settings#foot_info
*/
$config['foot_info'] = 'All rights reserved';

/*
* Define characters that you want to be replaced in URL addresses, for example: ą to a, ü to u, etc.
* Default charsets are specified in the core/libraries/trash.php in function change2Latin()
* Uncomment function below and define characters
*/ 
/*
function change2Latin( $sContent ){
  return str_replace(
    Array( 'ś', 'ą' ), // from
    Array( 's', 'a' ), // to
    $sContent
  );
} // end function change2Latin
*/
?>