<?php
include('config.php');

$name       = $_POST['name'];
$semester   = $_POST['semester'];
$roll       = $_POST['roll'];
$reg        = $_POST['reg'];
$email      = $_POST['email'];
$contact    = $_POST['contact'];
$gender     = $_POST['gender'];
$activities = implode(", ",$_POST['activities']);  //data show korte ei code lagbe:  $activities_array = explode(",",$row->activities);
$address    = $_POST['address'];

function getImageURL()
{
    $imageName = $_FILES['image']['name'];
    $directory = "img/stu-img/".$imageName;
    move_uploaded_file($_FILES['image']['tmp_name'], $directory);
    return $directory;    
}

switch($_GET['action'])
{
    case 'add':			            
            if($con)
            {
                if (empty($_FILES['image']['name']))
                {
                    $imageURL = '';
                }
                else
                {
                    $imageURL = getImageURL();
                }

                $sql = "INSERT INTO `students` (name, semester, roll, reg, email, contact, gender, activities, address, image)
                VALUES ('$name', '$semester', '$roll', '$reg', '$email', '$contact', '$gender', '$activities', '$address', '$imageURL')";
                
                $link = mysqli_query($con,$sql);

                $sql2 = "SELECT * FROM `students`";
                $link2 = mysqli_query($con,$sql2);
                $row = mysqli_fetch_assoc($link2);
   
                if($link)
                {   
?> 
                    <script type="text/javascript">
                        alert("Successfully added.");
                        window.location = "index.php";
                    </script>
<?php
                }
                elseif($reg == $row["reg"])
                {
                    ?>
                    <script type="text/javascript">
                        alert("This registration number is already registered!");
                        window.location = "index.php";
                    </script>
<?php
                }
                else{
                    die('Query problem...' . mysqli_error($con));                             
                }
            }
    break;            
}

?>
