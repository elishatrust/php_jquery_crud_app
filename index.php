<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP & jQuery :: CRUD APP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<section id="list">
    <div class="container p-5">
        <div class="card">
            <div class="card-header justify-content-between">
                <div class="row p-2">
                    <div class="col-md-6 col-sm-12">
                        <h3 class="card-title">Student details by API</h3>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="float:right">Add New</button>
                    </div>
                </div>
                
            </div>
            <div class="card-body">   
                <div class="table table-responsive">                              
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Names</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Course</th>
                                <th>Created</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="getData">
                            <tr>
                                <th>1</th>
                                <td>Jacob Thornton</td>
                                <td>+255123456789</td>
                                <td>jacob@fat.gov</td>
                                <td>Male</td>
                                <td>Computer Science</td>
                                <td>2/2/2024</td>
                                <td>jacob@fat.gov</td>
                                <td>jacob@fat.gov</td>
                            </tr>
                        </tbody>
                    </table>  
                </div>      
            </div>
        </div>  
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <div class="form">
                            <form action="">
                                <div class="form-group mb-3">
                                    <label for="">Names <span class="text-danger">*</span></label>
                                    <input type="text" name="names" id="names" class="form-control" placeholder="Full names" required="">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Phone <span class="text-danger">*</span></label>
                                    <input type="number" name="phone" id="phone" class="form-control" placeholder="Phone number" required="">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required="">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Gender <span class="text-danger">*</span></label>
                                    <div class="form-check d-flex">
                                        <label class="form-check-label mr-3" for="Male">
                                            Male <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" checked>
                                        </label>
                                        <label class="form-check-label" for="Female">
                                            Female <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
                                        </label>
                                    </div>    
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Course <span class="text-danger">*</span></label>
                                    <input type="text" name="course" id="course" class="form-control" placeholder="Enter course" required="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>


</body>
</html>