<?php
/**
 * OpenEyes.
 *
 * (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
 * (C) OpenEyes Foundation, 2011-2013
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @link http://www.openeyes.org.uk
 *
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
 * @copyright Copyright (c) 2011-2013, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */
?>
<section class="box patient-info js-toggle-container">
	<h3 class="box-title">Personal Details:</h3>
	<a href="#" class="toggle-trigger toggle-hide js-toggle">
		<span class="icon-showhide">
			Show/hide this section
		</span>
	</a>
	<div class="js-toggle-body">
		<div class="row data-row">
			<div class="large-4 column">
				<div class="data-label">First name(s):</div>
			</div>
			<div class="large-8 column">
				<div class="data-value"><?php echo $this->patient->first_name?></div>
			</div>
		</div>
		<div class="row data-row">
			<div class="large-4 column">
				<div class="data-label">Last name:</div>
			</div>
			<div class="large-8 column">
				<div class="data-value"><?php echo $this->patient->last_name?></div>
			</div>
		</div>
		<div class="row data-row">
			<div class="large-4 column">
				<div class="data-label">Address:</div>
			</div>
			<div class="large-8 column">
				<div class="data-value">
					<?php echo $this->patient->getSummaryAddress()?>
				</div>
			</div>
		</div>
		<div class="row data-row">
			<div class="large-4 column">
				<div class="data-label">Date of Birth:</div>
			</div>
			<div class="large-8 column">
				<div class="data-value">
					<?php echo ($this->patient->dob) ? $this->patient->NHSDate('dob') : 'Unknown' ?>
				</div>
			</div>
		</div>

		<div class="row data-row">
			<?php if ($this->patient->isDeceased()):?>
				<div class="large-4 column">
					<div class="data-label">Deceased:</div>
				</div>
				<div class="large-8 column">
					<div class="data-value">
						Yes
					</div>
				</div>
			<?php else: ?>
				<div class="large-4 column">
					<div class="data-label">Age:</div>
				</div>
				<div class="large-8 column">
					<div class="data-value">
						<?php echo $this->patient->getAge()?>
					</div>
				</div>
			<?php endif; ?>
		</div>
		<?php if ($this->patient->isDeceased()):?>
		<div class="row data-row">
			<div class="large-4 column">
				<div class="data-label">Date of Death:</div>
			</div>
			<?php if ($this->patient->date_of_death): ?>
				<div class="large-8 column">
					<div class="data-value">
						<?php echo $this->patient->NHSDate('date_of_death').' (Age '.$this->patient->getAge().')' ?>
					</div>
				</div>
			<?php else: ?>
				<div class="large-8 column">
					<div class="data-value">
						Date of Patient's death unknown.
					</div>
				</div>
			<?php endif;?>
		</div>
		<?php endif; ?>
		<div class="row data-row">
			<div class="large-4 column">
				<div class="data-label">Gender:</div>
			</div>
			<div class="large-8 column">
				<div class="data-value">
					<?php echo $this->patient->getGenderString() ?>
				</div>
			</div>
		</div>
		<div class="row data-row">
			<div class="large-4 column">
				<div class="data-label">Ethnic Group:</div>
			</div>
			<div class="large-8 column">
				<div class="data-value">
					<?php echo $this->patient->getEthnicGroupString() ?>
				</div>
			</div>
		</div>
	</div>
</section>
