<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.utmuser
 *
 * @copyright
 * @license     GPL V3
 */

defined('_JEXEC') or die;

/**
 * Utmuser plugin class.
 *
 * @since  2.5
 * @link https://docs.joomla.org/Plugin/Events/System
 */
class PlgSystemUtmuser extends JPlugin
{
    /**
     * After initialise.
     *
     * @return  void
     *
     * @since   1.6
     */
    public function onAfterInitialise()
    {
        $jinput = JFactory::getApplication()->input;
        $session = JFactory::getSession();

        $utm_source = $jinput->get('utm_source');
        $utm_medium = $jinput->get('utm_medium');
        $utm_campaign = $jinput->get('utm_campaign');
        $utm_term = $jinput->get('utm_term');
        $utm_content = $jinput->get('utm_content');

        if (!empty($utm_source)) {
            $session->set('utm_source', $utm_source);
        }

        if (!empty($utm_medium)) {
            $session->set('utm_medium', $utm_medium);
        }

        if (!empty($utm_campaign)) {
            $session->set('utm_campaign', $utm_campaign);
        }

        if (!empty($utm_term)) {
            $session->set('utm_term', $utm_term);
        }

        if (!empty($utm_content)) {
            $session->set('utm_content', $utm_content);
        }

    }
}
