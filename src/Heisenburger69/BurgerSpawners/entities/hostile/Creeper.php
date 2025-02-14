<?php

namespace Heisenburger69\BurgerSpawners\entities\hostile;

use pocketmine\player\Player;
use pocketmine\item\VanillaItems;
use pocketmine\entity\EntitySizeInfo;
use pocketmine\data\bedrock\EnchantmentIds;
use pocketmine\data\bedrock\EnchantmentIdMap;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use Heisenburger69\BurgerSpawners\entities\SpawnerEntity;
use Heisenburger69\BurgerSpawners\utils\EntityIds;

class Creeper extends SpawnerEntity
{
    public function getName(): string
    {
        return "Creeper";
    }

    public function getDrops(): array
    {
        $lootingL = 1;
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $dmg = $cause->getDamager();
            if ($dmg instanceof Player) {

                $looting = $dmg->getInventory()->getItemInHand()->getEnchantment(EnchantmentIdMap::getInstance()->fromId(EnchantmentIds::LOOTING));
                if ($looting !== null) {
                    $lootingL = $looting->getLevel();
                } else {
                    $lootingL = 1;
                }
            }
        }
        if (mt_rand(1, 10) < 3) {
            return [VanillaItems::GUNPOWDER()->setCount(1 * $lootingL)];
        }

        return [];
    }

    protected function getInitialSizeInfo(): EntitySizeInfo
    {
        return new EntitySizeInfo(1.7, 0.6);
    }

    public static function getNetworkTypeId(): string
    {
        return EntityIds::CREEPER;
    }

    public function getXpDropAmount(): int
    {
        return 5 + mt_rand(1, 3);
    }
}
