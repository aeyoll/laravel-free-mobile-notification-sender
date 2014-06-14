<?php namespace Aeyoll\LaravelFreeMobileNotificationSender;

use FreemobileNotificationSender;
use Illuminate\Support\ServiceProvider;

class LaravelFreeMobileNotificationSenderServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('aeyoll/laravel-free-mobile-notification-sender');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerFreeMobileNotificationSender();
	}

	protected function registerFreeMobileNotificationSender()
	{
		$this->app->bind('LaravelFreeMobileNotificationSender\LaravelFreeMobileNotificationSender', function ($app) {
			return new FreemobileNotificationSender(
				$app['config']['laravel-free-mobile-notification-sender::userid'],
				$app['config']['laravel-free-mobile-notification-sender::apikey']
			);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('LaravelFreeMobileNotificationSender\LaravelFreeMobileNotificationSender');
	}

}
