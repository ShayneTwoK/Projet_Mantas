<?php
  include('dbconnect.php');
  include('fonction_ajout_offre.php');
 ?>
 <html>
   <head>
     <title>Page Ajout Offre</title>
   </head>
     <body>
       <h2 >Ajout d'une Offre</h2>
       <br/><br/>
       <div align="left">
         <form id="formajout" action="" method="POST">

           <label>Titre Offre :</label><br/>
           <input type="text" name="ajouttitre" placeholder="Administrateur Réseau">
           <br/><br/>

           <label>Description de l'offre :</label><br/>
           <textarea name="ajoutdesc" placeholder="Nous recherchons un employé niveau BAC+5"></textarea>
           <br/><br/>

           <label>Date Limite :</label><br/>
           <input type="date" name="ajoutdate">
           <br/><br/>

           <label>Type du Contrat :</label><br/>
             <select>
               <?php while($c = mysqli_fetch_assoc($contrat))
               {?>
               <option name="ajoutcontrat" value="<?=$c['libelle_contrat']?>"><?=$c['libelle_contrat']?></option>
               <?php
               }?>
             </select>
           <br/><br/>

           <input type="submit" name="bmodif" value="Modifier Ajout">
           <input type="submit" name="bajout" value="Ajout Offre">
           <div id="texterror">
             
           <?php
             if(isset($mess))
             {
               echo $mess;
             }
           ?>
         </div>
         </form>
       </div>
     </body>
 </html>
