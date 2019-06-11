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
    protected $capDrainedbyNpc = null;

    /**
     * capDrainedbyPc
     * @var int
     */
    protected $capDrainedbyPc = null;

    /**
     * capDrainingPc
     *
     * @var int
     */
    protected $capDrainingPc = null;

    /**
     * criminalFlagSet
     *
     * @var int
     */
    protected $criminalFlagSet = null;

    /**
     * damageFromNpcCsAmount
     *
     * @var int
     */
    protected $damageFromNpcCsAmount = null;

    /**
     * damageFromNpcCsNumShots
     *
     * @var int
     */
    protected $damageFromNpcCsNumShots = null;

    /**
     * damageFromPlayersBombAmount
     *
     * @var int
     */
    protected $damageFromPlayersBombAmount = null;

    /**
     * damageFromPlayersBombNumShots
     *
     * @var int
     */
    protected $damageFromPlayersBombNumShots = null;

    /**
     * damageFromPlayersCombatDroneAmount
     *
     * @var int
     */
    protected $damageFromPlayersCombatDroneAmount = null;

    /**
     * damageFromPlayersCombatDroneNumShots
     *
     * @var int
     */
    protected $damageFromPlayersCombatDroneNumShots = null;

    /**
     * damageFromPlayersEnergyAmount
     *
     * @var int
     */
    protected $damageFromPlayersEnergyAmount = null;

    /**
     * damageFromPlayersEnergyNumShots
     *
     * @var int
     */
    protected $damageFromPlayersEnergyNumShots = null;

    /**
     * damageFromPlayersFighterBomberAmount
     *
     * @var int
     */
    protected $damageFromPlayersFighterBomberAmount = null;

    /**
     * damageFromPlayersFighterBomberNumShots
     *
     * @var int
     */
    protected $damageFromPlayersFighterBomberNumShots = null;

    /**
     * damageFromPlayersFighterDrone
     *
     * @var int
     */
    protected $damageFromPlayersFighterDroneAmount = null;

    /**
     * damageFromPlayersFighterDroneNumShots
     *
     * @var int
     */
    protected $damageFromPlayersFighterDroneNumShots = null;

    /**
     * damageFromPlayersHybrid
     *
     * @var int
     */
    protected $damageFromPlayersHybridAmount = null;

    /**
     * damageFromPlayersHybridNumShots
     *
     * @var int
     */
    protected $damageFromPlayersHybridNumShots = null;

    /**
     * damageByPlayersMissileAmount
     *
     * @var int
     */
    protected $damageByPlayersMissileAmount = null;

    /**
     * damageByPlayersMissileNumShots
     *
     * @var int
     */
    protected $damageByPlayersMissileNumShots = null;

    /**
     * damageByPlayersProjectileAmount
     *
     * @var int
     */
    protected $damageByPlayersProjectileAmount = null;

    /**
     * damageByPlayersProjectileNumShots
     *
     * @var int
     */
    protected $damageByPlayersProjectileNumShots = null;

    /**
     * damageByPlayersSmartBombAmount
     *
     * @var int
     */
    protected $damageByPlayersSmartBombAmount = null;

    /**
     * damageByPlayersSmartBombNumShots
     *
     * @var int
     */
    protected $damageByPlayersSmartBombNumShots = null;

    /**
     * damageByPlayersSuperAmount
     *
     * @var int
     */
    protected $damageByPlayersSuperAmount = null;

    /**
     * damageByPlayersSuperNumShots
     *
     * @var int
     */
    protected $damageByPlayersSuperNumShots = null;

    /**
     * damageFromStructureTotalAmount
     *
     * @var int
     */
    protected $damageFromStructureTotalAmount = null;

    /**
     * damageFromStructureTotalNumShots
     *
     * @var int
     */
    protected $damageFromStructureTotalNumShots = null;

    /**
     * damageToPlayersBombAmount
     *
     * @var int
     */
    protected $damageToPlayersBombAmount = null;

    /**
     * damageToPlayersBombNumShots
     *
     * @var int
     */
    protected $damageToPlayersBombNumShots = null;

    /**
     * damageToPlayersCombatDroneAmount
     *
     * @var int
     */
    protected $damageToPlayersCombatDroneAmount = null;

    /**
     * damageToPlayersCombatDroneNumShots
     *
     * @var int
     */
    protected $damageToPlayersCombatDroneNumShots = null;

    /**
     * damageToPlayersEnergyAmount
     *
     * @var int
     */
    protected $damageToPlayersEnergyAmount = null;

    /**
     * damageToPlayersEnergyNumShots
     *
     * @var int
     */
    protected $damageToPlayersEnergyNumShots = null;

    /**
     * damageToPlayersFighterBomberAmount
     *
     * @var int
     */
    protected $damageToPlayersFighterBomberAmount = null;

    /**
     * damageToPlayersFighterBomberNumShots
     *
     * @var int
     */
    protected $damageToPlayersFighterBomberNumShots = null;

    /**
     * damageToPlayersFighterDroneAmount
     *
     * @var int
     */
    protected $damageToPlayersFighterDroneAmount = null;

    /**
     * damageToPlayersFighterDroneNumShots
     *
     * @var int
     */
    protected $damageToPlayersFighterDroneNumShots = null;

    /**
     * damageToPlayersHybridAmount
     *
     * @var int
     */
    protected $damageToPlayersHybridAmount = null;

    /**
     * damageToPlayersHybridNumShots
     *
     * @var int
     */
    protected $damageToPlayersHybridNumShots = null;

    /**
     * damageToPlayersMissileAmount
     *
     * @var int
     */
    protected $damageToPlayersMissileAmount = null;

    /**
     * damageToPlayersMissileNumShots
     *
     * @var int
     */
    protected $damageToPlayersMissileNumShots = null;

    /**
     * damageToPlayersProjectileAmount
     *
     * @var int
     */
    protected $damageToPlayersProjectileAmount = null;

    /**
     * damageToPlayersProjectileNumShots
     *
     * @var int
     */
    protected $damageToPlayersProjectileNumShots = null;

    /**
     * damageToPlayersSmartBombAmount
     *
     * @var int
     */
    protected $damageToPlayersSmartBombAmount = null;

    /**
     * damageToPlayersSmartBombNumShots
     *
     * @var int
     */
    protected $damageToPlayersSmartBombNumShots = null;

    /**
     * damageToPlayersSuperAmount
     *
     * @var int
     */
    protected $damageToPlayersSuperAmount = null;

    /**
     * damageToPlayersSuperNumShots
     *
     * @var int
     */
    protected $damageToPlayersSuperNumShots = null;

    /**
     * damageToStructuresTotalAmount
     *
     * @var int
     */
    protected $damageToStructuresTotalAmount = null;

    /**
     * damageToStructuresTotalNumShots
     *
     * @var int
     */
    protected $damageToStructuresTotalNumShots = null;

    /**
     * deathsHighSec
     *
     * @var int
     */
    protected $deathsHighSec = null;

    /**
     * deathsPodHighSec
     *
     * @var int
     */
    protected $deathsPodHighSec = null;

    /**
     * deathsLowSec
     *
     * @var int
     */
    protected $deathsLowSec = null;

    /**
     * deathsPodLowSec
     *
     * @var int
     */
    protected $deathsPodLowSec = null;

    /**
     * deathsNullSec
     *
     * @var int
     */
    protected $deathsNullSec = null;

    /**
     * deathsPodNullSec
     *
     * @var int
     */
    protected $deathsPodNullSec = null;

    /**
     * deathsWormhole
     *
     * @var int
     */
    protected $deathsWormhole = null;

    /**
     * deathsPodWormhole
     *
     * @var int
     */
    protected $deathsPodWormhole = null;

    /**
     * droneEngage
     *
     * @var int
     */
    protected $droneEngage = null;

    /**
     * dscans
     *
     * @var int
     */
    protected $dscans = null;

    /**
     * dueRequested
     *
     * @var int
     */
    protected $duelRequested = null;

    /**
     * engagementRegister
     *
     * @var int
     */
    protected $engagementRegister = null;

    /**
     * killsAssists
     *
     * @var int
     */
    protected $killsAssists = null;

    /**
     * killsHighSec
     *
     * @var int
     */
    protected $killsHighSec = null;

    /**
     * killsPodHighSec
     *
     * @var int
     */
    protected $killsPodHighSec = null;

    /**
     * killsLowSec
     *
     * @var int
     */
    protected $killsLowSec = null;

    /**
     * killsPodLowSec
     *
     * @var int
     */
    protected $killsPodLowSec = null;

    /**
     * killsNullSec
     *
     * @var int
     */
    protected $killsNullSec = null;

    /**
     * killsPodNullSec
     *
     * @var int
     */
    protected $killsPodNullSec = null;

    /**
     * killsWormhole
     *
     * @var int
     */
    protected $killsWormhole = null;

    /**
     * killPodWormhole
     *
     * @var int
     */
    protected $killsPodWormhole = null;

    /**
     * npcFlagSet
     *
     * @var int
     */
    protected $npcFlagSet = null;

    /**
     * probeScans
     *
     * @var int
     */
    protected $probeScans = null;

    /**
     * pvpFlagSet
     *
     * @var int
     */
    protected $pvpFlagSet = null;

    /**
     * repairArmorByRemoteAmount
     *
     * @var int
     */
    protected $repairArmorByRemoteAmount = null;

    /**
     * repairArmorRemoteAmount
     *
     * @var int
     */
    protected $repairArmorRemoteAmount = null;

    /**
     * repairArmorSelfAmount
     *
     * @var int
     */
    protected $repairArmorSelfAmount = null;

    /**
     * repairCapacitorByRemoteAmount
     *
     * @var int
     */
    protected $repairCapacitorByRemoteAmount = null;

    /**
     * repairCapacitorRemoteAmount
     *
     * @var int
     */
    protected $repairCapacitorRemoteAmount = null;

    /**
     * repairCapacitorSelfAmount
     *
     * @var int
     */
    protected $repairCapacitorSelfAmount = null;

    /**
     * repairHullByRemoteAmount
     *
     * @var int
     */
    protected $repairHullByRemoteAmount = null;

    /**
     * repairHullRemoteAmount
     *
     * @var int
     */
    protected $repairHullRemoteAmount = null;

    /**
     * repairHullSelfAmount
     *
     * @var int
     */
    protected $repairHullSelfAmount = null;

    /**
     * repairShieldByRemoteAmount
     *
     * @var int
     */
    protected $repairShieldByRemoteAmount = null;

    /**
     * repairShieldRemoteAmount
     *
     * @var int
     */
    protected $repairShieldRemoteAmount = null;

    /**
     * repairShieldSelfAmount
     *
     * @var int
     */
    protected $repairShieldSelfAmount = null;

    /**
     * selfDestructs
     *
     * @var int
     */
    protected $selfDestructs = null;

    /**
     * warpScramblePc
     *
     * @var int
     */
    protected $warpScramblePc = null;

    /**
     * warpScrambledbyNpc
     *
     * @var int
     */
    protected $warpScrambledbyNpc = null;

    /**
     * warpScrambledbyPc
     *
     * @var int
     */
    protected $warpScrambledbyPc = null;

    /**
     * weaponFlagSet
     *
     * @var int
     */
    protected $weaponFlagSet = null;

    /**
     * webifiedbyNpc
     *
     * @var int
     */
    protected $webifiedbyNpc = null;

    /**
     * webifiedbyPc
     *
     * @var int
     */
    protected $webifiedbyPc = null;

    /**
     * webifyingPc
     *
     * @var int
     */
    protected $webifyingPc = null;

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
