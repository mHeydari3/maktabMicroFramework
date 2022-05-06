<h1>Show By ID</h1>

<br/>
<style>
    td{
        border:1px solid black;
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

            </tr>
        </thead>
        <tbody>

            <?php
                foreach($array as $key => $value){
                    echo "<tr><td>$key</td><td>$value</td></tr>";
                } 
            ?>

        </tbody>
    
    </table>


    </div>
    <div class="col col-3"></div>
</div>
