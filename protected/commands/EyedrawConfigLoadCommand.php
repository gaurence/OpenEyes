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
/**
 * Class EyedrawConfigLoadCommand
 *
 * Loader command for handling the eyedraw doodle configuration for object persistence.
 * Initial implementation is using a basic json config file that is expected to be superceded
 * by an XML document to define this information.
 */
class EyedrawConfigLoadCommand extends CConsoleCommand
{
    public $defaultAction = 'load';
    const DOODLE_TBL        = 'eyedraw_doodle';
    const CANVS_TBL         = 'eyedraw_canvas';
    const CANVAS_DOODLE_TBL = 'eyedraw_canvas_doodle';


    public function getName()
    {
        return 'Load eyedraw configuration';
    }
    public function getHelp()
    {
        return "yiic eyedrawconfigload --filename=<filename>\n\n".
        "load/update the eyedraw configuration from the definition file <filename>";
    }
    /**
     * Abstraction to the db connection
     * @return mixed
     */
    protected function getDb()
    {
        // TODO: stop using the static Yii call here
        return Yii::app()->db;
    }
    /**
     * Default action to process the given configuration file.
     *
     * @param $filename
     */
    public function actionLoad($filename)
    {
        if (!$filename) {
            $this->usageError('Please supply the path to the eyedraw configuration file.');
        }

        if (file_exists($filename)) {
            $data = simplexml_load_file($filename);
        } else {
            $this->usageError($filename.' does not exist');
        }

        if ($data === null) {
            $this->usageError($filename . ' is not in a valid format');
        }


        // iterate through the data structure, performing update/insert statements as appropriate

        foreach ($data->CANVAS_LIST->CANVAS as $canvas){
            $this->processCanvasDefinition($canvas);
        }

        foreach ($data->DOODLE_LIST->DOODLE as $doodle){
            $this->processDoodleDefinition($doodle);
        }

        foreach ($data->DOODLE_USAGE_LIST->DOODLE_USAGE as $canvas_doodle){
            $this->processCanvasDoodleDefinition($canvas_doodle);
        }
        $this->refreshTuples();

        //only create EXAM HTML for now
        //repalce EXAM with placeholder to create multiple
        //ORDER?


        $result_lvl_1 = Yii::app()->db->createCommand(
            "SELECT canvas_mnemonic, canvas_name "
            ."FROM openeyes.eyedraw_canvas "
            ."WHERE canvas_mnemonic LIKE 'EXAM%'" //does EXAM% need to be 'EXAM%'?
        )->query();

        $html_file_string = "<INDEX_LIST>";



        foreach($result_lvl_1 as $row_lvl_1) {
          $canvas_mnemonic = $row_lvl_1['canvas_mnemonic'];
          $canvas_name = $row_lvl_1['canvas_name'];
          $html_file_string .= $this->create_level_1($canvas_name); //add

          $result_lvl_2 = Yii::app()->db->createCommand(
              "SELECT openeyes.eyedraw_doodle.title, openeyes.eyedraw_doodle.properties, "
              ."openeyes.eyedraw_doodle.eyedraw_class_mnemonic "
              ."FROM openeyes.eyedraw_canvas_doodle, openeyes.eyedraw_doodle "
              ."WHERE openeyes.eyedraw_canvas_doodle.canvas_mnemonic = :cvm "
              ."AND openeyes.eyedraw_canvas_doodle.eyedraw_class_mnemonic "
              ."= openeyes.eyedraw_doodle.eyedraw_class_mnemonic"
          )
          ->bindValue(':cvm',$canvas_mnemonic)
          ->query();
          //add
          foreach($result_lvl_2 as $row_lvl_2) {
            $title = $row_lvl_2['title'];
            $properties = json_decode($row_lvl_2['properties']);
            $doodle_mnemonic = $row_lvl_2['eyedraw_class_mnemonic'];
            $img_src = $this->get_img_url($doodle_mnemonic); //get from file path + mnemonic
            $html_file_string .= $this->create_level_2($title,$img_src);
            if (sizeof($properties) > 0) {
                foreach ($properties as $property_name) {
                  $html_file_string .= $this->create_level_3($property_name);
                }
            }
            $html_file_string .= "</INDEX_LIST></INDEX>"; //close the level 2 element
          }
          $html_file_string .= "</INDEX_LIST></INDEX>"; //close the level 3 element
    }
    $html_file_string .= "</INDEX_LIST>";
    //echo $html_file_string;

    //do it recursively
    $html_string = "<ul class='results_list>";
    foreach ($data->INDEX_LIST->INDEX as $index_lvl_1){
      $allias_lvl_1 = "";

      //extracts the allias from xml (first allias is the title)
      foreach ($index_lvl_1->TERM_LIST->TERM as $term_lvl_1) {
        $allias_lvl_1 .= $term_lvl_1;
      }
      //creates html for the level 1 element without </ul></li>
      $html_string .= $this->create_level_1($allias_lvl_1);
    //  echo $html_string;
      foreach ($index_lvl_1->INDEX_LIST->INDEX as $index_lvl_2){
        $allias_lvl_2 = "";
        foreach ($index_lvl_2->TERM_LIST->TERM as $term_lvl_2) {
          $allias_lvl_2 .= $term_lvl_2;
        }
        $html_string .= $this->create_level_2($allias_lvl_2,$index_lvl_2->IMG_URL);
        if (sizeof($index_lvl_2->INDEX_LIST) > 0){
          $html_string .= "<ul>";
          foreach ($index_lvl_2->INDEX_LIST->INDEX as $index_lvl_3){
            $allias_lvl_3 = "";
            foreach ($index_lvl_3->TERM_LIST->TERM as $term_lvl_3) {
              $allias_lvl_3 .= $term_lvl_3;
            }
            $html_string .= $this->create_level_3($allias_lvl_3);
          }
          $html_string .= "</ul>";
        }
        $html_string .= "</li>";
      }
      $html_string .= "</ul></li>";
    }

    $html_string .= "</ul>";
  //  echo $html_string;

  echo $this->create($data->INDEX_LIST->INDEX[0]);



    }

    /**
     * Method to run after any changes to Eyedraw configuration to ensure the intersection tuples are defined
     * correctly for each doodle.
     */
    private function refreshTuples()
    {
        $query_string = $this->getRefreshTuplesQuery();
        Yii::app()->db->createCommand(
            $query_string
        )->query();
    }

    /**
     * @param $canvas
     * @param $element_type
     */
    private function insertOrUpdateCanvas($canvas, $element_type)
    {
        $current = $this->getDb()
        ->createCommand('SELECT count(*) FROM ' . static::CANVS_TBL . ' WHERE container_element_type_id = :eid')
        ->bindValue(':eid', $element_type->id)
        ->queryScalar();
        if ($current) {
            $cmd = $this->getDb()
            ->createCommand('UPDATE '
                . static::CANVS_TBL .
                ' SET canvas_mnemonic = :cvmn, canvas_name = :cvname where container_element_type_id = :eid');
        } else {
            $cmd = $this->getDb()
            ->createCommand('INSERT INTO ' . static::CANVS_TBL .
                '(canvas_mnemonic, canvas_name, container_element_type_id) VALUES (:cvmn, :cvname, :eid)');
        }
        $cmd->bindValue(':cvmn', $canvas->CANVAS_MNEMONIC)
            ->bindValue(':cvname', $canvas->CANVAS_NAME)
            ->bindValue(':eid', $element_type->id)
            ->query();
    }

    /**
     * Create or update a doodle definition
     *
     * @param $doodle
     */
    private function insertOrUpdateDoodle($doodle)
    {
      /*  $current = $this->getDb()
            ->createCommand('SELECT count(*) FROM ' . static::DOODLE_TBL . ' WHERE eyedraw_class_mnemonic = :mnm')
            ->bindValue(':mnm', $doodle->EYEDRAW_CLASS_MNEMONIC)
            ->queryScalar();
        if ($current) {
            $cmd = $this->getDb()->createCommand('UPDATE ' . static::DOODLE_TBL . ' SET init_doodle_json = :init '
                . 'WHERE eyedraw_class_mnemonic = :mnm');
        } else {
            $cmd = $this->getDb()->createCommand('INSERT INTO '
                . static::DOODLE_TBL .
                '(eyedraw_class_mnemonic, init_doodle_json, title, properties) VALUES (:mnm, :init, :t, :ps)');
        }
        $cmd->bindValue(':mnm', $doodle->EYEDRAW_CLASS_MNEMONIC)
            ->bindValue(':init', json_encode($doodle->INIT_DOODLE_JSON)) //check this
            ->bindValue(':t',$doodle->TITLE)
            ->bindValue(':ps',$doodle->PROPERTIES)
            ->query(); */
    }

    /**
     * @param $mnemonic
     * @return bool
     */
    protected function isCanvasDefined($mnemonic)
    {
        return $this->getDb()
            ->createCommand('SELECT count(*) FROM ' . static::CANVS_TBL
                . ' WHERE canvas_mnemonic = :cvmn')
            ->bindValue(':cvmn', $mnemonic)
            ->queryScalar() > 0;
    }
    /**
     * @param $canvas_doodle
     */
    private function insertOrUpdateCanvasDoodle($canvas_doodle)
    {

        if (!$this->isCanvasDefined($canvas_doodle->CANVAS_MNEMONIC)) {
            // if the element is not part of the configuration (module not included)
            // then we don't load the canvas, and therefore don't load the canvas doodle
            return;
        }

        $current = $this->getDb()
            ->createCommand('SELECT count(*) FROM ' . static::CANVAS_DOODLE_TBL
                . ' WHERE eyedraw_class_mnemonic = :ecmm'
                . ' AND canvas_mnemonic = :cmm')
            ->bindValue(':ecmm', $canvas_doodle->EYEDRAW_CLASS_MNEMONIC)
            ->bindValue(':cmm', $canvas_doodle->CANVAS_MNEMONIC)
            ->queryScalar();
        if ($current) {
            $cmd = $this->getDb()
                ->createCommand('UPDATE ' . static::CANVAS_DOODLE_TBL
                    . ' SET eyedraw_on_canvas_toolbar_location = :eoctl, '
                    . 'eyedraw_on_canvas_toolbar_order = :eocto, '
                    . 'eyedraw_no_tuple_init_canvas_flag = :enticf, '
                    . 'eyedraw_carry_forward_canvas_flag = :ecfcf '
                    . 'WHERE eyedraw_class_mnemonic = :ecm '
                    . 'AND canvas_mnemonic = :cm');
        } else {
            $cmd = $this->getDb()
                ->createCommand('INSERT INTO ' . static::CANVAS_DOODLE_TBL . ' ('
                    . 'eyedraw_class_mnemonic, '
                    . 'canvas_mnemonic, '
                    . 'eyedraw_on_canvas_toolbar_location, '
                    . 'eyedraw_on_canvas_toolbar_order, '
                    . 'eyedraw_no_tuple_init_canvas_flag, '
                    . 'eyedraw_carry_forward_canvas_flag) '
                    . 'VALUES (:ecm, :cm, :eoctl, :eocto, :enticf, :ecfcf)');
        }

        $cmd->bindValue(':ecm', $canvas_doodle->EYEDRAW_CLASS_MNEMONIC)
            ->bindValue(':cm', $canvas_doodle->CANVAS_MNEMONIC)
            ->bindValue(':eoctl', $canvas_doodle->ON_TOOLBAR_LOCATION)
            ->bindValue(':eocto', $canvas_doodle->ON_TOOLBAR_ORDER)
            ->bindValue(':enticf', strtolower($canvas_doodle->NEW_EYE_INIT_FLAG) === 'true')
            ->bindValue(':ecfcf', strtolower($canvas_doodle->CARRY_FORWARD_FLAG) === 'true')
            ->query();
    }

    /**
     *
     * @param $canvas
     */
    protected function processCanvasDefinition($canvas)
    {
        // verify that the element type exists for this definition
        if ($element_type = ElementType::model()->findByAttributes(array('class_name' => $canvas->OE_ELEMENT_CLASS_NAME))) {
            $this->insertOrUpdateCanvas($canvas, $element_type);
        }
    }

    /**
     * @param $doodle
     */
    protected function processDoodleDefinition($doodle)
    {
        $this->insertOrUpdateDoodle($doodle);
    }

    /**
     * @param $canvas_doodle
     */
    protected function processCanvasDoodleDefinition($canvas_doodle) //must be run last to prevent error
    {
        //Use the canvas mnemonic to confirm whether or not it should be setup in the db.
        $this->insertOrUpdateCanvasDoodle($canvas_doodle);
    }

    /**
     * @return string
     */
    private function getRefreshTuplesQuery()
    {
        $doodle_tbl = static::DOODLE_TBL;
        $doodle_canvas_tbl = static::CANVAS_DOODLE_TBL;

        return <<<EOSQL
-- Update the Doodle Tuples
UPDATE $doodle_tbl ed
SET ed.processed_canvas_intersection_tuple = (
    SELECT GROUP_CONCAT(DISTINCT ecd.canvas_mnemonic ORDER BY ecd.canvas_mnemonic) -- canvas_mnenonic
  FROM $doodle_canvas_tbl ecd
  WHERE ecd.eyedraw_class_mnemonic = ed.eyedraw_class_mnemonic
    AND EXISTS (
        SELECT 1
    FROM $doodle_canvas_tbl in_ecd
    WHERE in_ecd.canvas_mnemonic = ecd.canvas_mnemonic
    AND in_ecd.eyedraw_carry_forward_canvas_flag = 1
  )
  GROUP BY ecd.eyedraw_class_mnemonic
  HAVING SUM(ecd.eyedraw_carry_forward_canvas_flag) != 0
)
WHERE ed.eyedraw_class_mnemonic != "*" -- Unsafe mode workaround
EOSQL;
    }


    /**
     * @param $canvas_name
     * @return string
     */
     public function create_level_1($canvas_name){
       $result =
       "<li style>"
       ."<div class='result_item'>"
       ."<span data-allias='".$canvas_name."' "
       ."data-action-id='EASTB' data-lvl='1' class='lvl1'>"
       .$canvas_name."</span>"
       ."</div><ul class='results_list'>";
       return $result;
     }

     public function create_level_2($doodle_title,$image_src){
       $result =
       "<li style'>"
       ."<div class='result_item, result_item_with_icon' "
       ."style='background-image: url(".$image_src.")'>"
       ."<span data-allias='".$doodle_title."'"
       ."data-action-id='EASTB' data-lvl='2' class='lvl2'>"
       .$doodle_title."</span>"
       ."</div>";
       return $result;
     }

     public function create_level_3($property_name){
       $result =
       "<li style'>"
       ."<div class='result_item'>"
       ."<span data-allias='".$property_name."'"
       ."data-action-id='EASTB' data-lvl='3' class='lvl3'>"
       .$property_name."</span>"
       ."</div></li>";
       return $result;
     }

    public function get_img_url($doodle_mnemonic){
      $result = "/assets/tom/".$doodle_mnemonic.".png";
      return $result;
    }

    public function create($index, $lvl=1){
      $term = $index->TERM_LIST->TERM[0];
      $img = $index->IMG_URL;
      $result =
      "<li style'>"
      ."<div class='result_item, result_item_with_icon' "
      ."style='background-image: url(".$img.")'>"
      ."<span data-allias='".$term."'"
      ."data-action-id='EASTB' class='lvl".$lvl."'>"
      .$term."</span>"
      ."</div>";
      if (isset($index->INDEX_LIST)) {
        $result .= "<ul class='results_list'>";
        foreach ($index->INDEX_LIST->INDEX as $index2) {
          $result .= $this->create($index2,$lvl+1);
        }
        $result .= "</ul>";
      }
      $result .=
      "</li>";
      return $result;
    }



}
