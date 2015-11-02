Victoire DCMS CookieLaw Bundle
============

##What is the purpose of this bundle

This bundle gives you access to the *Cookie Law Widget*.
With this widget, an alert pops to inform the user that cookies are used on this website.

##Set Up Victoire

If you haven't already, you can follow the steps to set up Victoire *[here](https://github.com/Victoire/victoire/blob/master/setup.md)*

##Install the Bundle

Run the following composer command :

    php composer.phar require friendsofvictoire/cookielaw-widget

###Reminder

Do not forget to add the bundle in your AppKernel !

    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                ...
                new Victoire\Widget\CookieLawBundle\VictoireWidgetCookieLawBundle(),
            );

            return $bundles;
        }
    }
