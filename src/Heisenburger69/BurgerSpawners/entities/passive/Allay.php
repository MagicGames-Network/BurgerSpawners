<?php

namespace Heisenburger69\BurgerSpawners\entities\passive;

use pocketmine\nbt\tag\CompoundTag;
use pocketmine\entity\EntitySizeInfo;
use Heisenburger69\BurgerSpawners\utils\EntityIds;
use Heisenburger69\BurgerSpawners\entities\SpawnerEntity;

class Allay extends SpawnerEntity
{
    public function getName(): string
    {
        return "Allay";
    }

    public function initEntity(CompoundTag $nbt): void
    {
        parent::initEntity($nbt);
    }

    public function getInitialSizeInfo(): EntitySizeInfo
    {
        return new EntitySizeInfo(0.6, 0.6);
    }

    public static function getNetworkTypeId(): string
    {
        return EntityIds::ALLAY;
    }
}
