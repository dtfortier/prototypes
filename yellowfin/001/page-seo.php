<!DOCTYPE html>
<html>  
     <?php require 'head.php'; ?> 
<body>
    
    <div id="wrapper">  
        <?php require 'navigation.php'; ?>
        <?php require 'modal.php'; ?>
         
     <div id="page-wrapper" class="clearfix">
         <?php require 'date-selector.php'; ?>
        <?php require 'page-seo-a.php'; ?> 
      </div>
        <!-- /#page-wrapper -->
 
    </div><!--#end wrapper -->
    
    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    
    <script src="js/datetimepicker/src/js/moment.js" type="text/javascript"></script>
    
    <!-- Bootstrap datepicker -->
    <script src="js/datetimepicker/src/js/bootstrap-datetimepicker.js"></script>
    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

   
      <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
    
    <!-- Bootstrap toggle -->

    <script src="js/bootstrap-switch.js"></script>
    
<script type="text/javascript">
        $(function () {
            var startPicker = $("#datetimepicker9");
            var endPicker = $("#datetimepicker10");
            
            startPicker.add(endPicker).datetimepicker({ pickTime: false });
            
            startPicker.on("dp.change",function (e) {
                endPicker.data("DateTimePicker").setMinDate(e.date);
            });
            
            endPicker.on("dp.change",function (e) {
                startPicker.data("DateTimePicker").setMaxDate(e.date);
            });
            
            startPicker.on("dp.show", function() {
                endPicker.data("DateTimePicker").hide();
            });

            endPicker.on("dp.show", function() {
                startPicker.data("DateTimePicker").hide();
            });
        
            $(".toggle").bootstrapSwitch('size', 'small');
            $("#demo1").addClass('in'); 
            $("#demo9").addClass('in');
            $("#demo9 li").addClass('active');
            
            var menuOptions = $(".filterOption");
            
            menuOptions.click(function() {
                menuOptions.removeClass('selected');
                var $this = $(this);
                $this.addClass('selected');
                
                if($this.hasClass('customFilterOption')) {
                    $(".customEntry").show();
                }
                else {
                    $(".customEntry").hide();
                }
            });

            $( ".btn-cancel" ).click(function(e) {    
                $( ".customEntry" ).hide();
                e.stopPropagation();
            });   
            
    });
   
        
        
        
        
    </script>

</body>

</html>


