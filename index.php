<html>
    <head>
        <title>Tchat</title>
    </head>
    <link rel="stylesheet" href="style.css">
    <body>
        <h2>Mini Tchat</h2>
        <div id="container">
            <div id="sction">
                <form method="POST" action="traitementtchat.php">
                    <h3>Users 1</h3>
                    <div id="section1">
                        <?php  

                            try{

                                $bdd = new PDO('mysql:host=localhost;dbname=tchat;charset=utf8','root','');

                            }
                            catch(Exception $e)
                            {
                                die('Erreur : '.$e->getMessage());
                            }

                                $reponse=$bdd -> query('SELECT * from tchat');

                                while($data = $reponse->fetch())
                                {
                                    if($data['Noms']=="users1")
                                    {
                        ?>
                                        <div class="droite"><div class='droitesms'><?php echo $data['Messages'];?></div><p><?php echo$data['Dates'];?></p></div>
                        <?php
                                    }
                                    else{
                        ?>
                                        <div class="gauche"><div class='gauchesms'><?php echo $data['Messages'];?></div><p><?php echo$data['Dates'];?></p></div>
                        <?php
                                    }
                                }
                                $reponse->closeCursor();
                        ?>
                        
                    </div>
                    <div id="minisection1">
                        <textarea type="text" name="sms1" placeholder="Enter sms ..."></textarea><br>
                        <input type="submit" value="Envoyer"/> 
                        <input type="reset" value="Annuler"/> 
                        <input type="hidden" name="users1" value="users1" />
                    </div>
                    
                </form>
            </div>

            <div id="section">
                <form method="POST" action="traitementtchat2.php">
                    <h3>Users 2</h3>
                    <div id="section2">

                    <?php  

                            try{

                                $bdd = new PDO('mysql:host=localhost;dbname=tchat;charset=utf8','root','');

                            }
                            catch(Exception $e)
                            {
                                die('Erreur : '.$e->getMessage());
                            }

                                $reponse=$bdd -> query('SELECT * from tchat');

                                while($data = $reponse->fetch())
                                {
                                    if($data['Noms']=="users1")
                                    {
                        ?>
                                        <div class="gauche"><div class='gauchesms'><?php echo $data['Messages'];?></div><p><?php echo$data['Dates'];?></p></div>
                        <?php
                                    }
                                    else{
                        ?>
                                        <div class="droite"><div class='droitesms'><?php echo $data['Messages'];?></div><p><?php echo$data['Dates'];?></p></div>
                        <?php
                                    }
                                }
                                $reponse->closeCursor();
                        ?>
                        
                    </div>
                    <div id="minisection1">
                        <textarea type="text" name="sms2" placeholder="Enter sms ..."></textarea><br>
                        <input type="submit" value="Envoyer"/> 
                        <input type="reset" value="Annuler"/>
                        <input type="hidden" name="users2" value="users2"/>
                    </div>
                    
                </form>
            </div>
        </div>
    </body>
</html>
