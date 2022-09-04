<?php

namespace SandhyR\TheBridge\command\subcommands;

use SandhyR\TheBridge\libs\CortexPE\Commando\args\RawStringArgument;
use SandhyR\TheBridge\libs\CortexPE\Commando\BaseSubCommand;
use SandhyR\TheBridge\libs\jackmd\scorefactory\ScoreFactory;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use SandhyR\TheBridge\game\Game;
use SandhyR\TheBridge\TheBridge;

class QuitSubCommand extends BaseSubCommand{

    protected function prepare(): void
    {
        //NOOP
    }

    /**
     * @param CommandSender $sender
     * @param string $aliasUsed
     * @param array $args
     * @return void
     */
    public function onRun(CommandSender $sender, string $aliasUsed, array $args): void
    {
        if($sender instanceof Player) {
            if(($game = TheBridge::getInstance()->getPlayerGame($sender)) instanceof Game){
                $game->removePlayer($sender);
                ScoreFactory::removeObjective($sender);
                $sender->teleport($game->getHub());
                $sender->getInventory()->clearAll();
                $sender->getArmorInventory()->clearAll();
            } else {
                $sender->sendMessage(TextFormat::RED . "§l§2» §r§cYou are not currently in a game!");
            }
        }
    }
}
