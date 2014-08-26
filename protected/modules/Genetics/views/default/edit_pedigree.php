<?php
/**
 * OpenEyes
 *
 * (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
 * (C) OpenEyes Foundation, 2011-2012
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
 * @copyright Copyright (c) 2011-2012, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */

?>
<div class="box admin">
	<h2><?php if ($pedigree->id) {?>Edit<?php }else{?>Add<?php }?> pedigree</h2>
	<?php echo $this->renderPartial('_form_errors',array('errors'=>$errors))?>
	<?php
	$form = $this->beginWidget('BaseEventTypeCActiveForm', array(
		'id'=>'adminform',
		'enableAjaxValidation'=>false,
		'focus'=>'#Pedigree_base_change',
		'layoutColumns'=>array(
			'label' => 2,
			'field' => 4
		)
	))?>
		<?php echo $form->dropDownList($pedigree,'inheritance_id',CHtml::listData(PedigreeInheritance::model()->findAll(array('order'=>'name asc')),'id','name'),array('empty' => '- None -'))?>
		<?php echo $form->dropDownList($pedigree,'gene_id',CHtml::listData(PedigreeGene::model()->findAll(array('order'=>'name asc')),'id','name'),array('empty' => '- None -'))?>
		<?php echo $form->radioBoolean($pedigree,'consanguinity')?>
		<?php echo $form->textField($pedigree,'base_change')?>
		<?php echo $form->textField($pedigree,'amino_acid_change')?>
		<?php echo $form->textArea($pedigree,'comments')?>
		<?php echo $form->formActions()?>
	<?php $this->endWidget()?>
</div>
<?php if ($pedigree->id) {?>
	<div>
		<h2>Family members</h2>
		<table class="grid">
			<thead>
				<tr>
					<th>ID</th>
					<th>Hospital no</th>
					<th>Title</th>
					<th>First name</th>
					<th>Last name</th>
					<th>DoB</th>
					<th>Gender</th>
					<th>Status</th>
					<th>DNA available</th>
				</tr>
			</thead>
			<tbody>
				<?php if ($pedigree->members) {
					foreach ($pedigree->members as $pm) {?>
						<tr class="hover" data-hover="<?php echo $pm->getHoverText()?>">
							<td><?php echo CHtml::link($pm->patient->id,Yii::app()->createUrl('/patient/view/'.$pm->patient_id))?></td>
							<td><?php echo $pm->patient->hos_num?></td>
							<td><?php echo $pm->patient->title?></td>
							<td><?php echo $pm->patient->first_name?></td>
							<td><?php echo $pm->patient->last_name?></td>
							<td><?php echo $pm->patient->dob ? $pm->patient->NHSDate('dob') : $pm->patient->yob?></td>
							<td><?php echo $pm->patient->gender == 'M' ? 'Male' : 'Female'?></td>
							<td><?php echo $pm->status->name?></td>
							<td>
								<?php echo Element_OphInDnaextraction_DnaExtraction::model()->with(array('event' => array('with' => 'episode')))->find('patient_id=?',array($pm->patient_id)) ? 'Yes' : 'No'?>
							</td>
						</tr>
					<?php }
				} else {?>
					<tr>
						<td colspan="7">
							There are no family members in this pedigree.
						</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
<?php }?>