<html>
    <head>
        <title>XAMPP | Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="title">
            XAMPP
        </div>
        <div class="main">
            <?php
                $dir = scandir('../');   
                array_splice($dir,0,2);
                foreach ($dir as $key => $value) {
                    if(count(explode('.',$value)) == 1){
                        if($value != 'xampp' && $value != 'dashboard'){
                            $state = '-';
                            if(file_exists('../'.$value.'/.dash')){
                                $state = file_get_contents('../'.$value.'/.dash');
                            }
                            if(file_exists('../'.$value.'/.git')){
                                echo ' <a href="../'.$value.'" class="project">'.$value.'<div class="state">'.$state.'</div><img src="git.png"></a>';
                                
                            }else{
                                
                                echo ' <a href="../'.$value.'" class="project">'.$value.'<div class="state">'.$state.'</div></a>';
                            }
                        }
                    }
                }
            ?>
            
        </div>
        <div class="sidebar">
            <a href="../../phpmyadmin">
            <img src="mysql.svg" alt="" class="mysql"></a>
        </div>
    </body>
</html>