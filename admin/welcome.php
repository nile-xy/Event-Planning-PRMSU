<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<body class="antialiased bg-gray-200">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="style.css">

<div class='all'>

  <div class='admin-header'>

    <div class='header-text'>
      <h3>Admin Panel </h3>

      <div class='header-greet'>
        <span><i class="fa">&#xf007;</i> Hello Ken</span>

        <a href='' class='logout-btn'><i class="fa">&#xf011;</i></a>
      </div>

    </div>
  </div>

  <div class='admin-sidebar'>

    <li>

      <input placeholder='Search...' class='search-input' type='search' /><input type='submit' id='search-btn-1' class='fa' value='&#xf002;' />

    </li>

    <li>

      <a href='#'><i class="fa">&#xf0e4;</i> Dashboard</a>

    </li>

    <li>

      <a href='#'><i class="fa">&#xf0c0;</i> Users</a>

    </li>

    <li>

      <a href='#'><i class="fa">&#xf055;</i> Add Update</a>

    </li>

    <li>

      <a href='#'><i class="fa">&#xf132;</i> Create Admin</a>

    </li>

    <span onclick="size()">
      <li id='all-nav' onclick="myFunction()">

        <a href='#' class='dropdown-btn'><i class="fa">&#xf05e;</i> check Reservation </a> <i class="fa fa-angle-down" aria-hidden="true"></i>

        <ul id='nav' class='second-nav-ul'>
          <li class='nav-items'>
            <a href='#'> Ips</a>
          </li>

        </ul>

      </li>

    </span>

    <li>

      <a href='#'><i class="fa">&#xf233;</i> Send Mail</a>

    </li>

  </div>

  <div class='center-content'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class='all-border'>

      <div class='shows-location'>

        <div class='location-text'>

          <span class='location'>Admin <i class="fa">&#xf101;</i> Dashboard</span>

        </div>

      </div>

      <section>

        <div class='site-info'>

          <div class='all-quick-info'>

            <div class='info-icon'><i class="fa">&#xf0c0;</i></div>

            <div class='text-right'>
              <div class='info-numbers'><span>15</span></div>
              <div>Users</div>
            </div>

            <div class='info-box-footer'>

              <a href='#' class='user-href'><span class="pull-left">View Details</span>

                <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

            </div>

          </div>

          <div style='background: #f0ad4e; border-color: #f0ad4e;' class='all-quick-info'>

            <div class='info-icon'> <i class="fa">&#xf132;</i></div>

            <div class='text-right'>
              <div class='info-numbers'><span>2</span></div>
              <div>Total Admins!</div>
            </div>

            <div class='info-box-footer'>

              <a href='#' class='user-href' style='color: #f0ad4e;'><span class="pull-left">View Details</span>

                <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

            </div>

          </div>

          <div style='background: #5cb85c; border-color: #5cb85c;' class='all-quick-info'>

            <div class='info-icon'> <i class="fa fa-envelope"></i></div>

            <div class='text-right'>
              <div class='info-numbers'><span>130</span></div>
              <div>Total Messages!</div>
            </div>

            <div class='info-box-footer'>

              <a href='#' class='user-href' style='color: #5cb85c;'><span class="pull-left">View Details</span>

                <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

            </div>

          </div>

          <div style='background: #ff5256; border-color: #ff5256;' class='all-quick-info'>

            <div class='info-icon'><i class="fa">&#xf05e;</i></div>

            <div class='text-right'>
              <div class='info-numbers'><span>15</span></div>
              <div>Failed Reservations</div>
            </div>

            <div class='info-box-footer'>

              <a href='#' class='user-href' style='color: #ff5256;'><span class="pull-left">View Details</span>

                <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

            </div>

          </div>

        </div>
        <div class='message-server'>
          <span class='warn-message'><i class="fa">&#xf071;</i></span>
          <span class='warn-message'>dashboard warning message!</span>
          <span class='right warn-message'><i class="fa fa-times"></i></span>
        </div>
        <div class='new-content-holder'>
          <div class='notifications'>
            <div class='notify-header'>
              <h2><i class="fa">&#xf0f3;</i> Notifications</h2>
              <div class='action-holder'>
                <i class="fa">&#xf106;</i> <i class="fa">&#xf013;</i>
              </div>
            </div>

            <div class='notify-box'>

              <div class='sender'>
                <img src='https://tinyurl.com/wnje5dc' width='30' align='middle'></img>
                <a href='#' title='view message'><span>Subic Reservation</span></a>
                <span class='mail-icon'><i class="fa fa-envelope"></i></span>
              </div>

            </div>
          </div>

          <div class='notifications'>
            <div class='notify-header'>
              <h2><i class="fa">&#xf0ac;</i> Localhost Address</h2>
              <div class='action-holder'>
                <i class="fa">&#xf106;</i> <i class="fa">&#xf013;</i>
              </div>
            </div>

            <div class='notify-box'>

              <div class='sender'>
                <span><i style="font-size:24px; color: grey" class="fa">&#xf0ac;</i></span>
                <span style='color: grey; font-size: 10px;'>192.168.0.0 / 20.4 GIB</span>
              </div>

            </div>
          </div>

          <div class='notifications'>
            <div class='notify-header'>
              <h2><i class="fa">&#xf233;</i> Server Info</h2>
              <div class='action-holder'>
                <i class="fa">&#xf106;</i> <i class="fa">&#xf013;</i>
              </div>
            </div>

            <div class='notify-box'>
              <span>60% / 70Â°F / 3.3 Ghz</span>
              <span style='float: right;'>CPU</span>
              <div class='fluff-grey'>
                <div class='fluff-blue' style="height:25px;width:60%">
                </div>
              </div>

              <span>25% / 4GB / (16GB)</span>
              <span style='float: right;'>MEM</span>
              <div class='fluff-grey'>
                <div class='fluff-blue' style="height:25px;width:25%">
                </div>
              </div>

              <span>70% / 100GB / 50GB</span>
              <span style='float: right;'>BANDWIDTH</span>
              <div class='fluff-grey'>
                <div class='fluff-blue' style="height:25px;width:70%">
                </div>
              </div>

              <span>10% / 100GB / 1TB</span>
              <span style='float: right;'>DISC SPACE</span>
              <div class='fluff-grey'>
                <div class='fluff-blue' style="height:25px;width:10%">
                </div>
              </div>

            </div>
          </div>

        </div>

        <div class='newest-members'>

          <div style='width: -webkit-fill-available;' class='notifications'>
            <div class='notify-header'>
              <h2><i class="fa">&#xf0c0;</i> Newest Reservation</h2>
              <div class='action-holder'>
                <i class="fa">&#xf106;</i> <i class="fa">&#xf013;</i>
              </div>
            </div>

            <div class='notify-box'>

              <table id="customers">
                <tr>
                  <th>Date</th>
                  <th>Username</th>
                  <th>IP</th>
                  <th>Venue</th>
                  <th>Actions</th>
                </tr>
                <tr>
                  <td>1 week ago</td>
                  <td>Arnel Mongoloid</td>
                  <td>127.0.0.1</td>
                  <td>Subic</td>
                  <td>
                    <a class='actions-btns' href='#'><i class="fa">&#xf040;</i></a>
                    <a class='actions-btns2' href='#'><i class="fa fa-times"></i></a>

                  </td>
                </tr>

              </table>
              <div class='view-all-members'>
                <span class='view-all-btn1'><a href='#'>View All reservations</a></span>
              </div>
            </div>
          </div>

        </div>

        <div class=''>

        </div>

      </section>

    </div>

  </div>

  
</html>

