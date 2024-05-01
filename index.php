<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .homepage-container{
            width: 100%;
            height: 100%;
            
        }

        .action-btn{
            width: 500px;
            height: 200px;
            background-color: blue;
            margin: 200px auto;
            border-radius: 16px;
            display: flex;
            justify-content: center;
        }

        .action-btn a{
            margin: auto;
        }

        .action-btn a button{
            padding: 10px 15px;
            font-size: 25px;
            font-weight: 200;
            border-radius: 16px;
            border: none;
            display: flex;
            flex-direction: row;
        }

        .signup{
            margin: auto;
        }

        a{
            text-decoration: None;
        }


    </style>
</head>
<body>
    
    
  <div class="homepage-container">
    <div class="action-btn">
       <a href="login.php">
       <button>Access Profile</button>
       </a>

       <a href="create-profile.php">
       <button>Create Profile</button>
       </a>
    </div>





        
  </div>
</body>
</html>