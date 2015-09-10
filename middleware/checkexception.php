<?php

/**
 * ownCloud - galleryplus
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Olivier Paroz <owncloud@interfasys.ch>
 *
 * @copyright Olivier Paroz 2014-2015
 */

namespace OCA\GalleryPlus\Middleware;

use OCP\Util;

/**
 * Thrown when one of the tests in the "check" middlewares fails
 *
 * @package OCA\GalleryPlus\Middleware
 */
class CheckException extends \Exception {

	/**
	 * Constructor
	 *
	 * @param string $msg the message contained in the exception
	 * @param int $code the HTTP status code
	 */
	public function __construct($msg, $code = 0) {
		Util::writeLog('galleryplus', 'Exception' . $msg . ' (' . $code . ')', Util::ERROR);
		parent::__construct($msg, $code);
	}

}
