<?php

/**
 * Satis configuration file
 */
$app['satis.filename'] = '/app/config.json';

/**
 * Satis auditlog (cheap backup/versioning) path
 */
$app['satis.auditlog'] = __DIR__.'/data';

/**
 * Satis main configuration class
 */
$app['satis.class'] = 'Playbloom\\Satisfy\\Model\\Configuration';

/**
 * Default values for a new repository
 */
$app['composer.repository.type_default'] = 'git';
$app['composer.repository.url_default'] = '';

/**
 * Default repository url pattern
 */
$app['repository.pattern'] = '.*';

/**
 * More restrictive username/email constraints for production
 */
$app['auth'] = $app->share(function() {
    return function($username) {
        return (bool) preg_match('/@your-organization\.tld$/', $username);
    };
});

/**
 * If the simple standard login form should be used to restrict admin section
 */
$app['auth.use_login_form'] = true;

/**
 * Users authorized to access admin section (an array of username => password)
 * Default credentials are: admin / foo.
 *
 * You can generate a new password with the following command:
 *
 *      php -r "echo hash('sha1', 'mypassword');"
 *
 */
$app['auth.users'] = array(
    'admin' => '53c56c67d544e41c9597a826eb6600106bc5f15b',
);

/**
 * If OpenID auth via Google should be used.
 * Ignored if auth.use_login_form is set to true
 */
$app['auth.use_google_openid'] = false;


