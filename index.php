<!DOCTYPE html>
<html>
    <head><title>Resume</title>
    <link rel="stylesheet" href="styles.css">

</head>

     <body>
     
       <?php
       $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
       $cleardb_server = $cleardb_url["host"];
       $cleardb_username = $cleardb_url["user"];
       $cleardb_password = $cleardb_url["pass"];
       $cleardb_db = substr($cleardb_url["path"],1);
       $active_group = 'default';
       $query_builder = TRUE;
       
      $connect = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db)
      or exit("Error from Database Connection");
         $regError= array();
         $regSuccess = array();
            
         if(isset($_POST['submit'])){
             $firstname = $_POST['firstname'];
             $lastname = $_POST['lastname'];
             $question = $_POST['question'];

             if(empty($firstname)){
               $regError[] = "Please Enter your Firstname in the Contact Section".'<br>';
             }
             if(empty($lastname)){
                $regError[] = "Please Enter your Lastname in the Contact Section".'<br>';
              }
              if(empty($question)){
                $regError[] = "Please Enter your Question in the Contact Section".'<br>';
              }
              if(empty($regError)){
                $query = "INSERT INTO resume(firstname, lastname, question) VALUES('$firstname', '$lastname', 
                '$question')"; 

              $result = mysqli_query($connect,$query)
             or exit("Error in Table");
              
              
             if ($result) {
                $regSuccess[] = "Thanks For Contacting Me!";
             }
            else{
                
            }
        
            }
            mysqli_close($connect);
        }
       
       ?>

         <div>
         <div class="contact">
                          <?php
                      for($j=0; $j<count($regSuccess); $j++){
                        echo $regSuccess[$j];
                      }
                    for($i=0; $i<count($regError); $i++){
                        echo $regError[$i];
                    }
                      ?>
                      </div>
            <span><p>Hi, my name is</p></span>
            <span><h1>Inioluwa Alake</h1></span>
            <span class="dev"><h1>I am a Backend web developer.</h1></span>
            <span>I build and maintain the technology needed to power the components which enable the user-facing side of the website to exist.
                This includes the core application logic, databases, data and application integration, API and other back end processes. 
            </span> 
                <br>
                <button class="mail"><a href="mailto:inioluwa.eng@gmail.com">Send Me a Mail!</a></button>
         </div>

         <div>
             <div>
                 <h3>01. About Me</h3>
                 <h5>Education</h5>
                 <p>Babcock University(2019-2023)</p>
                 <p>Bachelor's Degree in Software Engineering</p>
                     <h5>Skills</h5>
                     <ul>
                       <li> Well organized, detail oriented, ability to multi-task, excellent time-management, planning and prioritization</li> 
                       <li> Knowledge of Mobile web development or cloud app development</li> 
                        <li> in the use of version control / source code management tools </li>
                           <li>Excellent communication skills, both verbal and written</li> 
                          <li>Experience in writing re-usable unit test documents</li>
                        </ul>
                         <p>Here are a few Technologies i've worked with</p>
                         <ol>
                             <li>PHP</li>
                             <li>Javascript</li>
                             <li>CSS</li>
                             <li>HTML</li>
                        </ol>
             </div>

             <div>
                 <h3>02. Where I've Worked</h3>
                 <p>Web Developer(Backend) Intern</p>
            
                  <div> 
                      <p><a href="http://zuri.team"> 
                 <img src="https://internship.zuri.team/static/media/logo.36d2d48a.svg" alt="zuri logo"></a>
                 click on the logo for more info about Zuri Company</p>
                 </div> 
                   
                 <ul>
                 <li>Integration of front-end element created by front-end developers</li>
                 <li> Maintains professional and technical knowledge by attending educational workshops; reviewing professional publications; 
                establishing personal networks; benchmarking current practices; participating in professional societies</li>
                 <li>PHP- Web App Development to create enterprise web portal. 80% New/ 20% sustainment (some legacy PHP Apps)</li> 
                 <li>Work closely with Project Manager and Team Leads on change request functions</li>  
                 <li>Performs technical analyses for development of new features</li> 
                 <li>Develops new and maintains existing applications</li> 
                 <li>Develops integration of the core systems or external applications via the Enterprise Service Bus (ESB)</li> 
                </ul>
                    </div>

                    <div>
                      <h3>03. Contact Me!</h3>
                      
                        
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                            <label for="firstname">FirstName:</label><br>
                            <input type="text" name="firstname"><br>
                            <label for="lastname">LastName:</label><br>
                            <input type="text" name="lastname"><br>
                            <label for="question">Question:</label><br>
                            <textarea name="question" id="question" cols="30" rows="10"></textarea>
                            <input type="submit" name="submit" value="Send Your Message">
                        </form>
                    </div>
         </div>
     </body>
</html>