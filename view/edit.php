 <div class="row">
    <div class="col col-3"></div>
    <div class="col col-6">

    <form action="/edit?id=<?=$array[0]->id ?>" method="POST">
    <div class="row g-3">
        <div class="col">
            <input value="<?=$array[0]->title ?>" type="text" name="title" class="form-control" placeholder="Todo Title">
        </div>
    
    </div>
    <div class="row g-3">
        <div class="col">
            <textarea name="description" placeholder="Description" class="form-control" rows="3"><?=$array[0]->description ?></textarea>
        </div>
    
    </div>
    <div class="row g-3">
        <div class="col">
            <input value="<?=$array[0]->deadline ?>" type="date" name="deadline" class="form-control" placeholder="Date ">
        </div>
    </div>
    <div class="row g-3">
        <div class="col">
        <select class="form-select" name="color" aria-label="Default select example">
            <option selected disabled>Open this select menu</option>
            <option value="blue"<?php if($array[0]->color=="blue" ) echo " selected " ?> >Blue</option>
            <option value="green" <?php if($array[0]->color=="green" ) echo " selected " ?>>Green</option>
            <option value="red" <?php if($array[0]->color=="red" ) echo " selected " ?> >Red</option>
        </select>
        </div>
    
    </div>

    <div class="row g-3">
        <div class="col">
        <div class="form-check">
            <input class="form-check-input" value="doing" type="radio" name="status" id="doing" <?php if($array[0]->status=="doing" ) echo " checked " ?>>
            <label class="form-check-label" for="doing">
                Doing
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" value="done" type="radio" name="status" id="done" <?php if($array[0]->status=="done" ) echo " checked " ?>>
            <label class="form-check-label" for="done">
                Done
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" value="undone" type="radio" name="status" id="undone" <?php if($array[0]->status=="undone" ) echo " checked " ?>>
            <label class="form-check-label" for="undone">
                Undone
            </label>
        </div>

        </div>
    
    </div>


    <button type="submit"  class="btn btn-primary">update</button>
    </form> 


    </div>
    <div class="col col-3"></div>
</div> 