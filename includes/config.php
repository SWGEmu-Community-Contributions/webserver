<?php
require 'global.php';
/*

##### PLEASE READ THIS ENTIRE DOCUMENT #####

Welcome to the Web Server Configuration File.
This file is used to adjust the settings of
your Core 3 Web Server.

Please read this entire configuration file
so you can be sure to adjust all necessary
options. You will find setting clusters that
are designated by section headers with #'s.
Above the #'s will be a bracketed phrase to
describe the necessity of changing the settings
within that cluster. The phrases are:
[REQUIRED] - You must change these settings.
[RECOMMENDED] - We highly recommend you review
and adjust these settings.
[OPTIONAL] - You do not need to adjust these
settings but you should review them.

Below each setting cluster in the commented
section are also phrases that represent
the variables you are changing. They are 
presented in curly brackets {Like this}. A
brief description of what each setting does
is provided following the curcly brackets. 

For security purposes, this file is not
editable via the web pages. To make changes,
you must have access to edit this file directly.

Another file you may want to edit is the 
phases file (includes/phrases.php). You can
change the phrases to adjust the wording of
each option 

Explain the point in this file.
To be made: phrases.php

Easy Syntax Errors:
At the end of every line, there must be a semi-colon ;
Don't use // or /* as that will create comments.

*/

// [REQUIRED]
// #################################
//	Main Web Server Settings
// #################################
/* 
This setting cluster is important as it contains required options and
base settings for the web server.

{WebServer} Globally disables or enables the web server. "enabled" or "disabled".
{WebServer Public} If this option is disabled, only users with admin permissions can login. "yes" or "no"
{Page Title} Configures the gloabl title of all pages. (Appears on tabs). 
{Debug Mode} Enables Debug. (Do not use when web server is live for public) "on" or "off".
{Access URL} If you are accessing your web server through URL, specify the root path here.
{Access IP} If you are accessing your web server through IP, specify the root path here.
{Disable do} If you disable options below, do you want the icons on the dashboard to 
appear but be unclickable (option 1) or not appear at all (option 2). Specify "1" or "2".
*/

	$webserver = "enabled";
	$webserver_public = "yes";
	$pagetitle = "Powered by SWGEmu Core3";
	$debugmode = "off";
	$accessurl = ""; // If you are using IP, leave this blank.
	$accessip = ""; // If you are using URL, leave this blank.
	$disable_do = "1";

// [OPTIONAL]
// #################################
//	Global Feature Toggle
// #################################
/* 
This setting cluster allows you to enable or disable certain key features.
Make sure you have reviewed the {disable do} option above and that it is set 
to the most appropriate option for your server.

## Important: These features are not implemented at this time and may never be.
## They are based on ideas/concepts for what the web server COULD be and have
## been added in the event that they will one day. Mostly for framework purposes.

{Character Manager} Allows you to view, create new, or delete characters.
{Bank Manager} Transfer credits from bank to cash and tip players.
{Vendor Manager} Pay feeds, manage items for sale.
{CSR Player Manager} Web version of /snoop and /getAccountInfo. (Requires God Mode)
{Bazaar Marketplace} Shop for items.
{QA Tool} Blue frog online! (Requires God Mode)
{Mail} Send and recieve your characters mail.
{Chat Server} Join chat and send and recieve tells or guild chat. Appear online.
{Inventory} Change your look without even logging in game!
{Structure Manager} Don't forget to pay your maintenance!

All options are toggled with "enabled" or "disabled".
*/

	$feature_charactermanager = "enabled";
	$feature_bankmanager = "enabled";
	$feature_vendormanager = "enabled";
	$feature_csrplayermanager = "enabled";
	$feature_bazaarmarketplace = "enabled";
	$feature_qatool = "enabled";
	$feature_mail = "enabled";
	$feature_chatserver = "enabled";
	$feature_inventory = "enabled";
	$feature_structuremanager = "enabled";
	
// Note for the future: Each "feature group" will also need its own settings cluster.
// That perhaps can be it's own file like features.php, instead of clogging the master
// configuration file.
// Example: Set required god mode to access csrplayermanager
// Example2: Set parameters of Bazaar.

// [RECOMMENDED]
// #################################
//	Meta Tag Settings
// #################################
/* 
This setting cluster allows you to set how search engines view your web
panel. You can toggle the master control option to enable settings that
will prevent search engines from indexing the panel (for instance if
you want this feautre for admins or certain users only).

{Master Enabled} Set to "yes" or "no". Master control option.
{Meta Charset} You probably shouldn't change this.
{Meta Keywords} Key words seach engines use to index your website.
{Meta Description} What appears after the title on search engines.
{Meta Owner} Specify what your servers name is.
*/
	$meta_enabled = "no";
	$meta_charset = "UTF-8";
	$meta_keywords = "Keyword1, Keyword2, Keyword3"; // Seperate with a comma.
	$meta_description = "Star Wars Galaxies Emulation Server. Powered by SWGEmu's Core3.";
	$meta_owner = "Core3Server Name Here!";

?>