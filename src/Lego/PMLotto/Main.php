<?php

namespace Lego\PMLotto;

use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use SAM\provider\XFDataProvider;

class Main extends PluginBase implements Listener {
  public $samapi;
 public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->samapi = $this->getServer()->getPluginManager()->getPlugin("SAMMY");
    }
    public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
      
    }
}
