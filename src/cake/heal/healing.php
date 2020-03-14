<?php

namespace cake;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class main extends PluginBase
{
	public function onEnable()
	{		
		$this->getLogger()->info("HealPlugin aktiviert!");
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args)
	{
		switch ($cmd->getName()) {
			case "heal":
				if($sender instanceof Player) {
					$sender->sendMessage(TextFormat::GREEN . "Deine Leben sind wieder aufgefüllt!");
					$sender->setHealth(20);
					return true;
				} else{
					$sender->sendMessage(TextFormat::RED . "Du musst ein Spieler sein um diesen Command auszuführen!");
					return true;
				}
		}
	}
}