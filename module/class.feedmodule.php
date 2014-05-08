<?php if (!defined('APPLICATION')) exit();

class FeedModule extends Gdn_Module {
   
 


   public function AssetTarget() {
      return 'Panel';
   }

   public function ToString() {  
     
      echo '
      <div id="FeedWidget"class="Box"><h4>Feeds</h4><div id="widgetmain" style="text-align:left;overflow-y:auto;overflow-x:hidden;width:100%;background-color:transparent; border:1px solid #333333;">
      <div id="rsswidget" style="height:500px;"><iframe src="http://us1.rssfeedwidget.com/getrss.php?time=1398718868269&amp;x=http%3A%2F%2Frss.news.yahoo.com%2Frss%2Fscience&amp;w=250&amp;h=500&amp;bc=ffffff&amp;bw=1&amp;bgc=transparent&amp;m=20&amp;it=true&amp;t=(default)&amp;tc=ffffff&amp;ts=15&amp;tb=transparent&amp;il=true&amp;lc=FFFFFF&amp;ls=14&amp;lb=false&amp;id=true&amp;dc=ffffff&amp;ds=14&amp;idt=true&amp;dtc=cccccc&amp;dts=12" border="0" hspace="0" vspace="0" frameborder="no" marginwidth="0" marginheight="0" style="border:0; padding:0; margin:0; width:100%; height:500px;" id="rssOutput">Reading RSS Feed ...</iframe>
      </div>
      <div style="text-align:right;margin-bottom:0;border-top:1px solid #999;" id="widgetbottom">
      <span style="font-size:70%"><a href="http://www.rssfeedwidget.com">rss feed widget</a>&nbsp;</span>
      <br>
      </div>
      </div>

</div>';  
      
     //Add your Html between the divs above
 
   
 
     
   }
}
