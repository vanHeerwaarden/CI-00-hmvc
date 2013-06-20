<html>
    
    <head></head>
    <body style="background-color: red;">
        
        <table width="900" align="center" border="1" style="background-color: yellow;">
            <tr><td align="center" valign="center"><h1>ONE COL LAYOUT</h1></td></tr>
            
            <tr><td height="500" valign="top">

                       <?php 
                       //
                       if (!isset($view_file)){
                           $view_file = "";
                       }
                       
                       if (!isset($module)){
                           $module = $this->uri->segment(1);
                           echo "$module";
                       }
                       
                       if (($view_file != "") && ($module != "")){
                           
                           $path = $module."/".$view_file;
                           $this->load->view($path);
                       }
                       //$this->load->view($module.'/'.$view_file);
                       ?> 

              </td></tr>
        </table>
    </body>
</html>    

