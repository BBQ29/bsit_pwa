

<?php
include('fetch.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>BSIT3</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/circles/0.0.6/circles.min.js"></script>

    <style>
        @keyframes moveStripes {
            0% {
                background-position: 40px 0;
            }
            100% {
                background-position: 0 0;
            }
        }

        .progress-bar-striped.animated {
            background-size: 40px 40px;
            animation: moveStripes 1s linear infinite;
        }

		.glow {
			box-shadow: 0 0 10px , 0 0 20px #0000ff, 0 0 30px #0000ff;
		}

    </style>
</head>
<body>
    <div class="container">
        <div style="height:30px;"></div>
        <div class="well" style="margin:auto; padding:auto; width:auto;">
            <span style="font-size:25px; color:blue">
                <center class="animate__animated animate__pulse animate__infinite infinite">
                    <strong>Event-Driven Programming Progressive Web-Application</strong>
                </center>
            </span>

					<div class="card-columns">
						<div class="card">
							<div class="card-header"><h4>Total</h4></div>
							<div class="card-body">
								<h5 class="card-title"><?php echo $total_users; ?> [<?php echo round(($total_users / $total_users) * 100) . '%'; ?>]	</h5>
								<div class="progress">
									<div class="progress-bar bg-success progress-bar-striped animated glow rounded-pill" role="progressbar" style="width: <?php echo ($total_users / $total_users) * 100; ?>%" aria-valuenow="<?php echo ($total_users / $total_users) * 100; ?>" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header"><h4>Total Male</h4></div>
							<div class="card-body">
								<h5 class="card-title"><?php echo $male_users; ?> [<?php echo round(($male_users / $total_users) * 100) . '%'; ?>]</h5>
								<div class="progress">
									<div class="progress-bar bg-success progress-bar-striped animated glow rounded-pill" role="progressbar" style="width: <?php echo ($male_users / $total_users) * 100; ?>%" aria-valuenow="<?php echo ($male_users / $total_users) * 100; ?>" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<!-- Caption for progress bar -->
								<div class="progress-caption"></div>
							</div>
						</div>
					</div>

			<span class="pull-left animate__animated animate__bounce">
                <a href="#addnew" data-toggle="modal" class="btn btn-success">
                    <span class="glyphicon glyphicon-plus"></span> Add New
                </a>
            </span>
            <div style="height:50px;"></div>

            <!-- Your existing card-columns code here -->

            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Action</th>
                </thead>
                <tbody>
                <?php
                    include('conn.php');
                    
                    // Pagination settings
                    $limit = 10;
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $start = ($page - 1) * $limit;

                    $query = mysqli_query($conn, "SELECT * FROM `user` LIMIT $start, $limit");
                    while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo ucwords($row['firstname']); ?></td>
                            <td><?php echo ucwords($row['middlename']); ?></td>
                            <td><?php echo ucwords($row['lastname']); ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td>
                                <a href="#show_info<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-warning">
                                    <span class="glyphicon glyphicon-eye-open animate__animated animate__rubberBand animate__infinite infinite"></span> Show
                                </a> || 
                                <a href="#edit<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-primary animate__animated animate__jackInTheBox btn-edit">
                                    <span class="glyphicon glyphicon-edit animate__animated animate__swing animate__infinite infinite"></span> Edit
                                </a> || 
                                <a href="#del<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-danger animate__animated animate__headShake animate__infinite infinite">
                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                </a>
                                <?php include('button.php'); ?>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
                </tbody>
            </table>

            <!-- Pagination links -->
            <ul class="pagination">
                <?php
                    $result_db = mysqli_query($conn, "SELECT COUNT(userid) FROM user");
                    $row_db = mysqli_fetch_row($result_db);
                    $total_records = $row_db[0];
                    $total_pages = ceil($total_records / $limit);

                    for ($i = 1; $i <= $total_pages; $i++) {
                        // Add active class to the current page
                        $active = ($i == $page) ? "active" : "";
                        echo "<li class='page-item $active'><a class='page-link' href='index.php?page=" . $i . "'>" . $i . "</a></li>";
                    }
                ?>
            </ul>
        </div>
        <?php include('add_modal.php'); ?>
    </div>
</body>
</html>
