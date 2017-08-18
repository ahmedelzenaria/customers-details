<?php
require_once '../_cpanal/templates/header.tpl';
require_once '../_lib/invoice.php';
?>
            <div id="content">
                <?php
                    if(isset($_POST['addinvoice'])){
                        $client_name=$_POST['client_name'];
                        $contact_number=$_POST['contact_number'];
                        $email_address=$_POST['email_address'];
                        $home_address=$_POST['home_address'];
                        $post_code=$_POST['post_code'];
                        $alternative_contact_number=$_POST['alternative_contact_number'];
                        $date_booking_confirmed=$_POST['date_booking_confirmed'];
                        $date_of_travel=$_POST['date_of_travel'];
                        $destination=$_POST['destination'];
                        $resort=$_POST['resort'];
                        $package=$_POST['package'];
                        $flight=$_POST['flight'];
                        $flight_supplier=$_POST['flight_supplier'];
                        $flight_commission=$_POST['flight_commission'];
                        $accommodation=$_POST['accommodation'];
                        $accommodation_supplier=$_POST['accommodation_supplier'];
                        $accommodation_commission=$_POST['accommodation_commission'];
                        $extras=$_POST['extras'];
                        $extras_supplier=$_POST['extras_supplier'];
                        $extras_commission=$_POST['extras_commission'];
                        $extras1=$_POST['extras1'];
                        $extras1_supplier=$_POST['extras1_supplier'];
                        $extras1_commission=$_POST['extras1_commission'];
                        $extras2=$_POST['extras2'];
                        $extras2_supplier=$_POST['extras2_supplier'];
                        $extras2_commission=$_POST['extras2_commission'];
                        $extras3=$_POST['extras3'];
                        $extras3_supplier=$_POST['extras3_supplier'];
                        $extras3_commission=$_POST['extras3_commission'];
                        $extras4=$_POST['extras4'];
                        $extras4_supplier=$_POST['extras4_supplier'];
                        $extras4_commission=$_POST['extras4_commission'];
                        if($client_name==NULL){
                            echo "please insert the value of name";
                        }else{
                            $invoice =new invoice($client_name, $contact_number, $email_address,$home_address, 
                                    $post_code, $alternative_contact_number, $date_booking_confirmed, $date_of_travel, $destination,
                                    $resort, $package, $flight, $flight_supplier, $flight_commission, $accommodation, $accommodation_supplier,
                                    $accommodation_commission, $extras, $extras_supplier, $accommodation_commission, $extras, $extras_supplier,
                                    $extras_commission, $extras1, $extras1_supplier, $extras1_commission, $extras2, $extras2_supplier, 
                                    $extras2_commission, $extras3, $extras3_supplier, $extras3_commission, $extras4, $extras4_supplier, 
                                    $extras4_commission);
                            if($invoice->addinvoice()){
                                echo '<div class="message">done</div>';  
                            }else{
                                echo '<div class="message">error</div>';  
                            };
                        }
                    }
                ?>
                <form role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <div class="form-group">
                      <label >Client Name:</label>
                      <input type="text" class="form-control" name="client_name">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Contact Number:</label>
                      <input type="text" class="form-control" name="contact_number" >
                    </div>
                    <div class="form-group">
                      <label for="email">Email Address:</label>
                      <input type="email" class="form-control" name="email_address">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Home Address:</label>
                      <input type="text" class="form-control" name="home_address">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Post Code:</label>
                      <input type="text" class="form-control" name="post_code">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Alternative Contact Number:</label>
                      <input type="text" class="form-control" name="alternative_contact_number">
                    </div>
                    <div class="form-group">
                        <label for="ex3">Date booking confirmed:</label>
                        <input class="form-control" id="ex3" type="date" name="date_booking_confirmed">
                    </div>
                    <div class="form-group">
                        <label for="ex3">Date of Travel:</label>
                        <input class="form-control" id="ex3" type="date" name="date_of_travel">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Destination:</label>
                      <input type="text" class="form-control" name="destination">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Resort:</label>
                      <input type="text" class="form-control" name="resort">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Package:</label>
                      <input type="text" class="form-control" name="package">
                    </div>
                    <div class="col-xs-2">
                        <label for="ex1">Flight</label>
                        <input class="form-control" id="ex1" type="text" name="flight">
                      </div>
                      <div class="col-xs-3">
                        <label for="ex2">Supplier</label>
                        <input class="form-control" id="ex2" type="text" name="flight_supplier">
                      </div>
                      <div class="col-xs-4">
                        <label for="ex3">Commission</label>
                        <input class="form-control" id="ex3" type="text" name="flight_commission">
                      </div><br/><br/><br/>
                      <div class="col-xs-2">
                        <label for="ex1">Accommodation</label>
                        <input class="form-control" id="ex1" type="text" name="accommodation">
                      </div>
                      <div class="col-xs-3">
                        <label for="ex2">Supplier</label>
                        <input class="form-control" id="ex2" type="text" name="accommodation_supplier">
                      </div>
                      <div class="col-xs-4">
                        <label for="ex3">Commission</label>
                        <input class="form-control" id="ex3" type="text" name="accommodation_commission">
                      </div><br/><br/><br/>
                    <div class="col-xs-2">
                        <label for="ex1">Extras</label>
                        <input class="form-control" id="ex1" type="text" name="extras">
                      </div>
                      <div class="col-xs-3">
                        <label for="ex2">Supplier</label>
                        <input class="form-control" id="ex2" type="text" name="extras_supplier">
                      </div>
                      <div class="col-xs-4">
                        <label for="ex3">Commission</label>
                        <input class="form-control" id="ex3" type="text" name="extras_commission">
                      </div><br/><br/><br/>
                      <div class="col-xs-2">
                        <label for="ex1">Extras</label>
                        <input class="form-control" id="ex1" type="text" name="extras1">
                      </div>
                      <div class="col-xs-3">
                        <label for="ex2">Supplier</label>
                        <input class="form-control" id="ex2" type="text" name="extras1_supplier">
                      </div>
                      <div class="col-xs-4">
                        <label for="ex3">Commission</label>
                        <input class="form-control" id="ex3" type="text" name="extras1_commission">
                      </div><br/><br/><br/>
                      <div class="col-xs-2">
                        <label for="ex1">Extras</label>
                        <input class="form-control" id="ex1" type="text" name="extras2">
                      </div>
                      <div class="col-xs-3">
                        <label for="ex2">Supplier</label>
                        <input class="form-control" id="ex2" type="text" name="extras2_supplier">
                      </div>
                    
                      <div class="col-xs-4">
                        <label for="ex3">Commission</label>
                        <input class="form-control" id="ex3" type="text" name="extras2_commission">
                      </div><br/><br/><br/>
                      <div class="col-xs-2">
                        <label for="ex1">Extras</label>
                        <input class="form-control" id="ex1" type="text" name="extras3">
                      </div>
                      <div class="col-xs-3">
                        <label for="ex2">Supplier</label>
                        <input class="form-control" id="ex2" type="text" name="extras3_supplier">
                      </div>
                      <div class="col-xs-4">
                        <label for="ex3">Commission</label>
                        <input class="form-control" id="ex3" type="text" name="extras3_commission">
                      </div><br/><br/><br/>
                      <div class="col-xs-2">
                        <label for="ex1">Extras</label>
                        <input class="form-control" id="ex1" type="text" name="extras4">
                      </div>
                      <div class="col-xs-3">
                        <label for="ex2">Supplier</label>
                        <input class="form-control" id="ex2" type="text" name="extras4_supplier">
                      </div>
                      <div class="col-xs-4">
                        <label for="ex3">Commission</label>
                        <input class="form-control" id="ex3" type="text" name="extras4_commission">
                      </div><br/><br/><br/><br/>
                     
                      <button type="submit" class="btn btn-default" name="addinvoice" value="addinvoice">Submit</button>
                </form>
            </div>   
<?php
require_once '../_cpanal/templates/footer.tpl';
?>