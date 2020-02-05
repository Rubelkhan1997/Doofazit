<template id="">
  <span>
    <div class="card">
      <div class="card-header" style="background:rgba(221, 221, 221, 0.20);border:1px solid rgba(0, 0, 0, 0.05)">
        <h3 style="color:black">Employee Information Entry</h3>
      </div>

       <div class="employee-entery p-3">
         <div class="card-header-part" style="background:rgba(221, 221, 221, 0.20);border:1px solid rgba(0, 0, 0, 0.05)">
               <h6>Identification Information</h6>
           </div>
            <form class="" action="#" method="post">
              <div class="row m-0 border">
                <div class="col-lg-6  col-md-6  p-3">
                 <div class="table-responsive bg-white">
                  <table class=" table-hover  mb-0">
                    <tr>
                      <td class="title-name">Full Name</td>
                      <td>
                        <div>
                          <input type="text" class="form_control" placeholder="Full Name">
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td class="title-name">Father Name</td>
                      <td>
                          <div>
                            <input type="text" class="form_control" placeholder="Father Name">
                          </div>
                       </td>
                    </tr>
                    <tr>
                      <td class="title-name">Mother Name</td>
                      <td>
                        <div>
                          <input type="text" class="form_control" placeholder="Mother Name">
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td class="title-name">Date of Birth</td>
                      <td>
                        <div class="input-group">
                         <div class="input-group-prepend datepicker-trigger">
                             <div class="input-group-text">
                                 <i class="fa fa-calendar-alt"></i>
                             </div>
                         </div>
                         <input type="text" class="form-control" data-toggle="datepicker-icon" placeholder="Data"/>
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td class="title-name">Religion</td>
                      <td>
                          <div>
                            <select class="form_control" name="">
                              <option value="">Select One</option>
                              <option value="">Islam</option>
                              <option value="">Islam</option>
                            </select>
                          </div>
                       </td>
                    </tr>
                    <tr>
                      <td class="title-name">Sex</td>
                      <td>
                        <div>
                          <select class="form_control" name="">
                            <option value="">Select One</option>
                            <option value="">Male</option>
                            <option value="">Female</option>
                          </select>
                        </div>
                      </td>
                  </tr>
               </table>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 p-3">
                <div class="table-responsive  bg-white">
                  <table class="table-hover  mb-0">
                    <tr>
                      <td class="title-name">Marital Status</td>
                      <td>
                        <div>
                          <select class="form_control" name="">
                            <option value="">Select One</option>
                            <option value="">Single</option>
                            <option value="">Married</option>
                          </select>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="title-name">NID Number</td>
                      <td>
                        <div>
                          <input type="text" class="form_control" placeholder="Mother Name">
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td class="title-name">Nationality</td>
                      <td>
                        <div>
                          <input type="text" class="form_control" placeholder="Mother Name">
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td class="title-name">Present Address</td>
                      <td >
                          <div>
                            <textarea name=""  placeholder="Present Address" class="form_control" style="height:80px;margin-top:2px"></textarea>
                          </div>
                       </td>
                    </tr>
                    <tr>
                        <td class="title-name">Permanent Address</td>
                        <td >
                        <div>
                          <textarea name=""  placeholder="Permanent Address" class="form_control" style="height:80px;margin-top:5px"></textarea>
                        </div>
                     </td>
                  </tr>
                 </table>
               </div>
               <div class="pr-4 pt-2 text-right">
                 <button type="button" class="btn-pill btn-hover-shine btn btn-primary">Add Information</button>
               </div>
            </div>
           </div>
        </form>
       </div>

        <div class="row m-0 pb-3">
          <div class="col-lg-6 col-md-6">
            <div class="education-entery">
              <div class="border">
                <div class="card-header-part" style="background:rgba(221, 221, 221, 0.20);border:1px solid rgba(0, 0, 0, 0.05)">
                  <h6>Education Information</h6>
                </div>
                <div class="table-responsive bg-white p-3">
                  <table class=" table-hover  mb-0">
                    <tr>
                      <td class="title-name">Name Of Degree</td>
                      <td>
                        <div>
                          <select class="form_control" name="">
                            <option value="">Select One</option>
                            <option value="">Islam</option>
                            <option value="">Islam</option>
                          </select>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="title-name">Name Of Institute</td>
                      <td>
                        <div>
                          <input type="text" name="" class="form_control" placeholder="Name Of Institute">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="title-name">Duration Of Education</td>
                      <td>
                        <div>
                          <input type="text" name="" class="form_control" placeholder="Duration Of Education">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="title-name">Grade</td>
                      <td>
                        <div>
                          <select class="form_control" name="">
                            <option value="">Select One</option>
                            <option value="">Islam</option>
                            <option value="">Islam</option>
                          </select>
                        </div>
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="p text-right">
                  <button type="button" class="btn-pill btn-hover-shine btn btn-primary">Add Information</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="education-entery">
              <div class="border">
                <div class="card-header-part" style="background:rgba(221, 221, 221, 0.20);border:1px solid rgba(0, 0, 0, 0.05)">
                  <h6>Profesional Information</h6>
                </div>
                <div class="table-responsive bg-white p-3">
                  <table class=" table-hover  mb-0">
                    <tr>
                      <td class="title-name">Organization Name</td>
                      <td>
                        <div>
                          <input type="text" class="form_control" placeholder="Organization Name">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="title-name">Designation</td>
                      <td>
                        <div>
                          <input type="text" class="form_control" placeholder="Designation">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="title-name">Year Of Exprience</td>
                      <td>
                        <div>
                          <input type="text" class="form_control" placeholder="Year Of Exprience">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="title-name">Address</td>
                      <td>
                        <div>
                          <input type="text" class="form_control" placeholder="Address">
                        </div>
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="p text-right">
                  <button type="button" class="btn-pill btn-hover-shine btn btn-primary">Add Information</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row m-0 pb-3">
          <div class="col-lg-6 col-md-6">
            <div class="education-entery">
              <div class="border">
                <div class="card-header-part" style="background:rgba(221, 221, 221, 0.20);border:1px solid rgba(0, 0, 0, 0.05)">
                  <h6>Skill Information</h6>
                </div>
                <div class="table-responsive bg-white p-3">
                  <table class=" table-hover  mb-0">
                    <tr>
                      <td class="title-name">Skill Type</td>
                      <td>
                        <div>
                          <input type="text" name="" class="form_control" placeholder="Skill Type">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="title-name">Name Of Institute</td>
                      <td>
                        <div>
                          <input type="text" name="" class="form_control"  placeholder="Name Of Institute">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="title-name">Duration Of Skill</td>
                      <td>
                        <div>
                          <input type="text" name="" class="form_control" placeholder="Duration Of Skill">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="title-name">Skill Grade</td>
                      <td>
                        <div>
                          <select class="form_control" name="">
                            <option value="">Select One</option>
                            <option value="">Islam</option>
                            <option value="">Islam</option>
                          </select>
                        </div>
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="p text-right">
                  <button type="button" class="btn-pill btn-hover-shine btn btn-primary">Add Information</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="education-entery">
              <div class="border">
                <div class="card-header-part" style="background:rgba(221, 221, 221, 0.20);border:1px solid rgba(0, 0, 0, 0.05)">
                  <h6>Banking Information</h6>
                </div>
                <div class="table-responsive bg-white p-3">
                  <table class=" table-hover  mb-0">
                    <tr>
                      <td class="title-name">Bank Name</td>
                      <td>
                        <div>
                          <select class="form_control" name="">
                            <option value="">Select One</option>
                            <option value="">Ducth</option>
                            <option value="">Brack</option>
                          </select>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="title-name">Branch Name</td>
                      <td>
                        <select class="form_control" name="">
                          <option value="">Select One</option>
                          <option value="">Ducth</option>
                          <option value="">Brack</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td class="title-name">A/C Name</td>
                      <td>
                        <div>
                          <input type="text" class="form_control" placeholder="A/C Name">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="title-name">A/C Number</td>
                      <td>
                        <div>
                          <input type="text" class="form_control" placeholder="Mother Name">
                        </div>
                      </td>
                    </tr>

                  </table>
                </div>
                <div class="p text-right">
                  <button type="button" class="btn-pill btn-hover-shine btn btn-primary">Add Information</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
  </span>
</template>
<script>
    export default {

    }
</script>
<style media="screen">
   .title-name{
     font-size:15px;
     padding:10px 0;
     padding-right:10px;
   }
   .card-header-part{
      padding:7px 0px ;
   }
   .card-header-part h6{
      color:black;
      margin-bottom:0px;
      text-align: center;
   }
   .btn-padding{
      padding: 4px 11px;
   }
   .p{
     padding: 0px 25px 11px 0px;
   }
</style>
