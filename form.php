

<form action="./db.php" method="post">
    <div class="">
        <h4 class="mb-3">Remplisser ce formulaire ,porter plainte</h4>
      
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="firstName" class="form-label">Nom</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="nom">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-sm-6">
            <label for="firstName" class="form-label">Nom</label>
            <input type="text" class="form-control" id="firstName" placeholder="prenom" value="" required="" name="prenom">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-12">
            <label for="username" class="form-label">Nom usuel</label>
            <div class="input-group has-validation">
              <span class="input-group-text">@</span>
              <input type="text" class="form-control" id="username" placeholder="Username" required="" name="usuel">
            <div class="invalid-feedback">
              Votre nom d'utilisateur est requis.

              </div>
            </div>
          </div>

          <div class="col-12">
            <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
            <div class="invalid-feedback">
              Veuillez entrer une adresse e-mail valide 
            </div>
          </div>

          <div class="col-12">
            <label for="address" class="form-label">Votre numero de telephone</label>
            <input type="text" class="form-control" id="address" placeholder="0000000" required="" name="telephone">
            <div class="invalid-feedback">
              Prière d'indiquer ton adresse 
            </div>
          </div>

          <div class="col-12">
            <label for="address2" class="form-label">Personne a prevenir <span class="text-muted">(Optional)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="0000000" name="prevenir">
          </div>

          <div class="col-md-5">
            <label for="country" class="form-label">Ville ,Village </label>
            
            <input type="text" class="form-control" id="address" placeholder="" required="" name="ville">
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>

          <div class="col-md-4">
            <label for="state" class="form-label" >Region</label>
            <select class="form-select" id="state" required="" name="region">
              <option>Savane</option>
              <option>Kara</option>
              <option>Centrale</option>
              <option>Plateaux</option>
              <option>Maritime</option>
              
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>

         
        </div>

        <hr class="my-4">

        

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="save-info">
          <label class="form-check-label" for="save-info">Conservez ces informations pour la prochaine fois</label>
        </div>
        <h1>Ma plainte</h1>
        <div class="form-floating">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="plainte"></textarea>
          <label for="floatingTextarea"></label>
        </div> 
          <br>
        <div>
           <button class="btn btn-outline-danger separer" href="#" role="button">Envoyer</button>
         </div>
        <hr class="my-4">
      
      </div>
      </div>
    </div>
</form>

