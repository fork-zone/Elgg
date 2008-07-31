<?php
	/**
	 * Elgg GUID Tool
	 * 
	 * @package ElggGUIDTool
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Marcus Povey
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.com/
	 */

	$entity_guid = get_input('entity_guid');
	
	// Render the file upload page
	$title = elgg_echo('guidbrowser:export');
	$body = elgg_view_title($title);
	$body .= elgg_view("forms/guidtool/export", array('entity_guid' => $entity_guid));
	
	$body = elgg_view_layout('one_column', $body);
	
	page_draw($title, $body);
?>