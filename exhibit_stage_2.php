<?php
/*
 * This file is part of Data Dashboard Project.
 * Copyright caprenter@gmail.com January 2012 where applicable
 * 
 * Data Dashboard Project is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * Foobar is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
 * 
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
      $title = "Stage 2 Apr12-Jan13";
      include("header.php"); 
    ?>
    <link href="exhibit_data/data_stage2.json" type="application/json" rel="exhibit-data" />
    <link rel="exhibit-extension" type="text/javascript" href="http://api.simile-widgets.org/exhibit/3.0.0/extensions/map/map-extension.js" />
    <link rel="exhibit-extension" type="text/javascript" href="http://api.simile-widgets.org/exhibit/3.0.0/extensions/time/time-extension.js" />
    <script src="http://api.simile-widgets.org/exhibit/3.0.0/exhibit-api.js"></script>
    
    
    <link href="assets/css/exhibit.css" rel="stylesheet">
  </head>
  <body>

    <?php include("top_nav.php"); ?>
    
      <div class="container">
        <div class="span12">
          <div id="main-content">
        <div id="title-panel">
          <h2>Grant applications</h2>
          <h4>Stage 2 Apr12-Jan13 +S1 fields</h4>
        </div>
    
        <div id="top-panels">
            <table width="100%"><tr>
                <td><div ex:role="facet" ex:expression=".Status" ex:facetLabel="Status"></div></td>
                <td><div ex:role="facet" ex:expression=".Organisation_type" ex:facetLabel="Organisation Type"></div></td>
                <td><div ex:role="facet" ex:expression=".project_applicant_category" ex:facetLabel="Category"></div></td>
                <td><div ex:role="facet" ex:expression=".project_applicant_subcategory" ex:facetLabel="Sub Category"></div></td>
                <td><div ex:role="facet" ex:expression=".NT_funding" ex:facetClass="NumericRange" ex:facetLabel="NT Funding"  ex:interval="50000"></div></td>
                <td><div ex:role="facet" ex:facetClass="TextSearch" ex:facetLabel="Search"></div></td>
            </tr></table>
	
        </div>
        <div ex:role="viewPanel" style="padding: 1em 0.5in;">
            <table ex:role="lens" class="nobelist" style="display: none;"><tr>
                <td>
                    <div ex:content=".label" class="name"></div>
                    <div>
                        (<span ex:content=".Organisation" class="discipline"></span>)<br/>
                            <span ex:content=".Created_date" class="discipline"></span><br/>
                            <span ex:content=".Status" class="discipline"></span><br/>
                           
                            <span>Cost: &pound;</span><span ex:content=".NT_funding" class="discipline"></span><br/>
                            <br/>
                            <span ex:content=".Project_summary" ex:formats ="text {max-length:200}"class="discipline"></span><br/>
                    </div>
                   
                </td>
            </tr></table>
        
            <div ex:role="view"
                ex:viewClass="Thumbnail"
                ex:showAll="true"
                ex:orders=".label, .Organisation_type">
                <div ex:role="exhibit-lens" class="nobelist-thumbnail" style="display: none;">
                    
                    <div ex:content=".label" class="name"></div>
                        <div>
                            (<span ex:content=".Organisation" class="discipline"></span>)<br/>
                            <span ex:content=".Created_date" class="discipline"></span><br/>
                            <span ex:content=".Status" class="discipline"></span><br/>
                           
                            <span>Cost: &pound;</span><span ex:content=".NT_funding" class="discipline"></span><br/>
                            <br/>
                            <span ex:content=".Project_summary" ex:formats ="text {max-length:200}"class="discipline"></span><br/>
                           
                        </div>
                </div>
            </div>
            <div ex:role="view"
                ex:label="Full Details"
                ex:viewClass="Tile"
                ex:showAll="true"
                ex:orders=".label"
                ex:possibleOrders=".label, .Organisation_type">
                 <div ex:role="lens" class="nobelist" style="display: none;">
                    
                    <div ex:content=".label" class="name"></div>
                    <div>
                        
                        
                        <span ex:content=".Project_summary" class="discipline"></span><br/><br/>
                        
                        Reference: <span ex:content=".Reference" class="discipline"></span><br/>
                        Created Date: <span ex:content=".Created_date" class="discipline"></span><br/>
                        Status: <span ex:content=".Status" class="discipline"></span><br/><br/>
                        
                        Start date: <span ex:content=".Start_date" class="discipline"></span><br/>
                        Finish date: <span ex:content=".Finish_date" class="discipline"></span><br/>
                        Project Applicant Category: <span ex:content=".project_applicant_category" class="discipline"></span><br/>
                        Project Applicant Subcategory: <span ex:content=".project_applicant_subcategory" class="discipline"></span><br/>
                        
                        No. Beneficiaries: <span ex:content=".applicant_numberbenefit" class="discipline"></span><br/> 
                        Total Project Cost: <span>&pound;</span><span ex:content=".Total_projectcost" class="discipline"></span><br/>
                        NT funding:  <span>&pound;</span><span ex:content=".NT_funding" class="discipline"></span><br/>
                       
                        
                        Organisation: <span ex:content=".Organisation" class="discipline"></span><br/>
                        Organisation type: <span ex:content=".Organisation_type" class="discipline"></span><br/>
                       
                        
                        Postcode: <span ex:content=".Postcode" class="discipline"></span><br/><br/>
                        
                        




                    </div>
                </div>

            </div>
      
            
             <div ex:role="view" 
                  ex:label="Map"
                  ex:viewClass="Map" 
                  ex:latlng=".latlng"
                  ex:colorKey=".Organisation_type"
                  ex:center="54.46684525346424, -3.08990478515625"
                  ex:zoom="5">
                  
            </div>
            <div ex:role="view"
                ex:viewClass="Timeline"
                ex:start=".Created_date"
                ex:topBandUnit="day"
                ex:bottomBandUnit="month"
                ex:colorKey=".Organisation_type"
                ex:bubbleWidth="450"
                ex:bubbleHeight="450">
                
            </div>

            <div  ex:role="view" 
                  ex:viewClass="Tabular"
                  ex:columns=".label, .Created_date, .Status, .Organisation_staff, .applicant_numberbenefit, .NT_funding"
                  ex:columnLabels="Project Name, Created, Status, Staff, No. Beneficiaries, NT funding" >
            </div>

          </div>
       

           
    </div><!--main content-->
        </div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>


