<h1>Get All TODOs</h1>
</br>

<div class="row">
    <div class="col col-3"></div>
    <div class="col col-6">

        <table class="table ">
            <thead>
                <tr style="background-color:black;color:white">
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Deadline date</th>
                    <th scope="col">Color</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>

                <?php

                foreach ($array as $key => $value) { ?>

                <tr style="background-color:<?= $value->color ?>">

                    <?php foreach ($value as $myKey => $item) {

                            if ($myKey == "title") { ?>

                    <td><a href='/GetByIDG?todoID=" . <?= $value->id ?> . "'><?= $item ?></a></td>

                    <?php
                            } else {
                            ?>
                    <td><?= $item ?></td>
                    <?php  } ?>


                    <?php } ?>

                    <td>
                        <a href='/edit?todoID=<?= $value->id ?>'>
                            <button>edit</button>
                        </a>
                        <a href='/delete?todoID=<?= $value->id ?>'>
                            <button>delete</button>
                        </a>
                        <a href='/delete?todoID=<?=$value->id ?>'>
                            <?php
                                $change = '';
                                $status = '';
                                $color = '';
                                $val = '';
                                $time =  $value->deadline;
                                $date = new DateTime($time);
                                $data1 = $date->getTimestamp();
                                $timeN = time();
                                if ($data1 > $timeN and ($value->status != "done")) {
                                    $val = "doing";
                                    $color = "gray";
                                    $status = '';
                                } else if ($data1 < $timeN and $value->status != "done") {
                                    $val = "expire";
                                    $color = "red";
                                    $status = "disabled";
                                } else if ($value->status == "done") {
                                    $val = "done";
                                    $color = "green";
                                    $status = "disabled";
                                } 

                                ?>
                            <form action="/update" method="post">

                                <input type="hidden" name="id" value="<?= $value->id ?>">
                                </input><input type="hidden" name="status" value="<?= $change ?>"></input>
                                <button style="background-color:<?= $color ?>" <?= $status ?>>
                                    <?= $val ?>
                                </button>
                            </form>
                        </a>
                    </td>


                    <?php }   ?>
                </tr>
            </tbody>

        </table>


    </div>
    <div class=" col col-3">
    </div>
</div>