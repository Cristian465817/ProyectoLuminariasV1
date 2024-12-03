<?php
// Encuentra el ID del proceso del script Python
$pid = shell_exec('pgrep -f AsistenteVirtualM2.py');

// Si se encuentra el proceso, lo mata
if ($pid) {
    shell_exec('kill ' . $pid);
    echo "El asistente virtual ha sido detenido.";
} else {
    echo "No se encontró el asistente virtual en ejecución.";
}
?>