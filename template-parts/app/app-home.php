<table class="form-table">
    <?php
        for($data=0; $data < 10; $data++){
            $num = 'photo_' . $data;
    ?>
                <tr>

                    <th scope="row">Foto <?= $data+1 ?>:</th>
                    <td>
                        <input type="text" class="image-target" placeholder="Imagem do depoimento" name="<?= $num; ?>" value="<?php echo esc_attr( get_option($num) ); ?>" />
                        <img class="image-target" src="<?= esc_attr( get_option($num) ); ?>" alt="Galeria de Fotos Sorvete Retrô">
                        <input type="button" name="upload-btn" class="button-secondary select-img" value="Selecionar...">
                    </td>
                </tr>
    <?php } ?>
</table>

