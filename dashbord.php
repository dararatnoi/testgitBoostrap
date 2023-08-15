<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
 
    <div class="row">
        <aside class="col-2 bg-pr full-height-overflow">
            <ul>
                <a href="./">
                    <li class="hov-primary">Dashboard</li>
                </a>
                <a href="./">
                    <li class="hov-primary">Payment</li>
                </a>
                <a href="./">
                    <li class="hov-primary">CounterParties</li>
                </a>
                <a href="./">
                    <li class="hov-primary">Action History</li>
                </a>
                <a href="./">
                    <li class="hov-primary">Product/Services</li>
                </a>
                <a href="./">
                    <li class="hov-primary">Taxes</li>
                </a>
            </ul>
        </aside>
        <section class="col-10">
            <div class="container">
                <div class="row pt-4 mb-4 align-items-center">
                    <div class="col-8">
                        <h1 class="fs-2">Dashboard</h1>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-primary">Create Transaction</button>
                    </div>
                    <div class="col-2">
                        <span class="material-symbols-outlined">
                            inbox
                        </span>
                        <span class="material-symbols-outlined">help</span>
                        <span class="material-symbols-outlined">settings</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 ">
                        <div class="card ">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-body-secondary">Total Balance</h6>
                                <h6 class="card-subtitle mb-2 fs-2">103,120.23</h6>
                                <hr>
                                <div class="d-flex justify-content-between mb-2 ">
                                    <h6 class="card-title fs-6">My Account</h6>
                                    <span class="material-symbols-outlined"> edit_square </span>
                                </div>
                                <div class="d-flex justify-content-between mb-2 ">
                                    <span>Generated Account 1</span>
                                    <span>51,105.13</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Generated Account 2</span>
                                    <span>51,105.13</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Generated Account 3</span>
                                    <span>51,105.13</span>
                                </div>
                                <div class="d-grid text-center">
                                    <button type="button" class="btn btn-primary"> Create / connect account</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-9 row-gap-3">
                        <div class="col-4">
                            <div class="card border-min hov-primary ">
                                <div class="card-body  d-flex justify-content-between">
                                    <h6 class="card-subtitle  text-body-secondary">Total Income</h6>
                                    <span class="material-symbols-outlined"> more_horiz </span>
                                </div>
                                <h5 class="card-title mb-4 fs-4  px-3">$20,110.13</h5>
                                <span class="card-subtitle text-body-secondary mb-4 px-3">This month</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card border-min hov-primary ">
                                <div class="card-body  d-flex justify-content-between">
                                    <h6 class="card-subtitle  text-body-secondary">Total Expense</h6>
                                    <span class="material-symbols-outlined"> more_horiz </span>
                                </div>
                                <h5 class="card-title mb-4 fs-4  px-3">$20,110.13</h5>
                                <span class="card-subtitle text-body-secondary mb-4 px-3">This month</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card border-min hov-primary ">
                                <div class="card-body  d-flex justify-content-between">
                                    <h6 class="card-subtitle  text-body-secondary">Total Profit</h6>
                                    <span class="material-symbols-outlined"> more_horiz </span>
                                </div>
                                <h5 class="card-title mb-4 fs-4  px-3">$20,110.13</h5>
                                <span class="card-subtitle text-body-secondary mb-4 px-3">This month</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card border-min hov-primary ">
                                <div class="card-body  d-flex justify-content-evenly align-items-center">
                                    <span class="material-symbols-outlined">
                                        person_add
                                    </span>
                                    <p class="m-0">Create Income</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card border-min hov-primary ">
                                <div class="card-body  d-flex justify-content-evenly align-items-center">
                                    <span class="material-symbols-outlined">
                                        person_add
                                    </span>
                                    <p class="m-0">Create Income</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card border-min hov-primary ">
                                <div class="card-body  d-flex justify-content-evenly align-items-center">
                                    <span class="material-symbols-outlined">
                                        person_add
                                    </span>
                                    <p class="m-0">Create Income</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card border-min hov-primary ">
                                <div class="card-body  d-flex justify-content-evenly align-items-center">
                                    <span class="material-symbols-outlined">
                                        person_add
                                    </span>
                                    <p class="m-0">Create Income</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card border-min hov-primary ">
                                <div class="card-body  d-flex justify-content-evenly align-items-center">
                                    <span class="material-symbols-outlined">
                                        person_add
                                    </span>
                                    <p class="m-0">Create Income</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card border-min hov-primary ">
                                <div class="card-body  d-flex justify-content-evenly align-items-center">
                                    <span class="material-symbols-outlined">
                                        person_add
                                    </span>
                                    <p class="m-0">Create Income</p>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>


            </div>
        </section>
    </div>





</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>