
      <?php
         require_once '../includes/config.php';

     if (isset($_GET['id']) && isset($_GET['action'])) {

          $id = $_GET['id'];
          $action = $_GET['action'] == '1' ? 'Approved' : 'Pending';
          
          if($action == 'Approved') $action = 1; else $action = 0;

          $query = "UPDATE hire SET status = $action WHERE hire_id = '$id'";
          $result = $conn->query($query);
          var_dump($result);
          
          //header('Location: index.php');
      }
      ?>
