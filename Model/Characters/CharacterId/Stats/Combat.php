<?php

/*
 * Copyright (C) 2019 ppfeufer
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace WordPress\EsiClient\Model\Characters\CharacterId\Stats;

class Combat {
    /**
     * capDrainedbyNpc
     *
     * @var int
     */
    protected $capDrainedbyNpc = 0;

    /**
     * capDrainedbyPc
     *
     * @var int
     */
    protected $capDrainedbyPc = 0;

    /**
     * capDrainingPc
     *
     * @var int
     */
    protected $capDrainingPc = 0;

    /**
     * criminalFlagSet
     *
     * @var int
     */
    protected $criminalFlagSet = 0;

    /**
     * damageFromNpcCsAmount
     *
     * @var int
     */
    protected $damageFromNpcCsAmount = 0;

    /**
     * damageFromNpcCsNumShots
     *
     * @var int
     */
    protected $damageFromNpcCsNumShots = 0;

    /**
     * damageFromPlayersBombAmount
     *
     * @var int
     */
    protected $damageFromPlayersBombAmount = 0;

    /**
     * damageFromPlayersBombNumShots
     *
     * @var int
     */
    protected $damageFromPlayersBombNumShots = 0;

    /**
     * damageFromPlayersCombatDroneAmount
     *
     * @var int
     */
    protected $damageFromPlayersCombatDroneAmount = 0;

    /**
     * damageFromPlayersCombatDroneNumShots
     *
     * @var int
     */
    protected $damageFromPlayersCombatDroneNumShots = 0;

    /**
     * damageFromPlayersEnergyAmount
     *
     * @var int
     */
    protected $damageFromPlayersEnergyAmount = 0;

    /**
     * damageFromPlayersEnergyNumShots
     *
     * @var int
     */
    protected $damageFromPlayersEnergyNumShots = 0;

    /**
     * damageFromPlayersFighterBomberAmount
     *
     * @var int
     */
    protected $damageFromPlayersFighterBomberAmount = 0;

    /**
     * damageFromPlayersFighterBomberNumShots
     *
     * @var int
     */
    protected $damageFromPlayersFighterBomberNumShots = 0;

    /**
     * damageFromPlayersFighterDrone
     *
     * @var int
     */
    protected $damageFromPlayersFighterDroneAmount = 0;

    /**
     * damageFromPlayersFighterDroneNumShots
     *
     * @var int
     */
    protected $damageFromPlayersFighterDroneNumShots = 0;

    /**
     * damageFromPlayersHybrid
     *
     * @var int
     */
    protected $damageFromPlayersHybridAmount = 0;

    /**
     * damageFromPlayersHybridNumShots
     *
     * @var int
     */
    protected $damageFromPlayersHybridNumShots = 0;

    /**
     * damageByPlayersMissileAmount
     *
     * @var int
     */
    protected $damageByPlayersMissileAmount = 0;

    /**
     * damageByPlayersMissileNumShots
     *
     * @var int
     */
    protected $damageByPlayersMissileNumShots = 0;

    /**
     * damageByPlayersProjectileAmount
     *
     * @var int
     */
    protected $damageByPlayersProjectileAmount = 0;

    /**
     * damageByPlayersProjectileNumShots
     *
     * @var int
     */
    protected $damageByPlayersProjectileNumShots = 0;

    /**
     * damageByPlayersSmartBombAmount
     *
     * @var int
     */
    protected $damageByPlayersSmartBombAmount = 0;

    /**
     * damageByPlayersSmartBombNumShots
     *
     * @var int
     */
    protected $damageByPlayersSmartBombNumShots = 0;

    /**
     * damageByPlayersSuperAmount
     *
     * @var int
     */
    protected $damageByPlayersSuperAmount = 0;

    /**
     * damageByPlayersSuperNumShots
     *
     * @var int
     */
    protected $damageByPlayersSuperNumShots = 0;

    /**
     * damageFromStructureTotalAmount
     *
     * @var int
     */
    protected $damageFromStructureTotalAmount = 0;

    /**
     * damageFromStructureTotalNumShots
     *
     * @var int
     */
    protected $damageFromStructureTotalNumShots = 0;

    /**
     * damageToPlayersBombAmount
     *
     * @var int
     */
    protected $damageToPlayersBombAmount = 0;

    /**
     * damageToPlayersBombNumShots
     *
     * @var int
     */
    protected $damageToPlayersBombNumShots = 0;

    /**
     * damageToPlayersCombatDroneAmount
     *
     * @var int
     */
    protected $damageToPlayersCombatDroneAmount = 0;

    /**
     * damageToPlayersCombatDroneNumShots
     *
     * @var int
     */
    protected $damageToPlayersCombatDroneNumShots = 0;

    /**
     * damageToPlayersEnergyAmount
     *
     * @var int
     */
    protected $damageToPlayersEnergyAmount = 0;

    /**
     * damageToPlayersEnergyNumShots
     *
     * @var int
     */
    protected $damageToPlayersEnergyNumShots = 0;

    /**
     * damageToPlayersFighterBomberAmount
     *
     * @var int
     */
    protected $damageToPlayersFighterBomberAmount = 0;

    /**
     * damageToPlayersFighterBomberNumShots
     *
     * @var int
     */
    protected $damageToPlayersFighterBomberNumShots = 0;

    /**
     * damageToPlayersFighterDroneAmount
     *
     * @var int
     */
    protected $damageToPlayersFighterDroneAmount = 0;

    /**
     * damageToPlayersFighterDroneNumShots
     *
     * @var int
     */
    protected $damageToPlayersFighterDroneNumShots = 0;

    /**
     * damageToPlayersHybridAmount
     *
     * @var int
     */
    protected $damageToPlayersHybridAmount = 0;

    /**
     * damageToPlayersHybridNumShots
     *
     * @var int
     */
    protected $damageToPlayersHybridNumShots = 0;

    /**
     * damageToPlayersMissileAmount
     *
     * @var int
     */
    protected $damageToPlayersMissileAmount = 0;

    /**
     * damageToPlayersMissileNumShots
     *
     * @var int
     */
    protected $damageToPlayersMissileNumShots = 0;

    /**
     * damageToPlayersProjectileAmount
     *
     * @var int
     */
    protected $damageToPlayersProjectileAmount = 0;

    /**
     * damageToPlayersProjectileNumShots
     *
     * @var int
     */
    protected $damageToPlayersProjectileNumShots = 0;

    /**
     * damageToPlayersSmartBombAmount
     *
     * @var int
     */
    protected $damageToPlayersSmartBombAmount = 0;

    /**
     * damageToPlayersSmartBombNumShots
     *
     * @var int
     */
    protected $damageToPlayersSmartBombNumShots = 0;

    /**
     * damageToPlayersSuperAmount
     *
     * @var int
     */
    protected $damageToPlayersSuperAmount = 0;

    /**
     * damageToPlayersSuperNumShots
     *
     * @var int
     */
    protected $damageToPlayersSuperNumShots = 0;

    /**
     * damageToStructuresTotalAmount
     *
     * @var int
     */
    protected $damageToStructuresTotalAmount = 0;

    /**
     * damageToStructuresTotalNumShots
     *
     * @var int
     */
    protected $damageToStructuresTotalNumShots = 0;

    /**
     * deathsHighSec
     *
     * @var int
     */
    protected $deathsHighSec = 0;

    /**
     * deathsPodHighSec
     *
     * @var int
     */
    protected $deathsPodHighSec = 0;

    /**
     * deathsLowSec
     *
     * @var int
     */
    protected $deathsLowSec = 0;

    /**
     * deathsPodLowSec
     *
     * @var int
     */
    protected $deathsPodLowSec = 0;

    /**
     * deathsNullSec
     *
     * @var int
     */
    protected $deathsNullSec = 0;

    /**
     * deathsPodNullSec
     *
     * @var int
     */
    protected $deathsPodNullSec = 0;

    /**
     * deathsWormhole
     *
     * @var int
     */
    protected $deathsWormhole = 0;

    /**
     * deathsPodWormhole
     *
     * @var int
     */
    protected $deathsPodWormhole = 0;

    /**
     * droneEngage
     *
     * @var int
     */
    protected $droneEngage = 0;

    /**
     * dscans
     *
     * @var int
     */
    protected $dscans = 0;

    /**
     * dueRequested
     *
     * @var int
     */
    protected $duelRequested = 0;

    /**
     * engagementRegister
     *
     * @var int
     */
    protected $engagementRegister = 0;

    /**
     * killsAssists
     *
     * @var int
     */
    protected $killsAssists = 0;

    /**
     * killsHighSec
     *
     * @var int
     */
    protected $killsHighSec = 0;

    /**
     * killsPodHighSec
     *
     * @var int
     */
    protected $killsPodHighSec = 0;

    /**
     * killsLowSec
     *
     * @var int
     */
    protected $killsLowSec = 0;

    /**
     * killsPodLowSec
     *
     * @var int
     */
    protected $killsPodLowSec = 0;

    /**
     * killsNullSec
     *
     * @var int
     */
    protected $killsNullSec = 0;

    /**
     * killsPodNullSec
     *
     * @var int
     */
    protected $killsPodNullSec = 0;

    /**
     * killsWormhole
     *
     * @var int
     */
    protected $killsWormhole = 0;

    /**
     * killPodWormhole
     *
     * @var int
     */
    protected $killsPodWormhole = 0;

    /**
     * npcFlagSet
     *
     * @var int
     */
    protected $npcFlagSet = 0;

    /**
     * probeScans
     *
     * @var int
     */
    protected $probeScans = 0;

    /**
     * pvpFlagSet
     *
     * @var int
     */
    protected $pvpFlagSet = 0;

    /**
     * repairArmorByRemoteAmount
     *
     * @var int
     */
    protected $repairArmorByRemoteAmount = 0;

    /**
     * repairArmorRemoteAmount
     *
     * @var int
     */
    protected $repairArmorRemoteAmount = 0;

    /**
     * repairArmorSelfAmount
     *
     * @var int
     */
    protected $repairArmorSelfAmount = 0;

    /**
     * repairCapacitorByRemoteAmount
     *
     * @var int
     */
    protected $repairCapacitorByRemoteAmount = 0;

    /**
     * repairCapacitorRemoteAmount
     *
     * @var int
     */
    protected $repairCapacitorRemoteAmount = 0;

    /**
     * repairCapacitorSelfAmount
     *
     * @var int
     */
    protected $repairCapacitorSelfAmount = 0;

    /**
     * repairHullByRemoteAmount
     *
     * @var int
     */
    protected $repairHullByRemoteAmount = 0;

    /**
     * repairHullRemoteAmount
     *
     * @var int
     */
    protected $repairHullRemoteAmount = 0;

    /**
     * repairHullSelfAmount
     *
     * @var int
     */
    protected $repairHullSelfAmount = 0;

    /**
     * repairShieldByRemoteAmount
     *
     * @var int
     */
    protected $repairShieldByRemoteAmount = 0;

    /**
     * repairShieldRemoteAmount
     *
     * @var int
     */
    protected $repairShieldRemoteAmount = 0;

    /**
     * repairShieldSelfAmount
     *
     * @var int
     */
    protected $repairShieldSelfAmount = 0;

    /**
     * selfDestructs
     *
     * @var int
     */
    protected $selfDestructs = 0;

    /**
     * warpScramblePc
     *
     * @var int
     */
    protected $warpScramblePc = 0;

    /**
     * warpScrambledbyNpc
     *
     * @var int
     */
    protected $warpScrambledbyNpc = 0;

    /**
     * warpScrambledbyPc
     *
     * @var int
     */
    protected $warpScrambledbyPc = 0;

    /**
     * weaponFlagSet
     *
     * @var int
     */
    protected $weaponFlagSet = 0;

    /**
     * webifiedbyNpc
     *
     * @var int
     */
    protected $webifiedbyNpc = 0;

    /**
     * webifiedbyPc
     *
     * @var int
     */
    protected $webifiedbyPc = 0;

    /**
     * webifyingPc
     *
     * @var int
     */
    protected $webifyingPc = 0;

    /**
     * getCapDrainedbyNpc
     *
     * @return int
     */
    public function getCapDrainedbyNpc() {
        return $this->capDrainedbyNpc;
    }

    /**
     * getCapDrainedbyPc
     *
     * @return int
     */
    public function getCapDrainedbyPc() {
        return $this->capDrainedbyPc;
    }

    /**
     * getCapDrainingPc
     *
     * @return int
     */
    public function getCapDrainingPc() {
        return $this->capDrainingPc;
    }

    /**
     * getCriminalFlagSet
     *
     * @return int
     */
    public function getCriminalFlagSet() {
        return $this->criminalFlagSet;
    }

    /**
     * getDamageFromNpcCsAmount
     *
     * @return int
     */
    public function getDamageFromNpcCsAmount() {
        return $this->damageFromNpcCsAmount;
    }

    /**
     * getDamageFromNpcCsNumShots
     *
     * @return int
     */
    public function getDamageFromNpcCsNumShots() {
        return $this->damageFromNpcCsNumShots;
    }

    /**
     * getDamageFromPlayersBombAmount
     *
     * @return int
     */
    public function getDamageFromPlayersBombAmount() {
        return $this->damageFromPlayersBombAmount;
    }

    /**
     * getDamageFromPlayersBombNumShots
     *
     * @return int
     */
    public function getDamageFromPlayersBombNumShots() {
        return $this->damageFromPlayersBombNumShots;
    }

    /**
     * getDamageFromPlayersCombatDroneAmount
     *
     * @return int
     */
    public function getDamageFromPlayersCombatDroneAmount() {
        return $this->damageFromPlayersCombatDroneAmount;
    }

    /**
     * getDamageFromPlayersCombatDroneNumShots
     *
     * @return int
     */
    public function getDamageFromPlayersCombatDroneNumShots() {
        return $this->damageFromPlayersCombatDroneNumShots;
    }

    /**
     * getDamageFromPlayersEnergyAmount
     *
     * @return int
     */
    public function getDamageFromPlayersEnergyAmount() {
        return $this->damageFromPlayersEnergyAmount;
    }

    /**
     * getDamageFromPlayersEnergyNumShots
     *
     * @return int
     */
    public function getDamageFromPlayersEnergyNumShots() {
        return $this->damageFromPlayersEnergyNumShots;
    }

    /**
     * getDamageFromPlayersFighterBomberAmount
     *
     * @return int
     */
    public function getDamageFromPlayersFighterBomberAmount() {
        return $this->damageFromPlayersFighterBomberAmount;
    }

    /**
     * getDamageFromPlayersFighterBomberNumShots
     *
     * @return int
     */
    public function getDamageFromPlayersFighterBomberNumShots() {
        return $this->damageFromPlayersFighterBomberNumShots;
    }

    /**
     * getDamageFromPlayersFighterDroneAmount
     *
     * @return int
     */
    public function getDamageFromPlayersFighterDroneAmount() {
        return $this->damageFromPlayersFighterDroneAmount;
    }

    /**
     * getDamageFromPlayersFighterDroneNumShots
     *
     * @return int
     */
    public function getDamageFromPlayersFighterDroneNumShots() {
        return $this->damageFromPlayersFighterDroneNumShots;
    }

    /**
     * getDamageFromPlayersHybridAmount
     *
     * @return int
     */
    public function getDamageFromPlayersHybridAmount() {
        return $this->damageFromPlayersHybridAmount;
    }

    /**
     * getDamageFromPlayersHybridNumShots
     *
     * @return int
     */
    public function getDamageFromPlayersHybridNumShots() {
        return $this->damageFromPlayersHybridNumShots;
    }

    /**
     * getDamageByPlayersMissileAmount
     *
     * @return int
     */
    public function getDamageByPlayersMissileAmount() {
        return $this->damageByPlayersMissileAmount;
    }

    /**
     * getDamageByPlayersMissileNumShots
     *
     * @return int
     */
    public function getDamageByPlayersMissileNumShots() {
        return $this->damageByPlayersMissileNumShots;
    }

    /**
     * getDamageByPlayersProjectileAmount
     *
     * @return int
     */
    public function getDamageByPlayersProjectileAmount() {
        return $this->damageByPlayersProjectileAmount;
    }

    /**
     * getDamageByPlayersProjectileNumShots
     *
     * @return int
     */
    public function getDamageByPlayersProjectileNumShots() {
        return $this->damageByPlayersProjectileNumShots;
    }

    /**
     * getDamageByPlayersSmartBombAmount
     *
     * @return int
     */
    public function getDamageByPlayersSmartBombAmount() {
        return $this->damageByPlayersSmartBombAmount;
    }

    /**
     * getDamageByPlayersSmartBombNumShots
     *
     * @return int
     */
    public function getDamageByPlayersSmartBombNumShots() {
        return $this->damageByPlayersSmartBombNumShots;
    }

    /**
     * getDamageByPlayersSuperAmount
     *
     * @return int
     */
    public function getDamageByPlayersSuperAmount() {
        return $this->damageByPlayersSuperAmount;
    }

    /**
     * getDamageByPlayersSuperNumShots
     *
     * @return int
     */
    public function getDamageByPlayersSuperNumShots() {
        return $this->damageByPlayersSuperNumShots;
    }

    /**
     * getDamageFromStructureTotalAmount
     *
     * @return int
     */
    public function getDamageFromStructureTotalAmount() {
        return $this->damageFromStructureTotalAmount;
    }

    /**
     * getDamageFromStructureTotalNumShots
     *
     * @return int
     */
    public function getDamageFromStructureTotalNumShots() {
        return $this->damageFromStructureTotalNumShots;
    }

    /**
     * getDamageToPlayersBombAmount
     *
     * @return int
     */
    public function getDamageToPlayersBombAmount() {
        return $this->damageToPlayersBombAmount;
    }

    /**
     * getDamageToPlayersBombNumShots
     *
     * @return int
     */
    public function getDamageToPlayersBombNumShots() {
        return $this->damageToPlayersBombNumShots;
    }

    /**
     * getDamageToPlayersCombatDroneAmount
     *
     * @return int
     */
    public function getDamageToPlayersCombatDroneAmount() {
        return $this->damageToPlayersCombatDroneAmount;
    }

    /**
     * getDamageToPlayersCombatDroneNumShots
     *
     * @return int
     */
    public function getDamageToPlayersCombatDroneNumShots() {
        return $this->damageToPlayersCombatDroneNumShots;
    }

    /**
     * getDamageToPlayersEnergyAmount
     *
     * @return int
     */
    public function getDamageToPlayersEnergyAmount() {
        return $this->damageToPlayersEnergyAmount;
    }

    /**
     * getDamageToPlayersEnergyNumShots
     *
     * @return int
     */
    public function getDamageToPlayersEnergyNumShots() {
        return $this->damageToPlayersEnergyNumShots;
    }

    /**
     * getDamageToPlayersFighterBomberAmount
     *
     * @return int
     */
    public function getDamageToPlayersFighterBomberAmount() {
        return $this->damageToPlayersFighterBomberAmount;
    }

    /**
     * getDamageToPlayersFighterBomberNumShots
     *
     * @return int
     */
    public function getDamageToPlayersFighterBomberNumShots() {
        return $this->damageToPlayersFighterBomberNumShots;
    }

    /**
     * getDamageToPlayersFighterDroneAmount
     *
     * @return int
     */
    public function getDamageToPlayersFighterDroneAmount() {
        return $this->damageToPlayersFighterDroneAmount;
    }

    /**
     * getDamageToPlayersFighterDroneNumShots
     *
     * @return int
     */
    public function getDamageToPlayersFighterDroneNumShots() {
        return $this->damageToPlayersFighterDroneNumShots;
    }

    /**
     * getDamageToPlayersHybridAmount
     *
     * @return int
     */
    public function getDamageToPlayersHybridAmount() {
        return $this->damageToPlayersHybridAmount;
    }

    /**
     * getDamageToPlayersHybridNumShots
     *
     * @return int
     */
    public function getDamageToPlayersHybridNumShots() {
        return $this->damageToPlayersHybridNumShots;
    }

    /**
     * getDamageToPlayersMissileAmount
     *
     * @return int
     */
    public function getDamageToPlayersMissileAmount() {
        return $this->damageToPlayersMissileAmount;
    }

    /**
     * getDamageToPlayersMissileNumShots
     *
     * @return int
     */
    public function getDamageToPlayersMissileNumShots() {
        return $this->damageToPlayersMissileNumShots;
    }

    /**
     * getDamageToPlayersProjectileAmount
     *
     * @return int
     */
    public function getDamageToPlayersProjectileAmount() {
        return $this->damageToPlayersProjectileAmount;
    }

    /**
     * getDamageToPlayersProjectileNumShots
     *
     * @return int
     */
    public function getDamageToPlayersProjectileNumShots() {
        return $this->damageToPlayersProjectileNumShots;
    }

    /**
     * getDamageToPlayersSmartBombAmount
     *
     * @return int
     */
    public function getDamageToPlayersSmartBombAmount() {
        return $this->damageToPlayersSmartBombAmount;
    }

    /**
     * getDamageToPlayersSmartBombNumShots
     *
     * @return int
     */
    public function getDamageToPlayersSmartBombNumShots() {
        return $this->damageToPlayersSmartBombNumShots;
    }

    /**
     * getDamageToPlayersSuperAmount
     *
     * @return int
     */
    public function getDamageToPlayersSuperAmount() {
        return $this->damageToPlayersSuperAmount;
    }

    /**
     * getDamageToPlayersSuperNumShots
     *
     * @return int
     */
    public function getDamageToPlayersSuperNumShots() {
        return $this->damageToPlayersSuperNumShots;
    }

    /**
     * getDamageToStructuresTotalAmount
     *
     * @return int
     */
    public function getDamageToStructuresTotalAmount() {
        return $this->damageToStructuresTotalAmount;
    }

    /**
     * getDamageToStructuresTotalNumShots
     *
     * @return int
     */
    public function getDamageToStructuresTotalNumShots() {
        return $this->damageToStructuresTotalNumShots;
    }

    /**
     * getDeathsHighSec
     *
     * @return int
     */
    public function getDeathsHighSec() {
        return $this->deathsHighSec;
    }

    /**
     * getDeathsPodHighSec
     *
     * @return int
     */
    public function getDeathsPodHighSec() {
        return $this->deathsPodHighSec;
    }

    /**
     * getDeathsLowSec
     *
     * @return int
     */
    public function getDeathsLowSec() {
        return $this->deathsLowSec;
    }

    /**
     * getDeathsPodLowSec
     *
     * @return int
     */
    public function getDeathsPodLowSec() {
        return $this->deathsPodLowSec;
    }

    /**
     * getDeathsNullSec
     *
     * @return int
     */
    public function getDeathsNullSec() {
        return $this->deathsNullSec;
    }

    /**
     * getDeathsPodNullSec
     *
     * @return int
     */
    public function getDeathsPodNullSec() {
        return $this->deathsPodNullSec;
    }

    /**
     * getDeathsWormhole
     *
     * @return int
     */
    public function getDeathsWormhole() {
        return $this->deathsWormhole;
    }

    /**
     * getDeathsPodWormhole
     *
     * @return int
     */
    public function getDeathsPodWormhole() {
        return $this->deathsPodWormhole;
    }

    /**
     * getDroneEngage
     *
     * @return int
     */
    public function getDroneEngage() {
        return $this->droneEngage;
    }

    /**
     * getDscans
     *
     * @return int
     */
    public function getDscans() {
        return $this->dscans;
    }

    /**
     * getDuelRequested
     *
     * @return int
     */
    public function getDuelRequested() {
        return $this->duelRequested;
    }

    /**
     * getEngagementRegister
     *
     * @return int
     */
    public function getEngagementRegister() {
        return $this->engagementRegister;
    }

    /**
     * getKillsAssists
     *
     * @return int
     */
    public function getKillsAssists() {
        return $this->killsAssists;
    }

    /**
     * getKillsHighSec
     *
     * @return int
     */
    public function getKillsHighSec() {
        return $this->killsHighSec;
    }

    /**
     * getKillsPodHighSec
     *
     * @return int
     */
    public function getKillsPodHighSec() {
        return $this->killsPodHighSec;
    }

    /**
     * getKillsLowSec
     *
     * @return int
     */
    public function getKillsLowSec() {
        return $this->killsLowSec;
    }

    /**
     * getKillsPodLowSec
     *
     * @return int
     */
    public function getKillsPodLowSec() {
        return $this->killsPodLowSec;
    }

    /**
     * getKillsNullSec
     *
     * @return int
     */
    public function getKillsNullSec() {
        return $this->killsNullSec;
    }

    /**
     * getKillsPodNullSec
     *
     * @return int
     */
    public function getKillsPodNullSec() {
        return $this->killsPodNullSec;
    }

    /**
     * getKillsWormhole
     *
     * @return int
     */
    public function getKillsWormhole() {
        return $this->killsWormhole;
    }

    /**
     * getKillsPodWormhole
     *
     * @return int
     */
    public function getKillsPodWormhole() {
        return $this->killsPodWormhole;
    }

    /**
     * getNpcFlagSet
     *
     * @return int
     */
    public function getNpcFlagSet() {
        return $this->npcFlagSet;
    }

    /**
     * getProbeScans
     *
     * @return int
     */
    public function getProbeScans() {
        return $this->probeScans;
    }

    /**
     * getPvpFlagSet
     *
     * @return int
     */
    public function getPvpFlagSet() {
        return $this->pvpFlagSet;
    }

    /**
     * getRepairArmorByRemoteAmount
     *
     * @return int
     */
    public function getRepairArmorByRemoteAmount() {
        return $this->repairArmorByRemoteAmount;
    }

    /**
     * getRepairArmorRemoteAmount
     *
     * @return int
     */
    public function getRepairArmorRemoteAmount() {
        return $this->repairArmorRemoteAmount;
    }

    /**
     * getRepairArmorSelfAmount
     *
     * @return int
     */
    public function getRepairArmorSelfAmount() {
        return $this->repairArmorSelfAmount;
    }

    /**
     * getRepairCapacitorByRemoteAmount
     *
     * @return int
     */
    public function getRepairCapacitorByRemoteAmount() {
        return $this->repairCapacitorByRemoteAmount;
    }

    /**
     * getRepairCapacitorRemoteAmount
     *
     * @return int
     */
    public function getRepairCapacitorRemoteAmount() {
        return $this->repairCapacitorRemoteAmount;
    }

    /**
     * getRepairCapacitorSelfAmount
     *
     * @return int
     */
    public function getRepairCapacitorSelfAmount() {
        return $this->repairCapacitorSelfAmount;
    }

    /**
     * getRepairHullByRemoteAmount
     *
     * @return int
     */
    public function getRepairHullByRemoteAmount() {
        return $this->repairHullByRemoteAmount;
    }

    /**
     * getRepairHullRemoteAmount
     *
     * @return int
     */
    public function getRepairHullRemoteAmount() {
        return $this->repairHullRemoteAmount;
    }

    /**
     * getRepairHullSelfAmount
     *
     * @return int
     */
    public function getRepairHullSelfAmount() {
        return $this->repairHullSelfAmount;
    }

    /**
     * getRepairShieldByRemoteAmount
     *
     * @return int
     */
    public function getRepairShieldByRemoteAmount() {
        return $this->repairShieldByRemoteAmount;
    }

    /**
     * getRepairShieldRemoteAmount
     *
     * @return int
     */
    public function getRepairShieldRemoteAmount() {
        return $this->repairShieldRemoteAmount;
    }

    /**
     * getRepairShieldSelfAmount
     *
     * @return int
     */
    public function getRepairShieldSelfAmount() {
        return $this->repairShieldSelfAmount;
    }

    /**
     * getSelfDestructs
     *
     * @return int
     */
    public function getSelfDestructs() {
        return $this->selfDestructs;
    }

    /**
     * getWarpScramblePc
     *
     * @return int
     */
    public function getWarpScramblePc() {
        return $this->warpScramblePc;
    }

    /**
     * getWarpScrambledbyNpc
     *
     * @return int
     */
    public function getWarpScrambledbyNpc() {
        return $this->warpScrambledbyNpc;
    }

    /**
     * getWarpScrambledbyPc
     *
     * @return int
     */
    public function getWarpScrambledbyPc() {
        return $this->warpScrambledbyPc;
    }

    /**
     * getWeaponFlagSet
     *
     * @return int
     */
    public function getWeaponFlagSet() {
        return $this->weaponFlagSet;
    }

    /**
     * getWebifiedbyNpc
     *
     * @return int
     */
    public function getWebifiedbyNpc() {
        return $this->webifiedbyNpc;
    }

    /**
     * getWebifiedbyPc
     *
     * @return int
     */
    public function getWebifiedbyPc() {
        return $this->webifiedbyPc;
    }

    /**
     * getWebifyingPc
     *
     * @return int
     */
    public function getWebifyingPc() {
        return $this->webifyingPc;
    }

    /**
     * setCapDrainedbyNpc
     *
     * @param int $capDrainedbyNpc
     */
    protected function setCapDrainedbyNpc(int $capDrainedbyNpc) {
        $this->capDrainedbyNpc = $capDrainedbyNpc;
    }

    /**
     * setCapDrainedbyPc
     *
     * @param int $capDrainedbyPc
     */
    protected function setCapDrainedbyPc(int $capDrainedbyPc) {
        $this->capDrainedbyPc = $capDrainedbyPc;
    }

    /**
     * setCapDrainingPc
     *
     * @param int $capDrainingPc
     */
    protected function setCapDrainingPc(int $capDrainingPc) {
        $this->capDrainingPc = $capDrainingPc;
    }

    /**
     * setCriminalFlagSet
     *
     * @param int $criminalFlagSet
     */
    protected function setCriminalFlagSet(int $criminalFlagSet) {
        $this->criminalFlagSet = $criminalFlagSet;
    }

    /**
     * setDamageFromNpcCsAmount
     *
     * @param int $damageFromNpcCsAmount
     */
    protected function setDamageFromNpcCsAmount(int $damageFromNpcCsAmount) {
        $this->damageFromNpcCsAmount = $damageFromNpcCsAmount;
    }

    /**
     * setDamageFromNpcCsNumShots
     *
     * @param int $damageFromNpcCsNumShots
     */
    protected function setDamageFromNpcCsNumShots(int $damageFromNpcCsNumShots) {
        $this->damageFromNpcCsNumShots = $damageFromNpcCsNumShots;
    }

    /**
     * setDamageFromPlayersBombAmount
     *
     * @param int $damageFromPlayersBombAmount
     */
    protected function setDamageFromPlayersBombAmount(int $damageFromPlayersBombAmount) {
        $this->damageFromPlayersBombAmount = $damageFromPlayersBombAmount;
    }

    /**
     * setDamageFromPlayersBombNumShots
     *
     * @param int $damageFromPlayersBombNumShots
     */
    protected function setDamageFromPlayersBombNumShots(int $damageFromPlayersBombNumShots) {
        $this->damageFromPlayersBombNumShots = $damageFromPlayersBombNumShots;
    }

    /**
     * setDamageFromPlayersCombatDroneAmount
     *
     * @param int $damageFromPlayersCombatDroneAmount
     */
    protected function setDamageFromPlayersCombatDroneAmount(int $damageFromPlayersCombatDroneAmount) {
        $this->damageFromPlayersCombatDroneAmount = $damageFromPlayersCombatDroneAmount;
    }

    /**
     * setDamageFromPlayersCombatDroneNumShots
     *
     * @param int $damageFromPlayersCombatDroneNumShots
     */
    protected function setDamageFromPlayersCombatDroneNumShots(int $damageFromPlayersCombatDroneNumShots) {
        $this->damageFromPlayersCombatDroneNumShots = $damageFromPlayersCombatDroneNumShots;
    }

    /**
     * setDamageFromPlayersEnergyAmount
     *
     * @param int $damageFromPlayersEnergyAmount
     */
    protected function setDamageFromPlayersEnergyAmount(int $damageFromPlayersEnergyAmount) {
        $this->damageFromPlayersEnergyAmount = $damageFromPlayersEnergyAmount;
    }

    /**
     * setDamageFromPlayersEnergyNumShots
     *
     * @param int $damageFromPlayersEnergyNumShots
     */
    protected function setDamageFromPlayersEnergyNumShots(int $damageFromPlayersEnergyNumShots) {
        $this->damageFromPlayersEnergyNumShots = $damageFromPlayersEnergyNumShots;
    }

    /**
     * setDamageFromPlayersFighterBomberAmount
     *
     * @param int $damageFromPlayersFighterBomberAmount
     */
    protected function setDamageFromPlayersFighterBomberAmount(int $damageFromPlayersFighterBomberAmount) {
        $this->damageFromPlayersFighterBomberAmount = $damageFromPlayersFighterBomberAmount;
    }

    /**
     * setDamageFromPlayersFighterBomberNumShots
     *
     * @param int $damageFromPlayersFighterBomberNumShots
     */
    protected function setDamageFromPlayersFighterBomberNumShots(int $damageFromPlayersFighterBomberNumShots) {
        $this->damageFromPlayersFighterBomberNumShots = $damageFromPlayersFighterBomberNumShots;
    }

    /**
     * setDamageFromPlayersFighterDroneAmount
     *
     * @param int $damageFromPlayersFighterDroneAmount
     */
    protected function setDamageFromPlayersFighterDroneAmount(int $damageFromPlayersFighterDroneAmount) {
        $this->damageFromPlayersFighterDroneAmount = $damageFromPlayersFighterDroneAmount;
    }

    /**
     * setDamageFromPlayersFighterDroneNumShots
     *
     * @param int $damageFromPlayersFighterDroneNumShots
     */
    protected function setDamageFromPlayersFighterDroneNumShots(int $damageFromPlayersFighterDroneNumShots) {
        $this->damageFromPlayersFighterDroneNumShots = $damageFromPlayersFighterDroneNumShots;
    }

    /**
     * setDamageFromPlayersHybridAmount
     *
     * @param int $damageFromPlayersHybridAmount
     */
    protected function setDamageFromPlayersHybridAmount(int $damageFromPlayersHybridAmount) {
        $this->damageFromPlayersHybridAmount = $damageFromPlayersHybridAmount;
    }

    /**
     * setDamageFromPlayersHybridNumShots
     *
     * @param int $damageFromPlayersHybridNumShots
     */
    protected function setDamageFromPlayersHybridNumShots(int $damageFromPlayersHybridNumShots) {
        $this->damageFromPlayersHybridNumShots = $damageFromPlayersHybridNumShots;
    }

    /**
     * setDamageByPlayersMissileAmount
     *
     * @param int $damageByPlayersMissileAmount
     */
    protected function setDamageByPlayersMissileAmount(int $damageByPlayersMissileAmount) {
        $this->damageByPlayersMissileAmount = $damageByPlayersMissileAmount;
    }

    /**
     * setDamageByPlayersMissileNumShots
     *
     * @param int $damageByPlayersMissileNumShots
     */
    protected function setDamageByPlayersMissileNumShots(int $damageByPlayersMissileNumShots) {
        $this->damageByPlayersMissileNumShots = $damageByPlayersMissileNumShots;
    }

    /**
     * setDamageByPlayersProjectileAmount
     *
     * @param int $damageByPlayersProjectileAmount
     */
    protected function setDamageByPlayersProjectileAmount(int $damageByPlayersProjectileAmount) {
        $this->damageByPlayersProjectileAmount = $damageByPlayersProjectileAmount;
    }

    /**
     * setDamageByPlayersProjectileNumShots
     *
     * @param int $damageByPlayersProjectileNumShots
     */
    protected function setDamageByPlayersProjectileNumShots(int $damageByPlayersProjectileNumShots) {
        $this->damageByPlayersProjectileNumShots = $damageByPlayersProjectileNumShots;
    }

    /**
     * setDamageByPlayersSmartBombAmount
     *
     * @param int $damageByPlayersSmartBombAmount
     */
    protected function setDamageByPlayersSmartBombAmount(int $damageByPlayersSmartBombAmount) {
        $this->damageByPlayersSmartBombAmount = $damageByPlayersSmartBombAmount;
    }

    /**
     * setDamageByPlayersSmartBombNumShots
     *
     * @param int $damageByPlayersSmartBombNumShots
     */
    protected function setDamageByPlayersSmartBombNumShots(int $damageByPlayersSmartBombNumShots) {
        $this->damageByPlayersSmartBombNumShots = $damageByPlayersSmartBombNumShots;
    }

    /**
     * setDamageByPlayersSuperAmount
     *
     * @param int $damageByPlayersSuperAmount
     */
    protected function setDamageByPlayersSuperAmount(int $damageByPlayersSuperAmount) {
        $this->damageByPlayersSuperAmount = $damageByPlayersSuperAmount;
    }

    /**
     * setDamageByPlayersSuperNumShots
     *
     * @param int $damageByPlayersSuperNumShots
     */
    protected function setDamageByPlayersSuperNumShots(int $damageByPlayersSuperNumShots) {
        $this->damageByPlayersSuperNumShots = $damageByPlayersSuperNumShots;
    }

    /**
     * setDamageFromStructureTotalAmount
     *
     * @param int $damageFromStructureTotalAmount
     */
    protected function setDamageFromStructureTotalAmount(int $damageFromStructureTotalAmount) {
        $this->damageFromStructureTotalAmount = $damageFromStructureTotalAmount;
    }

    /**
     * setDamageFromStructureTotalNumShots
     *
     * @param int $damageFromStructureTotalNumShots
     */
    protected function setDamageFromStructureTotalNumShots(int $damageFromStructureTotalNumShots) {
        $this->damageFromStructureTotalNumShots = $damageFromStructureTotalNumShots;
    }

    /**
     * setDamageToPlayersBombAmount
     *
     * @param int $damageToPlayersBombAmount
     */
    protected function setDamageToPlayersBombAmount(int $damageToPlayersBombAmount) {
        $this->damageToPlayersBombAmount = $damageToPlayersBombAmount;
    }

    /**
     * setDamageToPlayersBombNumShots
     *
     * @param int $damageToPlayersBombNumShots
     */
    protected function setDamageToPlayersBombNumShots(int $damageToPlayersBombNumShots) {
        $this->damageToPlayersBombNumShots = $damageToPlayersBombNumShots;
    }

    /**
     * setDamageToPlayersCombatDroneAmount
     *
     * @param int $damageToPlayersCombatDroneAmount
     */
    protected function setDamageToPlayersCombatDroneAmount(int $damageToPlayersCombatDroneAmount) {
        $this->damageToPlayersCombatDroneAmount = $damageToPlayersCombatDroneAmount;
    }

    /**
     * setDamageToPlayersCombatDroneNumShots
     *
     * @param int $damageToPlayersCombatDroneNumShots
     */
    protected function setDamageToPlayersCombatDroneNumShots(int $damageToPlayersCombatDroneNumShots) {
        $this->damageToPlayersCombatDroneNumShots = $damageToPlayersCombatDroneNumShots;
    }

    /**
     * setDamageToPlayersEnergyAmount
     *
     * @param int $damageToPlayersEnergyAmount
     */
    protected function setDamageToPlayersEnergyAmount(int $damageToPlayersEnergyAmount) {
        $this->damageToPlayersEnergyAmount = $damageToPlayersEnergyAmount;
    }

    /**
     * setDamageToPlayersEnergyNumShots
     *
     * @param int $damageToPlayersEnergyNumShots
     */
    protected function setDamageToPlayersEnergyNumShots(int $damageToPlayersEnergyNumShots) {
        $this->damageToPlayersEnergyNumShots = $damageToPlayersEnergyNumShots;
    }

    /**
     * setDamageToPlayersFighterBomberAmount
     *
     *
     * @param int $damageToPlayersFighterBomberAmount
     */
    protected function setDamageToPlayersFighterBomberAmount(int $damageToPlayersFighterBomberAmount) {
        $this->damageToPlayersFighterBomberAmount = $damageToPlayersFighterBomberAmount;
    }

    /**
     * setDamageToPlayersFighterBomberNumShots
     *
     * @param int $damageToPlayersFighterBomberNumShots
     */
    protected function setDamageToPlayersFighterBomberNumShots(int $damageToPlayersFighterBomberNumShots) {
        $this->damageToPlayersFighterBomberNumShots = $damageToPlayersFighterBomberNumShots;
    }

    /**
     * setDamageToPlayersFighterDroneAmount
     *
     * @param int $damageToPlayersFighterDroneAmount
     */
    protected function setDamageToPlayersFighterDroneAmount(int $damageToPlayersFighterDroneAmount) {
        $this->damageToPlayersFighterDroneAmount = $damageToPlayersFighterDroneAmount;
    }

    /**
     * setDamageToPlayersFighterDroneNumShots
     *
     * @param int $damageToPlayersFighterDroneNumShots
     */
    protected function setDamageToPlayersFighterDroneNumShots(int $damageToPlayersFighterDroneNumShots) {
        $this->damageToPlayersFighterDroneNumShots = $damageToPlayersFighterDroneNumShots;
    }

    /**
     * setDamageToPlayersHybridAmount
     *
     * @param int $damageToPlayersHybridAmount
     */
    protected function setDamageToPlayersHybridAmount(int $damageToPlayersHybridAmount) {
        $this->damageToPlayersHybridAmount = $damageToPlayersHybridAmount;
    }

    /**
     * setDamageToPlayersHybridNumShots
     *
     * @param int $damageToPlayersHybridNumShots
     */
    protected function setDamageToPlayersHybridNumShots(int $damageToPlayersHybridNumShots) {
        $this->damageToPlayersHybridNumShots = $damageToPlayersHybridNumShots;
    }

    /**
     * setDamageToPlayersMissileAmount
     *
     * @param int $damageToPlayersMissileAmount
     */
    protected function setDamageToPlayersMissileAmount(int $damageToPlayersMissileAmount) {
        $this->damageToPlayersMissileAmount = $damageToPlayersMissileAmount;
    }

    /**
     * setDamageToPlayersMissileNumShots
     *
     * @param int $damageToPlayersMissileNumShots
     */
    protected function setDamageToPlayersMissileNumShots(int $damageToPlayersMissileNumShots) {
        $this->damageToPlayersMissileNumShots = $damageToPlayersMissileNumShots;
    }

    /**
     * setDamageToPlayersProjectileAmount
     *
     * @param int $damageToPlayersProjectileAmount
     */
    protected function setDamageToPlayersProjectileAmount(int $damageToPlayersProjectileAmount) {
        $this->damageToPlayersProjectileAmount = $damageToPlayersProjectileAmount;
    }

    /**
     * setDamageToPlayersProjectileNumShots
     *
     * @param int $damageToPlayersProjectileNumShots
     */
    protected function setDamageToPlayersProjectileNumShots(int $damageToPlayersProjectileNumShots) {
        $this->damageToPlayersProjectileNumShots = $damageToPlayersProjectileNumShots;
    }

    /**
     * setDamageToPlayersSmartBombAmount
     *
     * @param int $damageToPlayersSmartBombAmount
     */
    protected function setDamageToPlayersSmartBombAmount(int $damageToPlayersSmartBombAmount) {
        $this->damageToPlayersSmartBombAmount = $damageToPlayersSmartBombAmount;
    }

    /**
     * setDamageToPlayersSmartBombNumShots
     *
     * @param int $damageToPlayersSmartBombNumShots
     */
    protected function setDamageToPlayersSmartBombNumShots(int $damageToPlayersSmartBombNumShots) {
        $this->damageToPlayersSmartBombNumShots = $damageToPlayersSmartBombNumShots;
    }

    /**
     * setDamageToPlayersSuperAmount
     *
     * @param int $damageToPlayersSuperAmount
     */
    protected function setDamageToPlayersSuperAmount(int $damageToPlayersSuperAmount) {
        $this->damageToPlayersSuperAmount = $damageToPlayersSuperAmount;
    }

    /**
     * setDamageToPlayersSuperNumShots
     *
     * @param int $damageToPlayersSuperNumShots
     */
    protected function setDamageToPlayersSuperNumShots(int $damageToPlayersSuperNumShots) {
        $this->damageToPlayersSuperNumShots = $damageToPlayersSuperNumShots;
    }

    /**
     * setDamageToStructuresTotalAmount
     *
     * @param int $damageToStructuresTotalAmount
     */
    protected function setDamageToStructuresTotalAmount(int $damageToStructuresTotalAmount) {
        $this->damageToStructuresTotalAmount = $damageToStructuresTotalAmount;
    }

    /**
     * setDamageToStructuresTotalNumShots
     *
     * @param int $damageToStructuresTotalNumShots
     */
    protected function setDamageToStructuresTotalNumShots(int $damageToStructuresTotalNumShots) {
        $this->damageToStructuresTotalNumShots = $damageToStructuresTotalNumShots;
    }

    /**
     * setDeathsHighSec
     *
     * @param int $deathsHighSec
     */
    protected function setDeathsHighSec(int $deathsHighSec) {
        $this->deathsHighSec = $deathsHighSec;
    }

    /**
     * setDeathsPodHighSec
     *
     * @param int $deathsPodHighSec
     */
    protected function setDeathsPodHighSec(int $deathsPodHighSec) {
        $this->deathsPodHighSec = $deathsPodHighSec;
    }

    /**
     * setDeathsLowSec
     *
     * @param int $deathsLowSec
     */
    protected function setDeathsLowSec(int $deathsLowSec) {
        $this->deathsLowSec = $deathsLowSec;
    }

    /**
     * setDeathsPodLowSec
     *
     * @param int $deathsPodLowSec
     */
    protected function setDeathsPodLowSec(int $deathsPodLowSec) {
        $this->deathsPodLowSec = $deathsPodLowSec;
    }

    /**
     * setDeathsNullSec
     *
     * @param int $deathsNullSec
     */
    protected function setDeathsNullSec(int $deathsNullSec) {
        $this->deathsNullSec = $deathsNullSec;
    }

    /**
     * setDeathsPodNullSec
     *
     * @param int $deathsPodNullSec
     */
    protected function setDeathsPodNullSec(int $deathsPodNullSec) {
        $this->deathsPodNullSec = $deathsPodNullSec;
    }

    /**
     * setDeathsWormhole
     *
     * @param int $deathsWormhole
     */
    protected function setDeathsWormhole(int $deathsWormhole) {
        $this->deathsWormhole = $deathsWormhole;
    }

    /**
     * setDeathsPodWormhole
     *
     * @param int $deathsPodWormhole
     */
    protected function setDeathsPodWormhole(int $deathsPodWormhole) {
        $this->deathsPodWormhole = $deathsPodWormhole;
    }

    /**
     * setDroneEngage
     *
     * @param int $droneEngage
     */
    protected function setDroneEngage(int $droneEngage) {
        $this->droneEngage = $droneEngage;
    }

    /**
     * setDscans
     *
     * @param int $dscans
     */
    protected function setDscans(int $dscans) {
        $this->dscans = $dscans;
    }

    /**
     * setDuelRequested
     *
     * @param int $duelRequested
     */
    protected function setDuelRequested(int $duelRequested) {
        $this->duelRequested = $duelRequested;
    }

    /**
     * setEngagementRegister
     *
     * @param int $engagementRegister
     */
    protected function setEngagementRegister(int $engagementRegister) {
        $this->engagementRegister = $engagementRegister;
    }

    /**
     * setKillsAssists
     *
     * @param int $killsAssists
     */
    protected function setKillsAssists(int $killsAssists) {
        $this->killsAssists = $killsAssists;
    }

    /**
     * setKillsHighSec
     *
     * @param int $killsHighSec
     */
    protected function setKillsHighSec(int $killsHighSec) {
        $this->killsHighSec = $killsHighSec;
    }

    /**
     * setKillsPodHighSec
     *
     * @param int $killsPodHighSec
     */
    protected function setKillsPodHighSec(int $killsPodHighSec) {
        $this->killsPodHighSec = $killsPodHighSec;
    }

    /**
     * setKillsLowSec
     *
     * @param int $killsLowSec
     */
    protected function setKillsLowSec(int $killsLowSec) {
        $this->killsLowSec = $killsLowSec;
    }

    /**
     * setKillsPodLowSec
     *
     * @param int $killsPodLowSec
     */
    protected function setKillsPodLowSec(int $killsPodLowSec) {
        $this->killsPodLowSec = $killsPodLowSec;
    }

    /**
     * setKillsNullSec
     *
     * @param int $killsNullSec
     */
    protected function setKillsNullSec(int $killsNullSec) {
        $this->killsNullSec = $killsNullSec;
    }

    /**
     * setKillsPodNullSec
     *
     * @param int $killsPodNullSec
     */
    protected function setKillsPodNullSec(int $killsPodNullSec) {
        $this->killsPodNullSec = $killsPodNullSec;
    }

    /**
     * setKillsWormhole
     *
     * @param int $killsWormhole
     */
    protected function setKillsWormhole(int $killsWormhole) {
        $this->killsWormhole = $killsWormhole;
    }

    /**
     * setKillsPodWormhole
     *
     * @param int $killsPodWormhole
     */
    protected function setKillsPodWormhole(int $killsPodWormhole) {
        $this->killsPodWormhole = $killsPodWormhole;
    }

    /**
     * setNpcFlagSet
     *
     * @param int $npcFlagSet
     */
    protected function setNpcFlagSet(int $npcFlagSet) {
        $this->npcFlagSet = $npcFlagSet;
    }

    /**
     * setProbeScans
     *
     * @param int $probeScans
     */
    protected function setProbeScans(int $probeScans) {
        $this->probeScans = $probeScans;
    }

    /**
     * setPvpFlagSet
     *
     * @param int $pvpFlagSet
     */
    protected function setPvpFlagSet(int $pvpFlagSet) {
        $this->pvpFlagSet = $pvpFlagSet;
    }

    /**
     * setRepairArmorByRemoteAmount
     *
     * @param int $repairArmorByRemoteAmount
     */
    protected function setRepairArmorByRemoteAmount(int $repairArmorByRemoteAmount) {
        $this->repairArmorByRemoteAmount = $repairArmorByRemoteAmount;
    }

    /**
     * setRepairArmorRemoteAmount
     *
     * @param int $repairArmorRemoteAmount
     */
    protected function setRepairArmorRemoteAmount(int $repairArmorRemoteAmount) {
        $this->repairArmorRemoteAmount = $repairArmorRemoteAmount;
    }

    /**
     * setRepairArmorSelfAmount
     *
     * @param int $repairArmorSelfAmount
     */
    protected function setRepairArmorSelfAmount(int $repairArmorSelfAmount) {
        $this->repairArmorSelfAmount = $repairArmorSelfAmount;
    }

    /**
     * setRepairCapacitorByRemoteAmount
     *
     * @param int $repairCapacitorByRemoteAmount
     */
    protected function setRepairCapacitorByRemoteAmount(int $repairCapacitorByRemoteAmount) {
        $this->repairCapacitorByRemoteAmount = $repairCapacitorByRemoteAmount;
    }

    /**
     * setRepairCapacitorRemoteAmount
     *
     * @param int $repairCapacitorRemoteAmount
     */
    protected function setRepairCapacitorRemoteAmount(int $repairCapacitorRemoteAmount) {
        $this->repairCapacitorRemoteAmount = $repairCapacitorRemoteAmount;
    }

    /**
     * setRepairCapacitorSelfAmount
     *
     * @param int $repairCapacitorSelfAmount
     */
    protected function setRepairCapacitorSelfAmount(int $repairCapacitorSelfAmount) {
        $this->repairCapacitorSelfAmount = $repairCapacitorSelfAmount;
    }

    /**
     * setRepairHullByRemoteAmount
     *
     * @param int $repairHullByRemoteAmount
     */
    protected function setRepairHullByRemoteAmount(int $repairHullByRemoteAmount) {
        $this->repairHullByRemoteAmount = $repairHullByRemoteAmount;
    }

    /**
     * setRepairHullRemoteAmount
     *
     * @param int $repairHullRemoteAmount
     */
    protected function setRepairHullRemoteAmount(int $repairHullRemoteAmount) {
        $this->repairHullRemoteAmount = $repairHullRemoteAmount;
    }

    /**
     * setRepairHullSelfAmount
     *
     * @param int $repairHullSelfAmount
     */
    protected function setRepairHullSelfAmount(int $repairHullSelfAmount) {
        $this->repairHullSelfAmount = $repairHullSelfAmount;
    }

    /**
     * setRepairShieldByRemoteAmount
     *
     * @param int $repairShieldByRemoteAmount
     */
    protected function setRepairShieldByRemoteAmount(int $repairShieldByRemoteAmount) {
        $this->repairShieldByRemoteAmount = $repairShieldByRemoteAmount;
    }

    /**
     * setRepairShieldRemoteAmount
     *
     * @param int $repairShieldRemoteAmount
     */
    protected function setRepairShieldRemoteAmount(int $repairShieldRemoteAmount) {
        $this->repairShieldRemoteAmount = $repairShieldRemoteAmount;
    }

    /**
     * setRepairShieldSelfAmount
     *
     * @param int $repairShieldSelfAmount
     */
    protected function setRepairShieldSelfAmount(int $repairShieldSelfAmount) {
        $this->repairShieldSelfAmount = $repairShieldSelfAmount;
    }

    /**
     * setSelfDestructs
     *
     * @param int $selfDestructs
     */
    protected function setSelfDestructs(int $selfDestructs) {
        $this->selfDestructs = $selfDestructs;
    }

    /**
     * setWarpScramblePc
     *
     * @param int $warpScramblePc
     */
    protected function setWarpScramblePc(int $warpScramblePc) {
        $this->warpScramblePc = $warpScramblePc;
    }

    /**
     * setWarpScrambledbyNpc
     *
     * @param int $warpScrambledbyNpc
     */
    protected function setWarpScrambledbyNpc(int $warpScrambledbyNpc) {
        $this->warpScrambledbyNpc = $warpScrambledbyNpc;
    }

    /**
     * setWarpScrambledbyPc
     *
     * @param int $warpScrambledbyPc
     */
    protected function setWarpScrambledbyPc(int $warpScrambledbyPc) {
        $this->warpScrambledbyPc = $warpScrambledbyPc;
    }

    /**
     * setWeaponFlagSet
     *
     * @param int $weaponFlagSet
     */
    protected function setWeaponFlagSet(int $weaponFlagSet) {
        $this->weaponFlagSet = $weaponFlagSet;
    }

    /**
     * setWebifiedbyNpc
     *
     * @param int $webifiedbyNpc
     */
    protected function setWebifiedbyNpc(int $webifiedbyNpc) {
        $this->webifiedbyNpc = $webifiedbyNpc;
    }

    /**
     * setWebifiedbyPc
     *
     * @param int $webifiedbyPc
     */
    protected function setWebifiedbyPc(int $webifiedbyPc) {
        $this->webifiedbyPc = $webifiedbyPc;
    }

    /**
     * setWebifyingPc
     *
     * @param int $webifyingPc
     */
    protected function setWebifyingPc(int $webifyingPc) {
        $this->webifyingPc = $webifyingPc;
    }
}
