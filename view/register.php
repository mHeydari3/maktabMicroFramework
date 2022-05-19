<div class="row">
    <div class="col col-3"></div>
    <div class="col col-6">

        <form action="/register" method="POST">
            <div class="row g-3">
                <div class="col">
                    <input type="text" name="firstname" class="form-control" placeholder="Firstname"  required >
                </div>
                <div class="col">
                    <input type="text" name="lastname" class="form-control" placeholder="Lastname" required >
                </div>
                
            </div>
            <div class="row g-3">
                <div class="col">
                    <input type="email" name="email" class="form-control" placeholder="Email" required >
                </div>
                <div class="col">
                    <input type="password" name="password" class="form-control" placeholder="Password" required >
                </div>
                
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Signup</button>
        </form>


    </div>
    <div class="col col-3"></div>
</div>