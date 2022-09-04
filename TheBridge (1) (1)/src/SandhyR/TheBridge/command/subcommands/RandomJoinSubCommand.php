<?php

namespace SandhyR\TheBridge\command\subcommands;

use SandhyR\TheBridge\libs\CortexPE\Commando\args\RawStringArgument;
use SandhyR\TheBridge\libs\CortexPE\Commando\BaseSubCommand;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use SandhyR\TheBridge\TheBridge;

class RandomJoinSubCommand extends BaseSubCommand{

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
           foreach (TheBridge::getInstance()->getGames() as $game){
               if($game->isRunning(true)){
                   $game->addPlayer($sender);
                   return;
               }
           }
        }
    }
}
