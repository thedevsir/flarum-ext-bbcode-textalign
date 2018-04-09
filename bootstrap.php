<?php

use Illuminate\Contracts\Events\Dispatcher;
use Freshman\BBcodeAlign\Listener;

return function (Dispatcher $events) {
    $events->subscribe(Listener\AddBBCode::class);
};
