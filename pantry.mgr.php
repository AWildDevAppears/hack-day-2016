<?php
    define(HOST, '127.0.0.1');
    define(USERNAME,'[username]');
    define(PASSWORD, '[password]');
    define(DB, '[db]');

   function put_pantry($query) {
        // Create connection
        $conn = new mysqli(HOST, USERNAME, PASSWORD, DB);

        if ($conn->connect_error) {
            echo "Connection failed: " . $conn->connect_error;
            return;
        }

        $sql = "INSERT INTO Pantry (name, amount, amount_type) VALUES (" . $query . ")";
        $conn->query($sql);
        $conn->close();
   }

   function get_pantry() {



        // Create connection
        $conn = new mysqli(HOST, USERNAME, PASSWORD, DB);
        // Check connection
        if ($conn->connect_error) {
            echo "Connection failed: " . $conn->connect_error;
            return;
        }

        $sql = "SELECT name, amount, amount_type FROM Pantry";
        $res=[];
        $result=$conn->query($sql);

         while ($row = $result->fetch_assoc()) {
                array_push($res,
                array(
                    "name" => $row["name"],
                    "amount"=> $row["amount"],
                    "amount_type"=>$row["amount_type"],
                ));
        }

        $conn->close();

        return $res;
   }
?>
