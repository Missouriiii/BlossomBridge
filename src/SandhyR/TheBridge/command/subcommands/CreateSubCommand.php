<?php

namespace SandhyR\TheBridge\command\subcommands;

use SandhyR\TheBridge\libs\CortexPE\Commando\args\RawStringArgument;
use SandhyR\TheBridge\libs\CortexPE\Commando\BaseSubCommand;
use pocketmine\command\CommandSender;
use SandhyR\TheBridge\TheBridge;

class CreateSubCommand extends BaseSubCommand{

    protected function prepare(): void
    {
        $this->registerArgument(0 ,new RawStringArgument("arena", false));
        $this->setPermission("thebridge.set");
    }

    /**
     * @param CommandSender $sender
     * @param string $aliasUsed
     * @param array $args
     * @return void
     */
    public function onRun(CommandSender $sender, string $aliasUsed, array $args): void
    {
        if(!$this->testPermissionSilent($sender)){
            return;
        }

       if(!TheBridge::getInstance()->createArena($args["arena"])){
           $sender->sendMessage("§l§2» §r§cArena " . $args["arena"] . " §calready exists!");
           return;
       }
       $sender->sendMessage("§l§2» §r§aSuccesfully created §eArena " . $args["arena"]);
    }
}
