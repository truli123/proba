<br><br>   
    <h2 style="text-align:center">PREGLED NASLOVA !!!</h2>
<br><br>

<?php

    $slova = range('a','z');
    $slova[] = "č"; $slova[] = "ć"; $slova[] = "dž"; $slova[] = "đ";$slova[] = "lj"; $slova[] = "nj"; $slova[] = "š";	$slova[] = "ž";
    asort($slova);
    echo "| ";
    foreach($slova as $slovo) 
{
    echo "<a href='show/$slovo' >".$slovo."</a> | ";
   
}
   
  
?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kolekcija\resources\views/pregled.blade.php ENDPATH**/ ?>