
                
                
		</div><!--/.main-container-->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!--basic scripts-->

		<!--[if !IE]>-->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
        
        

		<!--page specific plugin scripts-->

		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.js"></script>
        <script src="assets/js/dataTables.tableTools.js"></script>
       
       
       <!--page specific plugin scripts 
       <script src="assets/js/jquery.js"></script>
       <script src="assets/js/jquery.dataTables.js"></script>
       <script src="assets/js/dataTables.tableTools.js"></script>
       <script src="assets/js/dataTables.bootstrap.js"></script>
       
       <script type="text/javascript">
       $(document).ready(function() {
    var table = $('#example').DataTable();
    var tt = new $.fn.dataTable.TableTools( table );
 
    $( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');
} );

</script>-->
		<!--ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!--inline scripts related to this page-->
        
        
		
        
		
		
		<script src="assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="assets/js/date-time/moment.min.js"></script>
		<script src="assets/js/date-time/daterangepicker.min.js"></script>
     
     
<script src="assets/js/bootstrap-datepicker.js"></script>  
<script type="text/javascript">
            $(function () {

  
  $( ".date-picker" ).datepicker({ multidate: true,startDate: 'today' });
   $( ".date-picker" ).datepicker({ multidate: true,startDate: 'today' });
    $( ".date_picker_materials" ).datepicker();
  //$( ".date-picker" ).datepicker({ multidate: true<?php if(!isset($_SESSION['au_session_login_admin']) ){echo ",startDate: 'today'";}?> });
  
				
	//$('#timepicker1').timepicker({ defaultTime: '09:00 AM' });
	//$('#timepicker2').timepicker({ defaultTime: '07:00 PM' });		
				
	//$('#tour_timepicker').timepicker({ defaultTime: '08:00 AM' });
	
	
	
	
	$('#timepicker1').timepicker({
					defaultTime: '09:00',
					minuteStep: 1,
					showSeconds: false,
					showMeridian: false
				});
	$('#timepicker2').timepicker({ 
					defaultTime: '19:00',
					minuteStep: 1,
					showSeconds: false,
					showMeridian: false });		
				
	$('#tour_timepicker').timepicker({
					defaultTime: '08:00',
					minuteStep: 1,
					showSeconds: false,
					showMeridian: false });
});



        </script> 

		<script type="text/javascript">
		
		
			$(function() {
				
				$('#accordion2').on('hide', function (e) {
					$(e.target).prev().children(0).addClass('collapsed');
				})
				$('#accordion2').on('hidden', function (e) {
					$(e.target).prev().children(0).addClass('collapsed');
				})
				$('#accordion2').on('show', function (e) {
					$(e.target).prev().children(0).removeClass('collapsed');
				})
				$('#accordion2').on('shown', function (e) {
					$(e.target).prev().children(0).removeClass('collapsed');
				})
				$('#accordion2').on('shown', function (e) {
					$(e.target).prev().children(0).removeClass('collapsed');
				})
				$('#accordion2').on('shown', function (e) {
					$(e.target).prev().children(0).removeClass('collapsed');
				})
				
				
			
			
				var oTable1 = $('#student_list').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
			
			$(function() {
				var oTable1 = $('#admin_list').dataTable( {
					
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
			
			$(function() {
				var oTable1 = $('#user_list').dataTable( {
					
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
			
			
			
			
			$(function() {
				var oTable1 = $('#work_progress_list').dataTable( {
					
				"aoColumns": [
			      { "bSortable": false },
			      null, null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})

		</script>
        
     
     
     
    
    
    
    
    <!--page specific plugin scripts-->

		<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/fullcalendar.min.js"></script>
		<script src="assets/js/bootbox.min.js"></script>
        
        
        
        
        <script type="text/javascript">
    
		$(document).ready(function(){
			
			
			$( "#email" ).keyup(function() {
			
				var valu = this.value;
				$.ajax({
					type: 'get',
					url: 'ajax_action.php',
					data: {"action": "get_email_check", "email": valu},
					success: function(result) {
						$("#email").get(0).setCustomValidity(result);
					}
				});
			});
			
			
			
			
			
			
			
			

			$( "#username" ).keyup(function() {
			
				var valu = this.value;
				$.ajax({
					type: 'get',
					url: 'ajax_action.php',
					data: {"action": "get_username_check", "username": valu},
					success: function(result) {
						$("#username").get(0).setCustomValidity(result);
					}
				});
			});
			
			
			
			$( "#state" ).change(function() {
			
				var valu = this.value;
				$.ajax({
					type: 'get',
					url: 'ajax_action.php',
					data: {"action": "get_city_value", "state_id": valu},
					success: function(result) {
						$("#cities").html(result);
					}
				});
			});
            
            
            
   });	
    
    
    
    
    </script>
    
    
   
    
    
    <link href="assets/lightbox/ekko-lightbox.css" rel="stylesheet">
 <script src="assets/lightbox/ekko-lightbox.js"></script>

        <script type="text/javascript">
            $(document).ready(function ($) {
                // delegate calls to data-toggle="lightbox"
                $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
                    event.preventDefault();
                    return $(this).ekkoLightbox({
                        onShown: function() {
                            if (window.console) {
                                return console.log('Checking our the events huh?');
                            }
                        },
						onNavigate: function(direction, itemIndex) {
                            if (window.console) {
                                return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                            }
						}
                    });
                });

                //Programatically call
                $('#open-image').click(function (e) {
                    e.preventDefault();
                    $(this).ekkoLightbox();
                });
                $('#open-youtube').click(function (e) {
                    e.preventDefault();
                    $(this).ekkoLightbox();
                });

				// navigateTo
                $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
                    event.preventDefault();

                    var lb;
                    return $(this).ekkoLightbox({
                        onShown: function() {

                            lb = this;

							$(lb.modal_content).on('click', '.modal-footer a', function(e) {

								e.preventDefault();
								lb.navigateTo(2);

							});

                        }
                    });
                });


            });
        </script>
		
	</body>
</html>
