<a class="student-card" id="studentCard" href="student_info.php?id=<?php echo $row['id'] ?>">
            <div class="card mt-3" id="card">
                <div class="card-header">
                    <p>Name : <?php echo $row['firstname']; echo " "; echo $row['lastname']; ?></p>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote">
                        <p>Phone No : <?php echo $row['phonenumber'] ?></p>
                    </blockquote>
                </div>
            </div>
        </a>        


    window.location = "student_info.php?id=<?php $row = mysqli_fetch_assoc($result2); echo +$row['id'] ?>"
