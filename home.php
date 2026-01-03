<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>home page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    </head>
    <body>
        <header>
        <h1>Technology Clube</h1>
        <p>Welcome to the Technology Clube </p>
        </header>
        <div class="content">
            <h3><i class="fas fa-pen-nib"></i> Join To Our Clube</h3>
            <p>Join our technology club to stay updated with the latest trends and innovations in technology. </br> 
            Connect with like-minded individuals and participate in exciting projects and events.</p>
          
            <form action="insert.php" method="POST">
            <div class="input-group">
                <label>Student First Name</label>
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Enter your name" required>
            </div>
            <div class="input-group">
                <label>Student Last Name</label>
                <i class="fas fa-user"></i>
                <input type="text" name="last_name" placeholder="Enter your last name" required>
            </div>
            <div class="input-group">
                <label>Student ID</label>
                <i class="fas fa-map-marker-alt"></i>
                <input type="text" name="student_id" placeholder="Enter your student ID" required>
            </div>
            <div class="input-group">
                <label>Department</label>
                <i class="fas fa-tree"></i>
                <input type="text" name="department" placeholder="Enter your department" required>
            </div>
            <div>
                <label>Year of Study</label>
                <i class="fas fa-calendar-alt"></i>
                <input type="text" name="year_of_study" placeholder="Enter your year of study" required>
            </div>
            <button type="submit" name="submit">
                Submit Record <i class="fas fa-arrow-right"></i>
            </button>
        </form>
    </div>
        </div>
    </body>
</html>
