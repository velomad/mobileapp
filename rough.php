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


create TABLE sizeinfo (
id int(11) AUTO_INCREMENT PRIMARY KEY NOT null,
    stud_id int(11),
    item_name varchar(255) not null,
    size int(11) not null,
    quantity int(11) not null,
    FOREIGN key (stud_id) REFERENCES studentinfo (id)
);


$sql3 = "INSERT INTO sizeinfo (stud_id, item_name, size, quantity) VALUES ('$id','$itemname','$selectsize','$quantity')";

<!-- mutiinsert rows using single query -->

$sqlInsert   = '';
$countOfData = count($splitLabel);
for ($i = 0; $i < $countOfData; $i++){
    $sqlInsert .= "('{$last_id}', '{$splitLabel[$i]}'),";
}
$sqlInsert = rtrim($sqlInsert, ',');//remove the extra comma
if ($sqlInsert) {
    $sql = "INSERT INTO label (item_id, label) VALUES {$sqlInsert} ;";
    $result = mysqli_query($conn, $sql);
}



<?php

// an array items to insert
$array = array( 'dingo'       => 'A native dog',
        'wombat'      => 'A native marsupial',
        'platypus'    => 'A native monotreme',
        'koala'       => 'A native Phascolarctidae'
        );

// begin the sql statement
$sql = "INSERT INTO test_table (name, description ) VALUES ";

// this is where the magic happens
$it = new ArrayIterator( $array );

// a new caching iterator gives us access to hasNext()
$cit = new CachingIterator( $it );

// loop over the array
foreach ( $cit as $value )
{
    // add to the query
    $sql .= "('".$cit->key()."','" .$cit->current()."')";
    // if there is another array member, add a comma
    if( $cit->hasNext() )
    {
        $sql .= ",";
    }
}

// for subtracting current qty with the value which user issues

$getQty = "SELECT * FROM sizeinfo WHERE stud_id = $last_id";
$resultQty = mysqli_query($conn, $getQty);

$n = 1;
while( $roww = mysqli_fetch_assoc($result)){ 
    while($rowQty = mysqli_fetch_assoc($resultQty)){
        echo $answer = ($roww['p'.$n] - $rowQty['quantity']);
    }
    $n++;
}

print_r($answer);
exit;



