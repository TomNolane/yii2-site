<?php

namespace app\components;
 
use yii\base\Widget;
use yii\helpers\Html;

class SliderWidget extends Widget {

    public $message; 
	public $test; 

    public function init(){
		parent::init();

 
        $this->test = ' 
		  <div id="bannerscollection_zoominout_opportune" style="padding: 0px !important;">
            	<div class="myloader"></div>
                <!-- CONTENT -->
                <ul class="bannerscollection_zoominout_list">
               		<li data-horizontalPosition="center" data-verticalPosition="top" data-initialZoom="1" data-finalZoom="0.73" data-bottom-thumb="images/opportuneFixedDimensions/thumbs/thumb_melnikov_1.jpg" data-text-id="#bannerscollection_zoominout_photoText1"><img src="images/opportuneFixedDimensions/melnikov_1.jpg" alt="" width="1200" height="800" /></li> 
                    <li data-horizontalPosition="right" data-verticalPosition="center" data-initialZoom="0.73" data-finalZoom="1" data-bottom-thumb="images/opportuneFixedDimensions/thumbs/thumb_melnikov_2.jpg" data-text-id="#bannerscollection_zoominout_photoText2"><img src="images/opportuneFixedDimensions/melnikov_2.jpg" alt="" width="1200" height="800" /></li> 
                    <li data-horizontalPosition="center" data-verticalPosition="top" data-initialZoom="1" data-finalZoom="0.715" data-bottom-thumb="images/opportuneFixedDimensions/thumbs/thumb_melnikov_3.jpg" data-text-id="#bannerscollection_zoominout_photoText3" ><img src="images/opportuneFixedDimensions/melnikov_3.jpg" alt="" width="1200" height="800" /></li>
                    <li data-horizontalPosition="right" data-verticalPosition="top" data-initialZoom="0.77" data-finalZoom="1" data-bottom-thumb="images/opportuneFixedDimensions/thumbs/thumb_melnikov_4.jpg" data-text-id="#bannerscollection_zoominout_photoText4"><img src="images/opportuneFixedDimensions/melnikov_4.jpg" alt="" width="1200" height="800" /></li>
                    <li data-horizontalPosition="center" data-verticalPosition="center" data-initialZoom="1" data-finalZoom="0.72" data-bottom-thumb="images/opportuneFixedDimensions/thumbs/thumb_melnikov_5.jpg" data-text-id="#bannerscollection_zoominout_photoText5"><img src="images/opportuneFixedDimensions/melnikov_5.jpg" alt="" width="1200" height="800" /></li>
                    <li data-horizontalPosition="right" data-verticalPosition="top" data-initialZoom="1" data-finalZoom="0.72" data-bottom-thumb="images/opportuneFixedDimensions/thumbs/thumb_melnikov_6.jpg" data-text-id="#bannerscollection_zoominout_photoText6"><img src="images/opportuneFixedDimensions/melnikov_6.jpg" alt="" width="1200" height="800" /></li>
                     <li data-horizontalPosition="center" data-verticalPosition="center" data-initialZoom="1" data-finalZoom="0.715" data-bottom-thumb="images/opportuneFixedDimensions/thumbs/thumb_melnikov_7.jpg" data-text-id="#bannerscollection_zoominout_photoText7" ><img src="images/opportuneFixedDimensions/melnikov_7.jpg" alt="" width="1200" height="800" /></li>
                      <li data-horizontalPosition="right" data-verticalPosition="top" data-initialZoom="1" data-finalZoom="0.715" data-bottom-thumb="images/opportuneFixedDimensions/thumbs/thumb_melnikov_8.jpg" data-text-id="#bannerscollection_zoominout_photoText8" ><img src="images/opportuneFixedDimensions/melnikov_8.jpg" alt="" width="1200" height="800" /></li>
                       <li data-horizontalPosition="center" data-verticalPosition="center" data-initialZoom="0.73" data-finalZoom="1" data-bottom-thumb="images/opportuneFixedDimensions/thumbs/thumb_melnikov_9.jpg" data-text-id="#bannerscollection_zoominout_photoText9" ><img src="images/opportuneFixedDimensions/melnikov_9.jpg" alt="" width="1200" height="800" /></li>
                        <li data-horizontalPosition="right" data-verticalPosition="top" data-initialZoom="1" data-finalZoom="0.715" data-bottom-thumb="images/opportuneFixedDimensions/thumbs/thumb_melnikov_10.jpg" data-text-id="#bannerscollection_zoominout_photoText10" ><img src="images/opportuneFixedDimensions/melnikov_10.jpg" alt="" width="1200" height="800" /></li> 
                </ul>     
                <!-- TEXTS -->
              <div id="bannerscollection_zoominout_photoText1" class="bannerscollection_zoominout_texts">
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="480" data-initial-top="60" data-final-left="50" data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0">Заседание 1</div>
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="0" data-initial-top="80" data-final-left="50" data-final-top="80" data-duration="0.5" data-fade-start="0" data-delay="0.3">тема такая-то</div>
               </div>       
               
                <div id="bannerscollection_zoominout_photoText2" class="bannerscollection_zoominout_texts">
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="480" data-initial-top="60" data-final-left="50" data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0">Заседание 2</div>
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="0" data-initial-top="80" data-final-left="50" data-final-top="80" data-duration="0.5" data-fade-start="0" data-delay="0.3">тема такая-то</div>
               </div>

               <div id="bannerscollection_zoominout_photoText3" class="bannerscollection_zoominout_texts">
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="480" data-initial-top="60" data-final-left="50" data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0">Заседание 3</div>
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="0" data-initial-top="80" data-final-left="50" data-final-top="80" data-duration="0.5" data-fade-start="0" data-delay="0.3">тема такая-то</div>
               </div> 
               
                <div id="bannerscollection_zoominout_photoText4" class="bannerscollection_zoominout_texts">
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="480" data-initial-top="60" data-final-left="50" data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0">Заседание 4</div>
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="0" data-initial-top="80" data-final-left="50" data-final-top="80" data-duration="0.5" data-fade-start="0" data-delay="0.3">тема такая-то</div>               
               </div>  
               
                <div id="bannerscollection_zoominout_photoText5" class="bannerscollection_zoominout_texts">
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="480" data-initial-top="60" data-final-left="50" data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0">Заседание 5</div>
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="0" data-initial-top="80" data-final-left="50" data-final-top="80" data-duration="0.5" data-fade-start="0" data-delay="0.3">тема такая-то</div>                
               </div>  

			<div id="bannerscollection_zoominout_photoText6" class="bannerscollection_zoominout_texts">
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="480" data-initial-top="60" data-final-left="50" data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0">Заседание 6</div>
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="0" data-initial-top="80" data-final-left="50" data-final-top="80" data-duration="0.5" data-fade-start="0" data-delay="0.3">тема такая-то</div>
               </div>     

               <div id="bannerscollection_zoominout_photoText7" class="bannerscollection_zoominout_texts">
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="480" data-initial-top="60" data-final-left="50" data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0">Заседание 7</div>
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="0" data-initial-top="80" data-final-left="50" data-final-top="80" data-duration="0.5" data-fade-start="0" data-delay="0.3">тема такая-то</div>              
               </div>    

                  <div id="bannerscollection_zoominout_photoText8" class="bannerscollection_zoominout_texts">
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="480" data-initial-top="60" data-final-left="50" data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0">Заседание 8</div>
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="0" data-initial-top="80" data-final-left="50" data-final-top="80" data-duration="0.5" data-fade-start="0" data-delay="0.3">тема такая-то</div>               
               </div>  

			<div id="bannerscollection_zoominout_photoText9" class="bannerscollection_zoominout_texts">
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="480" data-initial-top="60" data-final-left="50" data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0">Заседание 9</div>
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="0" data-initial-top="80" data-final-left="50" data-final-top="80" data-duration="0.5" data-fade-start="0" data-delay="0.3">тема такая-то</div>
               </div>    

               <div id="bannerscollection_zoominout_photoText10" class="bannerscollection_zoominout_texts">
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="480" data-initial-top="60" data-final-left="50" data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0">Заседание 10</div>
                    <div class="bannerscollection_zoominout_text_line textElement41_opportune" data-initial-left="0" data-initial-top="80" data-final-left="50" data-final-top="80" data-duration="0.5" data-fade-start="0" data-delay="0.3">тема такая-то</div>
               </div>      
            </div> 
		 '; 
    }

    public function run(){


		return $this->test;
		//return Html::encode($this->message);
	} 
}


