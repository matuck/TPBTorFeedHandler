<?php
namespace matuck\TorFeed\Handler;

use matuck\TorFeed\Items;

class TPBTorFeedHandler
{
    public function __construct($xml, &$items)
    {
        $items = array();
        foreach($xml->xpath('channel/item') as $node)
        {
            $items[] = new Items((string) $node->title[0], NULL, (string) $node->link[0]);
        }
    }
}