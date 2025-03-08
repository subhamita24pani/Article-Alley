<?php
require_once "dbconnect.php";

function addData($user,$title,$date,$image,$content){
    global $conn;
    try{
        $qry = "INSERT INTO blog_images (username,title,date,image,content) VALUES(?,?,?,?,?)";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param("sssss",$user,$title,$date,$image,$content);
        $res = $stmt->execute();
        if(!$res){
            echo $conn->error;
            return false;
        }
        return $res;
    }catch(Exception $e){
        die($e->getMessage());
    }finally{
        $conn->close();
    }
}
function myImages($user){
    global $conn;
    try{
          $qry = "SELECT * FROM blog_images WHERE username =?";
          $stmt = $conn->prepare($qry);
          $stmt->bind_param("s",$user);
          $res = $stmt->execute();
          if(!$res){
            echo $conn->error;
            return false;
          }
          $res = $stmt->get_result();
          if($res->num_rows>0){
            $result = [];
           while($row=$res->fetch_assoc()){
                  $result[]=$row;
            }
            return $result;
        } else{
            return false;
        }
    }catch(Exception $e){
        die($e->getMessage());
    }finally{
        $conn->close();
    }
}

function addUser($username,$email, $password){
    global $conn;
    try {
        $qry = "INSERT INTO blog(username,email,password) VALUES(?,?,?)";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param("sss", $username,$email,$password);
        $res = $stmt->execute();
        if(!$res){
            echo $conn->error;
        }
        return $res;
    } catch (Exception $e) {
        die($e->getMessage());
    } finally{
        $conn->close();
    }
}
function login($username, $password){
    global $conn;
    try{
        $qry="SELECT * FROM blog WHERE username=? and password=?";
        $stmt=$conn->prepare($qry);
        $stmt->bind_param("ss",$username,$password);
        $res=$stmt->execute();
        if(!$res){
            echo $conn->error;
            return false;
        }
        $res=$stmt->get_result();
        if($res->num_rows>0){
          $result = $res->fetch_assoc();
          return $result;
        } else{
            return false;
        }
    } catch(Exception $e) {
        die($e->getMessage());
    } finally{
        $conn->close();
    }
}
function getblogbyID($id){
    global $conn;
    try{
          $qry = "SELECT username,title,date,image,content FROM blog_images WHERE id =?";
          $stmt = $conn->prepare($qry);
          $stmt->bind_param("i",$id);
          $res = $stmt->execute();
          if(!$res){
            echo $conn->error;
            return false;
          }
          $res = $stmt->get_result();
          if($res->num_rows>0){
              $row=$res->fetch_assoc();
              return $row;
        } else{
            return false;
        }
    }catch(Exception $e){
        die($e->getMessage());
    }finally{
        $conn->close();
    }
}
function display(){
    global $conn;
    try {
        $qry = "SELECT * FROM blog_images";
        $stmt = $conn->prepare($qry);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if($result->num_rows > 0){
            return $result;
        } else {
            return false;
        }
    } catch (Exception $e) {
        die($e->getMessgae());
    } finally{
        $conn->close();
    }
}
function deleteBlog($id)
{
    global $conn;
    try{
        $qry = "DELETE FROM blog_images WHERE id = ?";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        if($conn->affected_rows>0)
        {
            return true;
        }else{
            return false;
        }
    }catch (Exception $e) {
        die($e->getMessgae());
    } finally{
        $conn->close();
    }
}
?>