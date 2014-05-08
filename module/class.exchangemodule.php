<?php if (!defined('APPLICATION')) exit();

class ExchangeModule extends Gdn_Module {
   
 


   public function AssetTarget() {
      return 'Panel';
   }

   public function ToString() {  
     
      echo '<div id="exchange" class="Box"><h4>Exchange</h4>

<iframe src="plugins/Widgets/exchange.html" style="width:100%;height:350px;"></iframe>





    </div>  ';  
      
     //Add your Html between the two apostrophe above
 
   
 
     
   }
}
