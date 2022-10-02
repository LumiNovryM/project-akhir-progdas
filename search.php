<?php

include 'connect.php';

$sql = "SELECT * FROM makanan WHERE nama LIKE  '%".$_POST['name']."%'";
$result = mysqli_query($connect,$sql);
if(mysqli_num_rows($result)>0){
    while($mkn=mysqli_fetch_assoc($result)){
        echo"
        <tr>
            <td>$mkn[id]</td>
            <td>$mkn[nama]</td>
            <td>$mkn[harga]</td>
            <td>$mkn[keterangan]</td> 
            <td>
                <div class='btn'>
                    <a class='hapus' href='form-edit-makanan.php?id=".$mkn['id']."'  ><div class='pensil'><ion-icon name='pencil'></div></ion-icon></a>
                    <a class='edit' href='delete-makanan.php?id=".$mkn['id']."'><div class='sampah'><ion-icon name='trash'></div></ion-icon></i></a>
                </div>
            </td>
        </tr>";
    }
}else{
    echo "<tr><td>0 Result's Found</td></tr>";
}





?>