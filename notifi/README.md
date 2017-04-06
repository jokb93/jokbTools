A small notification system:
 
 
requirements:
  Jquery 1.11.0 and above
   
   <br /><br />
Installation:

  Download and insert into your project.
   <br /><br />
   
Usage:  

  add this line to the pages where you want to use the script.
  
    <script src="js/plug-ins/notifi.js"></script> <!-- Notifi -->
    
  <br /><br />
  To engage the plugin use this:
  
    notifi("green","Meesage", 3, false);
    
 <br /><br /> the build of the notifi():
  
    notifi( type, Message, Seconds, DarkMode);
    
<br /><br />Types:

  red     -> red box with a stop icon
  
  green   -> green box with a checkmark icon
  
  yellow  -> yellow box with a warning icon
  
  blue    -> blue box with a information icon
  
  <br /><br />
  
Darkmode(unfinished):

  consider using for bright white pages.
