<?php
$dbh=new PDO("mysql:dbhost=localhost;dbname=avocet","root"."");
class invoice{
    private $invoice_id;
    private $client_name;
    private $contact_number;
    private $email_address;
    private $home_address;
    private $post_code;
    private $alternative_contact_number;
    private $date_booking_confirmed;
    private $date_of_travel;
    private $destination;
    private $resort;
    private $package;
    private $flight;
    private $flight_supplier;
    private $flight_commission;
    private $accommodation;
    private $accommodation_supplier;
    private $accommodation_commission;
    private $extras;
    private $extras_supplier;
    private $extras_commission;
    private $extras1;
    private $extras1_supplier;
    private $extras1_commission;
    private $extras2;
    private $extras2_supplier;
    private $extras2_commission;
    private $extras3;
    private $extras3_supplier;
    private $extras3_commission;
    private $extras4;
    private $extras4_supplier;
    private $extras4_commission;
    
    public function __construct($client_name,$contact_number,$email_address,$home_address,$post_code,
            $alternative_contact_number,$date_booking_confirmed,$date_of_travel,$destination,
            $resort,$package,$flight,$flight_supplier,$flight_commission,$accommodation,$accommodation_supplier,
            $accommodation_commission,$extras,$extras_supplier,$extras_commission,
            $extras1,$extras1_supplier,$extras1_commission,$extras2,$extras2_supplier,$extras2_commission,
            $extras3,$extras3_supplier,
            $extras3_commission,$extras4,$extras4_supplier,$extras4_commission,$invoice_id="")
        {
        $this->client_name=$client_name;
        $this->contact_number=$contact_number;
        $this->email_address=$email_address;
        $this->home_address=$home_address;
        $this->post_code=$post_code;
        $this->alternative_contact_number=$alternative_contact_number;
        $this->date_booking_confirmed=$date_booking_confirmed;
        $this->date_of_travel=$date_of_travel;
        $this->destination=$destination;
        $this->resort=$resort;
        $this->package=$package;
        $this->flight=$flight;
        $this->flight_supplier=$flight_supplier;
        $this->flight_commission=$flight_commission;
        $this->accommodation=$accommodation;
        $this->accommodation_supplier=$accommodation_supplier;
        $this->accommodation_commission=$accommodation_commission;
        $this->extras=$extras;
        $this->extras_supplier=$extras_supplier;
        $this->extras_commission=$extras_commission;
        $this->extras1=$extras1;
        $this->extras1_supplier=$extras1_supplier;
        $this->extras1_commission=$extras1_commission;
        $this->extras2=$extras2;
        $this->extras2_supplier=$extras2_supplier;
        $this->extras2_commission=$extras2_commission;
        $this->extras3=$extras3;
        $this->extras3_supplier=$extras3_supplier;
        $this->extras3_commission=$extras3_commission;
        $this->extras4=$extras4;
        $this->extras4_supplier=$extras4_supplier;
        $this->extras4_commission=$extras4_commission;
        $this->invoice_id=$invoice_id;
    }
    public function addinvoice(){
        global $dbh;
        $sql=$dbh->prepare("INSERT INTO `invoice`(`client_name`,`contact_number`,`email_address`,`home_adress`,`post_code`,`alternative_contact_number`,`date_booking_confirmed`,`date_of_travel`,`destination`,
            `resort`,`package`,`flight`,`flight_supplier`,`flight_commission`,`accommodation`,`accommodation_supplier`,`accommodation_commission`,`extras`,`extras_supplier`,`extras_commission`,
            `extras1`,`extras1_supplier`,`extras1_commission`,`extras2`,`extras2_supplier`,`extras2_commission`,`extras3`,`extras3_supplier`,
            `extras3_commission`,`extras4`,`extras4_supplier`,`extras4_commission`)values ($this->client_name,$this->contact_number,$this->email_address,$this->home_address,$this->post_code,$this->alternative_contact_number,$this->date_booking_confirmed,$this->date_of_travel,$this->destination,
            $this->resort,$this->package,$this->flight,$this->flight_supplier,$this->flight_commission,$this->accommodation,$this->accommodation_supplier,$this->accommodation_commission,$this->extras,$this->extras_supplier,$this->extras_commission,
            $this->extras1,$this->extras1_supplier,$this->extras1_commission,$this->extras2,$this->extras2_supplier,$this->extras2_commission,$this->extras3,$this->extras3_supplier,
            $this->extras3_commission,$this->extras4,$this->extras4_supplier,$this->extras4_commission)");
        if($sql->execute()){
            return true;
        }else{
            return false;
        };
    }
    public static function retrieveallinvoices(){
        global $dbh;
        $sql=$dbh->prepare("SELECT * FROM invoice");
        $sql->execute();
        $data=null;
        while($fetch=$sql->fetch(PDO::FETCH_ASSOC)){
            $data=$fetch;
        }
        return $data;
    }
    public static function deleteinvoice($invoice_id){
        global $dbh;
        $sql=$dbh->prepare("DELET FROM invoice WHERE invoice_id='$invoice_id'");
        $sql->execute();
    }
    public static function retrieveinvoicebyid($invoice_id){
        global $dbh;
        $sql=$dbh->prepare("SELECT * FROM invoice WHERE invoice_id='$invoice_id'");
        $sql->execute();
        $fetch=$sql->fetch(PDO::FETCH_ASSOC);
        return $fetch;
    }
    public function updateinvoice(){
        global $dbh;
        $sql=$dbh->prepare("UPDATE invoice SET client_name='$this->client_name' contact_number='$this->contact_number' 
            email_address='$this->email_address' home_address='$this->home_address' post_code='$this->post_code' alternative_contact_number='$this->alternative_contact_number' 
            date_booking_confirmed='$this->date_booking_confirmed' date_of_travel='$this->date_of_travel' destination='$this->destination'
            resort='$this->resort' package='$this->package' flight='$this->flight' flight_supplier='$this->flight_supplier' flight_commission='$this->flight_commission' accommodation='$this->accommodation' accommodation_supplier='$this->accommodation_supplier' accommodation_commission='$this->accommodation_commission' extras='$this->extras' extras_supplier='$this->extras_supplier' extras_commission='$this->extras_commission'
            extras1='$this->extras1' extras1_supplier='$this->extras1_supplier' extras1_commission='$this->extras1_commission' extras2='$this->extras2' extras2_supplier='$this->extras2_supplier' extras2_commission='$this->extras2_commission' extras3='$this->extras3' extras3_supplier='$this->extras3_supplier'
            extras3_commission='$this->extras3_commission' extras4='$this->extras4' extras4_supplier='$this->extras4_supplier' extras4_commission='$this->extras4_commission' WHERE invoice_id='$this->invoice_id'");
        $sql->execute();
    }
}