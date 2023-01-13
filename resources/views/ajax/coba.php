<?php

// $db = new PDO("mysql:host=localhost;dbname=gunzxx_blog","root","");
// $stmt = $db->query("SELECT * FROM hero");
// $stmt->execute();
// $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);

use Illuminate\Support\Facades\DB;

$metas = DB::table('hero')->get()->toArray();

// $metas = json_decode(json_encode($meta),true);

// var_dump($metas[0]);

?>


<table>
    <thead>
        <tr>
            <?php foreach($metas[0] as $k => $v) :?>
            <td>
                <?php echo $k ?>
            </td>
            <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach($metas as $meta) :?>
            <tr>
                <?php foreach($meta as $k => $v) :?>
                <td><?php echo $v ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>