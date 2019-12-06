<?
    include('../config/connection.php');

    $request      = $_POST['query'];
    $query_search = "SELECT * FROM blog WHERE title LIKE '%".$request."%'";

    $result = mysqli_query($db, $query_search);

    $data = array();

    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $data[] = $row["title"];
        }
        // echo json_encode($data);
    }else{
        $data = 'not-found';
    }
    echo json_encode($data);
?>