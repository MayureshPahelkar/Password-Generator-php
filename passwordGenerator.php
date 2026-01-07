<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f1f2f6;
        }

        .box{
            width:400px;
            margin:100px auto;
            background:#ffffff;
            padding:25px;
            border-radius:10px;
            box-shadow:0 0 15px rgba(0,0,0,0.1);
            text-align:center;
        }

        h2{
            color:#2f3640;
        }

        input{
            width:100%;
            padding:10px;
            margin:15px 0;
            border:1px solid #ccc;
            border-radius:5px;
            text-align:center;
            font-size:16px;
        }

        button{
            width:100%;
            padding:10px;
            background:#40739e;
            color:white;
            border:none;
            border-radius:5px;
            font-size:16px;
            cursor:pointer;
        }

        button:hover{
            background:#273c75;
        }

        p{
            margin-top:15px;
            font-size:18px;
            font-weight:bold;
            color:green;
            word-break:break-all;
        }

        .error{
            color:red;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Password Generator</h2>

       <form method="POST" action="">
         <input type="number" name="length" placeholder="Enter Password Length">
        <button type="submit" name="generate">Generate Password</button>
       </form>

       <p>
        <?php
          if(isset($_POST['generate'])){

            $length=$_POST['length'];
  
            if($length=="" || $length<=0){
                echo "<span class='error'>❌ Please enter a valid length</span>";
            }else{
                $characters="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ
                123456789!@#$%^&*";

                $password="";

                for($i=1;$i<=$length;$i++){
                    $randomIndex=rand(0,strlen($characters)-1);
                    $password.=$characters[$randomIndex];
                }

                echo "Generated Password :<br> $password";
            }

          }
        ?>
       </p>
    </div>
</body>
</html>