<?php
/*
 * (c) Amir Irani <freshmanlimited@gmail.com>
 */

namespace Freshman\BBcodeAlign\Listener;

use Flarum\Event\ConfigureFormatter;
use Illuminate\Contracts\Events\Dispatcher;

class AddBBCode
{
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureFormatter::class, [$this, 'addBBCode']);
    }

    /**
     * @param ConfigureFormatter $event
     */
    public function addBBCode(ConfigureFormatter $event)
    {
        $event->configurator->BBCodes->addCustom(
            '[left]{DOC}[/left]',
            '<p style="padding:0;margin:0;direction:ltr;text-align:left;">{DOC}</p>'
        );

        $event->configurator->BBCodes->addCustom(
            '[LEFT]{DOC}[/LEFT]',
            '<p style="padding:0;margin:0;direction:ltr;text-align:left;">{DOC}</p>'
        );

        $event->configurator->BBCodes->addCustom(
            '[right]{DOC}[/right]',
            '<p style="padding:0;margin:0;direction:rtl;text-align:right;">{DOC}</p>'
        );

        $event->configurator->BBCodes->addCustom(
            '[RIGHT]{DOC}[/RIGHT]',
            '<p style="padding:0;margin:0;direction:rtl;text-align:right;">{DOC}</p>'
        );
    }
}
