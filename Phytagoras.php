<?php 
    @$sisi_a = $_GET['sisi_a'];
    @$sisi_b = $_GET['sisi_b'];
    @$sisi_c = sqrt($sisi_a * $sisi_a + $sisi_b * $sisi_b);
?>
<!DOCTYPE html>
<hmtl>
    <head>
        <title>SISI MIRING SEGITIGA<br></title>
    </head>
    <body>
        <?php
            echo "Maftukhah Dwi Utami (21120117120006) <br>";
            echo "Jeck Gredo Tarigan (21120117120026) <br>";
            echo "Kelompok 34 <br>";
            echo "Shift 3 <br>";
            echo " <br>";
            echo "Selamat Datang di Program Perhitungan Sisi Miring";
            echo "-------------------------------------------------";
            echo " <br>";
        ?>
        <form method="GET">
          <table>
                <tr>
                    <td>Sisi a</td>
                    <td>=</td>
                    <td><input type="text" name="sisi_a" value="<?php echo $sisi_a; ?>"/>cm<br/></td>
                </tr>
                <tr>
                    <td>Sisi b</td>
                    <td>=</td>
                    <td><input type="text" name="sisi_b" value="<?php echo $sisi_b; ?>"/>cm<br/></td>
                </tr>       
            </table>
            
                
            </table>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Panjang dari sisi c = ".$sisi_c." cm<br/>";
            ?>
        </form>
    </body>
</hmtl>