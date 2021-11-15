

<?php 

function mostrarError($error, $titulo, $mensaje){
    $html = '<div class="alert alert-danger">';
    $html .= '<h4>'.$titulo.'</h4>';
    $html .= '<p>'.$mensaje.'</p>';
    $html .= '</div>';
    echo $html;
}