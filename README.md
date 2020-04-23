# yii2-twitch-authclient

This extension adds Twitch OAuth2 supporting for [yii2-authclient](https://github.com/yiisoft/yii2-authclient).

[![Latest Stable Version](https://poser.pugx.org/pa3py6aka/yii2-twitch-authclient/v/stable)](https://packagist.org/packages/pa3py6aka/yii2-twitch-authclient)
[![Total Downloads](https://poser.pugx.org/pa3py6aka/yii2-twitch-authclient/downloads)](https://packagist.org/packages/pa3py6aka/yii2-twitch-authclient)
[![Monthly Downloads](https://poser.pugx.org/pa3py6aka/yii2-twitch-authclient/d/monthly)](https://packagist.org/packages/pa3py6aka/yii2-twitch-authclient)
[![Latest Unstable Version](https://poser.pugx.org/pa3py6aka/yii2-twitch-authclient/v/unstable)](https://packagist.org/packages/pa3py6aka/yii2-twitch-authclient)
[![License](https://poser.pugx.org/pa3py6aka/yii2-twitch-authclient/license)](https://packagist.org/packages/pa3py6aka/yii2-twitch-authclient)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require pa3py6aka/yii2-twitch-authclient "^1.0"
```

or add

```json
"pa3py6aka/yii2-twitch-authclient": "^1.0"
```

to the `require` section of your composer.json.

## Usage

You must read the yii2-authclient [docs](https://github.com/yiisoft/yii2/blob/master/docs/guide/security-auth-clients.md)

Register your application [on Twitch developer site](https://dev.twitch.tv/dashboard/apps/create)

and add the Twitch client to your auth clients.

```php
'components' => [
    'authClientCollection' => [
        'class' => 'yii\authclient\Collection',
        'clients' => [
            'twitch' => [
                'class' => 'pa3py6aka\yii2auth\TwitchClient',
                'clientId' => 'twitch_client_id',
                'clientSecret' => 'twitch_client_secret',
            ],
            // other clients
        ],
    ],
    // ...
 ]
 ```