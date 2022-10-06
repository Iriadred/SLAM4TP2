<div class= "container mt-5">
    <div class="row">
        <div class="card">
            <div class= "card-body">
                <div class="input-group mb-3">
                    <input type="texte" class="form-control" placeholder="Entrer votre recherche" id="search" required>
                </div>    
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
                
                    </tr>
                    <?php foreach($clients as $c){
                        echo "<tr><td>".$c->getID()."</td><td>".$c->getNOM()."</td></tr>";
                        }?>
                </table>
            </div>    
        </div>     
    </div>    
</div>    
