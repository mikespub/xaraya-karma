<?php
/**
 * Karma Module
 *
 * @package modules
 * @subpackage karma
 * @category Third Party Xaraya Module
 * @version 1.0.0
 * @copyright (C) 2019 Luetolf-Carroll GmbH
 * @license GPL {@link http://www.gnu.org/licenses/gpl.html}
 * @author Marc Lutolf <marc@luetolf-carroll.com>
 */
/**
 * Modify an item of the tags object
 *
 */

sys::import('modules.dynamicdata.class.objects.master');

function karma_adminapi_modify_post($args)
{
    $tag = DataObjectMaster::getObject(array('name' => 'karma_posts'));
    $itemid = $tag->updateItem($args);
    return $itemid;
}
