<?php
  include 'php/includes/session.php';

  include 'php/list.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>SignIn / SignUp</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>
  <body>
    <nav class="nav-extended light-blue lighten-1">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">Logo</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li>Welcome <?php echo $_SESSION['login_user'];?></li>
          <li><a href="php/logout.php">Logout</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li>Welcome <?php echo $_SESSION['login_user'];?></li>
          <li><a href="php/logout.php">Logout</a></li>
        </ul>
      </div>
      <div class="nav-content container">
        <ul class="tabs tabs-transparent">
          <li class="tab"><a href="#cust">Customer Deatils</a></li>
          <li class="tab"><a href="#trans">Transactions</a></li>
        </ul>
      </div>
    </nav>

    <div class="row">
      <div class="col s2"></div>

      <!-- Create -->
      <div id="cust" class="col s8">
        <form method="post" action="php/create.php">
          <table class="bordered">
            <thead>
              <th><h4>Profile</h4></th>  
            </thead>
            <tbody>
              <tr>
                <td>User - ID</td>
                <td>
                    <p id="id"> <?php echo $list_array['Id']; ?> </p>
                </td>
              </tr>
              <tr>
                <td>Account Number</td>
                <td>
                    <p id="accountno"> <?php echo $list_array['accountno']; ?> </p>
                </td>
              </tr>
              <tr>
                <td>User Name</td>
                <td>
                    <p id="name"> <?php echo $list_array['name']; ?> </p>
                </td>
              </tr>
              <tr>
                <td>Bank</td>
                <td>
                    <p id="bank"> <?php echo $list_array['bank']; ?> </p>
                </td>
              </tr>
              <tr>
                <td>Branch of the Bank</td>
                <td>
                    <p id="branch"> <?php echo $list_array['branch']; ?> </p>
                </td>
              </tr>
              <tr>
                <td>Mobile Number</td>
                <td>
                    <p id="mobileno"> <?php echo $list_array['mobileno']; ?> </p>
                </td>
              </tr>
              <tr>
                <td>Address</td>
                <td>
                    <p id="address"> <?php echo $list_array['address']; ?> </p>
                </td>
              </tr>
              <tr>
                <td>Email-ID</td>
                <td>
                    <p id="email"> <?php echo $list_array['emailid']; ?> </p>
                </td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
      <div id="trans" class="col s8">
        <div class="row">
          <form class="col s12" action="php/getotp.php" method="post">
            <div class="row">
              <div class="input-field col s12">
                <input id="rec_accno" name="rec_accno" type="text" required="" aria-required="true" class="validate">
                <label for="rec_accno">Account Number</label>
              </div>
              <div class="input-field col s8"></div>
              <div class="input-field col s4">
                <button class="btn waves-effect waves-light" type="submit" name="action">Get OTP
                  <i class="material-icons right">done</i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <footer class="page-footer orange">
      <div class="footer-copyright">
        <div class="container">
        Made by <a class="orange-text text-lighten-3" href="">Materialize</a>
        </div>
      </div>
    </footer>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
  </body>
</html>
