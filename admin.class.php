<?php 
include_once '../load.php';
$username = $_POST['username'];
$password = $_POST['password'];
$conn = Database::connection();
$sql = "SELECT SUM(post1) AS totalpost1,SUM(post2) AS totalpost2,SUM(post3) AS totalpost3,SUM(post4) AS totalpost4,SUM(post5) AS totalpost5,SUM(post6) AS totalpost6,SUM(post7) AS totalpost7,SUM(post8) AS totalpost8,SUM(post9) AS totalpost9,SUM(post8) AS totalpost8,SUM(post9) AS totalpost9,SUM(post10) AS totalpost10,SUM(post11) AS totalpost11,SUM(post12) AS totalpost12,SUM(post13) AS totalpost13,SUM(post14) AS totalpost14,SUM(post15) AS totalpost15,SUM(post16) AS totalpost16,SUM(post17) AS totalpost17,SUM(post18) AS totalpost18,SUM(post19) AS totalpost19,SUM(post20) AS totalpost20,SUM(post21) AS totalpost21,SUM(post22) AS totalpost22,SUM(post23) AS totalpost23,SUM(post24) AS totalpost24,SUM(post25) AS totalpost25,SUM(post26) AS totalpost26,SUM(post27) AS totalpost27,SUM(post28) AS totalpost28,SUM(post29) AS totalpost29,SUM(post30) AS totalpost30,SUM(post31) AS totalpost31,SUM(post32) AS totalpost32,SUM(post33) AS totalpost33,SUM(post34) AS totalpost34,SUM(post35) AS totalpost35,SUM(post36) AS totalpost36,SUM(post37) AS totalpost37,SUM(post38) AS totalpost38,SUM(post39) AS totalpost39,SUM(post40) AS totalpost40,SUM(post41) AS totalpost41,SUM(post42) AS totalpost42,SUM(post43) AS totalpost43,SUM(post44) AS totalpost44,SUM(post45) AS totalpost45,SUM(post46) AS totalpost46,SUM(post47) AS totalpost47,SUM(post48) AS totalpost48,SUM(post49) AS totalpost49,SUM(post50) AS totalpost50,SUM(post51) AS totalpost51,SUM(post52) AS totalpost52,SUM(post53) AS totalpost53,SUM(post54) AS totalpost54,SUM(post55) AS totalpost55,SUM(post56) AS totalpost56,SUM(post57) AS totalpost57,SUM(post58) AS totalpost58,SUM(post59) AS totalpost59,SUM(post60) AS totalpost60,SUM(post61) AS totalpost61,SUM(post62) AS totalpost62,SUM(post63) AS totalpost63,SUM(post64) AS totalpost64,SUM(post65) AS totalpost65,SUM(post66) AS totalpost66,SUM(post67) AS totalpost67,SUM(post68) AS totalpost68,SUM(post69) AS totalpost69,SUM(post70) AS totalpost70  FROM `thulir_like`;";
$result = $conn->query($sql);
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $post1 = $row['totalpost1'];
    $post2 = $row['totalpost2'];
    $post3 = $row['totalpost3'];
    $post4 = $row['totalpost4'];
    $post5 = $row['totalpost5'];
    $post6 = $row['totalpost6'];
    $post7 = $row['totalpost7'];
    $post8 = $row['totalpost8'];
    $post9 = $row['totalpost9'];
    $post10 = $row['totalpost10'];
    $post11 = $row['totalpost11'];
    $post12 = $row['totalpost12'];
    $post13 = $row['totalpost13'];
    $post14 = $row['totalpost14'];
    $post15 = $row['totalpost15'];
    $post16 = $row['totalpost16'];
    $post17 = $row['totalpost17'];
    $post18 = $row['totalpost18'];
    $post19 = $row['totalpost19'];
    $post20 = $row['totalpost20'];
    $post21 = $row['totalpost21'];
    $post22 = $row['totalpost22'];
    $post23 = $row['totalpost23'];
    $post24 = $row['totalpost24'];
    $post25 = $row['totalpost25'];
    $post26 = $row['totalpost26'];
    $post27 = $row['totalpost27'];
    $post28 = $row['totalpost28'];
    $post29 = $row['totalpost29'];
    $post30 = $row['totalpost30'];
    $post31 = $row['totalpost31'];
    $post32 = $row['totalpost32'];
    $post33 = $row['totalpost33'];
    $post34 = $row['totalpost34'];
    $post35 = $row['totalpost35'];
    $post36 = $row['totalpost36'];
    $post37 = $row['totalpost37'];
    $post38 = $row['totalpost38'];
    $post39 = $row['totalpost39'];
    $post40 = $row['totalpost40'];
    $post41 = $row['totalpost41'];
    $post42 = $row['totalpost42'];
    $post43 = $row['totalpost43'];
    $post44 = $row['totalpost44'];
    $post45 = $row['totalpost45'];
    $post46 = $row['totalpost46'];
    $post47 = $row['totalpost47'];
    $post48 = $row['totalpost48'];
    $post49 = $row['totalpost49'];
    $post50 = $row['totalpost50'];
    $post51 = $row['totalpost51'];
    $post52 = $row['totalpost52'];
    $post53 = $row['totalpost53'];
    $post54 = $row['totalpost54'];
    $post55 = $row['totalpost55'];
    $post56 = $row['totalpost56'];
    $post57 = $row['totalpost57'];
    $post58 = $row['totalpost58'];
    $post59 = $row['totalpost59'];
    $post60 = $row['totalpost60'];
    $post61 = $row['totalpost61'];
    $post62 = $row['totalpost62'];
    $post63 = $row['totalpost63'];
    $post64 = $row['totalpost64'];
    $post65 = $row['totalpost65'];
    $post66 = $row['totalpost66'];
    $post67 = $row['totalpost67'];
    $post68 = $row['totalpost68'];
    $post69 = $row['totalpost69'];
    $post70 = $row['totalpost70'];

}
$conn->close();


if($username == 'thulir2k25' && $password == 'admin@2k25'){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Voting Results</title>
    <link rel="stylesheet" href="../../templates/result.css">
    </head>
    <body>
    <div class="admin-panel">
        <h1>Voting Results</h1>
        
        <div class="image-result">
        <img src="../../posts/R_dhanaklakshmi.jpeg" alt="Image 1" class="voted-image">
        <div class="vote-count">R_dhanaklakshmi:  <span id="votes1"><?php echo $post1; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/R_dhanaklakshmi2.jpeg" alt="Image 2" class="voted-image">
        <div class="vote-count">R_dhanaklakshmi: <span id="votes2"><?php echo $post2; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/S_abinaya_rani.jpeg" alt="Image 3" class="voted-image">
        <div class="vote-count">S_abinaya_rani: <span id="votes3"><?php echo $post3; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/S_abinaya_rani1.jpeg" alt="Image 4" class="voted-image">
        <div class="vote-count">S_abinaya_rani: <span id="votes4"><?php echo $post4; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/G_Muthulakshmi.jpeg" alt="Image 5" class="voted-image">
        <div class="vote-count">G_Muthulakshmi: <span id="votes5"><?php echo $post5; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/G_Muthulakshmi2.jpeg" alt="Image 6" class="voted-image">
        <div class="vote-count">G_Muthulakshmi: <span id="votes6"><?php echo $post6; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/v_soundharya.jpeg" alt="Image 7" class="voted-image">
        <div class="vote-count">v_soundharya: <span id="votes7"><?php echo $post7; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/v_soundharya2.jpeg" alt="Image 1" class="voted-image">
        <div class="vote-count">v_soundharya:  <span id="votes1"><?php echo $post8; ?></span></div>
        </div>




        <div class="image-result">
        <img src="../../posts/G_Suruthi.jpeg" alt="Image 2" class="voted-image">
        <div class="vote-count">G_Suruthi: <span id="votes2"><?php echo $post9; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/G_Suruthi2.jpeg" alt="Image 3" class="voted-image">
        <div class="vote-count">G_Suruthi: <span id="votes3"><?php echo $post10; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/V_Chithirai_Selvi.jpeg" alt="Image 4" class="voted-image">
        <div class="vote-count">V_Chithirai_Selvi: <span id="votes4"><?php echo $post11; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/V_Chithirai_Selvi2.jpeg" alt="Image 5" class="voted-image">
        <div class="vote-count">V_Chithirai_Selvi: <span id="votes5"><?php echo $post12; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/V_s_Raj_kumar.jpeg" alt="Image 6" class="voted-image">
        <div class="vote-count">V_s_Raj_kumar: <span id="votes6"><?php echo $post13; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/V_s_Raj_kumar2.jpeg" alt="Image 7" class="voted-image">
        <div class="vote-count">V_s_Raj_kumar: <span id="votes7"><?php echo $post14; ?></span></div>
        </div>


        <div class="image-result">
        <img src="../../posts/Maveen_kumar.jpeg" alt="Image 2" class="voted-image">
        <div class="vote-count">Maveen_kumar: <span id="votes2"><?php echo $post15; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Maveen_kumar2.jpeg" alt="Image 3" class="voted-image">
        <div class="vote-count">Maveen_kumar: <span id="votes3"><?php echo $post16; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Ashok_kumar.jpeg" alt="Image 4" class="voted-image">
        <div class="vote-count">Ashok_kumar: <span id="votes4"><?php echo $post17; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Ashok_kumar2.jpeg" alt="Image 5" class="voted-image">
        <div class="vote-count">Ashok_kumar: <span id="votes5"><?php echo $post18; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/M_Hema_shree.jpeg" alt="Image 6" class="voted-image">
        <div class="vote-count">M_Hema_shree: <span id="votes6"><?php echo $post19; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/M_Hema_shree2.jpeg" alt="Image 7" class="voted-image">
        <div class="vote-count">M_Hema_shree: <span id="votes7"><?php echo $post20; ?></span></div>
        </div>


        <div class="image-result">
        <img src="../../posts/Diva.jpeg" alt="Image 2" class="voted-image">
        <div class="vote-count">Diva: <span id="votes2"><?php echo $post21; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Diva2.jpeg" alt="Image 3" class="voted-image">
        <div class="vote-count">Diva: <span id="votes3"><?php echo $post22; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/K_Sri_Saila.jpeg" alt="Image 4" class="voted-image">
        <div class="vote-count">K_Sri_Saila: <span id="votes4"><?php echo $post23; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/K_Sri_Saila2.jpeg" alt="Image 5" class="voted-image">
        <div class="vote-count">K_Sri_Saila: <span id="votes5"><?php echo $post24; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Siva_pandi.jpeg" alt="Image 6" class="voted-image">
        <div class="vote-count">Siva_pandi: <span id="votes6"><?php echo $post25; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Siva_pandi2.jpeg" alt="Image 7" class="voted-image">
        <div class="vote-count">Siva_pandi: <span id="votes7"><?php echo $post26; ?></span></div>
        </div>


        <div class="image-result">
        <img src="../../posts/Kannaraja.jpeg" alt="Image 2" class="voted-image">
        <div class="vote-count">Kannaraja: <span id="votes2"><?php echo $post27; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Kannaraja2.jpeg" alt="Image 3" class="voted-image">
        <div class="vote-count">Kannaraja: <span id="votes3"><?php echo $post28; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Arobal_jessylin.jpeg" alt="Image 4" class="voted-image">
        <div class="vote-count">Arobal_jessylin: <span id="votes4"><?php echo $post29; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Arobal_jessylin2.jpeg" alt="Image 5" class="voted-image">
        <div class="vote-count">Arobal_jessylin: <span id="votes5"><?php echo $post30; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Tharun_Khannaa_R_V.jpeg" alt="Image 6" class="voted-image">
        <div class="vote-count">Tharun_Khannaa_R_V: <span id="votes6"><?php echo $post31; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Tharun_Khannaa_R_V2.jpeg" alt="Image 7" class="voted-image">
        <div class="vote-count">Tharun_Khannaa_R_V: <span id="votes7"><?php echo $post32; ?></span></div>
        </div>




        <div class="image-result">
        <img src="../../posts/Deepaa_Shree_SP.jpeg" alt="Image 2" class="voted-image">
        <div class="vote-count">Deepaa_Shree_SP: <span id="votes2"><?php echo $post33; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Deepaa_Shree_SP2.jpeg" alt="Image 3" class="voted-image">
        <div class="vote-count">Deepaa_Shree_SP: <span id="votes3"><?php echo $post34; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/V_Santhosh.jpeg" alt="Image 4" class="voted-image">
        <div class="vote-count">V_Santhosh: <span id="votes4"><?php echo $post35; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/V_Santhosh2.jpeg" alt="Image 5" class="voted-image">
        <div class="vote-count">V_Santhosh: <span id="votes5"><?php echo $post36; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/V_Vedha_pothagar_dravid.jpeg" alt="Image 6" class="voted-image">
        <div class="vote-count">V_Vedha_pothagar_dravid: <span id="votes6"><?php echo $post37; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/V_Vedha_pothagar_dravid2.jpeg" alt="Image 7" class="voted-image">
        <div class="vote-count">V_Vedha_pothagar_dravid: <span id="votes7"><?php echo $post38; ?></span></div>
        </div>



        <div class="image-result">
        <img src="../../posts/Sethu_prasath.jpeg" alt="Image 2" class="voted-image">
        <div class="vote-count">Sethu_prasath: <span id="votes2"><?php echo $post39; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Sethu_prasath2.jpeg" alt="Image 3" class="voted-image">
        <div class="vote-count">Sethu_prasath: <span id="votes3"><?php echo $post40; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/sureyakala.jpeg" alt="Image 4" class="voted-image">
        <div class="vote-count">sureyakala: <span id="votes4"><?php echo $post41; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/sureyakala2.jpeg" alt="Image 5" class="voted-image">
        <div class="vote-count">sureyakala: <span id="votes5"><?php echo $post42; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Uthayageetha.jpeg" alt="Image 6" class="voted-image">
        <div class="vote-count">Uthayageetha: <span id="votes6"><?php echo $post43; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Uthayageetha2.jpeg" alt="Image 7" class="voted-image">
        <div class="vote-count">Uthayageetha: <span id="votes7"><?php echo $post44; ?></span></div>
        </div>


        <div class="image-result">
        <img src="../../posts/Siva_sankari.jpeg" alt="Image 2" class="voted-image">
        <div class="vote-count">Siva_sankari: <span id="votes2"><?php echo $post45; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Siva_sankari2.jpeg" alt="Image 3" class="voted-image">
        <div class="vote-count">Siva_sankari: <span id="votes3"><?php echo $post46; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Logeshwaran_S.jpeg" alt="Image 4" class="voted-image">
        <div class="vote-count">Logeshwaran_S: <span id="votes4"><?php echo $post47; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Logeshwaran_S2.jpeg" alt="Image 5" class="voted-image">
        <div class="vote-count">Logeshwaran_S: <span id="votes5"><?php echo $post48; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/A_sameer_ahamadhu_raja.jpeg" alt="Image 6" class="voted-image">
        <div class="vote-count">A_sameer_ahamadhu_raja: <span id="votes6"><?php echo $post49; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/A_sameer_ahamadhu_raja2.jpeg" alt="Image 7" class="voted-image">
        <div class="vote-count">A_sameer_ahamadhu_raja: <span id="votes7"><?php echo $post50; ?></span></div>
        </div>



        <div class="image-result">
        <img src="../../posts/Deventhiran.jpeg" alt="Image 2" class="voted-image">
        <div class="vote-count">Deventhiran: <span id="votes2"><?php echo $post51; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Deventhiran2.jpeg" alt="Image 3" class="voted-image">
        <div class="vote-count">Deventhiran: <span id="votes3"><?php echo $post52; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/M_Divya_Sri.jpeg" alt="Image 4" class="voted-image">
        <div class="vote-count">M_Divya_Sri: <span id="votes4"><?php echo $post53; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/M_Divya_Sri2.jpeg" alt="Image 5" class="voted-image">
        <div class="vote-count">M_Divya_Sri: <span id="votes5"><?php echo $post54; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Thiru_selavm.jpeg" alt="Image 6" class="voted-image">
        <div class="vote-count">Thiru_selavm: <span id="votes6"><?php echo $post55; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Thiru_selavm2.jpeg" alt="Image 7" class="voted-image">
        <div class="vote-count">Thiru_selavm: <span id="votes7"><?php echo $post56; ?></span></div>
        </div>



        <div class="image-result">
        <img src="../../posts/Kalishree.jpeg" alt="Image 2" class="voted-image">
        <div class="vote-count">Kalishree: <span id="votes2"><?php echo $post57; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Kalishree2.jpeg" alt="Image 3" class="voted-image">
        <div class="vote-count">Kalishree: <span id="votes3"><?php echo $post58; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Shreenidhi.jpeg" alt="Image 4" class="voted-image">
        <div class="vote-count">Shreenidhi: <span id="votes4"><?php echo $post59; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Shreenidhi2.jpeg" alt="Image 5" class="voted-image">
        <div class="vote-count">Shreenidhi: <span id="votes5"><?php echo $post60; ?></span></div>
        </div>
        <div class="image-result">
        <img src="../../posts/Latchiya_sri.jpeg" alt="Image 6" class="voted-image">
        <div class="vote-count">Latchiya_sri: <span id="votes6"><?php echo $post61; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Latchiya_sri2.jpeg" alt="Image 7" class="voted-image">
        <div class="vote-count">Latchiya_sri: <span id="votes7"><?php echo $post62; ?></span></div>
        </div>
        <div class="image-result">
        <img src="../../posts/Sibi_chakkaravarthi.jpeg" alt="Image 6" class="voted-image">
        <div class="vote-count">Sibi_chakkaravarthi: <span id="votes6"><?php echo $post63; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Sibi_chakkaravarthi2.jpeg" alt="Image 7" class="voted-image">
        <div class="vote-count">Sibi_chakkaravarthi: <span id="votes7"><?php echo $post64; ?></span></div>
        </div>
        <div class="image-result">
        <img src="../../posts/S_bhuva_neshwaran.jpeg" alt="Image 6" class="voted-image">
        <div class="vote-count">S_bhuva_neshwaran: <span id="votes6"><?php echo $post65; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/S._bhuva_neshwaran2.jpeg" alt="Image 7" class="voted-image">
        <div class="vote-count">S_bhuva_neshwaran: <span id="votes7"><?php echo $post66; ?></span></div>
        </div>
        <div class="image-result">
        <img src="../../posts/Anbuselvan.jpeg" alt="Image 6" class="voted-image">
        <div class="vote-count">Anbuselvan: <span id="votes6"><?php echo $post67; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Anbuselvan2.jpeg" alt="Image 7" class="voted-image">
        <div class="vote-count">Anbuselvan: <span id="votes7"><?php echo $post68; ?></span></div>
        </div>
        <div class="image-result">
        <img src="../../posts/Divya_meenakshi.jpeg" alt="Image 6" class="voted-image">
        <div class="vote-count">Divya_meenakshi: <span id="votes6"><?php echo $post69; ?></span></div>
        </div>

        <div class="image-result">
        <img src="../../posts/Divya_meenakshi2.jpeg" alt="Image 7" class="voted-image">
        <div class="vote-count">Divya_meenakshi: <span id="votes7"><?php echo $post70; ?></span></div>
        </div>

    </div>

    <!-- Assuming this is where you fetch vote results -->
    <script src="script.js"></script>
    </body>
    </html>   




<?php
}
else{
    echo "<h1>Invalid user</h1>";

}