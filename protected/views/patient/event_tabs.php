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
	#search_bar_right, #search_bar_left {
		font-family:Helvetica;
		position: absolute;
		left: 85px;
		top: 5px;
		box-sizing: border-box;
		font-size: 12px;
		vertical-align: top;
		padding: 0 10px;
		font-size: 10px;
		width: 200px;
		height: 30px;
		border: 1px solid #b3b3b3;
		border-radius: 10px 0 0 10px;
		z-index: 1003;
	}
	#search_bar_left {
		left: 669px;
	}
	#search_button_right, #search_button_left {
		font-family:Helvetica;
		position: absolute;
		left: 284px;
		top:6px;
		cursor: pointer;
		border: none;
		background: url("http://thesuiteworld.com/wp-admin/maint/search-icon-white-png-540.png") no-repeat center center, #747782;
		background-size: 15px 15px;
		border-radius: 0 20px 20px 0;
		padding: 10px 25px;
		display: inline-block;
		width: 20px;
		height: 28px;
		z-index: 1004
	}
	#search_button_left {
		left: 868px;
	}


	#results {
		outline: 0px;
		z-index: 1005;
		height: 539px;
		width: 1024px;
		top: 48px;
		left: 12px;
		display: none;
		overflow:scroll;
		background-color: #fff;
		padding: 0px;
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
		background: #fff;
		background-image: url(/assets/tom/line.png);
		background-size: 4px;
		background-repeat: repeat-y;
		background-position: 33.33%;
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
		font-style: inherit;
		background-color: yellow;
		color : black;
	}

	#big_cross {
		position: fixed;
		background: #fff url(/assets/tom/bigCross.png) center no-repeat;
		display: block;
		cursor: pointer;
		left: 1195px;
		top: 133px;
		width: 32px;
	}

	li ul li ul li .result_item {
		background-color: transparent;
	}

	#results > ul >  li > div {
		position: sticky;
		top: 0;
		/*background-color: #9e9e9e;*/
		z-index: 1000;
	}

	#results > ul >  li > div:hover {
		background-color: #3665ff;
		color: #fff;
		cursor: pointer;
	}

	.allias {
		font-size: 0.7em;
		font-style: italic;
		color: grey;
		padding-left: 32px;
		top: -6px;
		position: relative;
		width: 500px;
		max-width: 500px;
	}

	.index_row {
		display: flex; /* equal height of the children */
	}

	.index_col_left {
		flex: 1; /* additionally, equal width */
	}
	.index_col_right {
		flex: 2; /* additionally, equal width */
		position: relative;
		top: -19px;
	}



	.warning_icon,.info_icon {
		background-size: 16px 16px;
		background-repeat: no-repeat;
		background-color: white;
		display: inline-block;
		height: 16px;
		width: 16px;
		position: relative;
		top: 3px;
	}

	.warning_icon {
		background-image: url("/assets/tom/warning.png");	}

		.info_icon {
			background-image: url("/assets/tom/info.png");
		}
		.description_icon {
			font-size: 0.8em;
			font-weight: bold;
			font-style: italic;
		}

		.warning_note,.info_note,.description_note{
			font-size: 0.8em;
			padding-left: 10px;
		}


		/* The switch - the box around the slider */
		.switch {
			display: none;
			position: absolute;
			width: 30px;
			height: 17px;
		}

		#description_switch {
			left: 439px;
			top: 15px;
		}

		#children_switch {
			left: 588px;
			top: 15px;
		}

		/* Hide default HTML checkbox */
		.switch input {display:none;}

		/* The slider */
		.slider {
			position: absolute;
			cursor: pointer;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: #ccc;
			-webkit-transition: .4s;
			transition: .4s;
		}

		.slider:before {
			position: absolute;
			content: "";
			height: 13px;
			width: 13px;
			left: 2px;
			bottom: 2px;
			background-color: white;
			-webkit-transition: .4s;
			transition: .4s;
		}

		input:checked + .slider {
			background-color: #2196F3;
		}

		input:focus + .slider {
			box-shadow: 0 0 1px #2196F3;
		}

		input:checked + .slider:before {
			-webkit-transform: translateX(13px);
			-ms-transform: translateX(13px);
			transform: translateX(13px);
		}

		/* Rounded sliders */
		.slider.round {
			border-radius: 17px;
		}

		.slider.round:before {
			border-radius: 50%;
		}

		#description_toggle_label {
			display: none;
			position: absolute;
			font-size: 0.65em;
			left: 380px;
			top: 15px;
		}

		#children_toggle_label {
			display: none;
			position: absolute;
			font-size: 0.65em;
			left: 527px;
			top: 15px;
		}

		#search_options {
			display: none;
			position: absolute;
    	left: 411px;
    	background-color: #b1b6bb;
    	height: 38px;
    	width: 300px;
		}

		</style>

		<div id="search_options"></div>
		<input type="text" id="search_bar_right"
		placeholder="Find Canvases, Doodles and More..." />
		<div id="search_button_right">
		</div>
		<input type="text" id="search_bar_left"
		placeholder="Find Canvases, Doodles and More..." />
		<div id="search_button_left">
		</div>
		<label class="switch" id="description_switch">
			<input type="checkbox" checked id="description_toggle">
			<span class="slider round"></span>
		</label>
		<span id="description_toggle_label">Descriptions</span>

		<label class="switch" id="children_switch">
			<input type="checkbox" checked id="children_toggle">
			<span class="slider round"></span>
		</label>
		<span id="children_toggle_label">Show children</span>


		<div id="results">
			<a href="#" id="big_cross"></a>








<ul class='results_list'><li style><div class="result_item"><span data-allias='Examination Anterior Segment' data-action-id='EASTB' class='lvl1'>Examination Anterior Segment</span></div><ul class='results_list'><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/ACIOL.png)"><span data-allias='Anterior chamber IOL,Intraocular lens,ACIOL' data-action-id='EASTB' class='lvl2'>Anterior chamber IOL</span></div><div class="index_row"><div class="index_col_left"><span class="allias">Intraocular lens,ACIOL</span></div><div class="index_col_right"><span class="description_icon">Description:</span><span class="description_note">This is a description<br></span><span class="warning_icon"></span><span class="warning_note">This is a warning note<br></span><span class="info_icon"></span><span class="info_note">This is a general note<br></span></div></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/AdenoviralKeratitis.png)"><span data-allias='Adenoviral keratitis' data-action-id='EASTB' class='lvl2'>Adenoviral keratitis</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/AntSeg.png)"><span data-allias='Anterior segment' data-action-id='EASTB' class='lvl2'>Anterior segment</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Pupil size' data-action-id='EASTB' class='lvl3'>Pupil size</span></div></li><li style><div class="result_item"><span data-allias='PXE' data-action-id='EASTB' class='lvl3'>PXE</span></div></li><li style><div class="result_item"><span data-allias='Coloboma' data-action-id='EASTB' class='lvl3'>Coloboma</span></div></li><li style><div class="result_item"><span data-allias='Colour' data-action-id='EASTB' class='lvl3'>Colour</span></div></li><li style><div class="result_item"><span data-allias='Ectropion uveae' data-action-id='EASTB' class='lvl3'>Ectropion uveae</span></div></li><li style><div class="result_item"><span data-allias='Corneal size' data-action-id='EASTB' class='lvl3'>Corneal size</span></div></li><li style><div class="result_item"><span data-allias='Cells' data-action-id='EASTB' class='lvl3'>Cells</span></div></li><li style><div class="result_item"><span data-allias='Flare' data-action-id='EASTB' class='lvl3'>Flare</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Bleb.png)"><span data-allias='Trabeculectomy bleb' data-action-id='EASTB' class='lvl2'>Trabeculectomy bleb</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/ConjunctivalSuture.png)"><span data-allias='Conjunctival suture' data-action-id='EASTB' class='lvl2'>Conjunctival suture</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Orientated' data-action-id='EASTB' class='lvl3'>Orientated</span></div></li><li style><div class="result_item"><span data-allias='Type' data-action-id='EASTB' class='lvl3'>Type</span></div></li><li style><div class="result_item"><span data-allias='Material' data-action-id='EASTB' class='lvl3'>Material</span></div></li><li style><div class="result_item"><span data-allias='Size' data-action-id='EASTB' class='lvl3'>Size</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Conjunctivitis.png)"><span data-allias='Conjunctivitis' data-action-id='EASTB' class='lvl2'>Conjunctivitis</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Type' data-action-id='EASTB' class='lvl3'>Type</span></div></li><li style><div class="result_item"><span data-allias='Mucopurulent' data-action-id='EASTB' class='lvl3'>Mucopurulent</span></div></li><li style><div class="result_item"><span data-allias='Hyperaemia' data-action-id='EASTB' class='lvl3'>Hyperaemia</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/CornealEpithelialDefect.png)"><span data-allias='Corneal epithelial defect' data-action-id='EASTB' class='lvl2'>Corneal epithelial defect</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Height' data-action-id='EASTB' class='lvl3'>Height</span></div></li><li style><div class="result_item"><span data-allias='Width' data-action-id='EASTB' class='lvl3'>Width</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/CornealLaceration.png)"><span data-allias='Corneal laceration' data-action-id='EASTB' class='lvl2'>Corneal laceration</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Laceration Depth %' data-action-id='EASTB' class='lvl3'>Laceration Depth %</span></div></li><li style><div class="result_item"><span data-allias='Iris prolapse' data-action-id='EASTB' class='lvl3'>Iris prolapse</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/CornealOedema.png)"><span data-allias='Corneal oedema' data-action-id='EASTB' class='lvl2'>Corneal oedema</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Intensity' data-action-id='EASTB' class='lvl3'>Intensity</span></div></li><li style><div class="result_item"><span data-allias='Epithelial' data-action-id='EASTB' class='lvl3'>Epithelial</span></div></li><li style><div class="result_item"><span data-allias='Stromal' data-action-id='EASTB' class='lvl3'>Stromal</span></div></li><li style><div class="result_item"><span data-allias='Endothelial' data-action-id='EASTB' class='lvl3'>Endothelial</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/CornealOpacity.png)"><span data-allias='Corneal opacity' data-action-id='EASTB' class='lvl2'>Corneal opacity</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Height' data-action-id='EASTB' class='lvl3'>Height</span></div></li><li style><div class="result_item"><span data-allias='Width' data-action-id='EASTB' class='lvl3'>Width</span></div></li><li style><div class="result_item"><span data-allias='Depth (%)' data-action-id='EASTB' class='lvl3'>Depth (%)</span></div></li><li style><div class="result_item"><span data-allias='Infiltrate width' data-action-id='EASTB' class='lvl3'>Infiltrate width</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/CornealPigmentation.png)"><span data-allias='Corneal pigmentation' data-action-id='EASTB' class='lvl2'>Corneal pigmentation</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Level' data-action-id='EASTB' class='lvl3'>Level</span></div></li><li style><div class="result_item"><span data-allias='Type' data-action-id='EASTB' class='lvl3'>Type</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/CornealScar.png)"><span data-allias='Corneal scar' data-action-id='EASTB' class='lvl2'>Corneal scar</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/CornealSuture.png)"><span data-allias='Corneal suture' data-action-id='EASTB' class='lvl2'>Corneal suture</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Removed' data-action-id='EASTB' class='lvl3'>Removed</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/DendriticUlcer.png)"><span data-allias='Dendritic ulcer' data-action-id='EASTB' class='lvl2'>Dendritic ulcer</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Episcleritis.png)"><span data-allias='Episcleritis' data-action-id='EASTB' class='lvl2'>Episcleritis</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Severity' data-action-id='EASTB' class='lvl3'>Severity</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Fuchs.png)"><span data-allias='Guttata,Fuchs' data-action-id='EASTB' class='lvl2'>Guttata</span></div><div class="index_row"><div class="index_col_left"><span class="allias">Fuchs</span></div><div class="index_col_right"></div></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Hyphaema.png)"><span data-allias='Hyphaema' data-action-id='EASTB' class='lvl2'>Hyphaema</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Hypopyon.png)"><span data-allias='Hypopyon' data-action-id='EASTB' class='lvl2'>Hypopyon</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/KeraticPrecipitates.png)"><span data-allias='Keratic precipitates' data-action-id='EASTB' class='lvl2'>Keratic precipitates</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/LasikFlap.png)"><span data-allias='LASIK flap,Laser-assisted in situ keratomileusis' data-action-id='EASTB' class='lvl2'>LASIK flap</span></div><div class="index_row"><div class="index_col_left"><span class="allias">Laser-assisted in situ keratomileusis</span></div><div class="index_col_right"></div></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Hinge' data-action-id='EASTB' class='lvl3'>Hinge</span></div></li><li style><div class="result_item"><span data-allias='Femto laser' data-action-id='EASTB' class='lvl3'>Femto laser</span></div></li><li style><div class="result_item"><span data-allias='Diameter' data-action-id='EASTB' class='lvl3'>Diameter</span></div></li><li style><div class="result_item"><span data-allias='Depth' data-action-id='EASTB' class='lvl3'>Depth</span></div></li><li style><div class="result_item"><span data-allias='Sidecut angle' data-action-id='EASTB' class='lvl3'>Sidecut angle</span></div></li><li style><div class="result_item"><span data-allias='Spot separation' data-action-id='EASTB' class='lvl3'>Spot separation</span></div></li><li style><div class="result_item"><span data-allias='Line separation' data-action-id='EASTB' class='lvl3'>Line separation</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Lens.png)"><span data-allias='Lens' data-action-id='EASTB' class='lvl2'>Lens</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Nuclear cataract' data-action-id='EASTB' class='lvl3'>Nuclear cataract</span></div></li><li style><div class="result_item"><span data-allias='Cortical cataract' data-action-id='EASTB' class='lvl3'>Cortical cataract</span></div></li><li style><div class="result_item"><span data-allias='Posterior subcapsular cataract' data-action-id='EASTB' class='lvl3'>Posterior subcapsular cataract</span></div></li><li style><div class="result_item"><span data-allias='Anterior polar' data-action-id='EASTB' class='lvl3'>Anterior polar</span></div></li><li style><div class="result_item"><span data-allias='Posterior polar' data-action-id='EASTB' class='lvl3'>Posterior polar</span></div></li><li style><div class="result_item"><span data-allias='Coronary' data-action-id='EASTB' class='lvl3'>Coronary</span></div></li><li style><div class="result_item"><span data-allias='Phacodonesis' data-action-id='EASTB' class='lvl3'>Phacodonesis</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/MarginalKeratitis.png)"><span data-allias='Marginal keratitis' data-action-id='EASTB' class='lvl2'>Marginal keratitis</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='% Epithelial defect of corneal infiltrate' data-action-id='EASTB' class='lvl3'>% Epithelial defect of corneal infiltrate</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/MetallicForeignBody.png)"><span data-allias='Metallic foreign body' data-action-id='EASTB' class='lvl2'>Metallic foreign body</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Metallic foreign body' data-action-id='EASTB' class='lvl3'>Metallic foreign body</span></div></li><li style><div class="result_item"><span data-allias='Rust ring' data-action-id='EASTB' class='lvl3'>Rust ring</span></div></li><li style><div class="result_item"><span data-allias='Coats ring' data-action-id='EASTB' class='lvl3'>Coats ring</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Patch.png)"><span data-allias='Tube patch' data-action-id='EASTB' class='lvl2'>Tube patch</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Material' data-action-id='EASTB' class='lvl3'>Material</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/PCIOL.png)"><span data-allias='Posterior chamber IOL,Intraocular lens' data-action-id='EASTB' class='lvl2'>Posterior chamber IOL</span></div><div class="index_row"><div class="index_col_left"><span class="allias">Intraocular lens</span></div><div class="index_col_right"></div></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Fixation' data-action-id='EASTB' class='lvl3'>Fixation</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/PI.png)"><span data-allias='Peripheral iridectomy' data-action-id='EASTB' class='lvl2'>Peripheral iridectomy</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Type' data-action-id='EASTB' class='lvl3'>Type</span></div></li><li style><div class="result_item"><span data-allias='Patent' data-action-id='EASTB' class='lvl3'>Patent</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Pingueculum.png)"><span data-allias='Pingueculum' data-action-id='EASTB' class='lvl2'>Pingueculum</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/PosteriorCapsule.png)"><span data-allias='Posterior capsule' data-action-id='EASTB' class='lvl2'>Posterior capsule</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Opacity' data-action-id='EASTB' class='lvl3'>Opacity</span></div></li><li style><div class="result_item"><span data-allias='Capsulotomy' data-action-id='EASTB' class='lvl3'>Capsulotomy</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/PosteriorSynechia.png)"><span data-allias='Posterior synechia' data-action-id='EASTB' class='lvl2'>Posterior synechia</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Pterygium.png)"><span data-allias='Pterygium' data-action-id='EASTB' class='lvl2'>Pterygium</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Injection' data-action-id='EASTB' class='lvl3'>Injection</span></div></li><li style><div class="result_item"><span data-allias='Stocker's line' data-action-id='EASTB' class='lvl3'>Stocker's line</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/RK.png)"><span data-allias='Radial keratotomy' data-action-id='EASTB' class='lvl2'>Radial keratotomy</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Number of Cuts' data-action-id='EASTB' class='lvl3'>Number of Cuts</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Rubeosis.png)"><span data-allias='Rubeosis iridis' data-action-id='EASTB' class='lvl2'>Rubeosis iridis</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/SectorIridectomy.png)"><span data-allias='Sector iridectomy' data-action-id='EASTB' class='lvl2'>Sector iridectomy</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/SidePort.png)"><span data-allias='Side port' data-action-id='EASTB' class='lvl2'>Side port</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/SPEE.png)"><span data-allias='SPEE,Superficial punctate epithelial erosions' data-action-id='EASTB' class='lvl2'>SPEE</span></div><div class="index_row"><div class="index_col_left"><span class="allias">Superficial punctate epithelial erosions</span></div><div class="index_col_right"></div></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Supramid.png)"><span data-allias='Supramid suture' data-action-id='EASTB' class='lvl2'>Supramid suture</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Percentage of tube' data-action-id='EASTB' class='lvl3'>Percentage of tube</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/TrabyFlap.png)"><span data-allias='Trabeculectomy flap' data-action-id='EASTB' class='lvl2'>Trabeculectomy flap</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/TrabySuture.png)"><span data-allias='Trabeculectomy suture' data-action-id='EASTB' class='lvl2'>Trabeculectomy suture</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Shape' data-action-id='EASTB' class='lvl3'>Shape</span></div></li><li style><div class="result_item"><span data-allias='Material' data-action-id='EASTB' class='lvl3'>Material</span></div></li><li style><div class="result_item"><span data-allias='Size' data-action-id='EASTB' class='lvl3'>Size</span></div></li><li style><div class="result_item"><span data-allias='Removed' data-action-id='EASTB' class='lvl3'>Removed</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/TransilluminationDefect.png)"><span data-allias='Transillumination defect' data-action-id='EASTB' class='lvl2'>Transillumination defect</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/Tube.png)"><span data-allias='Drainage tube' data-action-id='EASTB' class='lvl2'>Drainage tube</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Type' data-action-id='EASTB' class='lvl3'>Type</span></div></li></ul></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/TubeExtender.png)"><span data-allias='Tube extender' data-action-id='EASTB' class='lvl2'>Tube extender</span></div></li><li style><div class="result_item, result_item_with_icon" style="background-image: url(/assets/tom/TubeLigation.png)"><span data-allias='Ligation suture' data-action-id='EASTB' class='lvl2'>Ligation suture</span></div><ul class='results_list'><li style><div class="result_item"><span data-allias='Material' data-action-id='EASTB' class='lvl3'>Material</span></div></li></ul></li></ul></li></ul>











		</div>

		<script>
		var show_children = true;
		(function($) {
			"use strict";
			let opts;
			let search_term;
			$.fn.search = function(options) {
				opts = $.extend({}, $.fn.search.defaults, options);
				let $results = $("#results");
				let $parent = $results.parent();

				this.keyup(function() {
					$results.detach();
					search_term = ($(this).val() + "").toLowerCase();
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
									//this can be conditional
									if (show_children == true) {
										$element.children().find("li[style='display: none;']").show();
									}
								}
							}
						});
					}
					$results.find('.allias').each(function(){
						let $this = $(this);
						const highlighted_alliases = replace_matched_string($this.text(), search_term);
						$this.html(highlighted_alliases);
					});
					$parent.append($results);
				});
				//can optimise this in future

				return this;
			};
			$.fn.search.defaults = {
				selectors: [".lvl3", ".lvl2", ".lvl1"],
				ancestor_to_change: 2,
				matched_string_tag: ["<em class='search_highlight'>", "</em>"]
			};

			function replace_matched_string(old_string, search_term) {
				if (search_term === undefined || search_term === "" || old_string.toLowerCase().indexOf(search_term.toLowerCase()) == -1) {
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
		var canvas_eyedraw_loaded = false;
		$("#search_bar_right").search();
		$("#search_bar_left").search();
		$("#search_bar_right").focus(function(){
			$('#search_bar_left').val('');
			last_search_pos = "right";
			var body = document.body,
			html = document.documentElement;
			var height = Math.max( body.scrollHeight, body.offsetHeight,
				html.clientHeight, html.scrollHeight, html.offsetHeight );
				$('#dim_rest').css("height", height);
				$('#dim_rest').show();
				$('#search_bar_right').trigger("keyup");
				show_results();
			});
			$("#search_bar_left").focus(function(){
				$('#search_bar_right').val('');
				last_search_pos = "left";
				var body = document.body,
				html = document.documentElement;
				var height = Math.max( body.scrollHeight, body.offsetHeight,
					html.clientHeight, html.scrollHeight, html.offsetHeight );
					$('#dim_rest').css("height", height);
					$('#dim_rest').show();
					$('#search_bar_left').trigger("keyup");
					show_results();
				});


			$("#search_bar_right").blur(function(){
				//$('#results').hide();
			});

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
					click_lvl_2($this);
					break;
					case "lvl3":
					click_lvl_3($this);
					break;
					default:

				}
				$('#results').scrollTop(0);
				$('#dim_rest').hide();
				hide_results();
				$("#search_bar_right,#search_bar_left").val('');
			});

			function get_element_name($this){
				return $this.find("span:first").text();
			}
			function click_lvl_1($this, callback) {
				let name = get_element_name($this);
				let btn_name = name_on_btn[name];
				let $item = $(".oe-event-sidebar-edit li a:contains("+btn_name+")");
				tomNeeds.loadClickedItem($item,{},callback);
			}
			function click_lvl_2($this, callback){
				// TODO: use select box if length == 0
				// so that non toolbar doodles can be
				// selected
				//check it exists before creating it
				let name = get_element_name($this);
				let $parent = $this.parent().parent().parent();
				let parent_name = get_element_name($parent);
				click_lvl_1($parent,function(){
					setTimeout (function(){
						let $lvl_2_item = get_doodle_button(parent_name,name,last_search_pos);
						let $thiss = $("#ed_example_selected_doodle").children().find("option:contains('"+name+"')");
						if ($thiss.length == 0) {
							console.log(name);
							console.log("doodle not present");
							$lvl_2_item.trigger("click");
							if (typeof(callback) == "function") {
								callback();
							}
						} else {
							console.log("doodle present");
							$("#ed_example_selected_doodle").children().find("option").removeAttr('selected');
							$thiss.attr('selected','selected');
							$("#ed_example_selected_doodle").trigger('change');
							if (typeof(callback) == "function") {
								callback();
							}
						}
					},1000);
				});
			}
			function get_doodle_button(parent_name, name, position) {
				let canvas_id = lvl_1_to_section_id[parent_name];
				let doodle_id = lvl_2_to_doodle_id[name];
				let canvas_doodle_id = "#"+doodle_id+position+"_"+canvas_id;
				console.log(canvas_doodle_id);
				let $item = $(canvas_doodle_id).children();
				return $item;
			}
			function click_lvl_3($this, callback){
				//see if popup exists else select it on select box
				let name = get_element_name($this);
				$parent = $this.parent().parent().parent();
				$grand_parent = $parent.parent().parent().parent();
				let parent_name = get_element_name($parent);
				let grand_parent_name = get_element_name($grand_parent);
				click_lvl_2($parent,function(){
					console.log("run");
					let control_id = get_controls_id(grand_parent_name);
					//	$(control_id).hide(3000);
					$(control_id).find("div:contains("+name+")").effect("highlight", {}, 6000);
					//highlight property here
					/*setTimeout(function(){
					$("#ed_example_selected_doodle").children().find("option").removeAttr('selected');
					let $thiss = $("#ed_example_selected_doodle").children().find("option:contains('"+parent_name+"')");
					$thiss.attr('selected','selected');
					$("#ed_example_selected_doodle").trigger('change');
				},410); */
			});
		}

		function get_controls_id(name,position){
			return "#ed_canvas_edit_right_315_controls";
		}


		var last_search_pos;
		let name_on_btn= {'Examination Anterior Segment':'Anterior Segment'};
		var lvl_1_to_section_id = {'Examination Anterior Segment' : 315};
		var lvl_2_to_doodle_id = {
			'Adenoviral keratitis' : 'AdenoviralKeratitis',
			'Conjunctivitis' : 'Conjunctivitis',
			'Corneal epithelial defect' : 'CornealEpithelialDefect',
			'Corneal laceration' : 'CornealLaceration',
			'Corneal opacity' : 'CornealOpacity',
			'Corneal pigmentation' : 'CornealPigmentation',
			'Dendritic ulcer' : 'DendriticUlcer',
			'Marginal keratitis' : 'MarginalKeratitis',
			'Pingueculum' : 'Pingueculum',
			'Pterygium' : 'Pterygium',
			'SPEE' : 'SPEE',
			'Metallic foreign body' : 'MetallicForeignBody',

			'No description available for this doodle' : 'NONE',
			'Anterior chamber IOL' : 'ACIOL',
			'AC maintainer' : 'ACMaintainer',
			'Adnexal eye template' : 'AdnexalEye',
			'Angle grade' : 'AngleGrade',
			'Angle Grade East' : 'AngleGradeEast',
			'Angle Grade North' : 'AngleGradeNorth',
			'Angle Grade South' : 'AngleGradeSouth',
			'Angle Grade West' : 'AngleGradeWest',
			'Angle new vessels' : 'AngleNV',
			'Angle recession' : 'AngleRecession',
			'Anterior PVR' : 'AntPVR',
			'Anterior segment' : 'AntSeg',
			'Anterior synechiae' : 'AntSynech',
			'A pattern' : 'APattern',
			'Arcuate keratotomy' : 'ArcuateKeratotomy',
			'Arcuate scotoma' : 'ArcuateScotoma',
			'Arrow' : 'Arrow',
			'Biopsy site' : 'BiopsySite',
			'Trabeculectomy bleb' : 'Bleb',
			'Blot haemorrhage' : 'BlotHaemorrhage',
			'Buckle' : 'Buckle',
			'Buckle operation' : 'BuckleOperation',
			'Buckle suture' : 'BuckleSuture',
			'Busacca nodule' : 'BusaccaNodule',
			'Capsular Tension Ring' : 'CapsularTensionRing',
			'Double chandelier' : 'ChandelierDouble',
			'Chandelier' : 'ChandelierSingle',
			'Choroidal haemorrhage' : 'ChoroidalHaemorrhage',
			'Choroidal naevus' : 'ChoroidalNaevus',
			'Cilary injection' : 'CiliaryInjection',
			'Circinate retinopathy' : 'Circinate',
			'Circumferential buckle' : 'CircumferentialBuckle',
			'Choroidal new vessels' : 'CNV',
			'Conjunctival flap' : 'ConjunctivalFlap',
			'Conjunctival suture' : 'ConjunctivalSuture',
			'Corneal abrasion' : 'CornealAbrasion',
			'Removal of corneal epithelium' : 'CornealErosion',
			'Corneal graft' : 'CornealGraft',
			'Corneal inlay' : 'CornealInlay',
			'Corneal oedema' : 'CornealOedema',
			'Corneal scar' : 'CornealScar',
			'Corneal striae' : 'CornealStriae',
			'Corneal suture' : 'CornealSuture',
			'Cortical cataract' : 'CorticalCataract',
			'Cotton wool spot' : 'CottonWoolSpot',
			'Cryotherapy scar' : 'Cryo',
			'Cutter iridectomy' : 'CutterPI',
			'Cystoid macular oedema' : 'CystoidMacularOedema',
			'Diabetic new vessels' : 'DiabeticNV',
			'Dialysis' : 'Dialysis',
			'Disc haemorrhage' : 'DiscHaemorrhage',
			'Disc pallor' : 'DiscPallor',
			'Drainage retinotomy' : 'DrainageRetinotomy',
			'Drainage site' : 'DrainageSite',
			'Encircling band' : 'EncirclingBand',
			'Entry site break' : 'EntrySiteBreak',
			'Epiretinal membrane' : 'EpiretinalMembrane',
			'Episcleritis' : 'Episcleritis',
			'Fibrous proliferation' : 'FibrousProliferation',
			'Fibrovascular Scar' : 'FibrovascularScar',
			'Focal laser' : 'FocalLaser',
			'Freehand drawing' : 'Freehand',
			'Guttata' : 'Fuchs',
			'Fundus' : 'Fundus',
			'Geographic atrophy' : 'Geographic',
			'Gonioscopy' : 'Gonioscopy',
			'Giant retinal tear' : 'GRT',
			'Hard drusen' : 'HardDrusen',
			'Hard exudate' : 'HardExudate',
			'Hyphaema' : 'Hyphaema',
			'Hypopyon' : 'Hypopyon',
			'IatrogenicBreak' : 'IatrogenicBreak',
			'ILM peel' : 'ILMPeel',
			'Implantable Collamer Lens' : 'ICL',
			'Intraocular lens' : 'IOL',
			'Injection site' : 'InjectionSite',
			'Inner leaf break' : 'InnerLeafBreak',
			'Iris' : 'Iris',
			'Iris hook' : 'IrisHook',
			'Iris naevus' : 'IrisNaevus',
			'Intraretinal microvascular abnormalities' : 'IRMA',
			'Keratic precipitates' : 'KeraticPrecipitates',
			'Koeppe nodule' : 'KoeppeNodule',
			'Krukenberg spindle' : 'KrukenbergSpindle',
			'Label' : 'Label',
			'Circle of laser photocoagulation' : 'LaserCircle',
			'Laser demarcation' : 'LaserDemarcation',
			'LASIK flap' : 'LasikFlap',
			'Laser spot' : 'LaserSpot',
			'Lattice' : 'Lattice',
			'Lens' : 'Lens',
			'Limbal relaxing incision' : 'LimbalRelaxingIncision',
			'Macroaneurysm' : 'Macroaneurysm',
			'Macular dystrophy' : 'MacularDystrophy',
			'Macular grid laser' : 'MacularGrid',
			'Macular hole' : 'MacularHole',
			'Macular thickening' : 'MacularThickening',
			'Malyugin ring' : 'Malyugin',
			'Mattress suture' : 'MattressSuture',
			'Microaneurysm' : 'Microaneurysm',
			'Nerve fibre defect' : 'NerveFibreDefect',
			'Nuclear cataract' : 'NuclearCataract',
			'Optic cup' : 'OpticCup',
			'Optic disc' : 'OpticDisc',
			'Optic disc pit' : 'OpticDiscPit',
			'Orthoptic eye' : 'OrthopticEye',
			'Outer leaf break' : 'OuterLeafBreak',
			'Papilloedema' : 'Papilloedema',
			'Tube patch' : 'Patch',
			'Posterior chamber IOL' : 'PCIOL',
			'Peripapillary atrophy' : 'PeripapillaryAtrophy',
			'Peripheral retinectomy' : 'PeripheralRetinectomy',
			'Phako incision' : 'PhakoIncision',
			'Peripheral iridectomy' : 'PI',
			'Point in line' : 'PointInLine',
			'Posterior capsule' : 'PosteriorCapsule',
			'Posterior embryotoxon' : 'PosteriorEmbryotoxon',
			'Posterior pole' : 'PostPole',
			'Posterior subcapsular cataract' : 'PostSubcapCataract',
			'Posterior retinectomy' : 'PosteriorRetinectomy',
			'Posterior synechia' : 'PosteriorSynechia',
			'Pre-retinal haemorrhage' : 'PreRetinalHaemorrhage',
			'Panretinal photocoagulation' : 'PRP',
			'Panretinal photocoagulation (posterior pole)' : 'PRPPostPole',
			'Phototherapeutic keratectomy' : 'PTK',
			'Pupil' : 'Pupil',
			'Radial sponge' : 'RadialSponge',
			'Retinal artery occlusion' : 'RetinalArteryOcclusionPostPole',
			'Retinal haemorrhage' : 'RetinalHaemorrhage',
			'Retinal touch' : 'RetinalTouch',
			'Retinal vein occluson' : 'RetinalVeinOcclusionPostPole',
			'Retinoschisis' : 'Retinoschisis',
			'Radial keratotomy' : 'RK',
			'Round hole' : 'RoundHole',
			'RPE Atrophy' : 'RPEAtrophy',
			'RPE detachment' : 'RPEDetachment',
			'RPE Hypertrophy' : 'RPEHypertrophy',
			'RPE rip' : 'RPERip',
			'Rhegmatogenous retinal detachment' : 'RRD',
			'Rubeosis iridis' : 'Rubeosis',
			'Sector PRP' : 'SectorPRP',
			'Sector PRP (posterior pole)' : 'SectorPRPPostPole',
			'Scleral Incision' : 'ScleralIncision',
			'Sclerostomy' : 'Sclerostomy',
			'Sector iridectomy' : 'SectorIridectomy',
			'Shading' : 'Shading',
			'Side port' : 'SidePort',
			'Slider' : 'Slider',
			'Small incision lenticule extraction' : 'SMILE',
			'Star fold' : 'StarFold',
			'Subretinal fluid' : 'SubretinalFluid',
			'Subretinal PFCL' : 'SubretinalPFCL',
			'Supramid suture' : 'Supramid',
			'Swollen disc' : 'SwollenDisc',
			'Parafoveal telangiectasia' : 'Telangiectasis',
			'Trabectome' : 'Trabectome',
			'Trabeculectomy conjunctival incision' : 'TrabyConjIncision',
			'Trabeculectomy flap' : 'TrabyFlap',
			'Trabeculectomy suture' : 'TrabySuture',
			'Toric posterior chamber IOL' : 'ToricPCIOL',
			'Traction retinal detachment' : 'TractionRetinalDetachment',
			'Transillumination defect' : 'TransilluminationDefect',
			'Drainage tube' : 'Tube',
			'Tube extender' : 'TubeExtender',
			'Ligation suture' : 'TubeLigation',
			'Up drift' : 'UpDrift',
			'Up shoot' : 'UpShoot',
			'Traction ‘U’ tear' : 'UTear',
			'Vicryl suture' : 'Vicryl',
			'View obscured' : 'ViewObscured',
			'Vitreous opacity' : 'VitreousOpacity',
			'V pattern' : 'VPattern',
			'Crepitations' : 'Crepitations',
			'Stenosis' : 'Stenosis',
			'Wheeze' : 'Wheeze',
			'Pleural effusion' : 'Effusion',
			'Left coronary artery' : 'LeftCoronaryArtery',
			'Drug eluting stent' : 'DrugStent',
			'Metal stent' : 'MetalStent',
			'Coronary artery bypass' : 'Bypass',
			'Bruit' : 'Bruit',
			'Bruising' : 'Bruising',
			'Haematoma' : 'Haematoma',
		}

		$('#big_cross').click(function(){
			$('#search_bar_right,#search_bar_left').val('');
			$('#results').scrollTop(0);
			$('#dim_rest').hide();
			hide_results();
		});

		$('body').append('<div id="dim_rest" class="ui-widget-overlay" style="display : none; width: 1280px; height: 835px; z-index: 100;"></div>');
		$(document).ready(function(){
			$('#description_toggle').change(function(){
				if (this.checked) {
					$('.description_icon').show();
					$('.description_note').show();
				} else {
					$('.description_icon').hide();
					$('.description_note').hide();
				}
				event.stopPropagation();
			});
			$('#children_toggle').change(function(){
				let current_search_bar = last_search_pos == "right" ? "#search_bar_right" : "#search_bar_left";
				if (this.checked) {
					show_children = true;
					$(current_search_bar).trigger('keyup');
				} else {
					show_children = false;
					$(current_search_bar).trigger('keyup');
				}
				event.stopPropagation();
			});

			$(window).click(function() {
				$('#dim_rest').hide();
				hide_results();
				$('#search_bar_right').val('');
				$('#search_bar_left').val('');
				//Hide the menus if visible
			});

			$('.event-header').click(function(){
				event.stopPropagation();
			});

			$('#results').click(function(event){
				event.stopPropagation();
			});
		});

		$('#search_bar_right,#search_bar_left').click(function(){
			event.stopPropagation();
		});

		function show_results(){
			$("#results").show();
			$(".switch").show();
			$("#description_toggle_label,#children_toggle_label,#search_options").show();
		}
		function hide_results(){
			$("#results").hide();
			$(".switch").hide();
			$("#description_toggle_label,#children_toggle_label,#search_options").hide();

		}
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
