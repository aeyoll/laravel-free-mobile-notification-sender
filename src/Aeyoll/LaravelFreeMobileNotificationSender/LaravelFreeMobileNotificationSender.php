<?php namespace Aeyoll\LaravelFreeMobileNotificationSender;

use Illuminate\Support\Facades\Facade;

class LaravelFreeMobileNotificationSender extends Facade {

    /**
     * Get the registered component.
     *
     * @return object
     */
    protected static function getFacadeAccessor() {
        return 'LaravelFreeMobileNotificationSender\LaravelFreeMobileNotificationSender';
    }

}
