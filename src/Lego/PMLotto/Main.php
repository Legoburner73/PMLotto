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
      switch($command->getName()) {
        case "lotto":
          if(isset($args[0])) {]
          switch($args[0]) {
            case "admin":
              if(isset($args[1])) {
                switch($args[1]) {
                  case "ticket":
                    if(isset($args[2])) {
                      $name = $args[2];
                      $player = $this->getServer()->getPlayer($name);
                      if($player instanceof Player) {
                        $this->plugin->addTicket($player);
                        $sender->sendMessage("Giving Player " . $player . " a ticket");
                      }else{
                        $sender->sendMessage("This player is offline.");
                      }
                    }else{
                      $this->plugin->addTicket($sender);
                      $sender->sendMessage("Giving you a ticket");
                    }
                    case ""
                }
              }
            break;
          }
        break;
      }
    }
    }
    public function addTicket($player) {
      
    }
    public function startLotto() {
      
    }
    public function changeWinnings($amount) {
      
    }
    public function playerWin() {
      
    }
}
