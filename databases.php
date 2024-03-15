<?php
class database{
    private $host;
	private $dbusername;
    private $dbpassword;
    private $dbname;
    
    protected function connect(){
		global $con;
		$this->host='localhost';
		$this->dbusername='root';
		$this->dbpassword='';
		$this->dbname='blog';
		$con=new mysqli($this->host,$this->dbusername,$this->dbpassword,$this->dbname);
		return $con;
	}  
}





class query extends database{
	public function getData($table,$field='*',$condition_arr='',$order_by_field='',$order_by_type='desc',$limit=''){
		$sql="select $field from $table ";
		if($condition_arr!=''){
			$sql.=' where ';
			$c=count($condition_arr);	
			$i=1;
			foreach($condition_arr as $key=>$val){
				if($i==$c){
					$sql.="$key='$val'";
				}else{
					$sql.="$key='$val' and ";
				}
				$i++;
			}
		}
		if($order_by_field!=''){
			$sql.=" order by $order_by_field $order_by_type ";
		}
		
		if($limit!=''){
			$sql.=" limit $limit ";
		}
		// print_r($sql);
		// die();
		$result=$this->connect()->query($sql);
		if($result !==false && $result->num_rows>0){
			$arr=array();
			while($row=$result->fetch_assoc()){
				$arr[]=$row;
			}
			return $arr;
		}else{
			return 0;
		}
	}


	
	public function insertData($table,$condition_arr){
		if($condition_arr !=''){
			foreach($condition_arr as $key => $val){
				$fieldArr[]=$key;
				$valueArr[]=$val;
			}
			$field= implode(",",$fieldArr);
			$value= implode("','",$valueArr);
			$value="'".$value."'";			
			$sql="insert into $table($field) values($value) ";
			$result=$this->connect()->query($sql);
		}
	
}

	public function deleteData($table,$condition_arr){
		if($condition_arr!=''){
			$sql="delete from $table where ";
			$c=count($condition_arr);	
			$i=1;
			foreach($condition_arr as $key=>$val){
				if($i==$c){
					$sql.="$key='$val'";
				}else{
					$sql.="$key='$val' and ";
				}
				$i++;
			}
			$result=$this->connect()->query($sql);
		}
	}

	public function updateData($table,$condition_arr,$where_field,$where_value){
		if($condition_arr!=''){
			$sql="update $table set ";
			$c=count($condition_arr);	
			$i=1;
			foreach($condition_arr as $key=>$val){
				if($i==$c){
					$sql.="$key='$val'";
				}else{
					$sql.="$key='$val', ";
				}
				$i++;
			}
			$sql.=" where $where_field='$where_value' ";
			$result=$this->connect()->query($sql);
		}
	}
	public function get_safe_str($str){
		if($str!=''){	
			return mysqli_real_escape_string($this->connect(),$str);
		}
	}


	public function login($email,$password){
		 $sql ="SELECT * FROM users_regis WHERE email = '".$email."' AND password = '".$password."'";  
		 $result = $this->connect()->query($sql);
		 return $result;
	} 
}  






use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function mailer($to,$subject,$msg){
	require 'vendor/autoload.php';
	$mail = new PHPMailer(true);
	try {
		$mail->isSMTP();                                            
		$mail->Host       =  'sandbox.smtp.mailtrap.io';                     
		$mail->SMTPAuth   = true;                                   
		$mail->Username   = 'ccad7c8de68945';                    
		$mail->Password   = 'ded5c246980574';                    
		$mail->SMTPSecure = 'tls';           
		$mail->Port       = 2525;                                  
	
		//Recipients
		$mail->setFrom('pixelperfect@blog.com', 'Mailer');
		$mail->addAddress($to);    
		
		//Attachments
		//$mail->addAttachment('/var/tmp/file.tar.gz');         
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    
		//Content

		$mail->isHTML(true);                                  
		$mail->Subject = $subject;
		$mail->Body    =  $msg;
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
		$mail->send();
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}









?>