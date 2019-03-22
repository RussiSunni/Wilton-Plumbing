<?php
    include "header.php";
?>

    <div class="container">
        <section >
            <div class="row">
                <h1>Contact Us</h1>
            </div>
            <div class="row mt-3">
                <p class="bubble">For general inquiries please feel free to contact us using the form
                    below. For emergencies give us a
                    call on 076 471 9341</p>
                <ul class="list-group mt-2">
                    <li class="list-group-item list-group-item-info">Phone: 021 761 6679</li>
                    <li class="list-group-item list-group-item-info">Mobile: 076 471 9341 - David Wilton</li>
                    <li class="list-group-item list-group-item-info">Email: wiltonplumbing123@gmail.com</li>
                </ul>

            </div>
        </section>

        <hr>

        <section>
            <div class="row justify-content-center">
                <form id="contact">
                    <div class="form-group row">
                       
                        <div class="col">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="exampleFormControlSelect1">Inquiring about *</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Installation</option>
                            <option>Leak</option>
                            <option>Billing</option>
                            <option>General</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">How did you hear about us?</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Word of Mouth</option>
                            <option>Google</option>
                            <option>Social Media</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>

    </div>

<?php
    include "footer.php";
?>




<html>

   <body>
      <?php
         
    
         $fname = $sname = $id = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fname = test_input($_POST["fname"]);
            $sname = test_input($_POST["sname"]);
            $id = test_input($_POST["id"]);

         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
   
    
      <form method = "post" action = "contact.php">
         <table>
            <tr>
               <td>firstname:</td> 
               <td><input type = "text" name = "fname"></td>
            </tr>
            
            <tr>
               <td>surname:</td>
               <td><input type = "text" name = "sname"></td>
            </tr>
            
            <tr>
               <td>ID:</td>
               <td><input type = "text" name = "id"></td>
            </tr>
            
            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Submit"> 
               </td>
            </tr>
         </table>
      </form>
      
      <?php
 
        // connect to db
        $servername = "localhost";
        $username = "root";
        $password = "Shukuk@1";
        $dbname = "wilton-plumbing";


        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        echo "Connected successfully";


        // get the form values
        $sql = "INSERT INTO email (firstname, lastname, email)
        VALUES ('".$fname."', '".$sname."', '".$id."')";




        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


        $conn->close();

      ?>
      
   </body>
</html>
