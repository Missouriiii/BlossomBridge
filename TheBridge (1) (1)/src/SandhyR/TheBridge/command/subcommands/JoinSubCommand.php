<?php

namespace SandhyR\TheBridge\command\subcommands;

use SandhyR\TheBridge\libs\CortexPE\Commando\args\RawStringArgument;
use SandhyR\TheBridge\libs\CortexPE\Commando\BaseSubCommand;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use SandhyR\TheBridge\TheBridge;

class JoinSubCommand extends BaseSubCommand{

    protected function prepare(): void
    {
        $this->registerArgument(0, new RawStringArgument("arena", false));
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
            if (TheBridge::getInstance()->getGame($args["arena"]) !== null and TheBridge::getInstance()->getGame($args["arena"])->isRunning(true)) {
                TheBridge::getInstance()->getGame($args["arena"])->addPlayer($sender);
            } else {
                $sender->sendMessage("§l§2» §r§cArena " . $args["arena"] . " was not found, please try again!");
            }
        }
    }
}
