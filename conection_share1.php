<?php
class Database{
    private $dbhost='localhost';
    private $dbuser='root';
    private $dbpass='';
    private $dbname='test_suvo'; // change here...put database name

    private $conn=false;
    private $object='';
    private $result=array();
    public function __construct()
    {
       if(!$this->conn){
        $this->object=new mysqli($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);
        // this->object is the name of object of class mysqli.
        $this->conn=true;
        if($this->object->connect_error){
            echo "something wrong database could not connect";
            return false;
            // that mean connection could not eastablish due to some problem;
        }
         // that mean successfully connect with database;
       } 
       else{
        return true; // that mean connection already eastablish;
       }
    }

    public function query1($sql){
       $query=$this->object->query($sql);
       // we run the query and we get some result and store into $query variable .
       $this->result=$query->fetch_all(MYSQLI_ASSOC);
       // then we fetch all in the form of associative array and sore inside an array
       //  name is result variable.
       echo "<br>";
       print_r($this->result);
       // we print the array 
      foreach($this->result as $v1){
        foreach($v1 as $key=>$value){
            echo "<br>".$key." : ".$value;
        }
      }
      
      $this->table_exist_or_not('user_db');
    }

    private function table_exist_or_not($table){
        // here we check if the table is present in the db or not.
        $table_in_db=$this->object->query("SHOW TABLES FROM $this->dbname LIKE '$table'");
        if($table_in_db->num_rows==1){
            // echo '<br>'." table found.<br>";
            return true;
        }else{
            // echo '<br>'." table not found.<br>";
            return false;
        }
       
    }

    public function select($table,$rows='*',$condition=null,$order=null,$limit=null){
        // echo "<br>"."-----------select command-------------"."<br>";
        if($this->table_exist_or_not($table)){ //1. at first we check wheather table is present
            // or not in database

            $select_command="select $rows from $table";
            //2. make a simple select command without any condition

            if($condition!=null){
                $select_command=$select_command." where $condition";
                //2.1 if condition not equall null then update select command. 
            }
            if($order!=null){

                $select_command=$select_command." order by $order";
                //2.2 if order not equall null then update select command. 
                // echo $select_command;
            }
            if($limit!=null){
                $select_command=$select_command." limit $limit";
                //2.3 if limit not equall null then update 
            }

            $var=$this->object->query($select_command);
            // 3. run the command 

            $this->result=$var->fetch_all(MYSQLI_ASSOC);
            //4. store all the value in form of associative array into result variable.

            // echo "<pre>";
            // print_r($this->result);
            // echo "</pre>";
            return $this->result;
        }else{
            echo "table not found";
        }
        // echo "<br>"."----------select command---------------"."<br>";
    }

    public function insert($table,$array=array()){
        if($this->table_exist_or_not($table)){ //1. at first we check wheather table 
            //is present or not in database.if present then....

          
            $column=implode(",",array_keys($array)); //1.2 we will treat array keys as column.
           
            $value=implode("','",array_values($array));//1.3 we will treat array values as value.
            
            $insert="INSERT INTO $table($column) VALUES ('$value')";
            //1.4 then we write insert command.
            // echo "<br>".$insert;


            if($this->object->query($insert)){
                // echo "<br>";
                array_push($this->result,$this->object->insert_id);
                return $this->result; 
                // echo "<script> alert('1 row inserted.') </script>";
                // echo "<br>"."          1 row inserted      "."<br>";
            }
            else{
                array_push($this->result,$this->object->error);
                // echo "<br>"."         some-thing wrong      "."<br>";
                echo "<script> alert('something went wrong.') </script>";
            }
        }
    }

    public function update($table,$array=array(),$condition=null){
        if($this->table_exist_or_not($table)){ //1. at first we check wheather table 
            //is present or not in database.if present then....

            
            $ab=array(); // we take another array for storing all the values
            foreach($array as $key=>$value){
                $ab[]="$key = '$value'";// then we appaend the value into $ab array
                //in form of  key='value'.
            }
            $update_command="update $table set ".implode(',',$ab);
            // then we make update command
            if($condition!=null){
                $update_command.=" where $condition";// then we add condition
            }
            // echo "<br>";
            // echo $update_command; //*****/ this if final update command
            if($this->object->query($update_command)){
                    
                    array_push($this->result,$this->object->affected_rows);
                    echo "<script> alert('successfully updated.') </script>";
                }
                else{
                    array_push($this->result,$this->object->error);
                    // echo "<br>"."         some-thing wrong      "."<br>";
                    echo "<script> alert('something went wrong.') </script>";
                }
        }
    }

    public function delete($table,$condition=null){
        if($condition!=null){
            if($this->table_exist_or_not($table)){
                $delete="delete from $table where $condition";
                // echo $delete;
                if($this->object->query($delete)){
                    // echo "<br>";
                    array_push($this->result,$this->object->affected_rows);
                    // echo "<br>"."          1 row delete      "."<br>";
                    echo "<script> alert('successfully delete.') </script>";
                }
                else{
                    array_push($this->result,$this->object->error);
                    // echo "<br>"."         some-thing wrong      "."<br>";
                    echo "<script> alert('something went wrong.') </script>";
                }
            }
        }else{
            echo 'deletion is not possible.';
        }
    }

    public function used_mail($table,$mail){
        if($this->table_exist_or_not($table)){
            $email_checked="SELECT email FROM $table WHERE email='$mail'";
            $check=$this->object->query($email_checked);
            if($check->num_rows==1){
                return true;
            }else{
                return false;
            }
        }
        
     }


     public function login($table,$condition){
        if($this->table_exist_or_not($table)){
            $login_checked="SELECT * FROM $table WHERE $condition";
            $check=$this->object->query($login_checked);
            if($check->num_rows==1){
                $this->result=$check->fetch_all(MYSQLI_ASSOC);
                return $this->result;
            }else{
                return false;
            }
        }
        
     }
    
    public function __destruct(){
        
        if($this->conn){
            
            if($this->object->close()){
                //echo '<br>';
                //echo " end call";
                //echo " connection end";
                $this->conn=false;
                return true;
            }else{
                return false;
            }
        }
    }
}
?>