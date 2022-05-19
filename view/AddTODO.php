<div class="row">
    <div class="col col-3"></div>
    <div class="col col-6">

        <form action="/SendForm" method="POST">
            <div class="row g-3">
                <div class="col">
                    <input type="text" name="todoTitle" class="form-control" placeholder="Todo Title">
                </div>

            </div>
            <div class="row g-3">
                <div class="col">
                    <textarea name="description" placeholder="Description" class="form-control" rows="3"></textarea>
                </div>

            </div>
            <div class="row g-3">
                <div class="col">
                    <input type="date" name="date" class="form-control" placeholder="Date ">
                </div>

            </div>
            <div class="row g-3">
                <div class="col">
                    <select class="form-select" name="color" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="blue">Blue</option>
                        <option value="green">Green</option>
                        <option value="red">Red</option>
                    </select>
                </div>

            </div>

            <div class="row g-3">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" value="doing" type="radio" name="status" id="doing">
                        <label class="form-check-label" for="doing">
                            Doing
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" value="done" type="radio" name="status" id="done">
                        <label class="form-check-label" for="done">
                            Done
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" value="undone" type="radio" name="status" id="undone">
                        <label class="form-check-label" for="undone">
                            Undone
                        </label>
                    </div>

                </div>

            </div>


            <button type="submit" name="submit" class="btn btn-primary">Send</button>
        </form>


    </div>
    <div class="col col-3"></div>
</div>