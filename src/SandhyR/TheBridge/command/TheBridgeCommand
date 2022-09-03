<?php

namespace SandhyR\TheBridge\command;

use SandhyR\TheBridge\libs\CortexPE\Commando\BaseCommand;
use pocketmine\command\CommandSender;
use SandhyR\TheBridge\command\subcommands\CreateSubCommand;
use SandhyR\TheBridge\command\subcommands\HelpSubCommand;
use SandhyR\TheBridge\command\subcommands\JoinSubCommand;
use SandhyR\TheBridge\command\subcommands\QuitSubCommand;
use SandhyR\TheBridge\command\subcommands\RandomJoinSubCommand;
use SandhyR\TheBridge\command\subcommands\ReloadSubCommand;
use SandhyR\TheBridge\command\subcommands\SetGoalSubCommand;
use SandhyR\TheBridge\command\subcommands\SetHubSubCommand;
use SandhyR\TheBridge\command\subcommands\SetSpawnSubCommand;
use SandhyR\TheBridge\command\subcommands\SetWorldSubCommand;

class TheBridgeCommand extends BaseCommand{

    protected function prepare(): void
    {
        $this->registerSubCommand(new HelpSubCommand("help", "Help Command"));
        $this->registerSubCommand(new CreateSubCommand("create", "Arena Creation Command"));
        $this->registerSubCommand(new SetSpawnSubCommand("setspawn", "Setspawn position command"));
        $this->registerSubCommand(new SetGoalSubCommand("setgoal", "Set goal position command"));
        $this->registerSubCommand(new SetWorldSubCommand("setworld", "Set arena world command"));
        $this->registerSubCommand(new JoinSubCommand("join", "Join an arena"));
        $this->registerSubCommand(new RandomJoinSubCommand("random", "Join a random arena"));
        $this->registerSubCommand(new ReloadSubCommand("reload", "Reload all arenas"));
        $this->registerSubCommand(new QuitSubCommand("quit", "Quit arena"));
        $this->registerSubCommand(new SetHubSubCommand("sethub", "Set hub"));
    }

    /**
     * @param CommandSender $sender
     * @param string $aliasUsed
     * @param array $args
     * @return void
     */
    public function onRun(CommandSender $sender, string $aliasUsed, array $args): void
    {
        $this->sendUsage();
    }
}
