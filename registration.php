<?php
include('header.php');
?>
<section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>FORM FILLUP</h4>
                        </div>
                        <div class="card-body">
                            <form action="action.php?action=add" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3" for="name">Name <span class="text-danger font-weight-bold">*</span> </label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" required id="name" placeholder="Type name..." class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3" for="sem">Semester <span class="text-danger font-weight-bold">*</span> </label>
                                    <div class="col-md-9">
                                        <select name="semester" required id="sem" class="form-control">
                                            <option value="" disabled selected>---- Select Semester -----</option>
                                            <option value="1st Semester">1<sup>st</sup> Semester</option>
                                            <option value="2nd Semester">2<sup>nd</sup> Semester</option>
                                            <option value="3rd Semester">3<sup>rd</sup> Semester</option>
                                            <option value="4th Semester">4<sup>th</sup> Semester</option>
                                            <option value="5th Semester">5<sup>th</sup> Semester</option>
                                            <option value="6th Semester">6<sup>th</sup> Semester</option>
                                            <option value="7th Semester">7<sup>th</sup> Semester</option>
                                            <option value="8th Semester">8<sup>th</sup> Semester</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3" for="roll">Roll No. <span class="text-danger font-weight-bold">*</span> </label>
                                    <div class="col-md-9">
                                        <input type="text" name="roll" required id="roll" placeholder="type roll..." class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3" for="reg">Registration No. <span class="text-danger font-weight-bold">*</span> </label>
                                    <div class="col-md-9">
                                        <input type="text" name="reg" required id="reg" placeholder="type reg..." class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3" for="email">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" id="email" placeholder="example@abc.com" class="form-control"/>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3" for="email">Contact No.</label>
                                    <div class="col-md-9">
                                        <input type="text" name="contact" id="contact" placeholder="contact..." class="form-control"/>
                                    </div>
                                </div>
                                
                                <div class="from-group row">
                                    <label class="col-form-label col-md-3">Gender <span class="text-danger font-weight-bold">*</span> </label>
                                    <div class="col-md-9">
                                        <input type="radio" name="gender" checked id="male" value="Male">
                                        <label for="male">Male</label>

                                        <input type="radio" name="gender" id="female" value="Female">
                                        <label for="female">Female</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Co-curricular Activities</label>
                                    <div class="col-md-9">
                                        <input type="checkbox" name="activities[]" id="1" value="Science quizzes">
                                        <label for="1">Science quizzes</label><br>

                                        <input type="checkbox" name="activities[]" id="2" value="Mathematics olympiad">
                                        <label for="2">Mathematics olympiad</label><br>

                                        <input type="checkbox" name="activities[]" id="3" value="Projects in exhibitions">
                                        <label for="3">Projects in exhibitions</label><br>

                                        <input type="checkbox" name="activities[]" id="4" value="Poetry competition">
                                        <label for="4">Poetry competition</label><br>

                                        <input type="checkbox" name="activities[]" id="5" value="Music competition">
                                        <label for="5">Music competition</label><br>

                                        <input type="checkbox" checked name="activities[]" id="6" value="None of above">
                                        <label for="6">None of above</label><br>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3" for="address">Address</label>
                                    <div class="col-md-9">
                                        <textarea name="address" id="address" placeholder="type address here ..." class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control-file"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-2">
                                        <input type="submit" name="btn" class="btn btn-success btn-block" value="SUBMIT"/>
                                    </div>
                                    <div class="col-md-5"></div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include('footer.php');
?>