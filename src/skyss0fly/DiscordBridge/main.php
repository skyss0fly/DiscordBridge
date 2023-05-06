<?php

namespace skyss0fly/DiscordBridge;
use pocketmine/plugin/PluginBase;


class Main extends PluginBase {
public function OnLoad(): void{
$this->getLogger()->info('Loading DiscordBridge')
  if $this->getConfig( RESOURCES.CONFIG.YML .. $DiscordBotKey) == nil:
  $this->getLogger()->Error('Your Bot Key is invalid, disabling plugin')
    $this->Self.disable
  }
}

