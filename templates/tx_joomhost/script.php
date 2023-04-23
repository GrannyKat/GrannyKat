<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// /Users/abuhuraira/Downloads/tx_joomhost
/**
 * Script file of tx_joomhost.
 *
 *
 * manifest file as follows:
 * <scriptfile>script.php</scriptfile>
 *
 * @package     Joomla.Administrator
 * @subpackage  tx_joomhost
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
class tx_joomhostInstallerScript
{
    /**
     * Runs just before any installation action is preformed on the template.
     * Verifications and pre-requisites should run in this function.
     *
     * @param  string    $type   - Type of PreFlight action. Possible values are:
     *                           - * install
     *                           - * update
     *                           - * discover_install
     * @param  \stdClass $parent - Parent object calling object.
     *
     * @return void
     */
    public function preflight($type, $parent) 
    {
        $hasQuix = JComponentHelper::getComponent('com_quix');
        if(!$hasQuix->enabled) return;

        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query->select($db->quoteName(array('name', 'manifest_cache')))
              ->from($db->quoteName('#__extensions'))
              ->where($db->quoteName('element')  . ' = ' . $db->quote('pkg_quix'));
        $db->setQuery($query);
        $result = $db->loadObject();
        $manifest = json_decode($result->manifest_cache);
        $version = $manifest->version; // 1.7.3
        
        // if latest quix then must remove old quix element folder
        if(version_compare($version, '1.8.0') >= 0)
        {
            // echo 'I am at least 1.8.0, my version: ' . $version . "\n";die;
            // proceed to remove old quix folder
            jimport( 'joomla.filesystem.folder' );
            $containing_dir = basename(dirname(__FILE__));
            $quixpath = JPATH_ROOT . '/templates/'.$containing_dir.'/quix';

            // delete file if exist
            try{
                JFolder::delete($quixpath);
            }
            catch (Exception $e)
            {
                echo JText::sprintf('Failed to update QuixPath. Error: %s', $e->getCode(), $e->getMessage()) . '<br />';
                return;
            }
        }
        else
        {
            // you are using old quix, that will break the site, so dont update;
            JFactory::getApplication()->enqueueMessage('This update require minimum <strong>Quix 1.8.x</strong>. Please update your quix first!', 'warning');
            return false;
        }


        return true;
        
    }
}