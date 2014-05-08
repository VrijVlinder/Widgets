This is a blank widgets plugin. You can learn to make your own modules/widgets

I included 3 widgets as examples of how to add different code inside the module files.

You can create as many widgets as you want. Just add them in the same way as I did by calling each one by a number. 

To get different feeds for the feed widget 

http://www.rssfeedwidget.com/

to get other currencies for the currency exchange widget 

http://www.exchangerates.org.uk/webmasters/simple-currency-rates-table.html

to get a new Flag counter

http://s04.flagcounter.com/index.html

If you want your widget to show in the Content area change the AssetTarget to 'Content'

The possible targets:

Head, Content,Panel,Foot

you can sort the modules by adding this to the conf.php and add the name of all the modules you have in the desired sort order.

$Configuration['Modules']['Vanilla']['Panel'] = array('GuestModule', 'MyTabsModule', 'NewDiscussionModule', 'CoolPanelClockModule', 'FeedEkModule', 'SignedInModule', 'MessageModule', 'AptAds','OneModule', 'TwoModule','ThreeModule');

