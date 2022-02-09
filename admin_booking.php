<?php

include 'config.php';
session_start();

if (isset($_SESSION['admin_id']) && isset($_SESSION['admin_username'])) {
  $sql1 = "SELECT users.username, booking_id, book_date, book_time, duration, category, total_amount, book_status, users.user_id FROM booking INNER JOIN users ON booking.user_id = users.user_id ";
  $result1 = mysqli_query($conn, $sql1);

  if (isset($_POST['update'])) {
    if (mysqli_num_rows($result1) > 0) {
      while ($row = mysqli_fetch_assoc($result1)) {

        $book_status = $_POST['update_status'];

        $sql2 = "UPDATE booking SET book_status = $book_status WHERE booking_id={$row['booking_id']}";
        $result2 = mysqli_query($conn, $sql2);

        header('location: admin_booking.php');
      }
    }
  }

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sports Complex</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
  </head>

  <body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
      <div class="container"><a class="navbar-brand" style="color: rgb(5,90,218);">AIO Sports Complex Booking System</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
          <ul class="navbar-nav me-auto">
            <li class="nav-item dropdown show"><a aria-expanded="true" data-bs-toggle="dropdown" class="dropdown-toggle nav-link" href="#" style="margin-left: 519px;">
                <?php if (isset($_SESSION['admin_username'])) {
                  echo "Hello ", $_SESSION['admin_username'];
                } ?></a>
              <div class="dropdown-menu" style="margin-left: 519px;"><a class="dropdown-item" href="admin_login.php">Logout</a></div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="highlight-clean" style="background: rgba(255,255,255,0.4);padding: 20px 0px;">
      <h2 class="text-center">Booking List</h2>
      <section class="login-clean" style="background: rgb(93,149,195);">
        <section>
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="text-center">Booking ID</th>
                <th scope="col" class="text-center">Booking Date</th>
                <th scope="col" class="text-center">Booking Time</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Duration (hours)</th>
                <th scope="col" class="text-center">Court</th>
                <th scope="col" class="text-center">Total Amount (RM)</th>
                <th scope="col" class="text-center">Status</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php

              if (mysqli_num_rows($result1) > 0) {
                while ($row = mysqli_fetch_assoc($result1)) {

              ?>
                  <tr>
                    <td class="py-0 px-1 text-center"><?php echo $row['booking_id'] ?></td>
                    <td class="py-0 px-1 text-center"><?php echo date("Y-m-d", strtotime($row['book_date'])) ?></td>
                    <td class="py-0 px-1 text-center"><?php echo $row['book_time'] ?></td>
                    <td class="py-0 px-1 text-center"><?php echo $row['username'] ?></td>
                    <td class="py-0 px-1 text-center"><?php echo $row['duration'] ?></td>
                    <td class="py-0 px-1 text-center"><?php

                                                      if ($row['category'] == 1)
                                                        $court = 'Badminton';
                                                      else if ($row['category'] == 2)
                                                        $court = 'Futsal';
                                                      else if ($row['category'] == 3)
                                                        $court = 'Tennis';

                                                      echo $court ?></td>
                    <td class="py-0 px-1 text-center"><?php echo $row['total_amount'] ?></td>
                    <td class="py-0 px-1 text-center">
                      <?php if ($row['book_status'] == 1) : ?>
                        <span class="badge bg-primary"><small>Booked</small></span>
                      <?php elseif ($row['book_status'] == 2) : ?>
                        <span class="badge bg-success"><small>Paid</small></span>
                      <?php elseif ($row['book_status'] == 3) : ?>
                        <span class="badge bg-danger"><small>Cancelled</small></span>
                      <?php else : ?>
                        <span class="badge bg-dark text-light"><small>Pending</small></span>
                      <?php endif; ?>
                    </td>

                    <td class="py-0 px-1 text-center">
                      <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle btn-sm rounded-0 py-0" data-bs-toggle="dropdown" aria-expanded="false">
                          Action
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                          <li><a class="dropdown-item update_data" data-toggle="modal" data-target="#exampleModalCenter" data-id='<?php echo $row['booking_id'] ?>' href="admin_booking.php?update=<?php echo $row['booking_id']; ?>">Update</a></li>
                          <li><a class="dropdown-item delete_data" data-id='<?php echo $row['booking_id'] ?>' href="delete_booking.php?delete=<?php echo $row['booking_id']; ?>">Delete</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>

                  <form method="POST" action="admin_booking.php">
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Update Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <select name="update_status" class="form-select" aria-label="Default select example">
                        <?php
                        if ($row['book_status'] == 0)
                          $book_status = 'Pending';
                        else if ($row['book_status'] == 1)
                          $book_status = 'Booked';
                        else if ($row['book_status'] == 2)
                          $book_status = 'Paid';
                        else if ($row['book_status'] == 3)
                          $book_status = 'Cancelled';
                      }
                    }
                        ?>
                        <option selected><?php echo $book_status ?></option>
                        <option value="0">Pending</option>
                        <option value="1">Booked</option>
                        <option value="2">Paid</option>
                        <option value="3">Cancelled</option>
                          </select>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
            </tbody>
            </div>
          </table>
        </section>
      </section>
    </section>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="assets/js/time.js"></script>
    <script src="assets/js/timepicker.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $('.update_status').click(function() {
        uni_modal_secondary('Update Status', "update_booking_status.php?id=<?php echo $book_id ?>&status=" + $(this).attr('data-status'))
      })
    </script>

  </body>


  </html>
<?php
} else {

  header("Location: admin_login.php");

  exit();
}
?>