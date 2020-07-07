<?php
//esta funcion funciona pero se ahorra codigo usando clases
function save_user($post){

    $servername = "localhost";
    $database = "comidaya";
    $username = "root";
    $password = "39336728";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection*/
    $home = "16";
    $rand = rand(10000,100000);
    $cod_ac= md5($rand);
    $name = $post['name'];
    $lastname = $post['lastname'];
    $typedoc = $post['typedoc'];
    $num = $post['num'];
    $phone= "1526149636";
    $email = $post['email'];
    $password = password_hash ($post['password'] , PASSWORD_DEFAULT);
    $condition = "0";
    $cod_act = $cod_ac;
    $Bd="usuarios";
    $savedata = array($name,$lastname,$typedoc,$num,$home,$phone,$email,$password,$condition,$cod_act); 
    $sql = "INSERT INTO usuarios (id_usuario,nombre,apellido,tipodoc,n_documento,id_domicilio,telefono,email,clave,condicion,cod_activacion) VALUES (NULL, '$savedata[0]', '$savedata[1]','$savedata[2]','$savedata[3]','$savedata[4]','$savedata[5]','$savedata[6]','$savedata[7]','$savedata[8]','$savedata[9]')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    }