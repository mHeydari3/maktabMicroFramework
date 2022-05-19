<h1>Get All TODOs</h1>

<br />
<style>
td {
    border: 1px solid black;
}
</style>
<div class="row">
    <div class="col col-3"></div>
    <div class="col col-6">

        <table class="table table-dark table-striped">
            <thead>
                <tr>
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

                foreach ($array as $key => $value) {
                    echo "<tr>";
                    foreach ($value as $myKey => $item) {
                        if ($myKey == "title")
                            echo "<td><a href='/GetByIDG?todoID=" . $value->id . "'>$item</a></td>";
                        else
                            echo "<td>$item</td>";
                    }
                    echo "<td><a href='/edit?todoID=" . $value->id . "'><button>edit</button></a><a href='/delete?todoID=" . $value->id . "'><button>delete</button></a</td>";
                    echo "</tr>";
                }
                ?>

            </tbody>

        </table>


    </div>
    <div class="col col-3"></div>
</div>