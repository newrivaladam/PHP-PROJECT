<?php
include_once "config/init.php";
?>
<?php
$template = new Template("templates/edit-page.php");
$job = new Job;

$template->title = "Edit Page";
$template->category_id = $job->getCategories();

$job_id = isset($_GET['id'])? $_GET['id'] : null;

if($job_id){
    $template->jobData = $job->getJob($job_id);
}

if(isset($_POST['submit'])){
    //Create Data Array
    $data = array();

    //PREVENT EMPTY SUBMIT IN FORM
    foreach($_POST as $post){
        if($post == 0 || $post == null){
            redirect('','Please fill in the blank','error');
        }
    }
    
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    if($job->updateJob($job_id,$data)){
        redirect('index.php','Your job has been updated','success');
    }else{
        redirect('index.php','Something Went Wrong','error');
    }
}

echo $template;