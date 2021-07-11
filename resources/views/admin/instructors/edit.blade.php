
<!-- Modal Create -->
<div class="modal fade" id="editInstructorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Instructor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Erros Validation -->
        <div id="allErrorsHereEdit" class="alert alert-danger" style="display:none">

        </div>  
        
        <form id="editInstructorForm" action="{{ route('instructors.update') }}" >

            {{ csrf_field() }}

            <input type="hidden" name="instructorID" id="instructorID">

            <div class="row">

                <div class="col-md-5">
                    <img class="img-thumbnail image-preview" style="width:100%;height:290px" id="studentAvatar" alt="">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="avatar" class="custom-file-input image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Upload Image</label>
                      </div>
                    </div>
                </div>

                <div class="col-md-7">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" id="studentName" name="name" class="form-control" placeholder="Student Name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" id="studentEmail" name="email" class="form-control" placeholder="Stuent Email">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Confirm Password</label>    
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                            </div>
                        </div>

                       

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="number" id="studentPhone" name="phone" class="form-control" placeholder="Student Phone">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Age</label>
                                <input type="number" id="studentAge" name="age" class="form-control" placeholder="Student Age">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Gender</label>
                                <select name="gender" id="get_selected_gender" class="form-control">
                                    
                                </select>
                            </div>
                        </div>



                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" id="studentAddress" name="address" class="form-control" placeholder="Student Address">
                            </div>
                        </div>


                       


                        

                    </div>

                </div>


            </div>
            

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success"> <i class="fa fa-spin fa-spinner fa-lg fa-fw" style="display:none"></i> Update</button>
            </div>

        </form>
    </div>
  </div>
</div>