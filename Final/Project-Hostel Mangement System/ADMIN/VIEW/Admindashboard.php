<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../CSS/admindaashboard.css">
</head>
<body>
    <div class="panel">

    <h2>HMS Admin</h2>

</div>
<div class="sidebar">
    <nav class="links"></nav>
        <ul id="navlist">
           <button type="submit" id="dashboard" onclick="window.location.href='Admindashboard.php'">Dashboard</button>
           <button type="submit" id="manageusers" onclick="window.location.href='ManageUsers.php'">Manage Users</button>
           <button type="submit" id="assignstaff" onclick="window.location.href='ManageHostels.php'">Assign staff</button>
           <button type="submit" id="managebookings" onclick="window.location.href='ManageBookings.php'">Room & Bookings</button>
           <button type="submit" id="complaints" onclick="window.location.href='ManageComplaints.php'">Complaints</button>
           <button type="submit" id="notices" onclick="window.location.href='ManageNotices.php'">Notices</button>
           <button type="submit" id="Student-feedback" onclick="window.location.href='ManageFeedback.php'">Student Feedback</button>
              <button type="submit" id="logout" onclick="window.location.href='Login.php'">Logout</button>
        </ul>
    </nav>

    </div>
    
</body>
</html>