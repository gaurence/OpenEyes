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
	border: 1px solid #ccc;
	border-radius: 2px;
	outline-width: 0px;
	font-size: 16px;
	background-image: url('/assets/search_icon.png');
	background-size: 22px 22px;
	background-position: right;
	background-repeat: no-repeat;
	padding: 12px 20px 12px 10px;
	width: 200px;
	position: absolute;
	left: 130px;
	height: 28px;
	top:7px;

}
#search_bar:focus{
-webkit-box-shadow: 0 0 9px 4px rgba(0,0,0,0.25);
}
#search_bar:hover{
-webkit-box-shadow: 0 0 9px 4px rgba(0,0,0,0.25);
}

#results {
	outline: 0px;
	z-index: 1002;
	height: 460px;
	width: 1024px;
	top: 52px;
	left: 12px;
	display: block;
	overflow:scroll;
	background-color: #fff;
	padding: 20px;
	font-size: .9rem;
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
padding-left: 0;
}
.results_list .results_list {
padding-left: 20px;
}
.icon {
height: 25px;
width: 25px;
position: absolute;
bottom: 5px;
}

.result_item,.result_item_with_icon {
width: 222.22px;
display: block;
margin: 0 0 2px 0;
height: 19px;
line-height: 19px;
background-color: #EEEEED;
background-size: 500px 500px;
background-repeat: no-repeat;
background-position: left;
background-size: 19px 19px;
color: #0b59da;
cursor: pointer;
font-size: 0.8125rem;
box-sizing: border-box;
text-align: -webkit-match-parent;
margin-bottom: 6px;
list-style-position: outside;
font-family: inherit;
padding-left: 10px; /* higher for level 2 as icon on left */
border-radius: 0px;
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

	<input type="text" placeholder="Search.." id="search_bar">

	    <div id="results">
	      <ul class="results_list">
	      <li style>
	        <div class="result_item">
	          <span data-allias="Anterior Segment, Tom" data-action-id="EASTB" class="lvl1">Anterior Segment</span>
	        </div>
	        <ul class="results_list">

	          <li style>
	            <div class="result_item, result_item_with_icon" style="background-image: url(/assets/ACIOL.png)">
	              <span data-allias="Lens" data-action-id="EASTBL" class="lvl2">Lens</span>

	            </div>
	            <ul class="results_list">

	              <li style>
	                <div class="result_item">
	                  <span data-allias="Phacodonesis" data-action-id="EASTBLP" class="lvl3">Phacodonesis</span>
	                </div>
	              </li>

	              <li style>
	                <div class="result_item">
	                  <span data-allias="Anterior Polar" data-action-id="EASTBLP" class="lvl3">Anterior Polar</span>
	                </div>
	              </li>

	              <li style>
	                <div class="result_item">
	                  <span data-allias="Posterior Polar" data-action-id="EASTBLP" class="lvl3">Posterior Polar</span>
	                </div>
	              </li>

	              <li style>
	                <div class="result_item">
	                  <span data-allias="Nuclear Cataract" data-action-id="EASTBLP" class="lvl3">Nuclear Cataract</span>
	                </div>
	              </li>

	              <li style>
	                <div class="result_item">
	                  <span data-allias="Cortial Catarct" data-action-id="EASTBLP" class="lvl3">Cortial Cataract</span>
	                </div>
	              </li>

	              <li style>
	                <div class="result_item">
	                  <span data-allias="Posterior Subcapolar Cataract" data-action-id="EASTBLP" class="lvl3">Posterior Subcapolar Cataract</span>
	                </div>
	              </li>

	            </ul>
	          </li>

	        </ul>
	      </li>

	      <li style>
	        <div class="result_item">
	          <span data-allias="Bones" data-action-id="EASTB" class="lvl1">Bones</span>
	        </div>
	        <ul class="results_list">

	          <li style>
	            <div class="result_item">
	              <span data-allias="Nose" data-action-id="EASTBL" class="lvl2">Nose</span>

	            </div>
	            <ul class="results_list">

	              <li style>
	                <div class="result_item">
	                  <span data-allias="Mouth" data-action-id="EASTBLP" class="lvl3">Mouth</span>
	                </div>
	              </li>

	              <li style>
	                <div class="result_item">
	                  <span data-allias="Eyes" data-action-id="EASTBLP" class="lvl3">Eyes</span>
	                </div>
	              </li>


	            </ul>
	          </li>

	        </ul>
	      </li>

				<li style>
					<div class="result_item">
						<span data-allias="Anterior Segment, Tom" data-action-id="EASTB" class="lvl1">Anterior Segment</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item, result_item_with_icon" style="background-image: url(/assets/ACIOL.png)">
								<span data-allias="Lens" data-action-id="EASTBL" class="lvl2">Lens</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Phacodonesis" data-action-id="EASTBLP" class="lvl3">Phacodonesis</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Anterior Polar" data-action-id="EASTBLP" class="lvl3">Anterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Polar" data-action-id="EASTBLP" class="lvl3">Posterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Nuclear Cataract" data-action-id="EASTBLP" class="lvl3">Nuclear Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Cortial Catarct" data-action-id="EASTBLP" class="lvl3">Cortial Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Subcapolar Cataract" data-action-id="EASTBLP" class="lvl3">Posterior Subcapolar Cataract</span>
									</div>
								</li>

							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Bones" data-action-id="EASTB" class="lvl1">Bones</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item">
								<span data-allias="Nose" data-action-id="EASTBL" class="lvl2">Nose</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Mouth" data-action-id="EASTBLP" class="lvl3">Mouth</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Eyes" data-action-id="EASTBLP" class="lvl3">Eyes</span>
									</div>
								</li>


							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Anterior Segment, Tom" data-action-id="EASTB" class="lvl1">Anterior Segment</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item, result_item_with_icon" style="background-image: url(/assets/ACIOL.png)">
								<span data-allias="Lens" data-action-id="EASTBL" class="lvl2">Lens</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Phacodonesis" data-action-id="EASTBLP" class="lvl3">Phacodonesis</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Anterior Polar" data-action-id="EASTBLP" class="lvl3">Anterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Polar" data-action-id="EASTBLP" class="lvl3">Posterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Nuclear Cataract" data-action-id="EASTBLP" class="lvl3">Nuclear Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Cortial Catarct" data-action-id="EASTBLP" class="lvl3">Cortial Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Subcapolar Cataract" data-action-id="EASTBLP" class="lvl3">Posterior Subcapolar Cataract</span>
									</div>
								</li>

							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Bones" data-action-id="EASTB" class="lvl1">Bones</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item">
								<span data-allias="Nose" data-action-id="EASTBL" class="lvl2">Nose</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Mouth" data-action-id="EASTBLP" class="lvl3">Mouth</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Eyes" data-action-id="EASTBLP" class="lvl3">Eyes</span>
									</div>
								</li>


							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Anterior Segment, Tom" data-action-id="EASTB" class="lvl1">Anterior Segment</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item, result_item_with_icon" style="background-image: url(/assets/ACIOL.png)">
								<span data-allias="Lens" data-action-id="EASTBL" class="lvl2">Lens</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Phacodonesis" data-action-id="EASTBLP" class="lvl3">Phacodonesis</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Anterior Polar" data-action-id="EASTBLP" class="lvl3">Anterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Polar" data-action-id="EASTBLP" class="lvl3">Posterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Nuclear Cataract" data-action-id="EASTBLP" class="lvl3">Nuclear Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Cortial Catarct" data-action-id="EASTBLP" class="lvl3">Cortial Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Subcapolar Cataract" data-action-id="EASTBLP" class="lvl3">Posterior Subcapolar Cataract</span>
									</div>
								</li>

							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Bones" data-action-id="EASTB" class="lvl1">Bones</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item">
								<span data-allias="Nose" data-action-id="EASTBL" class="lvl2">Nose</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Mouth" data-action-id="EASTBLP" class="lvl3">Mouth</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Eyes" data-action-id="EASTBLP" class="lvl3">Eyes</span>
									</div>
								</li>


							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Anterior Segment, Tom" data-action-id="EASTB" class="lvl1">Anterior Segment</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item, result_item_with_icon" style="background-image: url(/assets/ACIOL.png)">
								<span data-allias="Lens" data-action-id="EASTBL" class="lvl2">Lens</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Phacodonesis" data-action-id="EASTBLP" class="lvl3">Phacodonesis</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Anterior Polar" data-action-id="EASTBLP" class="lvl3">Anterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Polar" data-action-id="EASTBLP" class="lvl3">Posterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Nuclear Cataract" data-action-id="EASTBLP" class="lvl3">Nuclear Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Cortial Catarct" data-action-id="EASTBLP" class="lvl3">Cortial Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Subcapolar Cataract" data-action-id="EASTBLP" class="lvl3">Posterior Subcapolar Cataract</span>
									</div>
								</li>

							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Bones" data-action-id="EASTB" class="lvl1">Bones</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item">
								<span data-allias="Nose" data-action-id="EASTBL" class="lvl2">Nose</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Mouth" data-action-id="EASTBLP" class="lvl3">Mouth</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Eyes" data-action-id="EASTBLP" class="lvl3">Eyes</span>
									</div>
								</li>


							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Anterior Segment, Tom" data-action-id="EASTB" class="lvl1">Anterior Segment</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item, result_item_with_icon" style="background-image: url(/assets/ACIOL.png)">
								<span data-allias="Lens" data-action-id="EASTBL" class="lvl2">Lens</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Phacodonesis" data-action-id="EASTBLP" class="lvl3">Phacodonesis</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Anterior Polar" data-action-id="EASTBLP" class="lvl3">Anterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Polar" data-action-id="EASTBLP" class="lvl3">Posterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Nuclear Cataract" data-action-id="EASTBLP" class="lvl3">Nuclear Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Cortial Catarct" data-action-id="EASTBLP" class="lvl3">Cortial Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Subcapolar Cataract" data-action-id="EASTBLP" class="lvl3">Posterior Subcapolar Cataract</span>
									</div>
								</li>

							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Bones" data-action-id="EASTB" class="lvl1">Bones</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item">
								<span data-allias="Nose" data-action-id="EASTBL" class="lvl2">Nose</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Mouth" data-action-id="EASTBLP" class="lvl3">Mouth</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Eyes" data-action-id="EASTBLP" class="lvl3">Eyes</span>
									</div>
								</li>


							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Anterior Segment, Tom" data-action-id="EASTB" class="lvl1">Anterior Segment</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item, result_item_with_icon" style="background-image: url(/assets/ACIOL.png)">
								<span data-allias="Lens" data-action-id="EASTBL" class="lvl2">Lens</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Phacodonesis" data-action-id="EASTBLP" class="lvl3">Phacodonesis</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Anterior Polar" data-action-id="EASTBLP" class="lvl3">Anterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Polar" data-action-id="EASTBLP" class="lvl3">Posterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Nuclear Cataract" data-action-id="EASTBLP" class="lvl3">Nuclear Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Cortial Catarct" data-action-id="EASTBLP" class="lvl3">Cortial Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Subcapolar Cataract" data-action-id="EASTBLP" class="lvl3">Posterior Subcapolar Cataract</span>
									</div>
								</li>

							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Bones" data-action-id="EASTB" class="lvl1">Bones</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item">
								<span data-allias="Nose" data-action-id="EASTBL" class="lvl2">Nose</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Mouth" data-action-id="EASTBLP" class="lvl3">Mouth</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Eyes" data-action-id="EASTBLP" class="lvl3">Eyes</span>
									</div>
								</li>


							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Anterior Segment, Tom" data-action-id="EASTB" class="lvl1">Anterior Segment</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item, result_item_with_icon" style="background-image: url(/assets/ACIOL.png)">
								<span data-allias="Lens" data-action-id="EASTBL" class="lvl2">Lens</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Phacodonesis" data-action-id="EASTBLP" class="lvl3">Phacodonesis</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Anterior Polar" data-action-id="EASTBLP" class="lvl3">Anterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Polar" data-action-id="EASTBLP" class="lvl3">Posterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Nuclear Cataract" data-action-id="EASTBLP" class="lvl3">Nuclear Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Cortial Catarct" data-action-id="EASTBLP" class="lvl3">Cortial Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Subcapolar Cataract" data-action-id="EASTBLP" class="lvl3">Posterior Subcapolar Cataract</span>
									</div>
								</li>

							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Bones" data-action-id="EASTB" class="lvl1">Bones</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item">
								<span data-allias="Nose" data-action-id="EASTBL" class="lvl2">Nose</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Mouth" data-action-id="EASTBLP" class="lvl3">Mouth</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Eyes" data-action-id="EASTBLP" class="lvl3">Eyes</span>
									</div>
								</li>


							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Anterior Segment, Tom" data-action-id="EASTB" class="lvl1">Anterior Segment</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item, result_item_with_icon" style="background-image: url(/assets/ACIOL.png)">
								<span data-allias="Lens" data-action-id="EASTBL" class="lvl2">Lens</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Phacodonesis" data-action-id="EASTBLP" class="lvl3">Phacodonesis</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Anterior Polar" data-action-id="EASTBLP" class="lvl3">Anterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Polar" data-action-id="EASTBLP" class="lvl3">Posterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Nuclear Cataract" data-action-id="EASTBLP" class="lvl3">Nuclear Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Cortial Catarct" data-action-id="EASTBLP" class="lvl3">Cortial Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Subcapolar Cataract" data-action-id="EASTBLP" class="lvl3">Posterior Subcapolar Cataract</span>
									</div>
								</li>

							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Bones" data-action-id="EASTB" class="lvl1">Bones</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item">
								<span data-allias="Nose" data-action-id="EASTBL" class="lvl2">Nose</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Mouth" data-action-id="EASTBLP" class="lvl3">Mouth</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Eyes" data-action-id="EASTBLP" class="lvl3">Eyes</span>
									</div>
								</li>


							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Anterior Segment, Tom" data-action-id="EASTB" class="lvl1">Anterior Segment</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item, result_item_with_icon" style="background-image: url(/assets/ACIOL.png)">
								<span data-allias="Lens" data-action-id="EASTBL" class="lvl2">Lens</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Phacodonesis" data-action-id="EASTBLP" class="lvl3">Phacodonesis</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Anterior Polar" data-action-id="EASTBLP" class="lvl3">Anterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Polar" data-action-id="EASTBLP" class="lvl3">Posterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Nuclear Cataract" data-action-id="EASTBLP" class="lvl3">Nuclear Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Cortial Catarct" data-action-id="EASTBLP" class="lvl3">Cortial Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Subcapolar Cataract" data-action-id="EASTBLP" class="lvl3">Posterior Subcapolar Cataract</span>
									</div>
								</li>

							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Bones" data-action-id="EASTB" class="lvl1">Bones</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item">
								<span data-allias="Nose" data-action-id="EASTBL" class="lvl2">Nose</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Mouth" data-action-id="EASTBLP" class="lvl3">Mouth</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Eyes" data-action-id="EASTBLP" class="lvl3">Eyes</span>
									</div>
								</li>


							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Anterior Segment, Tom" data-action-id="EASTB" class="lvl1">Anterior Segment</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item, result_item_with_icon" style="background-image: url(/assets/ACIOL.png)">
								<span data-allias="Lens" data-action-id="EASTBL" class="lvl2">Lens</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Phacodonesis" data-action-id="EASTBLP" class="lvl3">Phacodonesis</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Anterior Polar" data-action-id="EASTBLP" class="lvl3">Anterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Polar" data-action-id="EASTBLP" class="lvl3">Posterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Nuclear Cataract" data-action-id="EASTBLP" class="lvl3">Nuclear Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Cortial Catarct" data-action-id="EASTBLP" class="lvl3">Cortial Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Subcapolar Cataract" data-action-id="EASTBLP" class="lvl3">Posterior Subcapolar Cataract</span>
									</div>
								</li>

							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Bones" data-action-id="EASTB" class="lvl1">Bones</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item">
								<span data-allias="Nose" data-action-id="EASTBL" class="lvl2">Nose</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Mouth" data-action-id="EASTBLP" class="lvl3">Mouth</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Eyes" data-action-id="EASTBLP" class="lvl3">Eyes</span>
									</div>
								</li>


							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Anterior Segment, Tom" data-action-id="EASTB" class="lvl1">Anterior Segment</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item, result_item_with_icon" style="background-image: url(/assets/ACIOL.png)">
								<span data-allias="Lens" data-action-id="EASTBL" class="lvl2">Lens</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Phacodonesis" data-action-id="EASTBLP" class="lvl3">Phacodonesis</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Anterior Polar" data-action-id="EASTBLP" class="lvl3">Anterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Polar" data-action-id="EASTBLP" class="lvl3">Posterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Nuclear Cataract" data-action-id="EASTBLP" class="lvl3">Nuclear Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Cortial Catarct" data-action-id="EASTBLP" class="lvl3">Cortial Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Subcapolar Cataract" data-action-id="EASTBLP" class="lvl3">Posterior Subcapolar Cataract</span>
									</div>
								</li>

							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Bones" data-action-id="EASTB" class="lvl1">Bones</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item">
								<span data-allias="Nose" data-action-id="EASTBL" class="lvl2">Nose</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Mouth" data-action-id="EASTBLP" class="lvl3">Mouth</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Eyes" data-action-id="EASTBLP" class="lvl3">Eyes</span>
									</div>
								</li>


							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Anterior Segment, Tom" data-action-id="EASTB" class="lvl1">Anterior Segment</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item, result_item_with_icon" style="background-image: url(/assets/ACIOL.png)">
								<span data-allias="Lens" data-action-id="EASTBL" class="lvl2">Lens</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Phacodonesis" data-action-id="EASTBLP" class="lvl3">Phacodonesis</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Anterior Polar" data-action-id="EASTBLP" class="lvl3">Anterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Polar" data-action-id="EASTBLP" class="lvl3">Posterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Nuclear Cataract" data-action-id="EASTBLP" class="lvl3">Nuclear Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Cortial Catarct" data-action-id="EASTBLP" class="lvl3">Cortial Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Subcapolar Cataract" data-action-id="EASTBLP" class="lvl3">Posterior Subcapolar Cataract</span>
									</div>
								</li>

							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Bones" data-action-id="EASTB" class="lvl1">Bones</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item">
								<span data-allias="Nose" data-action-id="EASTBL" class="lvl2">Nose</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Mouth" data-action-id="EASTBLP" class="lvl3">Mouth</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Eyes" data-action-id="EASTBLP" class="lvl3">Eyes</span>
									</div>
								</li>


							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Anterior Segment, Tom" data-action-id="EASTB" class="lvl1">Anterior Segment</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item, result_item_with_icon" style="background-image: url(/assets/ACIOL.png)">
								<span data-allias="Lens" data-action-id="EASTBL" class="lvl2">Lens</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Phacodonesis" data-action-id="EASTBLP" class="lvl3">Phacodonesis</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Anterior Polar" data-action-id="EASTBLP" class="lvl3">Anterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Polar" data-action-id="EASTBLP" class="lvl3">Posterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Nuclear Cataract" data-action-id="EASTBLP" class="lvl3">Nuclear Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Cortial Catarct" data-action-id="EASTBLP" class="lvl3">Cortial Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Subcapolar Cataract" data-action-id="EASTBLP" class="lvl3">Posterior Subcapolar Cataract</span>
									</div>
								</li>

							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Bones" data-action-id="EASTB" class="lvl1">Bones</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item">
								<span data-allias="Nose" data-action-id="EASTBL" class="lvl2">Nose</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Mouth" data-action-id="EASTBLP" class="lvl3">Mouth</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Eyes" data-action-id="EASTBLP" class="lvl3">Eyes</span>
									</div>
								</li>


							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Anterior Segment, Tom" data-action-id="EASTB" class="lvl1">Anterior Segment</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item, result_item_with_icon" style="background-image: url(/assets/ACIOL.png)">
								<span data-allias="Lens" data-action-id="EASTBL" class="lvl2">Lens</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Phacodonesis" data-action-id="EASTBLP" class="lvl3">Phacodonesis</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Anterior Polar" data-action-id="EASTBLP" class="lvl3">Anterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Polar" data-action-id="EASTBLP" class="lvl3">Posterior Polar</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Nuclear Cataract" data-action-id="EASTBLP" class="lvl3">Nuclear Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Cortial Catarct" data-action-id="EASTBLP" class="lvl3">Cortial Cataract</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Posterior Subcapolar Cataract" data-action-id="EASTBLP" class="lvl3">Posterior Subcapolar Cataract</span>
									</div>
								</li>

							</ul>
						</li>

					</ul>
				</li>

				<li style>
					<div class="result_item">
						<span data-allias="Bones" data-action-id="EASTB" class="lvl1">Bones</span>
					</div>
					<ul class="results_list">

						<li style>
							<div class="result_item">
								<span data-allias="Nose" data-action-id="EASTBL" class="lvl2">Nose</span>

							</div>
							<ul class="results_list">

								<li style>
									<div class="result_item">
										<span data-allias="Mouth" data-action-id="EASTBLP" class="lvl3">Mouth</span>
									</div>
								</li>

								<li style>
									<div class="result_item">
										<span data-allias="Eyes" data-action-id="EASTBLP" class="lvl3">Eyes</span>
									</div>
								</li>


							</ul>
						</li>

					</ul>
				</li>




	      </ul>
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
$("#search_bar").search();
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
