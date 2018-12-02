<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="พรีม่า มาย่า พรีมาย่า primaya">
    <meta name="author" content="PRIMAYA">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>PRIMAYA - Member management</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>ลงทะเบียนตัวแทน</h4>
                                <form name="Register" method="post" action="registered.php">
                                    <div class="form-group">
                                        <label>ชื่อ</label>
                                        <input name="txtFirstname" type="text" class="form-control input-rounded" placeholder="First name">
                                    </div>
                                    <div class="form-group">
                                        <label>นามสกุล</label>
                                        <input name="txtLastname" type="text" class="form-control input-rounded" placeholder="Last name">
                                    </div>
                                    <div class="form-group">
                                        <label>วัน/เดือน/ปีเกิด <font size="1px" color="red"> (ไม่สามารถแก้ไขได้ภายหลัง)</font></label><br>
                                        <select name='bday' id='dayddl'>
                                          <option value='1'>1</option>
                                          <option value='2'>2</option>
                                          <option value='3'>3</option>
                                          <option value='4'>4</option>
                                          <option value='5'>5</option>
                                          <option value='6'>6</option>
                                          <option value='7'>7</option>
                                          <option value='8'>8</option>
                                          <option value='9'>9</option>
                                          <option value='10'>10</option>
                                          <option value='11'>11</option>
                                          <option value='12'>12</option>
                                          <option value='13'>13</option>
                                          <option value='14'>14</option>
                                          <option value='15'>15</option>
                                          <option value='16'>16</option>
                                          <option value='17'>17</option>
                                          <option value='18'>18</option>
                                          <option value='19'>19</option>
                                          <option value='20'>20</option>
                                          <option value='21'>21</option>
                                          <option value='22'>22</option>
                                          <option value='23'>23</option>
                                          <option value='24'>24</option>
                                          <option value='25'>25</option>
                                          <option value='26'>26</option>
                                          <option value='27'>27</option>
                                          <option value='28'>28</option>
                                          <option value='29'>29</option>
                                          <option value='30'>30</option>
                                          <option value='31'>31</option>
                                        </select> /
                                        <select name='bmonth' id='monthddl'>
                                          <option value='1'>1</option>
                                          <option value='2'>2</option>
                                          <option value='3'>3</option>
                                          <option value='4'>4</option>
                                          <option value='5'>5</option>
                                          <option value='6'>6</option>
                                          <option value='7'>7</option>
                                          <option value='8'>8</option>
                                          <option value='9'>9</option>
                                          <option value='10'>10</option>
                                          <option value='11'>11</option>
                                          <option value='12'>12</option>
                                        </select> /
                                        <select name='byear' id='blah'>
                                          <option value='1955'>1955</option>
                                          <option value='1956'>1956</option>
                                          <option value='1957'>1957</option>
                                          <option value='1958'>1958</option>
                                          <option value='1959'>1959</option>
                                          <option value='1960'>1960</option>
                                          <option value='1961'>1961</option>
                                          <option value='1962'>1962</option>
                                          <option value='1963'>1963</option>
                                          <option value='1964'>1964</option>
                                          <option value='1965'>1965</option>
                                          <option value='1966'>1966</option>
                                          <option value='1967'>1967</option>
                                          <option value='1968'>1968</option>
                                          <option value='1969'>1969</option>
                                          <option value='1970'>1970</option>
                                          <option value='1971'>1971</option>
                                          <option value='1972'>1972</option>
                                          <option value='1973'>1973</option>
                                          <option value='1974'>1974</option>
                                          <option value='1975'>1975</option>
                                          <option value='1976'>1976</option>
                                          <option value='1977'>1977</option>
                                          <option value='1978'>1978</option>
                                          <option value='1979'>1979</option>
                                          <option value='1980'>1980</option>
                                          <option value='1981'>1981</option>
                                          <option value='1982'>1982</option>
                                          <option value='1983'>1983</option>
                                          <option value='1984'>1984</option>
                                          <option value='1985'>1985</option>
                                          <option value='1986'>1986</option>
                                          <option value='1987'>1987</option>
                                          <option value='1988'>1988</option>
                                          <option value='1989'>1989</option>
                                          <option value='1990'>1990</option>
                                          <option value='1991'>1991</option>
                                          <option value='1992'>1992</option>
                                          <option value='1993'>1993</option>
                                          <option value='1994'>1994</option>
                                          <option value='1995'>1995</option>
                                          <option value='1996'>1996</option>
                                          <option value='1997'>1997</option>
                                          <option value='1998'>1998</option>
                                          <option value='1999'>1999</option>
                                          <option value='2000' selected>2000</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>อีเมล์</label>
                                        <input name="txtEmail" type="email" class="form-control input-rounded" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>รหัสผ่าน</label>
                                        <input name="txtPassword" type="password" class="form-control input-rounded" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label>PMC</label>
                                        <input name="txtPMC" type="text" class="form-control input-rounded" placeholder="Primaya Member Code">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-rounded m-b-30 m-t-30">ลงทะเบียน</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p>เคยลงทะเบียนแล้ว? <a href="login.php"> เข้าสู่ระบบ</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>
