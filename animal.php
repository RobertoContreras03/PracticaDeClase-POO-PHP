<?php
include("abecedario.php");
include("gato.php");
include("perro.php");
include("vaca.php");
class Animal {
    public function Roar(){
        echo "El";
    }
}
function RoarAnimal(Animal $_animal){
       $_animal->Roar();
}
$gato = new Gato("Pelusa");
$perro = new Perro("Kaiser");
$vaca = new Vaca("Lola");
$abecedario = new Abecedario("abecedario");

?>

<?php
if (isset($_POST['gato'])){
    ?>
    <script> 
    var msg = new SpeechSynthesisUtterance("<?php RoarAnimal($gato)?>");
    window.speechSynthesis.speak(msg);
</script>
<?php
}
else if (isset($_POST['perro'])){
    ?>
    <script> 
    var msg = new SpeechSynthesisUtterance("<?php RoarAnimal($perro)?>");
    window.speechSynthesis.speak(msg);
</script>
<?php
}
else if (isset($_POST['vaca'])){
    ?>
    <script> 
    var msg = new SpeechSynthesisUtterance("<?php RoarAnimal($vaca)?>");
    window.speechSynthesis.speak(msg);
</script>
<?php
}
if (isset($_POST['abecedario'])){
    ?>
    <script> 
    var msg = new SpeechSynthesisUtterance("<?php RoarAnimal($abecedario)?>");
    window.speechSynthesis.speak(msg);
</script>
<?php
}
?>
