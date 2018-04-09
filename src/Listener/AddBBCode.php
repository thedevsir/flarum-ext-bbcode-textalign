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
            '[LEFT]{TEXT1}[/LEFT]',
            '<div class="post-text-align-left">{TEXT1}</div>'
        );
    }
}
