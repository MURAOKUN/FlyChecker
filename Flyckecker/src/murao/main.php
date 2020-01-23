<?php
namespace murao;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\command\{ Command, CommandSender };
use pocketmine\network\mcpe\protocol\ModalFormRequestPacket;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;


class main extends PluginBase implements Listener{

    public function onEnable() {
        $this->getLogger()->info("§a作成者偽り、二次配布化基本禁止です。");
        $this->getLogger()->info("§bFLYCHECKERを読み込みました。　by muraokun");
    }
    public function onEnable() {
        ～
        $allowFlightStr = $this->getServer()->getAllowFlight() ? "有効" : "無効";
        $this->getLogger()->info("現在allowFlightは{$allowFlightStr}です");
      }
}