@extends('admin/admin')
@section('row tile_count')
  
  @stop
  @section('row x_title')
   Мэдээний жагсаалт
   @section('dashboard_graph')

    <table class="table  table-striped dataTable  table-bordered  table-hover table-striped" role="grid">
                     <thead>
                            <th>Он  сар өдөр</th>
                          <th>Гарчиг</th>
                          <th>Мэдээний төрөл</th>
                           </thead>
                              <tbody>
           <?php
        foreach ($data as $key) {
        	# code...
        	?>
<tr class="table-success">
 <td>
     <?php	echo $key->date;?></td>
     <td>
     <?php	echo $key->title;?></td> <td>
     <?php	echo $key->tname;?></td>
</tr>
  <?php
         }?>
       
     </tbody>
    </table> 
       @stop
    @stop

