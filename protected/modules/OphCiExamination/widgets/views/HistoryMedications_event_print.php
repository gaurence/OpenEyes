<?php
/**
 * OpenEyes
 *
 * (C) OpenEyes Foundation, 2017
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2017, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */
?>

<div class="element-data row clearfix">
    <div class="row">
        <div class=" large-2 column">
            <label>Current:</label>
        </div>
        <div class="large-10 column end">
            <div class="data-value current">
                <ul class="comma-list">
                    <?php foreach ($element->currentOrderedEntries as $entry) { ?>
                        <li><?= $entry->getMedicationDisplay() ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="large-2 column">
            <label>Stopped:</label>
        </div>
        <div class="large-10 column end">
            <div class="data-value stopped">
                <ul class="comma-list">
                    <?php foreach ($element->stoppedOrderedEntries as $entry) { ?>
                        <li><?= $entry->getMedicationDisplay() ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>


