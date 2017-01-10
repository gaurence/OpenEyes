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

class DefaultController extends BaseEventTypeController
{
    public $items_per_page = 100;
    public $page = 1;
    public $total_items = 0;
    public $pages = 1;
    public $renderPatientPanel = false;
    public $layout = 'genetics';

    protected static $action_types = array(
        'index' => self::ACTION_TYPE_FORM,
        'Pedigrees' => self::ACTION_TYPE_FORM,
        'AddPedigree' => self::ACTION_TYPE_FORM,
        'EditPedigree' => self::ACTION_TYPE_FORM,
        'ViewPedigree' => self::ACTION_TYPE_FORM,
        'Genes' => self::ACTION_TYPE_FORM,
        'AddGene' => self::ACTION_TYPE_FORM,
        'EditGene' => self::ACTION_TYPE_FORM,
        'Inheritance' => self::ACTION_TYPE_FORM,
        'AddInheritance' => self::ACTION_TYPE_FORM,
        'EditInheritance' => self::ACTION_TYPE_FORM,
        'AddPatientToPedigree' => self::ACTION_TYPE_FORM,
        'RemovePatient' => self::ACTION_TYPE_FORM,
    );

    /**
     * Index action
     */
    public function actionIndex()
    {
        $this->redirect(Yii::app()->createUrl('/Genetics/subject/list'));
    }

    /**
     * Configure access rules
     *
     * @return array
     */
    public function accessRules()
    {
        return array(
            array('allow',
                'actions' => array('Index',),
                'roles' => array('OprnViewGeneticPatient'),
            ),
        );
    }
}