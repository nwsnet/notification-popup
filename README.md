# Notification Popup

The intention is to show a popup with the **modal ui component of Magento** once per session in the frontend.
A cookie is set with *mage/cookies* to prevent the notification popup from showing again.

## Features/What it does

This simple module provides an own configuration tab in the backend.
It's disabled by default, content for headline and text can be set in the backend.

## ToDo/Nice to have

Since the original idea comes from enabling vacation notices,
it would be great to specify a start and stop date (via datepicker?(!)) for showing the popup notification.

## Installation

### Via composer (recommended)

Please go to the Magento 2 root directory and run the following commands in the shell:

```
composer config repositories.nwsnet_popupnotification vcs git@github.com:nwsnet/notification-popup.git
composer require nwsnet/module-nofitication-popup 1.0.*
bin/magento module:enable Nwsnet_NotificationPopup
bin/magento setup:upgrade
```

On **windows** run:

```
composer config repositories.nwsnet_popupnotification vcs git@github.com:nwsnet/notification-popup.git
composer require nwsnet/module-nofitication-popup 1.0.*
php bin\magento module:enable Nwsnet_NotificationPopup
php bin\magento setup:upgrade
```

### Manually

Please create the directory app/code/Nwsnet/NotificationPopup and copy the files from this repository to the created directory.
Then run the following commands in the shell:

```
bin/magento module:enable Nwsnet_NotificationPopup
bin/magento setup:upgrade
```

On **windows** run:

```
php bin\magento module:enable Nwsnet_NotificationPopup
php bin\magento setup:upgrade
```

## Customization

If you want to adjust the markup in the template file, make sure the `var popupmodal` in the `init.js` is still correct.

If you want to adjust the modals options, check line 9 in the `init.js`.
Take a look at the options in `vendor/magento/module-ui/view/base/web/js/modal/modal.js` for the default options
(starting around line 45).

## Support

If you encounter any problems or bugs, please create an issue on [GitHub](https://github.com/nwsnet/notification-popup/issues).

## Contribution
Any contribution is highly welcome.
The best possibility to provide any code is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

## Developer

Julian Wittorf (die NetzWerkstatt GmbH & Co. KG)
* Website: [www.die-netzwerkstatt.de](http://www.die-netzwerkstatt.de/)
* Twitter: [@sirAWESOME_](https://twitter.com/sirAWESOME_)

## License and Copyright

Copyright © Julian Wittorf <jwittorf@die-netzwerkstatt.de>

This work is free. You can redistribute it and/or modify it under the terms of the Do What The Fuck You Want To Public License,
Version 2, as published by Sam Hocevar. See the LICENSE file for more details.

[WTFPL – Do What the Fuck You Want to Public License](http://www.wtfpl.net/)

# Thanks!

Last but not least I want to thank everybody helping me develop my first Magento 2 module
during the [FireGento e.V. Hackathon](https://firegento.com/hackathon/) in Leipzig 20.05.2017-21.05.2017.