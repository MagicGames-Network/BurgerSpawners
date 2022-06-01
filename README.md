[![](https://poggit.pmmp.io/shield.dl.total/BurgerSpawners)](https://poggit.pmmp.io/p/BurgerSpawners)

**Forked by MagicGames. Updated to PM4 messily. Feel free to use this as reference if you want to properly update it to PM4.**

# Information
This plugin adds a Stackable Spawner System to PMMP. When you place a Spawner, you can stack additional Spawners onto the same Spawner to increase it's spawn rate. This lets you conserve space and also prevents lag due to a large amount of Spawners.  
For example: A single Zombie Spawner spawns one Zombie every 40 seconds. Stacking another Zombie Spawner on it changes the spawn rate to 20 seconds.  
# Features
- Give Spawners to other players
- Built in Mob Stacker
- Stack Spawners onto each other to increase Spawn Rate
- Get Spawners for any known entities
- Ability to use Silk Touch on Spawners
- UI to add more Spawners onto an existing Spawner
- Entities registered within the plugin itself including Iron Golems, Bees and Foxes
- AutoInv and AutoXP for mob drops
- Configurable Options to modify XP drops, Spawner Rates, Mob and Spawner Stacking, Silk Touch and Entity Scale
- Auto Stack Spawners
- Ability to toggle Mob and Spawner stacking in specific worlds
- API Methods to exempt entities like Bosses from stacking
- Mobs spawned by the plugin can be either one-shot or have vanilla behavior
- Ability to unstack any number of Spawners from a Stack
- Customizable drops for spawners
- Customizable nametag for stacked mobs
- Toggle mob nametags on/off
- Ability to set a max number of mobs in a stack
# Planned Additions
- [x] Register Mobs via the plugin itself
- [ ] Allow custom entities to be used in the Spawner
- [x] Allow removing of a specific number of Spawners from a Stacked Spawner
- [x] Config to modify plugin messages
- [x] Allow modifying base spawn rate for Spawners
- [x] Configurable Mob Drops
- [ ] Revamp Mob Stacker and make it cleaner
- [x] Allow toggling XP Drops for Mobs
- [ ] Spawner Shop with configurable prices
- [x] Set Mob Experience drops correctly
- [x] Implement Looting Enchantment
- [x] Autostack spawners when placed near another spawner of the same type
- [x] Allow changing of the entity scale within the Spawner
# Note
- This plugin uses https://github.com/jojoe77777/FormAPI to render forms
- Pandas drop Sugarcane instead of Bamboo
- Bats, Ocelots, Bees, Vex, Witches, Silverfish and Endermite have no drops
- Sheep drop a random color of wool
- Thanks to Muqsit for Bees and Foxes <3
- Thanks to iZeaoGamer for implementing looting
- Thanks to Unickorn for patching bug related to spawner stacking
