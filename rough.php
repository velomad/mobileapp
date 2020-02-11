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


    CREATE TABLE `studentinfo` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `firstname` varchar(255) NOT NULL,
 `lastname` varchar(255) NOT NULL,
 `gender` varchar(11) NOT NULL,
 `selectstandard` varchar(255) NOT NULL,
 `selecthouse` varchar(255) NOT NULL,
 `phonenumber` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1



CREATE TABLE `studentinfo` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
  `schoolid` int(11) NOT NULL,
 `firstname` varchar(255) NOT NULL,
 `lastname` varchar(255) NOT NULL,
 `gender` varchar(11) NOT NULL,
 `selectstandard` varchar(255) NOT NULL,
 `selecthouse` varchar(255) NOT NULL,
 `phonenumber` int(11) NOT NULL,
 PRIMARY KEY (`id`),
  FOREIGN KEY (schoolid) REFERENCES projects (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1
