<?php

if (!defined('APPLICATION')) exit();
/*
Copyright 2008, 2014 Vanilla Forums Inc.
This file is part of Garden.
Garden is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
Garden is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with Garden.  If not, see <http://www.gnu.org/licenses/>.
Contact Vanilla Forums Inc. at support [at] vanillaforums [dot] com
*/

// Define the plugin:

$PluginInfo['Widgets'] = array(
 'Name' => 'Widgets',
 'Description' => "This plugin adds modules/widgets you create to the panel . ",
 'Version' => '1.1',
 'Author' => "VrijVlinder",
 'AuthorEmail' => 'contact@vrijvlinder.com',
 'AuthorUrl' => "http://www.vrijvlinder.com"
);
class Widgets_Plugin extends Gdn_Plugin{
 
 public function __construct(){
 }

 public

 function DiscussionsController_Render_Before($Sender){

  // comment this if you want it in the categories index page

  if (IsMobile()) {
   return;
  }
  else {
   $FeedModule = new FeedModule($Sender);
   $Sender->AddModule($FeedModule);
   $ExchangeModule = new ExchangeModule($Sender);
   $Sender->AddModule($ExchangeModule);
   $YouTubeModule = new YouTubeModule($Sender);
   $Sender->AddModule($YouTubeModule);
   $FlagCounterModule = new FlagCounterModule($Sender);
   $Sender->AddModule($FlagCounterModule);
   $PanelGalleryModule = new PanelGalleryModule($Sender);
   $Sender->AddModule($PanelGalleryModule);

   // Uncomment the modules you want to use or add more or comment out the ones you dont want to use.

   $Sender->AddCssFile('widgets.css', 'plugins/Widgets');
  }
 }

 public

 function CategoriesController_Render_Before($Sender){

  // comment this if you want it in the categories index page

  if (IsMobile()) {
   return;
  }
  else {
   $FeedModule = new FeedModule($Sender);
   $Sender->AddModule($FeedModule);
   $ExchangeModule = new ExchangeModule($Sender);
   $Sender->AddModule($ExchangeModule);
   $YouTubeModule = new YouTubeModule($Sender);
   $Sender->AddModule($YouTubeModule);
   $FlagCounterModule = new FlagCounterModule($Sender);
   $Sender->AddModule($FlagCounterModule);
   $PanelGalleryModule = new PanelGalleryModule($Sender);
   $Sender->AddModule($PanelGalleryModule);

   // Uncomment the modules you want to use or add more or comment out the ones you dont want to use.

   $Sender->AddCssFile('widgets.css', 'plugins/Widgets');
  }
 }

 public

 function Setup(){
 }

 public

 function OnDisable(){
  return TRUE;
 }
}