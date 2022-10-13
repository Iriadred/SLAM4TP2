<div class= "container mt-5">
    <div class="row">
        <div class="card">
            <div class= "card-body">
            <form action="./" method="post" class="add">
                <div class="input-group">
                    <input id="keyword" name="texte" type="text" class="form-control" placeholder="Prendre une note…" aria-label="My new idea" aria-describedby="basic-addon1"/>
                </div>
            </form>
            </div>
        </div> 
        <div class="card">
            <div class= "card-body">
                <h1>Les client</h1>
            <div>
        </div> 
        <div class="card">
            <div class= "card-body">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>téléphone</th>
                        <th>email</th>
                        <th></th>
                
                    </tr>
                    <?php foreach($clients as $c){
                        echo "<tr><td>".$c->getID()."</td><td>".$c->getNOM()." ".$c->getPrenom()."</td><td>".$c->getTelephone()."</td><td>".$c->getEmail()."</td><td>".">"."</td></tr>";
                        
                        }?>   
                </table>
                Ligne par page = <?=$c->getID()?> <?php
                if($c->getID()>10){
                    echo '<a type=button href="./'.($page-1).'" class=btn btn> < </a>';
                }
                    ?>
                    
                    <a type="button" href="./<?=$page+1?>" class="btn btn">></a>
                    

            </div>    
        </div>     
    </div>    
</div>    
