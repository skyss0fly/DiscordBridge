<?php

namespace skyss0fly/DiscordBridge;
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\PluginManager;
use Resources;
class Main extends PluginBase {
public function OnLoad(): void{
$this->getLogger()->info('Loading DiscordBridge')
  if $this->getConfig( RESOURCES:CONFIG.YML .. $DiscordBotKey = $this->getConfig(DiscordBotKey)) == nil:
  $this->getLogger()->Error('Your Bot Key is invalid, disabling plugin')
    	$this->pluginManager->disablePlugin()
  }
}

