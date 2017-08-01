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
<ul class="inline-list tabs event-actions">

	<!-- temp stuff enclosed -->
	<style>
	/* TODO:
- reduce opacity of background
- maybe add arrow to show link between
text box and results box
- think about sizing
- think about allias
*/
#search_bar {
	font-family:Helvetica;
	position: absolute;
	left: 130px;
	top: 6px;
	box-sizing: border-box;
	font-size: 12px;
	vertical-align: top;
	padding: 0 10px;
	font-size: 10px;
	width: 200px;
	height: 30px;
	border: 1px solid #b3b3b3;
	border-radius: 10px 0 0 10px;
}
#search_button {
	font-family:Helvetica;
	position: absolute;
	left: 331px;
	top:6px;
	cursor: pointer;
	border: none;
	background: url("http://thesuiteworld.com/wp-admin/maint/search-icon-white-png-540.png") no-repeat center center, #747782;
	background-size: 15px 15px;
	border-radius: 0 20px 20px 0;
	padding: 15px 25px;
	display: inline-block;
	width: 20px;
	height: 30px;
}


#results {
	outline: 0px;
	z-index: 1002;
	height: 530px;
	width: 1024px;
	top: 48px;
	left: 12px;
	display: none;
	overflow:scroll;
	background-color: #fff;
	padding: 20px;
	font-size: .8rem;
	box-shadow: 2px 2px 2px 2px #666666;
	border-radius: 7px;
	font-family: Helvetica, Arial, sans-serif;
	border: 1px solid #aaaaaa/*{borderColorContent}*/;
	color: #222222/*{fcContent}*/;
	margin: 0;
	box-sizing: border-box;
	font-weight: normal;
	font-style: normal;
	line-height: 1.5;
	cursor: auto;
	position: absolute;
}

.results_list {
margin: 0;
list-style: none;
padding-left: 0px;
}
.results_list .results_list {
padding-left: 45px;
}
.icon {
height: 25px;
width: 25px;
position: absolute;
bottom: 5px;
}

.result_item,.result_item_with_icon {
	width: 222px;
	    display: block;
	    margin: 0 0 0px 0;
	    height: 19px;
	    line-height: 19px;
	    background-color: #EEEEED;
	    background-size: 524px 500px;
	    background-repeat: no-repeat;
	    background-position: left;
	    background-size: 16px 16px;
	    color: #0b59da;
	    cursor: pointer;
	    font-size: .75rem;
	    box-sizing: border-box;
	    text-align: -webkit-match-parent;
	    margin-bottom: 4px;
	    list-style-position: inside;
	    font-family: inherit;
	    padding-left: 12px;
	    border-radius: 3px;
}
.result_item_with_icon{
padding-left: 25px;
}


.result_item:hover,.result_item_with_icon:hover {
background-color: #3665ff;
color: #fff;
cursor: pointer;

}
.arrow {
position: relative;

}

.lvl1,.lvl2,.lvl3 {
}

.search_highlight {
font-style: normal;
font-weight: normal;
color: #32cd32;
}
	</style>

	<input type="text" id="search_bar"
	placeholder="Find Canvases, Doodles and More..." />
	<div id="search_button">
	</div>

	    <div id="results">



				<ul class='results_list'><li style><div class="result_item"><span data-allias='Examination Anterior Segment' data-action-id='EASTB' class='lvl1'>Examination Anterior Segment</span></div><ul class='results_list'><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/ACIOL.png)"><span data-allias='Anterior chamber IOL' data-action-id='EASTB' class='lvl2'>Anterior chamber IOL</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/AdenoviralKeratitis.png)"><span data-allias='Adenoviral keratitis' data-action-id='EASTB' class='lvl2'>Adenoviral keratitis</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/AngleGradeEast.png)"><span data-allias='Angle Grade East' data-action-id='EASTB' class='lvl2'>Angle Grade East</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/AngleGradeNorth.png)"><span data-allias='Angle Grade North' data-action-id='EASTB' class='lvl2'>Angle Grade North</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/AngleGradeSouth.png)"><span data-allias='Angle Grade South' data-action-id='EASTB' class='lvl2'>Angle Grade South</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/AngleGradeWest.png)"><span data-allias='Angle Grade West' data-action-id='EASTB' class='lvl2'>Angle Grade West</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/AngleNV.png)"><span data-allias='Angle new vessels' data-action-id='EASTB' class='lvl2'>Angle new vessels</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/AngleRecession.png)"><span data-allias='Angle recession' data-action-id='EASTB' class='lvl2'>Angle recession</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/AntSeg.png)"><span data-allias='Anterior segment' data-action-id='EASTB' class='lvl2'>Anterior segment</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Pupil size' data-action-id='EASTB' class='lvl3'>Pupil size</span></div></li><li style><div class="result_item"><span data-allias='PXE' data-action-id='EASTB' class='lvl3'>PXE</span></div></li><li style><div class="result_item"><span data-allias='Coloboma' data-action-id='EASTB' class='lvl3'>Coloboma</span></div></li><li style><div class="result_item"><span data-allias='Colour' data-action-id='EASTB' class='lvl3'>Colour</span></div></li><li style><div class="result_item"><span data-allias='Ectropion uveae' data-action-id='EASTB' class='lvl3'>Ectropion uveae</span></div></li><li style><div class="result_item"><span data-allias='Corneal size' data-action-id='EASTB' class='lvl3'>Corneal size</span></div></li><li style><div class="result_item"><span data-allias='Cells' data-action-id='EASTB' class='lvl3'>Cells</span></div></li><li style><div class="result_item"><span data-allias='Flare' data-action-id='EASTB' class='lvl3'>Flare</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/AntSynech.png)"><span data-allias='Anterior synechiae' data-action-id='EASTB' class='lvl2'>Anterior synechiae</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Bleb.png)"><span data-allias='Trabeculectomy bleb' data-action-id='EASTB' class='lvl2'>Trabeculectomy bleb</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/ConjunctivalSuture.png)"><span data-allias='Conjunctival suture' data-action-id='EASTB' class='lvl2'>Conjunctival suture</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Orientated' data-action-id='EASTB' class='lvl3'>Orientated</span></div></li><li style><div class="result_item"><span data-allias='Type' data-action-id='EASTB' class='lvl3'>Type</span></div></li><li style><div class="result_item"><span data-allias='Material' data-action-id='EASTB' class='lvl3'>Material</span></div></li><li style><div class="result_item"><span data-allias='Size' data-action-id='EASTB' class='lvl3'>Size</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Conjunctivitis.png)"><span data-allias='Conjunctivitis' data-action-id='EASTB' class='lvl2'>Conjunctivitis</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Type' data-action-id='EASTB' class='lvl3'>Type</span></div></li><li style><div class="result_item"><span data-allias='Mucopurulent' data-action-id='EASTB' class='lvl3'>Mucopurulent</span></div></li><li style><div class="result_item"><span data-allias='Hyperaemia' data-action-id='EASTB' class='lvl3'>Hyperaemia</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Cornea.png)"><span data-allias='Cornea' data-action-id='EASTB' class='lvl2'>Cornea</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/CornealEpithelialDefect.png)"><span data-allias='Corneal epithelial defect' data-action-id='EASTB' class='lvl2'>Corneal epithelial defect</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/CornealLaceration.png)"><span data-allias='Corneal laceration' data-action-id='EASTB' class='lvl2'>Corneal laceration</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/CornealOedema.png)"><span data-allias='Corneal oedema' data-action-id='EASTB' class='lvl2'>Corneal oedema</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/CornealOpacity.png)"><span data-allias='Corneal opacity' data-action-id='EASTB' class='lvl2'>Corneal opacity</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Height' data-action-id='EASTB' class='lvl3'>Height</span></div></li><li style><div class="result_item"><span data-allias='Width' data-action-id='EASTB' class='lvl3'>Width</span></div></li><li style><div class="result_item"><span data-allias='Depth (%)' data-action-id='EASTB' class='lvl3'>Depth (%)</span></div></li><li style><div class="result_item"><span data-allias='Infiltrate width' data-action-id='EASTB' class='lvl3'>Infiltrate width</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/CornealPigmentation.png)"><span data-allias='Corneal pigmentation' data-action-id='EASTB' class='lvl2'>Corneal pigmentation</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Level' data-action-id='EASTB' class='lvl3'>Level</span></div></li><li style><div class="result_item"><span data-allias='Type' data-action-id='EASTB' class='lvl3'>Type</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/CornealScar.png)"><span data-allias='Corneal scar' data-action-id='EASTB' class='lvl2'>Corneal scar</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/CornealSuture.png)"><span data-allias='Corneal suture' data-action-id='EASTB' class='lvl2'>Corneal suture</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Removed' data-action-id='EASTB' class='lvl3'>Removed</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/DendriticUlcer.png)"><span data-allias='Dendritic ulcer' data-action-id='EASTB' class='lvl2'>Dendritic ulcer</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Episcleritis.png)"><span data-allias='Episcleritis' data-action-id='EASTB' class='lvl2'>Episcleritis</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Severity' data-action-id='EASTB' class='lvl3'>Severity</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Fuchs.png)"><span data-allias='Guttata' data-action-id='EASTB' class='lvl2'>Guttata</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Hyphaema.png)"><span data-allias='Hyphaema' data-action-id='EASTB' class='lvl2'>Hyphaema</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Hypopyon.png)"><span data-allias='Hypopyon' data-action-id='EASTB' class='lvl2'>Hypopyon</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/KeraticPrecipitates.png)"><span data-allias='Keratic precipitates' data-action-id='EASTB' class='lvl2'>Keratic precipitates</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/LasikFlap.png)"><span data-allias='LASIK flap' data-action-id='EASTB' class='lvl2'>LASIK flap</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Hinge' data-action-id='EASTB' class='lvl3'>Hinge</span></div></li><li style><div class="result_item"><span data-allias='Femto laser' data-action-id='EASTB' class='lvl3'>Femto laser</span></div></li><li style><div class="result_item"><span data-allias='Diameter' data-action-id='EASTB' class='lvl3'>Diameter</span></div></li><li style><div class="result_item"><span data-allias='Depth' data-action-id='EASTB' class='lvl3'>Depth</span></div></li><li style><div class="result_item"><span data-allias='Sidecut angle' data-action-id='EASTB' class='lvl3'>Sidecut angle</span></div></li><li style><div class="result_item"><span data-allias='Spot separation' data-action-id='EASTB' class='lvl3'>Spot separation</span></div></li><li style><div class="result_item"><span data-allias='Line separation' data-action-id='EASTB' class='lvl3'>Line separation</span></div></li><li style><div class="result_item"><span data-allias='Energy level' data-action-id='EASTB' class='lvl3'>Energy level</span></div></li><li style><div class="result_item"><span data-allias='OBL
				        grade' data-action-id='EASTB' class='lvl3'>OBL
				        grade</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Lens.png)"><span data-allias='Lens' data-action-id='EASTB' class='lvl2'>Lens</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/MarginalKeratitis.png)"><span data-allias='Marginal keratitis' data-action-id='EASTB' class='lvl2'>Marginal keratitis</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/MetallicForeignBody.png)"><span data-allias='Metallic foreign body' data-action-id='EASTB' class='lvl2'>Metallic foreign body</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Patch.png)"><span data-allias='Tube patch' data-action-id='EASTB' class='lvl2'>Tube patch</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Material' data-action-id='EASTB' class='lvl3'>Material</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/PCIOL.png)"><span data-allias='Posterior chamber IOL' data-action-id='EASTB' class='lvl2'>Posterior chamber IOL</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Fixation' data-action-id='EASTB' class='lvl3'>Fixation</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/PI.png)"><span data-allias='Peripheral iridectomy' data-action-id='EASTB' class='lvl2'>Peripheral iridectomy</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Type' data-action-id='EASTB' class='lvl3'>Type</span></div></li><li style><div class="result_item"><span data-allias='Patent' data-action-id='EASTB' class='lvl3'>Patent</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Pingueculum.png)"><span data-allias='Pingueculum' data-action-id='EASTB' class='lvl2'>Pingueculum</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/PosteriorCapsule.png)"><span data-allias='Posterior capsule' data-action-id='EASTB' class='lvl2'>Posterior capsule</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/PosteriorSynechia.png)"><span data-allias='Posterior synechia' data-action-id='EASTB' class='lvl2'>Posterior synechia</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Pterygium.png)"><span data-allias='Pterygium' data-action-id='EASTB' class='lvl2'>Pterygium</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/RK.png)"><span data-allias='Radial keratotomy' data-action-id='EASTB' class='lvl2'>Radial keratotomy</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Rubeosis.png)"><span data-allias='Rubeosis iridis' data-action-id='EASTB' class='lvl2'>Rubeosis iridis</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/SectorIridectomy.png)"><span data-allias='Sector iridectomy' data-action-id='EASTB' class='lvl2'>Sector iridectomy</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/SidePort.png)"><span data-allias='Side port' data-action-id='EASTB' class='lvl2'>Side port</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/SPEE.png)"><span data-allias='SPEE' data-action-id='EASTB' class='lvl2'>SPEE</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Supramid.png)"><span data-allias='Supramid suture' data-action-id='EASTB' class='lvl2'>Supramid suture</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Percentage of tube' data-action-id='EASTB' class='lvl3'>Percentage of tube</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/ToricPCIOL.png)"><span data-allias='Toric posterior chamber IOL' data-action-id='EASTB' class='lvl2'>Toric posterior chamber IOL</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Model' data-action-id='EASTB' class='lvl3'>Model</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/TrabyFlap.png)"><span data-allias='Trabeculectomy flap' data-action-id='EASTB' class='lvl2'>Trabeculectomy flap</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/TrabySuture.png)"><span data-allias='Trabeculectomy suture' data-action-id='EASTB' class='lvl2'>Trabeculectomy suture</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Shape' data-action-id='EASTB' class='lvl3'>Shape</span></div></li><li style><div class="result_item"><span data-allias='Material' data-action-id='EASTB' class='lvl3'>Material</span></div></li><li style><div class="result_item"><span data-allias='Size' data-action-id='EASTB' class='lvl3'>Size</span></div></li><li style><div class="result_item"><span data-allias='Removed' data-action-id='EASTB' class='lvl3'>Removed</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/TransilluminationDefect.png)"><span data-allias='Transillumination defect' data-action-id='EASTB' class='lvl2'>Transillumination defect</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Tube.png)"><span data-allias='Drainage tube' data-action-id='EASTB' class='lvl2'>Drainage tube</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Type' data-action-id='EASTB' class='lvl3'>Type</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/TubeExtender.png)"><span data-allias='Tube extender' data-action-id='EASTB' class='lvl2'>Tube extender</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/TubeLigation.png)"><span data-allias='Ligation suture' data-action-id='EASTB' class='lvl2'>Ligation suture</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Material' data-action-id='EASTB' class='lvl3'>Material</span></div></li></ul></li></ul></li></ul>


	    </div>

	<script>
	(function($) {
    "use strict";
    let opts;
    $.fn.search = function(options) {
        opts = $.extend({}, $.fn.search.defaults, options);
        let $results = $("#results");
        let $parent = $results.parent();
        $results.detach();
        this.keyup(function() {
            const search_term = ($(this).val() + "").toLowerCase();
            for (let selector of opts.selectors) {
                const last_level = opts.selectors[0] == selector;
                $results.find(selector).each(function() {
                    let $this = $(this);
                    let $element = get_element($this);
                    const allias = $this.data("allias").toLowerCase();
                    if (allias.indexOf(search_term) == -1) {
                        $this.html($this.text());
                        if (!last_level && $element.children().find("li[style!='display: none;']").length != 0) {
                            $element.show();
                        } else {
                            $element.hide();
                        }
                    } else {
                        const highlighted_string = replace_matched_string($this.text(), search_term);
                        $this.html(highlighted_string);
                        $element.show();
                        if (!last_level) {
                            $element.children().find("li[style='display: none;']").show();
                        }
                    }
                });
            }
        });
        $parent.append($results);
        return this;
    };
    $.fn.search.defaults = {
        selectors: [".lvl3", ".lvl2", ".lvl1"],
        ancestor_to_change: 2,
        matched_string_tag: ["<em class='search_highlight'>", "</em>"]
    };

    function replace_matched_string(old_string, search_term) {
        if (search_term === "" || old_string.toLowerCase().indexOf(search_term.toLowerCase()) == -1) {
            return old_string;
        }
        if (old_string === "") {
            return "";
        }
        const match_start = old_string.toLowerCase().indexOf("" + search_term.toLowerCase() + "");
        const match_end = match_start + search_term.length - 1;
        const before_match = old_string.slice(0, match_start);
        const match_text = old_string.slice(match_start, match_end + 1);
        const after_match = old_string.slice(match_end + 1);
        const new_string = before_match + opts.matched_string_tag[0] + match_text + opts.matched_string_tag[1] + replace_matched_string(after_match, search_term);
        return new_string;
    }

    function get_element($this) {
        for (let i = 0; i < opts.ancestor_to_change; i++) {
            $this = $this.parent();
        }
        return $this;
    }
}(jQuery));
var tomNeeds;
$("#search_bar").search();
$("#search_bar").focus(function(){
	$('#results').show();
});
$("#search_bar").blur(function(){
	//$('#results').hide();
});
function get_element_name($this){
	return $this.find("span:first").text();
}
function click_lvl_1($this) {
	let name = get_element_name($this);
	console.log(name);
	let name_on_btn= {'Examination Anterior Segment':'Anterior Segment'};
	let btn_name = name_on_btn[name];
	let $item = $(".oe-event-sidebar-edit li a:contains("+btn_name+")")
	$item.click();
}
$('.result_item, .result_item_with_icon').click(function(){
	let $this = $(this);
	let $span = $this.find("span:first");
	let lvl = $span.attr("class");
	let name = $span.text();
	switch (lvl) {
		case "lvl1":
			click_lvl_1($this);
			break;
		case "lvl2":
			let $parent = $this.parent().parent().parent();
			let parent_name = get_element_name($parent);
			//let element_id =	element_id_map[parent_name];
			let element_id = 315;
			click_lvl_1($parent);

			//bad solution
			var checkExist = setInterval(function() {
   		if ($("#PCIOLright_315").length) {
      	clearInterval(checkExist);
   		}
		}, 100);
		setTimeout(function(){
			let $item_2 = $("#PCIOLright_315").children();
			$item_2.click();
		},5000);
			//replace left or right or position
		//	let $item2 = $("#"+"PCIOLright_315").children();
		//	$item2.click();
		break;
		case "lvl3":
			alert("3");
		break;
		default:

	}
	$('#results').hide();
});

$( document ).ready(function() {
	//$('.oe-event-sidebar-edit li a:contains(Anterior)').hide(4000);
});

</script>
	<!-- temp stuff enclosed -->

	<?php foreach ($this->event_tabs as $tab) { ?>
	<li<?php if (@$tab['active']) { ?> class="selected"<?php } ?>>
		<?php if (@$tab['href']) { ?>
			<a href="<?php echo $tab['href'] ?>"><?php echo $tab['label'] ?></a>
		<?php } else { //FIXME: don't select?>
			<a href="#"><?php echo $tab['label'] ?></a>
		<?php } ?>
	</li>
	<?php } ?>
</ul>
