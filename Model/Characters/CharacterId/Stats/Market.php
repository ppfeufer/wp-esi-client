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

class Market {
    /**
     * acceptContractsCourier
     *
     * @var int
     */
    protected $acceptContractsCourier = 0;

    /**
     * acceptContractsItemsExchange
     *
     * @var int
     */
    protected $acceptContractsItemsExchange = 0;

    /**
     * buyOrdersPlaced
     *
     * @var int
     */
    protected $buyOrdersPlaced = 0;

    /**
     * cancelMarketOrder
     *
     * @var int
     */
    protected $cancelMarketOrder = 0;

    /**
     * createContractsAuction
     *
     * @var int
     */
    protected $createContractsAuction = 0;

    /**
     * createContractsCourier
     *
     * @var int
     */
    protected $createContractsCourier = 0;

    /**
     * createContractsItemExchange
     *
     * @var int
     */
    protected $createContractsItemExchange = 0;

    /**
     * deliverCurierContract
     *
     * @var int
     */
    protected $deliverCurierContract = 0;

    /**
     * iskGained
     *
     * @var int
     */
    protected $iskGained = 0;

    /**
     * iskSpent
     *
     * @var int
     */
    protected $iskSpent = 0;

    /**
     * modifyMarketOrder
     *
     * @var int
     */
    protected $modifyMarketOrder = 0;

    /**
     * searchContracts
     *
     * @var int
     */
    protected $searchContracts = 0;

    /**
     * sellordersPlaced
     *
     * @var int
     */
    protected $sellordersPlaced = 0;

    /**
     * getAcceptContractsCourier
     *
     * @return int
     */
    public function getAcceptContractsCourier() {
        return $this->acceptContractsCourier;
    }

    /**
     * getAcceptContractsItemsExchange
     *
     * @return int
     */
    public function getAcceptContractsItemsExchange() {
        return $this->acceptContractsItemsExchange;
    }

    /**
     * getBuyOrdersPlaced
     *
     * @return int
     */
    public function getBuyOrdersPlaced() {
        return $this->buyOrdersPlaced;
    }

    /**
     * getCancelMarketOrder
     *
     * @return int
     */
    public function getCancelMarketOrder() {
        return $this->cancelMarketOrder;
    }

    /**
     * getCreateContractsAuction
     *
     * @return int
     */
    public function getCreateContractsAuction() {
        return $this->createContractsAuction;
    }

    /**
     * getCreateContractsCourier
     *
     * @return int
     */
    public function getCreateContractsCourier() {
        return $this->createContractsCourier;
    }

    /**
     * getCreateContractsItemExchange
     *
     * @return int
     */
    public function getCreateContractsItemExchange() {
        return $this->createContractsItemExchange;
    }

    /**
     * getDeliverCurierContract
     *
     * @return int
     */
    public function getDeliverCurierContract() {
        return $this->deliverCurierContract;
    }

    /**
     * getIskGained
     *
     * @return int
     */
    public function getIskGained() {
        return $this->iskGained;
    }

    /**
     * getIskSpent
     *
     * @return int
     */
    public function getIskSpent() {
        return $this->iskSpent;
    }

    /**
     * getModifyMarketOrder
     *
     * @return int
     */
    public function getModifyMarketOrder() {
        return $this->modifyMarketOrder;
    }

    /**
     * getSearchContracts
     *
     * @return int
     */
    public function getSearchContracts() {
        return $this->searchContracts;
    }

    /**
     * getSellordersPlaced
     *
     * @return int
     */
    public function getSellordersPlaced() {
        return $this->sellordersPlaced;
    }

    /**
     * setAcceptContractsCourier
     *
     * @param int $acceptContractsCourier
     */
    protected function setAcceptContractsCourier(int $acceptContractsCourier) {
        $this->acceptContractsCourier = $acceptContractsCourier;
    }

    /**
     * setAcceptContractsItemsExchange
     *
     * @param int $acceptContractsItemsExchange
     */
    protected function setAcceptContractsItemsExchange(int $acceptContractsItemsExchange) {
        $this->acceptContractsItemsExchange = $acceptContractsItemsExchange;
    }

    /**
     * setBuyOrdersPlaced
     *
     * @param int $buyOrdersPlaced
     */
    protected function setBuyOrdersPlaced(int $buyOrdersPlaced) {
        $this->buyOrdersPlaced = $buyOrdersPlaced;
    }

    /**
     * setCancelMarketOrder
     *
     * @param int $cancelMarketOrder
     */
    protected function setCancelMarketOrder(int $cancelMarketOrder) {
        $this->cancelMarketOrder = $cancelMarketOrder;
    }

    /**
     * setCreateContractsAuction
     *
     * @param int $createContractsAuction
     */
    protected function setCreateContractsAuction(int $createContractsAuction) {
        $this->createContractsAuction = $createContractsAuction;
    }

    /**
     * setCreateContractsCourier
     *
     * @param int $createContractsCourier
     */
    protected function setCreateContractsCourier(int $createContractsCourier) {
        $this->createContractsCourier = $createContractsCourier;
    }

    /**
     * setCreateContractsItemExchange
     *
     * @param int $createContractsItemExchange
     */
    protected function setCreateContractsItemExchange(int $createContractsItemExchange) {
        $this->createContractsItemExchange = $createContractsItemExchange;
    }

    /**
     * setDeliverCurierContract
     *
     * @param int $deliverCurierContract
     */
    protected function setDeliverCurierContract(int $deliverCurierContract) {
        $this->deliverCurierContract = $deliverCurierContract;
    }

    /**
     * setIskGained
     *
     * @param int $iskGained
     */
    protected function setIskGained(int $iskGained) {
        $this->iskGained = $iskGained;
    }

    /**
     * setIskSpent
     *
     * @param int $iskSpent
     */
    protected function setIskSpent(int $iskSpent) {
        $this->iskSpent = $iskSpent;
    }

    /**
     * setModifyMarketOrder
     *
     * @param int $modifyMarketOrder
     */
    protected function setModifyMarketOrder(int $modifyMarketOrder) {
        $this->modifyMarketOrder = $modifyMarketOrder;
    }

    /**
     * setSearchContracts
     *
     * @param int $searchContracts
     */
    protected function setSearchContracts(int $searchContracts) {
        $this->searchContracts = $searchContracts;
    }

    /**
     * setSellordersPlaced
     *
     * @param int $sellordersPlaced
     */
    protected function setSellordersPlaced(int $sellordersPlaced) {
        $this->sellordersPlaced = $sellordersPlaced;
    }
}
