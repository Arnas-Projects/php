<h1>Skaičių palyginimas</h1>

<p><?php echo $num1 ?></p>
<p><?php echo $num2 ?></p>


<h4>Atsakymas: 
    <?php if ($num1 === $num2): ?>
        <span>Skaičiai yra lygūs</span>
    <?php elseif ($num1 > $num2): ?>
        <span><?php echo $num1; ?> > <?php echo $num2; ?></span>
    <?php else: ?>
        <span><?php echo $num1; ?> < <?php echo $num2; ?></span>
    <?php endif ?>
</h4>