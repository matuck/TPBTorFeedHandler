<?php
/**
 * This file is part of the TorFeed package.
 *
 * (c) Mitch Tuck <matuck@matuck.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace matuck\TorFeed\Handler;

use matuck\TorFeed\Items;

/**
 * TPB handler for Torfeed
 * Processes The Pirate Bay torrent feeds.
 *
 * @author Mitch Tuck<matuck@matuck.com>
 */
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
