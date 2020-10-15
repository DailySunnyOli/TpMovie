<?php require_once('nav.php'); ?>

<main class="py-5">
     <section id="listado" class="mb-5">
        <div class="container">
        
        <h2 class="mb-4 text-center text-white "> Editar <?= $cinema->getName()?></h2>
        <form action=" <?php echo FRONT_ROOT."/Cinema/EditCinema/". $cinema->getCinemaName() ?>" method="POST"  >
          <table class="table text-white bg-oscuro"> 
            
              <tr>
                <th>Nombre</th>
                 <td>
                  <input type="text" value="<?= $cinema->getCinemaName() ?>"name="name" size="30" required>
                </td>
           
             </tr>
             <tr>
                <th>Direccion</th>
            <td>
                  <input type="text" name="address" size="30" value="<?= $cinema->getCinemaAddress()?>" required>
                </td>
            </tr>
            <tr>
                <th>Capacidad</th>
                <td>
                  <input type="number" name="capacity" size="20" value="<?= $cinema->getCinemaTotalCapacity() ?>"required>
                </td>
                </tr>
                <tr>
                <th>Precio de los Tickets</th>
                <td>
                  <input type="number" name="priceTicket" size="10" value="<?= $cinema->getCinemaTicketPrice()?>" required>
                </td>
                <input type="hidden" value="<?= $cinema->getId() ?>"name="id" size="30" required>
              </tr>     
              </table>
          <br>
          <div>
          
            <input type="submit" class="btn btn-danger" value="Modificar" >
          </div>
        </form>
      
    </div>
     </section>
</main>