<?php
declare(strict_types=1);

namespace Hoangg\PortalsPE\listener;

use pocketmine\event\player\PlayerQuitEvent;

class PlayerQuitEventListener extends BaseListener{

    public function onPlayerQuit(PlayerQuitEvent $event) : void{
        $this->plugin->getSessionManager()->removeSession($event->getPlayer());
    }

}
