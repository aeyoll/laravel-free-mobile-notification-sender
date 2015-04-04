# LaravelFreeMobileNotificationSender

This package is a Laravel wrapper for FreemobileNotificationSender (https://github.com/tibounise/FreemobileNotificationSender)

## Installation
Begin by installing the package through Composer. Edit your project's `composer.json` file to require `aeyoll/laravel-free-mobile-notification-sender`.

  ```php
  "require": {
    "aeyoll/laravel-free-mobile-notification-sender": "1.*"
  }
  ```

Next, use Composer to update your project from the the Terminal:

  ```php
  php composer.phar update
  ```

Once the package has been installed you'll need to add the service provider. Open your `app/config/app.php` configuration file, and add a new item to the `providers` array.

  ```php
  'Aeyoll\LaravelFreeMobileNotificationSender\LaravelFreeMobileNotificationSenderServiceProvider'
  ```

After doing this you also need to add an alias. In your `app/config/app.php` file, add this to the `aliases` array.

  ```php
  'LaravelFreeMobileNotificationSender' => 'Aeyoll\LaravelFreeMobileNotificationSender\LaravelFreeMobileNotificationSender'
  ```

Then, you need to publish the package configuration:

  ```php
  php artisan config:publish aeyoll/laravel-free-mobile-notification-sender
  ```

Finally, add you `userid` and `apikey` from your user profile on mobile.free.fr in the `app/config/packages/aeyoll/laravel-free-mobile-notification-sender/config.php` file.

## Usage
Once you've followed all the steps and completed the installation you can use `LaravelFreeMobileNotificationSender`.

### Sending message
You can simply send a message by doing this:

  ```php
  LaravelFreeMobileNotificationSender::sendMessage('Hello world!');
  ```
