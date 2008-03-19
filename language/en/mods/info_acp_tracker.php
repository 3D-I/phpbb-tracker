<?php
/**
*
* acp info_acp_tracker[English]
*
* @package language
* @version $Id$
* @copyright (c) 2008 http://www.jeffrusso.net
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

//tracker
$lang = array_merge($lang, array(

	'ACP_TRACKER'							=> 'phpBB Tracker',

	'ACP_TRACKER_PROJECT'					=> 'Manage projects',
	'ACP_TRACKER_COMPONENT'					=> 'Manage components',
	'ACP_TRACKER_VERSION'					=> 'Manage versions',
	'ACP_TRACKER_SETTINGS'					=> 'Manage settings',
	'ACP_TRACKER_ATTACHMENTS'				=> 'Manage attachments',

	'ACP_TRACKER_SETTINGS_GENERAL'			=> 'General Settings',
	'ACP_TRACKER_SETTINGS_EXPLAIN'			=> 'Control tracker settings and check for updates.',
	'ACP_TRACKER_ATTACHMENTS_EXPLAIN'		=> 'View orphaned attachments and attachments in the upload folder that are not in the database.',
	'ACP_TRACKER_PROJECT_EXPLAIN'			=> 'Add, delete and edit projects for the tracker.',
	'ACP_TRACKER_COMPONENT_EXPLAIN'			=> 'Add, delete and edit components for a project in the tracker.',
	'ACP_TRACKER_VERSION_EXPLAIN'			=> 'Add, delete and edit versions for a project in the tracker.',

	'ACP_TRACKER_PROJECT_ADD'				=> 'Add new project',
	'ACP_TRACKER_PROJECT_ADDED'				=> 'Project successfully added.',
	'ACP_TRACKER_PROJECT_EDITED'			=> 'Project successfully edited.',
	'ACP_TRACKER_PROJECT_DELETE'			=> 'Delete project',
	'ACP_TRACKER_PROJECT_DELETE_CONFIRM'	=> 'Are you sure you want to delete the selected project from the tracker?',
	'ACP_TRACKER_PROJECT_DELETED'			=> 'Project succefully deleted.',
	'ACP_TRACKER_PROJECT_NO_ID'				=> 'The selected project does not exist in the database.',

	'ACP_TRACKER_COMPONENT_ADD'				=> 'Add new component',
	'ACP_TRACKER_COMPONENT_ADDED'			=> 'Component successfully added.',
	'ACP_TRACKER_COMPONENT_EDITED'			=> 'Component successfully edited.',
	'ACP_TRACKER_COMPONENT_DELETE'			=> 'Delete component',
	'ACP_TRACKER_COMPONENT_DELETE_CONFIRM'	=> 'Are you sure you want to delete this component from the selected project in the tracker?',
	'ACP_TRACKER_COMPONENT_DELETED'			=> 'Component succefully deleted.',
	'ACP_TRACKER_COMPONENT_NO_ID'			=> 'The selected component does not exist in the database.',

	'ACP_TRACKER_VERSION_ADD'				=> 'Add new version',
	'ACP_TRACKER_VERSION_ADDED'				=> 'Version successfully added.',
	'ACP_TRACKER_VERSION_EDITED'			=> 'Version successfully edited.',
	'ACP_TRACKER_VERSION_DELETE'			=> 'Delete version',
	'ACP_TRACKER_VERSION_DELETE_CONFIRM'	=> 'Are you sure you want to delete this version from the selected project in the tracker?',
	'ACP_TRACKER_VERSION_DELETED'			=> 'Version succefully deleted.',
	'ACP_TRACKER_VERSION_NO_ID'				=> 'The selected version does not exist in the database.',

	'ACP_TRACKER_ATTACHMENTS_DELETE_CONFIRM'	=> 'Are you sure you want to delete the selected items?',

	'ACP_TRACKER_DELETE_MARKED'				=> 'Delete marked',

	'TRACKER_PROJECT_NAME' 					=> 'Project Name',
	'TRACKER_PROJECT_DESC'					=> 'Project Description',
	'TRACKER_PROJECT_ENABLED'				=> 'Project Enabled',
	'TRACKER_PROJECT_TYPE'					=> 'Project Type',
	'TRACKER_PROJECT_GROUP'					=> 'Project Group',
	'TRACKER_PROJECT_SECURITY'				=> 'Project Security',
	'TRACKER_PROJECT_NO_NAME'				=> 'There was no name entered for this project.  You must enter a name.',

	'TRACKER_PROJECT_NAME_EXPLAIN'			=> 'Name of the project.',
	'TRACKER_PROJECT_DESC_EXPLAIN'			=> 'Description of the project.',
	'TRACKER_PROJECT_ENABLED_EXPLAIN'		=> 'Select whether or not the project is enabled.',
	'TRACKER_PROJECT_TYPE_EXPLAIN'			=> 'Select the tracker type of the project.',
	'TRACKER_PROJECT_GROUP_EXPLAIN'			=> 'Select the group that manages this project.',
	'TRACKER_PROJECT_SECURITY_EXPLAIN'		=> 'Select this if you would like tickets to be shown only to team members and the user that posted it.',

	'TRACKER_PROJECT_ID'					=> 'Select a project',

	'TRACKER_COMPONENT_NAME_EXPLAIN'		=> 'Name of the component to associate with the selected project. Use language constant if name is served from language file. Constant must be in mods/tracker.php file.',
	'TRACKER_COMPONENT_DELETE_ERROR'		=> 'The selected component cannot be deleted because tickets exist that refer to this component.  Delete all tickets refering to this component first.',
	'TRACKER_COMPONENT_NO_NAME'				=> 'There was no name entered for this component.  You must enter a name.',
	
	'TRACKER_VERSION_NAME_EXPLAIN'			=> 'Name of the version to associate with the selected project. Use language constant if name is served from language file. Constant must be in mods/tracker.php file.',
	'TRACKER_VERSION_DELETE_ERROR'			=> 'The selected version cannot be deleted because tickets exist that refer to this version.  Delete all tickets refering to this version first.',
	'TRACKER_VERSION_NO_NAME'				=> 'There was no name entered for this version.  You must enter a name.',

	'TRACKER_FILENAME'						=> 'Filename',
	'TRACKER_FILESIZE'						=> 'Filesize',

	'TRACKER_ORPHAN'						=> 'Orphan attachments',
	'TRACKER_EXTRA_FILES'					=> 'Extra files in attachment directory',
	'TRACKER_FILES_DELETED'					=> 'Files and/or orphan attachments successfully removed',
	'TRACKER_ERROR_REMOVING_ORPHAN'			=> 'Error removing file %s (%s), check to make sure file exists and is not write protected.',
	'TRACKER_ERROR_REMOVING_FILE'			=> 'Error removing file %s, check to make sure file exists and is not write protected.',

));

$lang = array_merge($lang, array(
	'TRACKER_ATTACHMENT_PATH'					=> 'Attachment path',
	'TRACKER_ATTACHMENT_PATH_EXPLAIN'			=> 'Path where the attachments for the tracker will be uploaded.',
	'TRACKER_SEND_EMAIL'						=> 'Send email',
	'TRACKER_SEND_EMAIL_EXPLAIN'				=> 'Send email updates when comments are posted to a ticket or when the status/assigned to user is changed.',
	'TRACKER_TICKETS_PER_PAGE'					=> 'Tickets per page',
	'TRACKER_TICKETS_PER_PAGE_EXPLAIN'			=> 'Number of tickets per page displayed inside the project.',
	'TRACKER_POSTS_PER_PAGE'					=> 'Posts per page',
	'TRACKER_POSTS_PER_PAGE_EXPLAIN'			=> 'Number of comment posts per page inside the ticket.',
	'TRACKER_TOP_REPORTERS'						=> 'Number of top reporters',
	'TRACKER_TOP_REPORTERS_EXPLAIN'				=> 'Sets the number of top reporters displayed on the statistics page.',

	'TRACKER_VERSION_EXPLAIN'					=> 'Current installed version of the tracker.',
	'ACP_TRACKER_VERSION_INFO'					=> 'Version Information',
	'TRACKER_CHECK_UPDATES'						=> 'Check for updates',
	'TRACKER_VERSION_CHECK'						=> 'phpBB Tracker Version Check',
	'TRACKER_VERSION_CHECK_EXPLAIN'				=> 'Checks to see if the version of phpBB Tracker you are currently running is up to date.',
	'TRACKER_UPDATE_INSTRUCTIONS'				=> '

		<h1>Release announcement</h1>

		<p>Please read <a href="%1$s" title="%1$s"><strong>the release announcement for the latest version</strong></a> before you continue your update process, it may contain useful information. It also contains full download links as well as the change log.</p>

		<br />

		<h1>How to update your installation of the phpBB Tracker</h1>

		<p>Download the newest version.  Upload all the new files overwriting the old.  </p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Download the newest version.<br /><br /></li>
			<li>Unpack the archive.<br /><br /></li>
			<li>Upload the new version to your phpBB root directory (where your config.php file is).<br /><br /></li>
			<li>Follow the modx update files in the contrib folder and perform the required edits.<br /><br /></li>
		</ul>

		<p><strong><a href="%2$s" title="%2$s">Now start the update process by pointing your browser to the tracker install folder</a>.</strong><br />
		<br />
		Select the option to update to the latest version. You will be notified once the update is complete.
		</p>
	',
	'TRACKER_VERSION_UP_TO_DATE_ACP'			=> 'Your installation is up to date, no updates are available for your version of phpBB Tracker. You do not need to update your installation.',
	'TRACKER_VERSION_NOT_UP_TO_DATE_ACP'		=> 'Your version of phpBB Tracker is not up to date.<br />Below you will find a link to the release announcement for the latest version as well as instructions on how to perform the update.',
));

$lang = array_merge($lang, array(
	'LOG_TRACKER_SETTINGS'					=> '<strong>Altered tracker settings</strong>',

	'LOG_TRACKER_PROJECT_ADD'				=> '<strong>Added new project to tracker</strong><br />» %s',
	'LOG_TRACKER_PROJECT_EDIT'				=> '<strong>Altered tracker project</strong><br />» %s',
	'LOG_TRACKER_PROJECT_DELETE'			=> '<strong>Deleted tracker project</strong><br />» %%s',

	'LOG_TRACKER_COMPONENT_ADD'				=> '<strong>Added new component to a project on the tracker</strong><br />» %s',
	'LOG_TRACKER_COMPONENT_EDIT'			=> '<strong>Altered tracker project component</strong><br />» %s',
	'LOG_TRACKER_COMPONENT_DELETE'			=> '<strong>Deleted tracker project component</strong><br />» %s',

	'LOG_TRACKER_VERSION_ADD'				=> '<strong>Added new version to a project on the tracker</strong><br />» %s',
	'LOG_TRACKER_VERSION_EDIT'				=> '<strong>Altered tracker project version</strong><br />» %s',
	'LOG_TRACKER_VERSION_DELETE'			=> '<strong>Deleted tracker project version</strong><br />» %s',

	'LOG_TRACKER_DELETE_ORPHAN'				=> '<strong>Removed orphan attachment from tracker</strong><br />» %s',
	'LOG_TRACKER_DELETE_EXTRA'				=> '<strong>Removed extra file from tracker attachment directory</strong><br />» %s',
));
?>