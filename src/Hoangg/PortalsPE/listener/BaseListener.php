<?php
declare(strict_types=1);

namespace Hoangg\PortalsPE\listener;

use Hoangg\PortalsPE\Main;
use pocketmine\event\Listener;

class BaseListener implements Listener{

    /** @var Main */
    protected $plugin;

    public function __construct(Main $plugin){
        $this->plugin = $plugin;
    }

}
