
<nav class="navbar navbar-expand-lg navbar-dark">
   <div class="container">
      <a class="navbar-brand" href="<?=HTTPS?>://<?=$_SERVER['HTTP_HOST']?>"><img src="/images/banque/img/logo.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
     </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item">
               <a class="nav-link" href="#boutique">Boutique</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#location_materiel">Location</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#coursdesurf">Cours de surf</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#histoire">L'histoire</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#coordonnes">Contact</a>
            </li>
         </ul>
         <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Recherche" aria-label="Search">
         </form>
         <a href="<?=HTTPS?>://<?=$_SERVER['HTTP_HOST']?>/utilisateurs/login" type="button" class="btn">Connexion</a>
      </div>
   </div>
</nav>
