<?php
/**
 * @author Socialbug Team <support@mlm-socialbug.com>
 * @copyright 2020 Km Innovations Inc DBA SocialBug
 * @license https://www.gnu.org/licenses/gpl-2.0.html
 */
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');

header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');

header('Location: ../');
exit;
