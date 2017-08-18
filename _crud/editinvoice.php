<?php
require_once '../_cpanal/templates/header.tpl';
?>
            <div id="content">
                <table class="table table-striped">
				<tr>
				  <td class="active">Invoice Id</td>
				  <td class="active">Client Name</td>
				  <td class="success">Contact Number</td>
				  <td class="warning">Email Address</td>
				  <td class="warning">Details</td>
				</tr>
		<?php
                    /*$data=  invoice::retreiveAllrinvoices();
                    if(is_array($data)){
                        foreach ($data as $invoice) {
                            echo '<tr>
            				  <td class="active">'.$reception['reception_id'].'</td>
            				  <td class="active">'.$reception['reception_name'].'</td>
            				  <td class="active">'.$reception['reception_password'].'</td>
            				  <td class="success"><a href="?action=edit&id='.$reception['reception_id'].'">Edit</a></td>
            				  <td class="warning"><a  href="?action=delete&id='.$reception['reception_id'].'">Delete</a></td>
            				  
                    </tr>';
                        }
                    }
                 */?>
			</table>
            </div>   
            
<?php
require_once '../_cpanal/templates/footer.tpl';
?>