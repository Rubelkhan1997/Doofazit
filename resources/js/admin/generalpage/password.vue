<template id="">
  <span>
    <div class="card p-0 col-10 col-sm-8 col-md-7  offset-md-3 offset-sm-2 offset-1">
      <div class="card-header" style="background:rgba(221, 221, 221, 0.20);border:1px solid rgba(0, 0, 0, 0.05)">
        <h3 style="color:black">Password Change</h3>
      </div>
      <div class="change-password p-md-5 p-3 ">
        <form>
            <div class="form-group">
              <label>Old Password</label>
              <input type="text" class="form_control"  placeholder="Enter Old Password">
            </div>
            <div class="form-group">
              <label>New Password</label>
              <input type="text" class="form_control"  placeholder="Enter New Password">
            </div>
            <div class="form-group">
              <label>Confirm Password</label>
              <input type="text" class="form_control"  placeholder="Enter Confirm Password">
            </div>
            <div class="">
              <button type="button" class="mr-2 btn-pill btn-hover-shine btn btn-primary">Add Password</button>
              <button type="button" class="btn-pill btn-hover-shine btn btn-light">Clear</button>
            </div>
        </form>
      </div>
    </div>
  </span>
</template>
<script>
    export default {

    }
</script>
<style media="screen">
  .change-password label{
    font-size:17px;
  }
</style>
