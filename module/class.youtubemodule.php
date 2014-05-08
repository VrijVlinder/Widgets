<?php if (!defined('APPLICATION')) exit();

class YouTubeModule extends Gdn_Module {
   
 


   public function AssetTarget() {
      return 'Panel';
   }

   public function ToString() {  
     
     echo '<div class="Box" id="YouTube"><h4>YouTube</h4>

<script src="//www.gmodules.com/ig/ifr?url=http://hosting.gmodules.com/ig/gadgets/file/100080069921643878012/youtube.xml&amp;synd=open&amp;w=250&amp;h=200&amp;title=&amp;bg-color=black&amp;border=&amp;output=js"></script>



      </div>';  
      
     //Add your Html between the divs above
 
   
 
     
   }
}
