<?php
session_start();
?>
<footer class="footer">
  <div class="bg-dark pt-4 pb-4">
    <p class="mt-3 mb-3 text-center font-weight-light text-light">
      La Conférence © 2019 <?php echo $_SESSION['status']; ?>
    </p>
    <p class="mt-3 mb-3 text-center font-weight-light text-light">
      Tous droits réservés
      • <a
      href="admin.php"
      class="pointer font-weight-bold"
      style="color: #fedc72;">Administrateur</a>
    </p>
  </div>
</footer>
