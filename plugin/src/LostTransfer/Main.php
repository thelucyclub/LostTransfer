<?php

namespace LostTransfer;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class MainClass extends PluginBase implements Listener{

	public function onLoad(){
		$this->getLogger()->info(TextFormat::WHITE . "Loading. . .");
	}

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TextFormat::DARK_GREEN . "Hmm, it seems as if you are not running a proxy. This is recommended, but you don't have to.");
    }

	public function onDisable(){
		$this->getLogger()->info(TextFormat::DARK_RED . "Why u no like me?");
	}

	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
		switch($command->getName()){
			case "transfer":
				$sender->sendMessage(TextFormat::ORANGE."[LostTransfer]".TextFormat::LIGHT_BLUE." Generating StrangeTransferPacket... (Oops. Thats not implented yet. Sorry!)");
				return true;
			default:
				return false;
		}
	}
}
