<?php

/**
 * Slackwolf - A werewolf moderator for Slack
 *
 * @package Slackwolf
 * @author Chris Gillis
 */

/*
 * Register the Composer autoloader
 */
use Dotenv\Dotenv;
use Slackwolf\Slackwolf;

require __DIR__.'/vendor/autoload.php';

/*
* Load dotenv to be able to access .env configuration variables
*/
if (file_exists(__DIR__ . '/.env')) {
    $dotenv = new Dotenv(__DIR__);
    $dotenv->load();
}
error_reporting(E_ALL);

/*
 * Start the bot
 */
(new Slackwolf())->run();