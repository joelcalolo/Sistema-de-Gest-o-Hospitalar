<div class="modal fade" id="ver-dados<?php echo $confir['ordem']; ?>">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Dados do Paciente</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="progress-group">
           >
              <h3><span class="info-box bg-info"> <?php  echo '<br> ID: '. $confir['ordem']; ?></span></h3>
              <h3><?php  echo '<b>Nome: </b>'. $confir['nome']; ?></h3>
              <h3><?php  echo '<b>Data de Nascimento:</b> '. $confir['data_nasci']; ?></h3>
              <h3><?php  echo '<b>Quarto:</b> '. $confir['quarto'] .' | Cama: '. $confir['cama'];  ?></h3>
              <h3><?php  echo '<b>Entrada:</b> '. $confir['entrada']; ?></h3>
              <h3><?php  echo '<b>Doenca: </b>'. $confir['doenca']; ?></h3>
              <h3><span class="info-box bg-info"><?php  echo '<b>Descriçao:</b> '. $confir['descrisao']; ?></span></h3>
            </div>

          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->