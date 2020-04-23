<?php

namespace pa3py6aka\yii2auth;

use yii\authclient\OAuth2;
use yii\helpers\Json;

class TwitchClient extends OAuth2
{
    public $authUrl = 'https://id.twitch.tv/oauth2/authorize';

    public $tokenUrl = 'https://id.twitch.tv/oauth2/token';

    public $apiBaseUrl = 'https://api.twitch.tv/helix';

    public $scope = 'user:read:email';

    /**
     * Initializes authenticated user attributes.
     * @return array auth user attributes.
     */
    protected function initUserAttributes()
    {
        $response = $this->api('users');

        if (empty($response['data'])) {
            throw new \RuntimeException('Unable to init user attributes due to unexpected response: ' . Json::encode($response));
        }

        return $response['data'][0];
    }

    /**
     * {@inheritdoc}
     */
    protected function defaultName()
    {
        return 'twitch';
    }

    /**
     * {@inheritdoc}
     */
    protected function defaultTitle()
    {
        return 'Twitch';
    }

    /**
     * {@inheritdoc}
     */
    public function applyAccessTokenToRequest($request, $accessToken)
    {
        $request->getHeaders()->set('Authorization', 'Bearer '. $accessToken->getToken());
    }
}