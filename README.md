# Newsletter-Magento2x

Magento2x Newsletter overwrite with new field First Name, Last Name , Gender etc using around plugin methods


Front End :

![Front End ](https://github.com/bdcrops/BDC_Newsletter/blob/master/view/frontend/web/images/newsletter-front.png)


Back End :


![Back End](https://github.com/bdcrops/BDC_Newsletter/blob/master/view/adminhtml/web/images/newsletter-backend.png)


## How to install & upgrade BDC_Newsletter


### 1. Copy and paste

If you don't want to install via composer, you can use this way.

- Download [the latest version here](https://github.com/bdcrops/BDC_Newsletter/archive/master.zip)
- Extract `master.zip` file to `app/code/BDC/Newsletter` ; You should create a folder path `app/code/BDC/Newsletter` if not exist.
- Go to Magento root folder and run upgrade command line to install `BDC_Newsletter`:

```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy


[![Latest Stable Version](https://poser.pugx.org/bdcrops/module-newsletter/v/stable)](https://packagist.org/packages/bdcrops/module-newsletter)
[![Total Downloads](https://poser.pugx.org/bdcrops/module-newsletter/downloads)](https://packagist.org/packages/bdcrops/module-newsletter)


### 2. Install via composer

We recommend you to install BDC_Newsletter module via composer. It is easy to install, update and maintaince.

Run the following command in Magento 2 root folder.

#### 2.1 Install

Run
```
composer config repositories.module-newsletter git
https://github.com/bdcrops/BDC_Newsletter

composer require bdcrops/module-newsletter:~1.0.0
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

#### 2.2 Upgrade    

```
composer update bdcrops/module-newsletter
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

Run compile if your store in Product mode:

```
php bin/magento setup:di:compile



# Ref#

https://devdocs.magento.com/guides/v2.3/extension-dev-guide/plugins.html

https://mage2gen.com/

https://github.com/astorm
