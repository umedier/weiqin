<?php
/**
 * [WECHAT 2018]
 * [WECHAT  a free software]
 */
defined('IN_IA') or exit('Access Denied');
if (in_array($action, array('site', 'menu', 'attachment', 'systeminfo', 'logs', 'filecheck', 'optimize',
	'database', 'scan', 'bom', 'ipwhitelist', 'workorder', 'sensitiveword', 'thirdlogin', 'oauth'))) {
	define('FRAME', 'site');
} else {
	define('FRAME', 'system');
}
