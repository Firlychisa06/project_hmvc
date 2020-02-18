<!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?= base_url('assets/bower_components/jquery/dist/jquery.min.js')?>"></script>
<!-- Bootstrap 3.3.7 -->

<script src="<?= base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>

<script src="<?= base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>

<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.min.js')?>"></script>
<script src="<?= base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')?>"></script>

<script src="<?= base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')?>" ></script>
<script src="<?= base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')?>" ></script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<script>
  jQuery(document).ready(function(){
    append();
  });
  $(function () {
    $('#example1').DataTable();
    
    $('#datepicker').datepicker({
      autoclose: true
    })
  });

function addRow(tableID)
{
var table = document.getElementById(tableID);
var count = document.getElementById('count').value;
//alert(count);
var c = parseInt(count)+parseInt(1);
var rowCount = table.rows.length;
var row = table.insertRow(rowCount);
var colCount = table.rows[0].cells.length;
for(var i=0; i<colCount; i++) 
{
var newcell = row.insertCell(i);
newcell.innerHTML = table.rows[0].cells[i].innerHTML;
switch(newcell.childNodes[0].type)
 {
case "text":newcell.childNodes[0].value = "";
var node_id = newcell.childNodes[0].id;
var node_id_arr = node_id.split('_');
newcell.childNodes[0].id=node_id_arr[0]+'_'+c;
break;
case "checkbox":newcell.childNodes[0].checked = false;
var node_id = newcell.childNodes[0].id;
var node_id_arr = node_id.split('_');
newcell.childNodes[0].id=node_id_arr[0]+'_'+c;
break;
}
$('#count').val(c);
} 
}

function deleteRow(tableID) 
{
try 
{
var table = document.getElementById(tableID);
var rowCount = table.rows.length;
for(var i=0; i<rowCount; i++) 
{
var row    = table.rows[i];
var chkbox = row.cells[0].childNodes[0];
var ids    = row.cells[0].childNodes[0].id;
if(null != chkbox && true == chkbox.checked) 
{
var count = document.getElementById('count').value;
var c = parseInt(count)-parseInt(1); 
 if(rowCount <= 1) 
{
alert("Cannot delete all the rows.");
break;
}
table.deleteRow(i);
rowCount--;
i--;
$('#count').val(c);
}
}
}
catch(e)
{
alert(e);
}  
}

// function append(value=null){
//   let table='#tTable';
//   let form='#tTempat';
//   let row='<tr>';
//   row+='<td><input type="hidden" name="count" id="count" value="1"></td>';
//   row+='</tr>';
//   $(table).append(row);
// }

  // $(function () {
  //   $('#datetimepicker1').datetimepicker();



    //Date picker
    // $('#datepicker').datepicker({
      // autoclose: true
    // })
</script>

</body>
</html>