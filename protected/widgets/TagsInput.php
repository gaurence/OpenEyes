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

class TagsInput extends BaseFieldWidget
{
    public $default_tags = array();
    public $relation;
    public $relation_id_field;

    public $autocomplete_url = null;

    public function init()
    {
        $relation = $this->relation;
        $tag_names = array();
        foreach ($this->element->$relation as $tag)
        {
            $tag_names[] = $tag->name;
        }

        $this->default_tags = $tag_names;
        $this->autocomplete_url = $this->htmlOptions['autocomplete_url'];
    }
}