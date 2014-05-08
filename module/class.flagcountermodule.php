<?php if (!defined('APPLICATION')) exit();

class FlagCounterModule extends Gdn_Module {
   
 


   public function AssetTarget() {
      return 'Panel';
   }

   public function ToString() {  
     
      echo '<div class="Box" id="flagcounter"><h4>Visitors</h4>

      <a href="http://info.flagcounter.com/XFky">
      <img src="http://s06.flagcounter.com/count/XFky/bg_222222/txt_FFFFFF/border_222222/columns_2/maxflags_250/viewers_3/labels_0/pageviews_1/flags_0/" alt="Flag Counter" border="0">
      </a>

      </div>';  
      
     //Add your Html between the divs above
 
   
 
     
   }
}
