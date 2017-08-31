# beetroot
Maguru ProductInfo

Install with composer

composer config repositories.maguru/productinfo git https://github.com/wolffs/Maguru_ProductInfo.git

composer require maguru/productinfo:dev-master

php bin/magento setup:upgrade

php bin/magento setup:static-content:deploy

composer clear-cache

This is test