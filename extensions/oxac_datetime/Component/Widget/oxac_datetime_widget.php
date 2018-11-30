<?php
/**
 * @author johannes ackermann
 * Widget business logic. Sends current date and time to template.
 *
 * This is an extension of oxWidget, which is an extension of oxView in turn.
 * Note the isCacheable() function!
 *
 * 13/1/18-15/12/10
 * v0.3.2
 */

namespace OxidAcademy\DatetimeModule\Component\Widget;

class oxac_datetime_widget extends \OxidEsales\Eshop\Application\Component\Widget\WidgetController
{
    protected $_sThisTemplate = 'oxac_datetime_widget.tpl';

    /**
     * getDateAndTime
     *
     * Returns date and time in a string.
     * @return string
     */
    public function getDateAndTime()
    {
        return date("j. n. Y, H:i:s");
    }
}
