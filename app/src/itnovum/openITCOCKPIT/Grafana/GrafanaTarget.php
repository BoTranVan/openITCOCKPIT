<?php
// Copyright (C) <2015>  <it-novum GmbH>
//
// This file is dual licensed
//
// 1.
//	This program is free software: you can redistribute it and/or modify
//	it under the terms of the GNU General Public License as published by
//	the Free Software Foundation, version 3 of the License.
//
//	This program is distributed in the hope that it will be useful,
//	but WITHOUT ANY WARRANTY; without even the implied warranty of
//	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//	GNU General Public License for more details.
//
//	You should have received a copy of the GNU General Public License
//	along with this program.  If not, see <http://www.gnu.org/licenses/>.
//

// 2.
//	If you purchased an openITCOCKPIT Enterprise Edition you can use this file
//	under the terms of the openITCOCKPIT Enterprise Edition license agreement.
//	License agreement and license key will be shipped with the order
//	confirmation.


namespace itnovum\openITCOCKPIT\Grafana;


class GrafanaTarget {

    /**
     * @var string
     */
    private $target;

    /**
     * @var GrafanaTargetUnit
     */
    private $unit;

    /**
     * @var string
     */
    private $alias = null;

    /**
     * @var GrafanaThresholds
     */
    private $thresholds;

    /**
     * GrafanaTarget constructor.
     * @param $target
     * @param GrafanaTargetUnit $grafanaTargetUnit
     * @param GrafanaThresholds $grafanaThresholds
     * @param null $alias
     */
    public function __construct($target, GrafanaTargetUnit $grafanaTargetUnit, GrafanaThresholds $grafanaThresholds, $alias = null) {
        $this->target = $target;
        $this->unit = $grafanaTargetUnit;
        $this->thresholds = $grafanaThresholds;
        $this->alias = $alias;
    }

    /**
     * @return string
     */
    public function getTarget() {
        return $this->target;
    }


    /**
     * @param $alias
     */
    public function setAlias($alias) {
        $this->alias = $alias;
    }

    /**
     * @return string
     */
    public function getAlias() {
        return $this->alias;
    }

    /**
     * @return string
     */
    public function getUnit(){
        return $this->unit->getUnit();
    }

    /**
     * @return GrafanaThresholds
     */
    public function getThresholds() {
        return $this->thresholds;
    }
}
