<?php
  define('Token','HGsZOXpfNC');
  $skills = [];
  $skill_levels = [];
  $hobbies = [];
  $institutes = [];
  $degrees = [];
  $froms = [];
  $tos = [];
  $grades = [];
  $titles = [];
  $descriptions = [];
  if(Token == $_POST['token'])
  {
    $temp_profile = $_FILES['profile_image']['tmp_name'];
    $profile = $_FILES['profile_image']['name'];
    move_uploaded_file($temp_profile,'images/'.$profile);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $profession = $_POST['profession'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $about_me = $_POST['about_me'];
    array_push($skills,$_POST['skill1']);
    array_push($skill_levels,intval($_POST['skill_level1']));
    array_push($hobbies,$_POST['hobby1']);
    array_push($institutes,$_POST['institute1']);
    array_push($degrees,$_POST['degree1']);
    array_push($froms,$_POST['from1']);
    array_push($tos,$_POST['to1']);
    array_push($grades,$_POST['grade1']);
    array_push($titles,$_POST['title1']);
    array_push($descriptions,$_POST['description1']);

    if(isset($_POST['skill2']) && !empty($_POST['skill2']))
    {
      if(isset($_POST['skill_level2']) && !empty($_POST['skill_level2']))
      {
        array_push($skills,$_POST['skill2']);
        array_push($skill_levels,intval($_POST['skill_level2']));
      }
    }
    if(isset($_POST['skill3']) && !empty($_POST['skill3']))
    {
      if(isset($_POST['skill_level3']) && !empty($_POST['skill_level3']))
      {
        array_push($skills,$_POST['skill3']);
        array_push($skill_levels,intval($_POST['skill_level3']));
      }
    }
    if(isset($_POST['skill4']) && !empty($_POST['skill4']))
    {
      if(isset($_POST['skill_level4']) && !empty($_POST['skill_level4']))
      {
        array_push($skills,$_POST['skill4']);
        array_push($skill_levels,intval($_POST['skill_level4']));
      }
    }
    if(isset($_POST['skill5']) && !empty($_POST['skill5']))
    {
      if(isset($_POST['skill_level5']) && !empty($_POST['skill_level5']))
      {
        array_push($skills,$_POST['skill5']);
        array_push($skill_levels,intval($_POST['skill_level5']));
      }
    }
    if(isset($_POST['hobby2']) && !empty($_POST['hobby2']))
    {
      array_push($hobbies,$_POST['hobby2']);
    }
    if(isset($_POST['hobby3']) && !empty($_POST['hobby3']))
    {
      array_push($hobbies,$_POST['hobby3']);
    }
    if(isset($_POST['hobby4']) && !empty($_POST['hobby4']))
    {
      array_push($hobbies,$_POST['hobby4']);
    }
    if(isset($_POST['institute2']) && !empty($_POST['institute2']))
    {
      if(isset($_POST['degree2']) && !empty($_POST['degree2']))
      {
        if(isset($_POST['from2']) && !empty($_POST['from2']))
        {
          if(isset($_POST['to2']) && !empty($_POST['to2']))
          {
            if(isset($_POST['grade2']) && !empty($_POST['grade2']))
            {
              array_push($institutes,$_POST['institute2']);
              array_push($degrees,$_POST['degree2']);
              array_push($froms,$_POST['from2']);
              array_push($tos,$_POST['to2']);
              array_push($grades,$_POST['grade2']);
            }
          }
        } 
      }
    }
    if(isset($_POST['institute3']) && !empty($_POST['institute3']))
    {
      if(isset($_POST['degree3']) && !empty($_POST['degree3']))
      {
        if(isset($_POST['from3']) && !empty($_POST['from3']))
        {
          if(isset($_POST['to3']) && !empty($_POST['to3']))
          {
            if(isset($_POST['grade3']) && !empty($_POST['grade3']))
            {
              array_push($institutes,$_POST['institute3']);
              array_push($degrees,$_POST['degree3']);
              array_push($froms,$_POST['from3']);
              array_push($tos,$_POST['to3']);
              array_push($grades,$_POST['grade3']);
            }
          }
        } 
      }
    }
    if(isset($_POST['title2']) && !empty($_POST['title2']))
    {
      if(isset($_POST['description2']) && !empty($_POST['description2']))
      {
        array_push($titles,$_POST['title2']);
        array_push($descriptions,$_POST['description2']);
      }
    }
    if(isset($_POST['title3']) && !empty($_POST['title3']))
    {
      if(isset($_POST['description3']) && !empty($_POST['description3']))
      {
        array_push($titles,$_POST['title3']);
        array_push($descriptions,$_POST['description3']);
      }
    }
  }
  else
  {
    header('location: /resumegenerator');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <title><?php echo ucwords($first_name). ' Resume'; ?></title>
</head>
<body>
  
<div class="grid-container">
  <div class="zone-1">
    <div class="toCenter">
      <img src="images/<?php echo $profile;?>" class="profile">
    </div>
    <div class="contact-box">
      <div class="title">
        <h2>Contact</h2>
      </div>
      <div class="call"><i class="fas fa-phone-alt"></i>
        <div class="text"><?php echo $phone;?></div>
      </div>
      <div class="email"><i class="fas fa-envelope"></i>
        <div class="text"><?php echo $email;?></div>
      </div>
    </div>
    <div class="personal-box">
      <div class="title">
        <h2>Skills</h2>
      </div>
      <?php 
      for($j=0; $j<count($skills); $j++){
          echo "<div class='skill-1'>
                  <p><strong>" . strtoupper($skills[$j]) . "</strong></p>
                  <div class='progress'>";
            for($i=0;$i<$skill_levels[$j];$i++){
              echo '<div class="fas fa-star active"></div>';
              
            }
            echo '</div></div>';

          }
      ?>
    </div>
    <div class="hobbies-box">
      <div class="title">
        <h2>Hobbies</h2>
      </div>
      <?php 
        foreach($hobbies as $hobby)
        {
          echo "<div class='d-flex align-items-center'>
          <div class='circle'></div>
          <div><strong>" . ucwords($hobby) . "</strong></div>
        </div>";
        }
      
      
      ?>
    </div>
  </div>
  <div class="zone-2">
    <div class="headTitle">
      <h1><?php echo ucwords($first_name);?><br><b><?php echo ucwords($last_name);?></b></h1>
    </div>
    <div class="subTitle">
      <h1><?php echo ucwords($profession);?><h1>
    </div>
    <div class="group-1">
      <div class="title">
        <div class="box">
          <h2>About Me</h2>
        </div>
      </div>
      <div class="desc"><?php echo $about_me;?></div>
    </div>
    <div class="group-2">
      <div class="title">
        <div class="box">
          <h2>Education</h2>
        </div>
      </div>
      <div class="desc">
        <?php 
          for($i=0; $i<count($institutes);$i++)
          {
            echo "<ul>
            <li>
              <div class='msg-1'>" . $froms[$i] . "-" . $tos[$i]. " | " . ucwords($degrees[$i]) . ", " . $grades[$i]. "</div>
              <div class='msg-2'>" . ucwords($institutes[$i]) . "</div>
            </li>
          </ul>";
          }
        ?>
      </div>
    </div>
    <div class="group-3">
      <div class="title">
        <div class="box">
          <h2>Experience</h2>
        </div>
      </div>
      <div class="desc">
      <?php 
          for($i=0; $i<count($titles);$i++)
          {
            echo "<ul>
            <li>
              <div class='msg-1'><br></div>
              <div class='msg-2'>" . ucwords($titles[$i]) ."</div>
              <div class='msg-3'>" . ucfirst($descriptions[$i]) . "</div>
            </li>
          </ul>";
          }
        ?>
      </div>
    </div>
  </div>
</div>
</body>
</html>
