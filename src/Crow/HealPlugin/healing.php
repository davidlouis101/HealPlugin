<?php

namespace Crow\HealPlugin;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase{

	public function onEnable()
	{		
		$this->getLogger()->info("HealPlugin aktiviert!");
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args)
	{
		switch ($cmd->getName()) {
			case "heal":
				if($sender instanceof Player) {
					$sender->sendMessage(TextFormat::GREEN . "Du Hast Dich Erfolgreich Geheilt");
					$sender->setHealth(20);
					return true;
				} else{
					$sender->sendMessage(TextFormat::RED . "Du brauchst denn rang, Supreme oder Premium Um dich zu heilen");
					return true;
				}
		}
	}
}
