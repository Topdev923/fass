<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Service
 * @subpackage DeveloperGarden
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: RemoveParticipantResponse.php 4 2011-12-06 04:46:48Z hiraiwaj $
 */

/**
 * @see Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract
 */
require_once 'Zend/Service/DeveloperGarden/Response/ConferenceCall/ConferenceCallAbstract.php';

/**
 * @category   Zend
 * @package    Zend_Service
 * @subpackage DeveloperGarden
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @author     Marco Kaiser
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Service_DeveloperGarden_Response_ConferenceCall_RemoveParticipantResponse
    extends Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract
{
    /**
     * response data
     *
     * @codingStandardsIgnoreFile
     * @var Zend_Service_DeveloperGarden_Response_ConferenceCall_CCSResponseType
     */
    public $CCSResponse = null;
}
