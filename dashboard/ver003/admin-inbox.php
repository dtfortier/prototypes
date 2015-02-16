<!DOCTYPE html>
<html>  
     <?php require 'head.php'; ?> 
<body>
    <div id="wrapper">  
        
        <?php require 'navigation.php'; ?>
        <?php require 'modal.php'; ?>
        
     <div id="page-wrapper">
        <?php require 'inbox-a.php'; ?> 
      </div>
        <!-- /#page-wrapper -->
 
    </div><!--#end wrapper -->
    
    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

   
      <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
    

    <!-- Boostrap toggle -->

    <script src="js/bootstrap-switch.js"></script>
    
    <script type='text/javascript'>
        $(function() {
            $(".toggle").bootstrapSwitch('size', 'mini');
        })
    </script>
</body>

</html>