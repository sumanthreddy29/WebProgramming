<?php 
   /* require('service.php'); 
    session_start();
    $username = $_SESSION['username'];  
    $email = $_SESSION['email'];
    $message = "";
    if(isset($_POST['addRide'])){
        $source =  $_POST['source'];
        $destination = $_POST['destination'];
        $date =  $_POST['event'];
        $time =  $_POST['time'];
        $seats = $_POST['seats'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        
        $query = "INSERT INTO rides (riderName,emailid,source,destination,travelDate,travelTime,seats) VALUES ('$username','$email','$source','$destination','$date','$time','$seats')";
        $data = mysqli_query($conn,$query) or die(mysqli_error($conn));
        if($data){
            $message = 'Ride Details Added';
        }
    }*/
?>


        <section class="main-content">

            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-12 col-xs-12">

                        <div class="page-sub-title textcenter">
                            <h2>Add new ride</h2>
                            <div class="line"></div>
                        </div><!-- end .page-sub-title -->

                    </div><!-- end .col-lg-12 -->
                    <?php /*if($message != ''){echo $message;}*/ ?>
                    <div class="col-sm-12 col-md-12 col-xs-12">

                        <div class="page-content add-new-ride">

                            <form action="#" method="post" novalidate autocomplete="off" class="idealforms add-ride">

                                <div class="field">
                                  <select id="destination" name="source">
                                    <option value="default">From</option>
                                    <option value="Charlotte">Charlotte</option>
                                    <option value="Virginia">Virginia</option>
                                    <option value="Florida">Florida</option>
                                    <option value="New York">New York</option>
                                    <option value="Texas">Texas</option>
                                    <option value="Atlanta">Atlanta</option>
                                  </select>
                                </div>

                                <div class="field">
                                    <select id="destination" name="destination">
                                        <option value="default">To</option>
                                        <option value="Charlotte">Charlotte</option>
                                        <option value="Virginia">Virginia</option>
                                        <option value="Florida">Florida</option>
                                        <option value="New York">New York</option>
                                        <option value="Texas">Texas</option>
                                        <option value="Atlanta">Atlanta</option>
                                    </select>
                                </div>

                                <div class="field">
                                    <input name="event" type="text" placeholder="Date" class="datepicker">
                                </div>

                                <div class="field">
                                    <input name="time" type="text" placeholder="Time">
                                </div>

                                <div class="field">
                                    <select id="destination" name="seats">
                                        <option value="default">Number of seats</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <input name="username" type="hidden" value="<?php //echo $username;?>">
                                <input name="email" type="hidden" value="<?php //echo $email; ?>">

                                <div class="field buttons">
                                    <button type="submit" name="addRide" class="btn btn-lg green-color">Submit</button>
                                </div>

                            </form>

                        </div><!-- end .page-content -->

                    </div><!-- end .col-sm-12 -->

                </div><!-- end .row -->
            </div><!-- end .container -->

        </section><!-- end .main-content -->