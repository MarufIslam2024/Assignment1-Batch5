<?PHP 

function totalMarks($subjectA, $subjectB, $subjectC, $subjectD, $subjectE){
    if( $subjectA > 100 || $subjectB > 100 || $subjectC > 100 || $subjectD > 100 || $subjectE > 100 ){
        return "Mark range is invalid";
    }
    $total = $subjectA + $subjectB + $subjectC + $subjectD + $subjectE;
    return $total;
}

$total = totalMarks(95, 88, 70, 86, 68);

echo "Total Marks: $total". "<br>";


$avarage = $total/5;

echo "Average Marks: $avarage" ."<br>" ;

switch (true){
        case($avarage <= 100 && $avarage >= 80):
            echo "Grade : A+";
        break;
        case($avarage < 80 && $avarage >= 70):
            echo "Grade : A";
        break;
        case($avarage < 70 && $avarage >= 60):
            echo "Grade : A-";
        break;
        case($avarage < 60 && $avarage >= 50):
            echo "Grade : B";
        break;
        case($avarage < 50 && $avarage >= 40):
            echo "Grade : C";
        break;
        case($avarage < 40 && $avarage >= 33):
            echo "Grade : D";
        break;
        case($avarage < 33):
            echo "Grade : F";
        break;

}







