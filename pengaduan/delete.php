<?php
include "../connect.php";

$idPengaduan    = isset($_POST["idPengaduan"]) ? $_POST["idPengaduan"] : "";

$sql            = "DELETE FROM pengaduan WHERE idPengaduan = '".$idPengaduan."'";
$query          = $db->query($sql);

if($query) {
  $res = [
    "status" => "OK",
    "message" => "Pengaduan berhasil dihapus.",
    "result" => $idPengaduan
  ];
}
else {
  $res = [
    "status" => "FAIL",
    "message" => "Pengaduan gagal dihapus.",
    "result" => $db->error
  ];
}

echo json_encode($res);

?>
