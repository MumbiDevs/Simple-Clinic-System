
<?php

class PatientFile
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function create($inputData)
    {
        $patientno = $inputData['patientno'];
		$name = $inputData['name'];
        $age = $inputData['age'];
        $phone = $inputData['phone'];
        $gender = $inputData['gender'];
		$temp = $inputData['temp'];
		$pulse = $inputData['pulse'];
		$bp = $inputData['bp'];
		$r = $inputData['r'];
		$spo = $inputData['spo'];
		$bs = $inputData['bs'];
		$consult = $inputData['consult'];
		

        $studentQuery = "INSERT INTO patient (patientno,name,age,phone,gender,temp,pulse,bp,r,spo,bs,consult) VALUES ('$patientno','$name','$age','$phone','$gender','$temp','$pulse','$bp','$r','$spo','$bs','$consult')";
        $result = $this->conn->query($studentQuery);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
?>
