<?php namespace Slackwolf\Game\Command;

use Slack\Channel;
use Slack\ChannelInterface;
use Slack\DirectMessageChannel;
use Slackwolf\Game\Role;

class RepoCommand extends Command
{
    public function fire()
    {
        // Thank you PHP for your behaviour around closures that no other language has
        $client = $this->client;

        $client->getChannelGroupOrDMByID($this->channel)
           ->then(function (ChannelInterface $channel) use ($client) {
               $client->send("https://github.com/UQComputingSociety/slackwolf", $channel);
           });
    }
}
