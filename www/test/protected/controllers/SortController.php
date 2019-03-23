<?php
class SortController extends Controller{


	public function actionAboutus()
	{
		$this->render('Aboutus');
	}
	public function actionDashboard()
	{
		$this->render('dashboard');
	}
	public function actionMarkforsslc()
	{
		$sql='SELECT * from sslc';
    $vendor = Yii::app()->db->createcommand($sql)->queryAll();


		  $html = "<table class='rptTable'>
                        <tr>
                            <th>S.No</th>
                            <th>Register Number</th>
                            <th>Tamil</th>
                            <th>English</th>        
                            <th>Maths</th>
                            <th>Science</th>
                            <th>Social</th>
                            <th>Total</th>
                        </tr>";
        $i = 1;
        if (count($vendor) > 0) {
            foreach ($vendor as $key => $value) {
            	        	$total=$value['tamil']+$value['english']+$value['maths']+$value['science']+$value['social'];
                $html .= "<tr>
                <td>" . $i . "</td>             
                <td>" . $value['register_number'] . "</td>
                <td>" . $value['tamil'] . "</td>
                <td>" . $value['english'] . "</td>                  
                 <td>" . $value['maths'] . "</td>
                <td>" . $value['science'] . "</td>
                  <td>" . $value['social'] . "</td>
                  <td>" . $total . "</td>

            </tr>";
                $i++;
            }
        } else {
            $html .="<tr>
                        <td colspan=9 align=center>No Records Found</td>                
                    </tr>";
        }
        $html .="</table>";

        echo $html;
	}
public function actionEma()
{
// 	Yii::import('application.extensions.phpmailer.JPhpMailer');
// $mail = new JPhpMailer;
// $mail->IsSMTP();
// $mail->Host = 'localhost';
// $mail->Port = 'portnumber';
// $mail->SMTPAuth = true;
// $mail->Username = 'admin@gmail.com';
// $mail->Password = '*******';
// $mail->SetFrom('admin@gmail.com', 'name');
// $mail->Subject = 'PHPMailer Test Subject via smtp, basic with authentication';
// $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
// $mail->MsgHTML('<h1>JUST A TEST!</h1>');
// $mail->AddAddress('zzzz@gmail.com', 'addname');
// $mail->Send();
// 	$vendor=array();
$sql='SELECT * from sslc';
    $vendor = Yii::app()->db->createcommand($sql)->queryAll();



	echo json_encode($vendor);
}

	public function actionCreate()
	{
		$model=new Page;
		return $this->render('create',array());
	}
	public function actionTime()
	{
		$vendor= array();
		if($_POST['id']==1)
		{
			$sql='select count(tamil>90) from sslc ';
			print_r($sql);
			die;
			$vendor = Yii::app()->db->createcommand($sql)->queryAll();
			print_r($vendor);
			die;
			$this->renderPartial('Aboutus',array('vendor'=>$vendor));
		}

	}

public function actionRe(){
    $vendor=array();
    if(isset($_POST)){
         $vendor = Yii::app()->db->createcommand($sql)->queryAll();
echo json_encode($vendor);
    }
}
}
?>