<?php

namespace SandhyR\TheBridge\command\subcommands;

use SandhyR\TheBridge\libs\CortexPE\Commando\args\RawStringArgument;
use SandhyR\TheBridge\libs\CortexPE\Commando\BaseSubCommand;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;

class HelpSubCommand extends BaseSubCommand{
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
        $sender->sendMessage("TheBridge §aCommands");
        $sender->sendMessage(TextFormat::GREEN . "/thebridge create " . TextFormat::YELLOW . "§l§2» §r§2Create a new game");
        $sender->sendMessage(TextFormat::GREEN . "/thebridge delete " . TextFormat::YELLOW . "§l§2» §r§4Delete existing game");
        $sender->sendMessage(TextFormat::GREEN . "/thebridge quit " . TextFormat::YELLOW . "§l§2» §r§cQuit a game");
        $sender->sendMessage(TextFormat::GREEN . "/thebridge join " . TextFormat::YELLOW . "§l§2» §r§aJoin a game");
        $sender->sendMessage(TextFormat::GREEN . "/thebridge setspawn " . TextFormat::YELLOW . "§l§2» §r§eSet the position of spawn position of a team");
        $sender->sendMessage(TextFormat::GREEN . "/thebridge setgoal " . TextFormat::YELLOW . "§l§2» §r§eSet the position of the goal of a team");
        $sender->sendMessage(TextFormat::GREEN . "/thebridge setworld " . TextFormat::YELLOW . "§l§2» §r§6Set world name an arena");
        $sender->sendMessage(TextFormat::GREEN . "/thebridge reload " . TextFormat::YELLOW . "§l§2» §r§6Reload all arenas");
    }
}
